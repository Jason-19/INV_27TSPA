var inv = document.getElementById('show_inv');
var r = document.getElementById("result");
// hideInv();
showInv();

// Evento de el boton submit
document.getElementById('btn_seach').addEventListener('click', function () {
     // alert("Hola Mundo/nError!!")
     showInv();

})

function hideInv() {
     inv.style.display = 'none'
     // document.getElementById('show_inv').style.display = 'none';
}

// funcion para mostrar el menu de inventario 
function showInv() {
     inv.style.display = 'block'
     // document.getElementById('show_inv').style.display = 'block';

}

// Funcion para la tecla enter del teclado 
function keyEnter(event) {
     var inputValue = document.getElementById('SEARCH').value;

     if (event.key === 'Enter') {
          alert("Has hecho enter !" + inputValue)
          inv.innerHTML = inputValue;
     }

}


document.getElementById('btn_inv').addEventListener('click', function () {

     console.log("Hola Mundo")
     open("Inventario.php")


});







