<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="http://localhost:3000/estiloindex.css" rel="stylesheet">
    </head>
    <body>
        <div id ="menu"><header><img src="http://localhost:3000/markevets.png" alt="logotipo" height="15px"></header>
            <nav>
                <strong>
                    <a href="http://localhost:3000/index.php">inicio</a>
                    <a href="#">canales de comunicacion</a>
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script >var $tiulo=$("#titulo");
            var $cancion =$("#audiomix12");
            var $body=$("body");
            var $menu=$("#menu");
            $("#TEMA").on("submit", function(event) {
              event.preventDefault();
              var $rpta=$("#respuesta");
              var rpta=$rpta.val();
              if (rpta ==="claro"){
                $body.css("color","black");
                $tiulo.text("valiste");
                $body.css("backgroundColor","white");
                $menu.css("backgroundColor","rgb(26,26,26)");
              }else{
                $body.css("color","white");
                $body.css("backgroundColor","rgb(26,26,26)");
                $tiulo.text("CuartoB-2022");
                $menu.css("backgroundColor","white");
              }
            });
                  </script>
    </body>
</html>
