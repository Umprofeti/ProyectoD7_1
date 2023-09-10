<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./jquery-3.7.1.min.js"></script>
    <title>Proyecto #1 Desarrollo 7</title>
</head>
    <style>
        main {
            display: flex;
            width: 100%;
            height: 100%;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            gap: 30px;
        }
        form.formularioContainer{
            background-color: white;
            margin: 5% auto; 
            display: flex;
            justify-content: center;
            padding: 10px 20px 20px 10px;
            align-items: start;
            flex-direction: column;
            gap:30px;
            border:none;
            border-radius:10px;  
            box-shadow:4px 4px 10px rgba(0,0,0,0.10);
        }
        body{
            background-image: url('https://static.vecteezy.com/system/resources/previews/007/872/268/non_2x/abstract-background-with-colorful-dynamic-effect-design-modern-wave-pattern-for-web-card-poster-illustration-free-vector.jpg'); 
            background-size: cover; 
            background-position: center; 
        }
        div.fRow{
            display: flex;
            flex-direction: row;
            align-items: center;
            text-align: left;
            font-family: Arial, Helvetica, sans-serif;
            gap: 5px;
        }
        input{
            width: 90%;
            border:0;
            box-shadow:4px 4px 10px rgba(0,0,0,0.10);
            border-radius:15px;
            padding:15px;
        }
        button{
            margin:0 auto;
            box-shadow:4px 4px 10px rgba(0,0,0,0.10);
            padding:10px;
            border:none;
            background-color:#fff;
            color:#black;
            font-weight:600;
            border-radius:5px;
            width:50%;
         }

        div.msg.MensajeError{
            border: solid 3px #FF0060;
            padding: 5px 10px 10px 5px;
            font-family: Helvetica, san-serif;
            background: rgba(255, 87, 51, 0.2);
        }
        </style> 
<body>
    <main>
        <form class="formularioContainer" name="Cheque" id="formCheque">
            <div class="fRow">
                <label for="Ncheqe">Nºcheque</label>
                <input type="text" name="NCheque" id="NCheque" placeholder="Número de Cheque">
                <label for="Fecha">fecha:</label>
                <input type="date" name="Fecha" id="Fecha" placeholder="Fecha">
            </div>
            <div class="fRow">
            <label for="Nombre">Nombre:</label>
            <input type="text" name="Nombre" id="Nombre" placeholder="Nombre">
            </div>
            <div class="fRow">
                <label for="Cant">Cantidad:</label>
                <input type="text" name="Cant" id="Cant" placeholder="Cantidad">
                <input type="text" name="CantString" id="CantString" disabled>
            </div>
            <div class="fRow">
            <label for="DGasto">Descripción:</label>
            <input type="text" name="DGasto" id="DGasto"
            placeholder="Descripción del gasto">
            </div>
            <button value="Enviar" onclick="sendForm()">Enviar</button>
        </form>
        <div class="msg "id="msg"></div>
        <div class="msg "id="msgPHP"></div>
    </main>
    <script src="./index.js"></script>
    <script>
        $("form").on("submit",(e)=>{
            e.preventDefault();
        })
        const sendForm = ()=> {
                $.ajax({
                    type: "POST",
                    url: "validacion.php",
                    data: $('form').serialize(),
                    success: (resp) => {
                        msgPHP.innerHTML = resp
                    }
                })
            }
    </script>
</body>
</html>