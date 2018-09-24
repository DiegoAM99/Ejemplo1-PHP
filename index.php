<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>PRUEBA DE PHP CON BOOTSTRAP</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body style="background-color:  #666">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center" style="color: white;">EJEMPLO INICIO SESIÓN EN PHP</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                   
                </div>
                <br><br/>
                <div class="col-4">
                    <input id="cajaNombre" class="form-control"  type="text" placeholder="Usuario">
                    <br/>
                    <input id="cajaPassword" class="form-control" type="text" placeholder="Contraseña">
                    <br/>
                    <button id= "boton1" class="btn btn-primary btn-block">Primary</button>
                    <br/><br/>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
        <?php
        // put your code here
        ?>
    </body>
    <script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
    
    <script>
        // document ready se ejecuta cuando toda la página se ha cargado correctamente
        $(document).ready(function (){
            $('#cajaNombre').hide();
        });
        
        $('#boton1').click(function(){
            console.log("aqui si que llega");
            $('#cajaNombre').show(200);
        });
    </script>
</html>
