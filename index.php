<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./jquery-3.7.1.min.js"></script>
    <title>Proyecto #1 Desarrollo 7</title>
</head>
    <style>
        *{
            margin: 0;
            padding: 0;
         }
         section{
            position:relative;
            width:100%;
            height:100vh;
            background:#3586ff;
            overflow: hidden;
         }
         section.wave{
            position: absolute;
            bottom: 0;
            left: 0;
            width:100%;
            height: 100px;
            background: url('wave.png');
            background-size: 1000px 100px;
         }
         section.wave.wave1{
            animation: animate 30s linear infinite;
            z-index: 1000;
            opacity: 1;
            animation-delay: 0s;
            bottom: 0;
         }
         section.wave.wave2{
            animation: animate2 15s linear infinite;
            z-index: 999;
            opacity: 0.5;
            animation-delay: -5s;
            bottom: 10px;
         }
         section.wave.wave3{
            animation: animate 30s linear infinite;
            z-index: 998;
            opacity: 0.2;
            animation-delay: -2s;
            bottom: 15px;
         }
         section.wave.wave4{
            animation: animate2 5s linear infinite;
            z-index: 997;
            opacity: 0.7;
            animation-delay: -5s;
            bottom: 20px;
         }
        @keyframes animate{
            0%{
                background-position-x: 0;
            }
            100%{
                background-position-x: 1000px;
            }
        }
        @keyframes animate2{
            0%{
                background-position-x: 0;
            }
            100%{
                background-position-x: -1000px;
            }
        }


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

    <section>
        <div class="wave wave1"></div>
        <div class="wave wave2"></div>
        <div class="wave wave3"></div>
        <div class="wave wave4"></div>
    </section>


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