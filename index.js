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

const numAString = (n) => {
    if (n < 0)
    return false;
   single_digit = ['', 'Uno', 'Dos', 'Tres', 'Cuatro', 'Cinco', 'Seis', 'Siete', 'Ocho', 'Nueve']
   double_digit = ['Diez', 'Once', 'Doce', 'Trece', 'Catorce', 'Quince', 'Diez y seis', 'Diez y siete', 'Diez y ocho', 'Diez y nueve']
   below_hundred = ['Veinte', 'Treinta', 'Cuarenta', 'Cincuenta', 'Sesenta', 'Setenta', 'Ochenta', 'Noventa']
  if (n === 0) return 'Cero'
  function translate(n) {
      word = ""
      if (n < 10) {
          word = single_digit[n] + ' '
      }
      else if (n < 20) {
          word = double_digit[n - 10] + ' '
      }
      else if (n < 100) {
          rem = translate(n % 10)
          word = below_hundred[(n - n % 10) / 10 - 2] + ' ' + rem
      }
      else if (n < 1000) {
          word = single_digit[Math.trunc(n / 100)] + ' Cientos ' + translate(n % 100)
      }
      else if (n < 1000000) {
          word = translate(parseInt(n / 1000)).trim() + ' Miles ' + translate(n % 1000)
      }
      else if (n < 1000000000) {
          word = translate(parseInt(n / 1000000)).trim() + ' Millones ' + translate(n % 1000000)
      }
      else {
          word = translate(parseInt(n / 1000000000)).trim() + ' Mil millones ' + translate(n % 1000000000)
      }
      return word
  }
   result = translate(n) 
  return result.trim()+'.'

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
