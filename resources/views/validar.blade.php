<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel-JavaScript</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
               
                margin: 0;
            }

          
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>



    </head>
    <body>

      <div class="flex-center position-ref full-height">
        <div class="content">
          <h2>Laravel-JavaScrip: Validart</h1>

            <center>
                <h4>Evaluar 1</h4><br>
                <input type="text" required pattern="[0-9\/]+">

                <h4>Evaluar 2:</h4><br>
                <input type="text" onkeyup="validar1(this);" id="pass1">

                <h4>Evaluar 3:</h4><br>
                <input type="text" onkeyup="validar2(this);" id="pass2">
                <p id="mostrar">---</p>
                <p id="error">---</p>
            </center>

            <br><br>

            <div class="links">
              <a href="{{ route('inicio') }}">Regresar</a>
            </div>


                <script type="text/javascript">
                    function validar1(obj){
                        var pass = obj.value;
                        if(pass.search(/[a-z]/i) < 0){
                            alert("Error: la contraseña no contiene letras !!!");
                        }else{
                            alert("La contrasela contiene letras !!");
                        }
                    }


                    function validar2(obj){
                        var pass = obj.value;
                        var cadena = pass.split("");

                        var cont = 0;
                        //Apoyo
                        for(var i=0; i < cadena.length; i++){
                            document.getElementById('mostrar').innerHTML = cadena[i].search(/[A-Z]/g);
                        }


                        if(pass.search(/[A-Z]/g) + 1 > 0){
                            if(pass.search(/[a-zA-Z0-9]/g) + 1 >= 0){
                                for(var i=0; i < cadena.length; i++){
                                    var letra = cadena[i];
                                    if(letra.search(/[a-zA-Z0-9]/g) >= 0){ cont = cont+0; }
                                    else{ cont = cont+1 }
                                }
                                document.getElementById("pass2").style.cssText = 'color: #0F0; border: solid 1px #000';
                                document.getElementById('error').innerHTML = "-*-*"
                            }
                            else{
                                document.getElementById("pass2").style.cssText = 'color: #F00; border: solid 1px #000';
                            document.getElementById('error').innerHTML = "Error: El primer caracter debe ser una letra mayuscula";
                            }
                        }

                        else{
                            document.getElementById("pass2").style.cssText = 'color: #F00; border: solid 1px #000';
                            document.getElementById('error').innerHTML = "Error: El primer caracter debe ser una letra mayuscula";
                        }
                        if(cont > 0){
                            document.getElementById("pass2").style.cssText = 'color: #F00; border: solid 1px #000';
                            document.getElementById('error').innerHTML = "Error: El primer caracter debe ser una letra mayuscula" +cont;
                        }
                    }
                </script>


            </div>
        </div>
    </body>
</html>
