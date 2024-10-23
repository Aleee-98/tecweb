// JSON BASE A MOSTRAR EN FORMULARIO
var baseJSON = {
    "precio": 0.0,
    "unidades": 1,
    "modelo": "XX-000",
    "marca": "NA",
    "detalles": "NA",
    "imagen": "img/default.png"
};

function init() {
    var JsonString = JSON.stringify(baseJSON,null,2);
    document.getElementById("description").value = JsonString;

    // SE LISTAN TODOS LOS PRODUCTOS
    //listarProductos();
}

$(function() {
    //Esta funcion se ejecuta apenas carga la pagina, se hace una peticion GET al servidor para obtener la lista de productos
    listarProductos(); //Se listan los productos nuevamente, para que se muestren en la tabla incluso si se agrega un producto
    let edit = false;//Se crea una variable para saber si se esta editando un producto o no, por defecto es false, ya que al cargar la pagina no se esta editando ningun producto
    $('#product-result').hide();//Se oculta el contenedor de productos al cargar la pagina
    $('#search').keyup(function(e) { //Cuando se haga click en el boton de buscar, se ejecuta la funcion
        e.preventDefault();//Se previene el comportamiento por defecto del boton
        let search = $('#search').val();

        if(search == ""){//Si el campo de busqueda esta vacio, no se hace nada
            $('#product-result').hide();
            listarProductos();
            return;
        }

        $.ajax({ //Este es el metodo que usa JQUERY para hacer peticiones AJAX, se definen los parametros de la peticion en un objeto, en AJAX puro es lo de usar el objeto XMLHttpRequest
            url: 'backend/product-search.php',
            type: 'GET',
            data: {search: search}, //Se envia el parametro de busqueda al servidor, este se envia como un objeto, donde el nombre del parametro es search y el valor es el valor del campo de busqueda
            //al momento de recuperarlo en el lado del servidor se recupera como $_GET['search']
            success: function(response) {

                if(response == "[]"){//Si la respuesta es un JSON vacio, no se muestra nada
                    $('#product-result').hide();
                    return;
                }
                let productos = JSON.parse(response);//Se convierte la respuesta a un objeto JSON, ya que la respuesta es un string
                let template = '';//Se crea una variable para guardar el HTML que se va a generar
                productos.forEach(producto => {//Se recorre el JSON de productos obtenido de la busqueda, eso para poder trabajar con cada uno de los productos retornados
                    template += `<li>
                        ${producto.nombre}
                    </li>`;//Se genera el HTML de cada producto
                });

                
                

                $('#product-result').show();//Se muestra el contenedor de productos
                $('#container').html(template);//Se inserta el HTML generado en el contenedor de productos

                template = ''; //Se limpia el template para poder generar el HTML de los productos en la tabla
                productos.forEach(producto => {
                    template += `<tr product-id = ${producto.id}>
                            <td>${producto.id}</td>
                            <td>
                                <a href="#" class="producto-item">${producto.nombre}</a>
                            </td>
                            <td>
                                <ul>
                                    <li>Precio: ${producto.precio}</li>
                                    <li>Unidades: ${producto.unidades}</li>
                                    <li>Modelo: ${producto.modelo}</li>
                                    <li>Marca: ${producto.marca}</li>
                                    <li>Detalles: ${producto.detalles}</li>
                                </ul>
                            </td>
                            <td>
                                <button class="product-delete btn btn-danger">
                                    Delete
                                </button>
                            </td>
                    </tr>`;
            
                });
                $('#products').html(template);//Se inserta el HTML generado en la tabla de productos

            },
        });
        
    });

    // SE AGREGA UN PRODUCTO
    $('#product-form').submit(function(e) {
        e.preventDefault(); // Se previene el comportamiento por defecto del formulario

        // SE OBTIENE DESDE EL FORMULARIO EL JSON A ENVIAR
        let productoJsonString = $('#description').val();
        let finalJSON = JSON.parse(productoJsonString);
        finalJSON['nombre'] = $('#name').val();
        finalJSON['id'] = $('#product-id').val();

        // Validaciones de los datos de los productos a ingresar
        if (nombre(finalJSON['nombre']) || marca(finalJSON['marca']) || modelo(finalJSON['modelo']) || precio(finalJSON['precio']) || detalles(finalJSON['detalles']) || unidades(finalJSON['unidades'])) {
            return;
        }

        finalJSON = JSON.stringify(finalJSON); // Convertir el JSON final a un string

        $.post('backend/product-add.php', finalJSON, function(response) {
            console.log(response); // Se imprime la respuesta del servidor en la consola

            // Aquí agregamos el mensaje de éxito
            $('#message').text('El producto fue añadido correctamente.').show(); // Muestra el mensaje
            setTimeout(function() {
                $('#message').fadeOut(); // Se oculta el mensaje después de 3 segundos
            }, 3000);

            listarProductos(); // Se listan los productos nuevamente
        });
    });


    // Funcionamiento del botón para eliminar el producto seleccionado
    $(document).on('click', '.product-delete', function() {
        if (!confirm("¿De verdad deseas eliminar el Producto?")) {
            return; // Si el usuario no confirma la eliminación del producto, no se hace nada
        }

        let element = $(this)[0];
        let columnaTD = element.parentElement;
        let filaTR = columnaTD.parentElement;
        let productoID = $(filaTR).attr('product-id');
        console.log(productoID);

        $.post('backend/product-delete.php', { id: productoID }, function(response) {
            console.log(response); // Se imprime la respuesta del servidor en la consola

            // Aquí agregamos el mensaje de éxito
            $('#message').text('El producto fue eliminado correctamente.').show(); // Muestra el mensaje
            setTimeout(function() {
                $('#message').fadeOut(); // Se oculta el mensaje después de 3 segundos
            }, 3000);

            listarProductos(); // Se listan los productos nuevamente
        });
    });


//Funcionamiento para editar un producto
$(document).on('click', '.producto-item', function() {
    let element = $(this)[0].parentElement.parentElement;
    let id = $(element).attr('product-id');
    
    // Petición para obtener el producto
    $.post('backend/product-single.php', {id: id}, function(response) {
        let producto = JSON.parse(response);
        console.log(producto);

        $('#name').val(producto.nombre);
        delete producto.nombre;
        let idProducto = producto.id;
        delete producto.id;
        $('#description').val(JSON.stringify(producto, null, 2));
        $('#product-id').val(idProducto);
        edit = true;
    });
});

// Cuando se envía el formulario de edición
$('#product-form').on('submit', function(e) {
    e.preventDefault(); // Prevenir que se recargue la página

    let idProducto = $('#product-id').val();
    let name = $('#name').val();
    let description = $('#description').val();
    
    let producto = JSON.parse(description);
    producto.nombre = name;
    producto.id = idProducto;

    $.ajax({
        url: 'backend/product-edit.php',
        type: 'POST',
        data: JSON.stringify(producto),
        success: function(response) {
            let data = JSON.parse(response);
            if (data.status === 'success') {
                alert(data.message); // Mostrar mensaje de éxito
            } else {
                alert('Error al actualizar el producto');
            }

            listarProductos(); // Actualizar la lista de productos
        }
    });
});
    
});

