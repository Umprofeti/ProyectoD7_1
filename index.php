<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto #1 Desarrollo 7</title>
</head>
    <style>
    
    body {
  font-size: 14px;
  font-family: Arial, sans-serif;
  background: #AAA;
}

/* El contenedor define la zona principal de contenido */
.formularioContainer {
  background: #FFF;
  margin: 1em auto;
  padding: 1em;
  max-width: 768px;
}

/* El formulario está definido como una lista */
ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

ul li {
  border-top: 1px solid #CCC;
  margin: 1em 0;
  padding: 1em;
  overflow: hidden;
}

/* El formulario se organiza en dos columnas, el título y los controles */
ul li label.titulo {
  float: left;
  width: 150px;
  text-align: right;
}

ul li div.controles {
  margin-left: 160px;
}

/* El último elemento del formulario es el botón "Enviar" */
ul li.botones {
  border-top: 2px solid #CCC;
  clear: both;
  float: none;
  padding: 1em 0;
  text-align: right;
  width: 100%;
}

ul li.botones input {
  font-size: 18px;
}

/* El título de los elementos de la lista */
ul li label.titulo {
  font-weight: bold;
}

ul li div span {
  float: left;
  padding: 0.4em;
}

ul li div span.completo {
  width: 100%;
}

ul li div span.mitad {
  width: 50%;
}

ul li div span.tercio {
  width: 33%;
}

ul li div span.dostercios {
  width: 66%;
}

/* Configuración de los controles del formulario */
ul li input {
  padding: 0.2em;
}

ul li input#NCheque, input#Fecha {
  width: 260px;
}

ul li input#Cant{
   width: 100px
}

ul li input#CantString{
   width: 200px
}

ul li input#Nombre{
   width: 200px;
}

ul li input#DGasto {
   width: 300px;
}

/* Cambia el color cuando se sitúa el cursor del ratón */
ul li:hover {
  background-color: #FF9;
}


/* Destaca el control cuando recibe el foco */
ul li input, ul li select {
  border: 2px solid transparent;
  border-bottom: 2px solid black;
}


.msg.MensajeError {
  border: 3px solid #FF0060;
  padding: 5px 10px;
  font-family: Helvetica, sans-serif;
  background: rgba(255, 87, 51, 0.2);
}
    </style>
<body>
<div id=formularioContainer>
 <h1>Cheque</h1>
 <form method="post" class="formularioContainer" name="Cheque" action="validacion.php">
 <ul>
 <li>
 <div class="fRow">
<input type="text" name="NCheque" id="NCheque" placeholder="Número de Cheque" required>
<label class="titulo" for="NCheque">Número de Cheque*</label>
    
<input type="date" name="Fecha" id="Fecha" placeholder="Fecha">
</div>
    

<input type="text" name="Nombre" id="Nombre" placeholder="Nombre">
<label class="titulo" for="Nombre">Nombre*</label>
    

 <div class="fRow">
 <input type="text" name="Cant" id="Cant"     placeholder="Cantidad">
<label class="titulo" for="Cant">Cantidad*</label>
     
<input type="text" name="CantString" id="CantString" disabled>    
</div>
<label class="titulo" for="DGasto">Descripción del gasto</label>
    
<input type="text" name="DGasto" id="DGasto" placeholder="Descripción del gasto">
                <input type="submit" value="Enviar">
            </li>
        </ul>
    </form>
    <div class="msg" id="msg"></div>
    <script src="./index.js"></script>
</body>
</html>