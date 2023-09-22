<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./jquery-3.7.1.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
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

    form.formularioContainer {
        background-color: white;
        margin: 5% auto;
        display: flex;
        width: 50%;
        justify-content: center;
        padding: 10px 20px 20px 10px;
        align-items: start;
        flex-direction: column;
        gap: 30px;
        border: none;
        border-radius: 10px;
        box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.10);
        color: #000;
    }
    
    div.fRow {
        display: flex;
        flex-direction: row;
        align-items: center;
        text-align: left;
        font-family: 'Lato', sans-serif;
        font-weight: bold;
        gap: 5px;
        width: 100%;
    }

    div.CantString {
        display: flex;
        flex-direction: row;
        align-items: center;
        text-align: left;
        font-family: 'Lato', sans-serif;
        font-weight: bold;
        gap: 5px;
        width: 107%;


    }

    div.fRow label {
        margin-left: 10px;
    }

    input {
        width: 90%;
        border: 0;
        box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.20);
        border-radius: 15px;
        padding: 15px;
    }

    input[type="date"] {
        font-family: 'Lato', sans-serif;
        font-weight: bold;
        text-transform: uppercase;
    }

    button {
        margin: 0 auto;
        box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.20);
        padding: 10px;
        border: none;
        background-color: #fff;
        color: #black;
        font-weight: 600;
        border-radius: 5px;
        width: 20%;
        font-family: 'Lato', sans-serif;
        font-weight: bold;
    }

    div.msg.MensajeError {
        border: solid 3px #FF0060;
        padding: 5px 10px 10px 5px;
        font-family: 'Lato', sans-serif;
        font-weight: bold;
        background: rgba(255, 87, 51, 0.2);
    }

    body {
        margin: 0;
    }

    .header {
        position: relative;
        text-align: center;
        background: linear-gradient( 40deg, #543ab7, #00acc1);
        background-size: 400% 400%;
        -webkit-animation: Animation 10s ease infinite;
        -moz-animation: Animation 10s ease infinite;
        animation: Animation 10s ease infinite;
    }

    @-webkit-keyframes Animation {
        0% {
            background-position: 50% 0%
        }

        50% {
            background-position: 50% 100%
        }

        100% {
            background-position: 50% 0%
        }
    }

    @-moz-keyframes Animation {
        0% {
            background-position: 50% 0%
        }

        50% {
            background-position: 50% 100%
        }

        100% {
            background-position: 50% 0%
        }
    }

    @keyframes Animation {
        0% {
            background-position: 50% 0%
        }

        50% {
            background-position: 50% 100%
        }

        100% {
            background-position: 50% 0%
        }
    }


    .inner-header {
        height: 0vh;
        width: 100%;
        margin: 0;
        padding: 0;
    }

    .content {
        position: relative;
        height: 0vh;
        text-align: center;
        background-color: #fff;
    }

    .flex {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        text-align: center;
    }

    .waves {
        position: relative;
        width: 100%;
        height: 10vh;
        margin-bottom: -7px;
        min-height: 100px;
        max-height: 100px;
    }

    .parallax>use {
        -webkit-animation: moveForever 25s cubic-bezier(.55, .5, .45, .5) infinite;
        animation: moveForever 25s cubic-bezier(.55, .5, .45, .5) infinite;
    }

    .parallax>use:nth-child(1) {
        -webkit-animation-delay: -2s;
        animation-delay: -2s;
        -webkit-animation-duration: 7s;
        animation-duration: 7s;
    }

    .parallax>use:nth-child(2) {
        -webkit-animation-delay: -3s;
        animation-delay: -3s;
        -webkit-animation-duration: 10s;
        animation-duration: 10s;
    }

    .parallax>use:nth-child(3) {
        -webkit-animation-delay: -4s;
        animation-delay: -4s;
        -webkit-animation-duration: 13s;
        animation-duration: 13s;
    }

    .parallax>use:nth-child(4) {
        -webkit-animation-delay: -5s;
        animation-delay: -5s;
        -webkit-animation-duration: 20s;
        animation-duration: 20s;
    }

    @-webkit-keyframes moveForever {
        0% {
            -webkit-transform: translate3d(-90px, 0, 0);
            transform: translate3d(-90px, 0, 0);
        }

        100% {
            -webkit-transform: translate3d(85px, 0, 0);
            transform: translate3d(85px, 0, 0);
        }
    }

    @keyframes moveForever {
        0% {
            -webkit-transform: translate3d(-90px, 0, 0);
            transform: translate3d(-90px, 0, 0);
        }

        100% {
            -webkit-transform: translate3d(85px, 0, 0);
            transform: translate3d(85px, 0, 0);
        }
    }

    @media (max-width : 768px) {
        h1 {
            font-size: 24px;
        }

        .content {
            height: 30vh;
        }

        .waves {
            height: 100px;
            min-height: 40px;
        }
    }
</style>

<body>
    <div class="header">
        <div class="inner-header flex">
        </div>
        <main>
            <form class="formularioContainer" name="Cheque" id="formCheque" autocomplete="off">
                <div class="fRow">
                    <label for="Ncheqe">Nºcheque:</label>
                    <input type="text" name="NCheque" id="NCheque" maxlength="6">
                    <label for="Fecha">Fecha:</label>
                    <input type="date" name="Fecha" id="Fecha" readonly>
                </div>

                <div class="fRow">
                    <label for="Nombre">Nombre:</label>
                    <input type="text" name="Nombre" id="Nombre" placeholder="Nombre" autocomplete="off">
                </div>

                <div class="fRow">
                    <label for="Cant">Cantidad:</label>
                    <input type="text" name="Cant" id="Cant" placeholder="Cantidad" autocomplete="off" maxlength="7">
                </div>

                <div class="CantString">
                    <label for="CantString"></label>
                    <input type="text" name="CantString" id="CantString" disabled>
                </div>


                <div class="fRow">
                    <label for="DGasto">Descripción:</label>
                    <input type="text" name="DGasto" id="DGasto" placeholder="Descripción del gasto" autocomplete="off">
                </div>

                <button value="Enviar" onclick="sendForm()">Enviar</button>
            </form>
            <div class="msg " id="msg"></div>
            <div class="msg " id="msgPHP"></div>

        </main>
        <script src="./index.js"></script>
        <script>
            $("form").on("submit", (e) => {
                e.preventDefault();
            })
            const sendForm = () => {
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

         <script>
             const hoy= new Date();
             const año= hoy.getFullYear();
             const mes=String(hoy.getMonth()+1).padStart(2,'0');
             const dia=String(hoy.getMonth()).padStart(2,'0');
             const currentDate=`${año}-${mes}-${dia}`
             document.getElementById('Fecha').min=currentDate;
             document.getElementById('Fecha').valueAsDate = new Date();
        </script>
        
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
            viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
                <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
            </g>
        </svg>
    </div>
</body>

</html>