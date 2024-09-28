function getDatos()
{
    var nombre = prompt("Nombre: ", "");

    var edad = prompt("Edad: ", 0);

    var div1 = document.getElementById('nombre');
    div1.innerHTML = '<h3> Nombre: '+nombre+'</h3>';

    var div2 = document.getElementById('edad');
    div2.innerHTML = '<h3> Edad: '+edad+'</h3>';
}

function holaMundo() {
    // Localizar el div con id "holaDiv"
    var div = document.getElementById('holaDiv');
    // Modificar su contenido para mostrar "Hola Mundo"
    div.innerHTML = '<h3>Hola Mundo</h3>';
}

function getVariables() {
    // Pedir al usuario los valores de las variables
    var nombre = prompt("Ingresa tu nombre: ", "");
    var edad = prompt("Ingresa tu edad: ", "");
    var altura = prompt("Ingresa tu altura (en metros): ", "");
    
    var casado = prompt("¿Estás casado? (si/no): ", "").toLowerCase();
    casado = (casado === "si") ? true : false;

    // Modificar el contenido del div con id "variablesDiv"
    var div = document.getElementById('variablesDiv');
    div.innerHTML = '<h3>Nombre: ' + nombre + '</h3>';
    div.innerHTML += '<h3>Edad: ' + edad + '</h3>';
    div.innerHTML += '<h3>Altura: ' + altura + ' metros</h3>';
    div.innerHTML += '<h3>Casado: ' + (casado ? 'Sí' : 'No') + '</h3>';
}

function mensaje(){
    var nombre = prompt("Ingresa tu nombre: ", "");
    var edad = prompt("Ingresa tu edad: ", "");

    var div = document.getElementById('mensajeDiv'); 
    div.innerHTML = '<h3>Hola ' + nombre + ', así que tienes '+edad+' años</h3>';   
}

function sumaProducto(){
    var valor1 = prompt('Introducir primer número:', '');
    var valor2 = prompt('Introducir segundo número', '');
    var suma = parseInt(valor1)+parseInt(valor2);
    var producto = parseInt(valor1)*parseInt(valor2);
    var div = document.getElementById('sumaProducto'); 
    div.innerHTML = '<h3>La suma es: ' + suma + '<br>El producto es: '+producto+'</h3>';       
}

function calificacion(){
    var nombre = prompt('Ingresa tu nombre:', '');
    var nota = prompt('Ingresa tu nota:', '');
    var div = document.getElementById('nota'); 
    if (nota>=4) 
        div.innerHTML = '</h3>'+ nombre + 'está aprobado con un '+nota+'</h3>';    
}

function mayor(){
    var num1 = prompt('Ingresa el primer número:', '');
    var num2 = prompt('Ingresa el segundo número:', '');
    num1 = parseInt(num1);
    num2 = parseInt(num2);
    var div = document.getElementById('mayor'); 
    if (num1>num2) {
        div.innerHTML = '</h3>El mayor es: '+ num1+'</h3>';    
    }
    else {
        div.innerHTML = '</h3>El mayor es: '+ num2+'</h3>';    
    }
}

function calificaciones() {
    var nota1, nota2, nota3;
    
    nota1 = prompt('Ingresa 1ra. nota:', '');
    nota2 = prompt('Ingresa 2da. nota:', '');
    nota3 = prompt('Ingresa 3ra. nota:', '');
        
    nota1 = parseInt(nota1);
    nota2 = parseInt(nota2);
    nota3 = parseInt(nota3);
    
    var pro = (nota1 + nota2 + nota3) / 3;    
    var div = document.getElementById('calificaciones');
        
    if (pro >= 7) {
        div.innerHTML = '<h3>Aprobado</h3>';
    } else if (pro >= 4) {
        div.innerHTML = '<h3>Regular</h3>';
    } else {
        div.innerHTML = '<h3>Reprobado</h3>';
    }
}

function numeroLetras(){
    var valor = prompt('Ingresar un valor comprendido entre 1 y 5:', '' );
    //Convertimos a entero
    valor = parseInt(valor);
    var div = document.getElementById('numeroLetra');
    switch (valor) {
    case 1: div.innerHTML = '<h3>uno</h3>';
            break;
    case 2: div.innerHTML = '<h3>dos</h3>';
            break;
    case 3: div.innerHTML = '<h3>tres</h3>';
            break;
    case 4: div.innerHTML = '<h3>cuatro</h3>';
            break;
    case 5: div.innerHTML = '<h3>cinco</h3>';
            break;
    default:div.innerHTML = '<h3>Debe ingresar un valor entre 1 y 5</h3>';
    }
}

function color() {
    var col = prompt('Ingresa el color con que quieres pintar el fondo de la ventana (rojo, verde, azul)', '');

    switch (col.toLowerCase()) {  // Convertir la entrada a minúsculas para ser más flexible
        case 'rojo':
            document.body.style.backgroundColor = '#ff0000'; // Cambiar el color del fondo
            break;
        case 'verde':
            document.body.style.backgroundColor = '#00ff00';
            break;
        case 'azul':
            document.body.style.backgroundColor = '#0000ff';
            break;
        default:
            alert('Color no válido. Por favor, ingresa "rojo", "verde" o "azul".');
            break;
    }
}