function listarProductos() {
    $.ajax({
        url: 'backend/product-list.php',
        type: 'GET',
        success: function(response) {
            let productos = JSON.parse(response);
            console.log(productos);
            let template = '';
            productos.forEach(producto => {//guardo dentro del td el id del producto, para poder eliminarlo despues, la clase es para poder seleccionar el td con JQUERY despues
                template += `<tr product-id = ${producto.id}>
                            <td>${producto.id}</td>
                            <td>
                                <a href="#" class="producto-item">${producto.nombre}</a>
                            </td>
                            <td>
                                <ul>
                                    <li>Precio: ${producto.precio}</li>
                                    <li>Unidades: ${producto.unidades}</li>
                                    <li>Modelo: ${producto.modelo}</li>
                                    <li>Marca: ${producto.marca}</li>
                                    <li>Detalles: ${producto.detalles}</li>
                                </ul>
                            </td>
                            <td>
                                <button class="product-delete btn btn-danger">
                                    Delete
                                </button>
                            </td>
                    </tr>`;
            });
            $('#products').html(template);
        }
    });
}

function nombre(nom){

    if(nom.length > 100 || nom.length==0){

        alert("El nombre debe tener de 1 a 100 caracteres")
        return true;
    }else{
        return false;
    }
}

function marca(mar){
    let marcas = {
        "Nike":1,
        "Adidas":2,
        "Puma":3,
        "Pirma":4,        
    };
    if(marcas[mar] == undefined){
        alert("La marca debe ser valida");
        return true;
    }else{
        return false;
    }
}

function modelo(model){
    let regex = /^[a-zA-Z0-9\s-]{1,25}$/; // Expresión regular actualizada
    if (model.length > 25 || regex.test(model) == false) {
        alert("El modelo debe ser de menos de 25 caracteres y solo contener caracteres alfanuméricos, guiones y espacios.");
        return true;
    } else {
        return false;
    }
}


function precio(precio){
    if(Number(precio) < 99.99){
        alert("El precio debe ser mayor a 99.99");
        return true;
    }else{
        return false;
    }
}

function detalles(detalles){
    if(detalles!= ""){
        if(detalles.length > 255){
            alert("Los detalles tienen un maximo de 255 caracteres");
            return true;
        }
    }
    return false;
}

function unidades(unidades){
    if(Number(unidades) < 0){
        alert("El numero de unidades del producto debe ser igual o mayor a cero");
        return true;
    }else{
        return false;
    }
}