"use strict"

let form = document.querySelector('#form-calc'); // me traigo el formulario de showHome()
form.addEventListener('submit', calcular);

async function calcular(e){
    e.preventDefault();

    let data = new FormData(form);
    let valor1 = data.get('valor1');
    let valor2 = data.get('valor2');
    let operacion = data.get('operacion');

    //construyo URL
    
    let url = `${operacion}/${valor1}/${valor2}`;  

    // realizo el fetch para mostrar el resultado
    let response = await fetch(url);
    let resultado = await response.text();
    document.querySelector('#resultado').innerHTML = resultado;

}