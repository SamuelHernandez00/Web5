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
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
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
          <h2>Laravel-JavaScript</h1>

            <center>
            Contraseña: <input type="text" id="pass1"><br>
            <b id="nivel"></b><br>
            <b id="error"></b><br>
            Confirmación:<input type="text" id="pass2">

            </center>  

            <div class="links">
              <a href="{{ route('inicio') }}">Regresar</a>
            </div>

            <script type="text/javascript">
                function evaluar(){
                    var pass = obj.value;               //Recibe variable de input
                    var conteo = obj.value.length;      //Cuenta la cadena string|Conraseña
                    var cadena = pass.split("");        //Divide la cadena String|Contraseña
                    var cont = 0;                       //Cuenta los caracteres especiales
                    var let_a = 0;                      //Cuenta las letras minusculas
                    var let_b = 0;                      //Cuenta las letras mayusculas
                    var let_c = 0;                      //Cuenta n     los numeros

                    if(conteo > 3){
                            if(cadena[0].search(/[A-Z]/g)+1 > 0){
                                let_a = 0;
                                let_b = 0;
                                let_c = 0;

                                 //-------------------Evaluar: caracter x caracter
                                 for(var i=0; i < cadena.lentgh; i++){
                                     var letra = cadena[i];
                                     if(letra.search(/[a-z]/g)+1 > 0){ let_a = let_a+1; }
                                     else{
                                            if(letra.search(/[A-Z]/g)+1 > 0){ let_b = let_b+1}
                                            else{
                                                    if(letr5a.search(/[0-9]/g)+1 > 0){let_c = let_c+1}
                                                    else{ cont = cont+1; }
                                            }
                                     }
                                 }
                                 //------------------Evaluar: Canitdad de caracteres

                                 if(conteo >=8){
                                    document.getElementById("nivel").style.cssText = 'color: #FFF; background-color #0D8E1A';
                                    document.getElementById("nivel").innetHTML = "Segura";
                                 }else{
                                        if(conteo >=6 ){
                                            document.getElementById("pass1").style.cssText = 'color: #FFF; background-color #EFDD0F';
                                            document.getElementById("nivel").innerHTML = "Pocosegura";
                                        }
                                        else{
                                            document.getElementById("nivel").style.cssText = 'color: #FFF; background-color #F00';
                                            document.getElementById("nivel").innerHTML = "Insegura";
                                        }
                                 }
                                 
                                 //-------------------Indicar Errores: Si existen letras y numeros
                                 if(let_a < 1 || let_b < 1 || let_c < 1){
                                     if(let_a < 1){let_a = "una letra minuscula"; }else{ let_a = " ";}
                                     if(let_a < 1){let_b = "una letra mayuscula"; }else{ let_a = " ";}
                                     if(let_a < 1){let_c = "un numero"; }else{ let_a = "";}
                                     document.getElementById("error").innerHTML = "Error: la contraseña debe de contener al menos " + let_a + let_b +let_c 
                                 }else{
                                     document.getElementById("error").innerHTML = " ";
                                 }
                            }
                            else{ 
                                document.getElementById("pass1").style.cssText = 'color: #00d0; border: solid 1px #F00';
                                document.getElementById("nivel").style.cssText = 'border-style: none;';
                                document.getElementById("nivel").innerHTML = " ";
                                document.getElementById("error").innerHTML = " ";
                            }
                    }
                    else{
                        document.getElementById("pass1").style.cssText = 'color: #000; border: solid 1px #000';
                        document.getElementById("nivel1").innerHTML = " ";
                        document.getElementById("error").innerHTML = " ";
                    }
                }
            </script>

    </body>
</html>
