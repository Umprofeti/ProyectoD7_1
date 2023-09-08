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
            justify-content: center;
            flex-direction: column;
            align-items: center;
            height: 100%;
            gap: 30px;
        }
        form.formularioContainer{
            display: flex;
            justify-content: center;
            padding: 10px 20px 20px 10px;
            align-items: start;
            flex-direction: column;
            gap:30px;
            border: 2px solid #c4c4c4;
        }
        div.fRow{
            display: flex;
            flex-direction: row;
            gap: 5px;
        }
        input{
            width: 100%;
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
                <input type="text" name="NCheque" id="NCheque" placeholder="Número de Cheque">
                <input type="date" name="Fecha" id="Fecha" placeholder="Fecha">
            </div>
            <input type="text" name="Nombre" id="Nombre" placeholder="Nombre">
            <div class="fRow">
                <input type="text" name="Cant" id="Cant" placeholder="Cantidad">
                <input type="text" name="CantString" id="CantString" disabled>
            </div>
            <input type="text" name="DGasto" id="DGasto"
            placeholder="Descripción del gasto">
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