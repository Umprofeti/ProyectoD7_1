var NumeroCheque = document.getElementById("NCheque");
var CantidadCheque = document.getElementById("Cant");
var MensajeUsuario =  document.getElementById("msg");
var cantidadString = document.getElementById("CantString");
var cantidadInt = document.getElementById("Cant");
var formCheque = document.getElementById("formCheque");
var msgPHP = document.getElementById("msgPHP");
var Nombre = document.getElementById("Nombre");

const validarCampoNumero = (inputValue) => {
    let RegNum = new RegExp('([0-9)]+)');
    let result = RegNum.test(inputValue)
    if(!result){
        MensajeUsuario.classList.add("MensajeError");
        MensajeUsuario.innerHTML = `El dato colocado no cumple los estandares: ${inputValue}`;
    }else{
        MensajeUsuario.classList.remove("MensajeError");
        MensajeUsuario.innerHTML = ``;
    }
    
}

NumeroCheque.addEventListener('input', ()=> {
    let input = NumeroCheque.value
    let regex = /[0-9+]+/u;
    if(!regex.test(input)){
        NumeroCheque.value = "";
    }
})

Nombre.addEventListener('input', () => {
    let regex = /^[A-Za-záéíóúÁÉÍÓÚüÜñÑ\s]+$/u;
    if (!regex.test(Nombre.value)) {
        Nombre.value = "";
    }

});

CantidadCheque.addEventListener('input', () => {
    let input = $('input[name=Cant]').val()
    let data = `cant=${input}`
        $.ajax({
            type: "POST",
            url: "FN_numeroLetras.php",
                        data: data,
                        success: (resp) => {
                            cantidadString.value =  resp
                            msgPHP.innerHTML = resp
                        }
        })   
})

cantidadInt.addEventListener('input', () => {
    let regex = new RegExp('[0-9+]+')
   if(!regex.test(cantidadInt.value)){
        cantidadInt.value = ""
   }
})
