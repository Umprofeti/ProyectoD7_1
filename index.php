<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./jquery-3.7.1.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="./styles.css">
    <title>Proyecto #1 Desarrollo 7</title>
</head>
<body>
    <div class="header">
        <div class="inner-header flex">
        </div>
        <main>
            <form class="formularioContainer" name="Cheque" id="formCheque" autocomplete="off">
                <div class="fRow">
                    <label for="Ncheqe">Nºcheque:</label>
                    <input type="text" name="NCheque" id="NCheque" maxlength="6" require>
                    <label for="Fecha">Fecha:</label>
                    <input type="date" name="Fecha" id="Fecha" require>
                </div>

                <div class="fRow">
                    <label for="Nombre">Nombre:</label>
                    <input type="text" name="Nombre" id="Nombre" autocomplete="off" require>
                </div>

                <div class="fRow">
                    <label for="Cant">Cantidad:</label>
                    <input require type="text" name="Cant" id="Cant" autocomplete="off" maxlength="10">
                </div>

                <div class="CantString">
                    <label for="CantString"></label>
                    <input require type="text" name="CantString" id="CantString" disabled>
                </div>


                <div class="fRow">
                    <label for="DGasto">Descripción:</label>
                    <input require type="text" name="DGasto" id="DGasto" autocomplete="off">
                </div>
                <!-- Mensajes de error -->
                <div class="msg " id="msgPHP">
                </div>
            </form>
        </main>
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
    <script src="./index.js"></script>
    <script src="./sendData.js"></script>
</body>

</html>