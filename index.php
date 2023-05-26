<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CuartoB-2022</title>
        <link rel="stylesheet" href="http://localhost:3000/estiloindex.css">
        <link rel="shortcut icon" href="http://localhost:3000/markevets.png">
        <style>
            #label{
                position: absolute;
                top: 400px;
            }
        </style>
    </head>
    <body >
    <div id ="menu"><header><img src="markevets.png" alt="logotipo" height="15px"></header>
        <nav>
            <strong>
                <a href="#">inicio</a>
                <a href="http://localhost:3000/redessociales.php">canales de comunicacion</a>
                <a href="http://localhost:3000/sobremi.php">sobre mi</a>
            </strong> 
        </nav>
        <h1 id="titulo">CuartoB-2022</h1></div>
        <FORM ID ="TEMA">
            <label for="TEMA">tema</label>
            <select id="respuesta" >
                <option value="claro">claro</option>
                <option value="oscuro">oscuro</option>
            </select>
            <button TYPE="submit">listo</button>
        </FORM>
         <label for="audiomix12"class='labeles'>cancion de navidad</label>
         <audio controls id="audiomix12">
            <source src="MIX 4TO GRADO(ALLINONE).mp3" type="audio/mp3">   
        </audio>
        <!--button id ="label">label (pagina de prueba osea hermano mayor)</button>-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script >var $tiulo=$("#titulo");
var $cancion =$("#audiomix12");
var $body=$("body");
$("#TEMA").on("submit", function(event) {
  event.preventDefault();
  var $rpta=$("#respuesta");
  var rpta=$rpta.val();
  if (rpta ==="claro"){
    $body.css("color","black");
    $tiulo.text("valiste");
    $body.css("backgroundColor","white");
  }else{
    $body.css("color","white");
    $body.css("backgroundColor","rgb(26,26,26)");
    $tiulo.text("Cuartob-2022");
}
});

/*
$(body).on("click",function(event){
    console.log(event);
})
var label=$("#label");
label.on("click",function(){
    $("<iframe>").attr("src","label.html").attr(" height",200px).attr("width",300px).addClass("iframe").appendTo("body");
});*/
</script>

    </body>
</html>
