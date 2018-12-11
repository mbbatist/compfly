<?php 
    include("conexao.php");
    $action=$_GET['action'];
?>
<html lang="en">

<head>

   <meta charset="ISO-8859-1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
     <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>
    <script src="js/jquery.form.js"></script>
    <script type="text/javascript">
        $(document).ready(function()
        {
           $("#form").ajaxForm({
               target:'.resultado',
               sucess: function(retorno)
               {
                   $(".resultado").php(retorno);
               }
            });
        });
    </script>
    <title>CompFly</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/agency.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

</head>

<body id="page-top" class="index">
    <div class="resultado">
    
 </div>
    <div style="text-align:center;height:100px;">
        
        
     <?php
     if($action==1)//tarifa
     {
         echo"<center><h2>INSERIR DADO EM TARIFA</h2></center>";
         echo"<center>";
            echo"<form action='processarphp.php' method='POST'>";
                echo"<fieldset>";
                    echo" <div> <input id='restricoes' style='margin-top: 10px; width:500px' name='restricoes' type='text' placeholder='Restrições' class='form-control input-md'> </div>"; 
                    echo"<br> <div> <input id='quantidade' style='margin-top: 10px; width:500px' name='quantidade' type='number' placeholder='Quantidade' class='form-control input-md'> </div>";
                    echo"<br> <div> <input id='codigo_tarifa' style='margin-top: 10px; width:500px' name='codigo_tarifa' type='number' placeholder='Código de Tarifa' class='form-control input-md'> </div>";
                    echo"<br> <div> <input id='numero' style='margin-top: 10px; width:500px' name='numero' type='number' placeholder='Numero' class='form-control input-md'> </div>";
                    echo"    <button type='submit' style='margin-top: 10px;' name='salvar' value=$action' class='btn btn-success'><i class='fa fa-floppy-o'></i> Salvar</button></center>";
                           echo"</fieldset>";
            echo"</form>";
        echo"</center>";
     }
     else if($action==2)//voo
     {
         echo"<center><h2>INSERIR DADO EM VOO</h2></center>";
         echo"<center>";
            echo"<form action='processarphp.php' method='POST'>";
                echo"<fieldset>";
                    echo" <div> <input id='numero' style='margin-top: 10px; width:500px' name='numero' type='number' placeholder='Numero de Voo' class='form-control input-md'> </div>"; 
                    echo"<br> <div> <input id='companhia_aerea' style='margin-top: 10px; width:500px' name='companhia_aerea' type='text' placeholder='Companhia Aerea' class='form-control input-md'> </div>";
                    echo"<br> <div> <input id='dias_da_semana' style='margin-top: 10px; width:500px' name='dias_da_semana' type='text' placeholder='Dias da Semana' class='form-control input-md'> </div>";
                    echo"<button type='submit' style='margin-top: 10px;' name='salvar' value=$action' class='btn btn-success'><i class='fa fa-floppy-o'></i> Salvar</button></center>";
                           echo"</fieldset>";
            echo"</form>";
        echo"</center>";
     }
     else if($action==3)//trecho voo
     {
         echo"<center><h2>INSERIR DADO EM TRECHO DE VOO</h2></center>";
         echo"<center>";
            echo"<form action='processarphp.php' method='POST'>";
                echo"<fieldset>";
                    echo" <div> <input id='trecho_numero' style='margin-top: 10px; width:500px' name='trecho_numero' type='number' placeholder='Número de Trecho' class='form-control input-md'> </div>"; 
                    echo"<br> <div> <input id='codigo_aeroportoP' style='margin-top: 10px; width:500px' name='codigo_aeroportoP' type='number' placeholder='Codigo do Aeroporto de Partida' class='form-control input-md'> </div>";
                    echo"<br> <div> <input id='codigo_aeroportoC' style='margin-top: 10px; width:500px' name='codigo_aeroportoC' type='number' placeholder='Código do Aeroporto de Chegada' class='form-control input-md'> </div>";
                    echo"<br> <div> <input id='horario_chegada_previsto' style='margin-top: 10px; width:500px' name='horario_chegada_previsto' type='text' placeholder='Data prevista de chegada' class='form-control input-md'> </div>";
                        echo" <br><div> <input id='horario_partida_previsto' style='margin-top: 10px; width:500px' name='horario_partida_previsto' type='text' placeholder='Data prevista de partida' class='form-control input-md'> </div>"; 
                    echo" <br><div> <input id='codigo_voo' style='margin-top: 10px; width:500px' name='codigo_voo' type='number' placeholder='Código de Voo' class='form-control input-md'> </div>"; 
                    echo"    <button type='submit' style='margin-top: 10px;' name='salvar' value=$action' class='btn btn-success'><i class='fa fa-floppy-o'></i> Salvar</button></center>";
                           echo"</fieldset>";
            echo"</form>";
        echo"</center>";
     }
     else if($action==4)//instancia trecho
     {
         echo"<center><h2>INSERIR DADO EM INSTANCIA DE TRECHO</h2></center>";
         echo"<center>";
            echo"<form action='processarphp.php' method='POST'>";
                echo"<fieldset>";
                    echo" <div> <input id='assentos_disponiveis' style='margin-top: 10px; width:500px' name='assentos_disponiveis' type='number' placeholder='Assentos Disponíveis' class='form-control input-md'> </div>"; 
                    echo"<br> <div> <input id='data' style='margin-top: 10px; width:500px' name='data' type='text' placeholder='Data' class='form-control input-md'> </div>";
                    echo"<br> <div> <input id='trecho_numero' style='margin-top: 10px; width:500px' name='trecho_numero' type='number' placeholder='Número do Trecho' class='form-control input-md'> </div>";
                    echo"<br> <div> <input id='hora_partida' style='margin-top: 10px; width:500px' name='hora_partida' type='text' placeholder='Hora da Partida' class='form-control input-md'> </div>";
                        echo" <br><div> <input id='hora_chegada' style='margin-top: 10px; width:500px' name='hora_chegada' type='text' placeholder='Hora da Chegada' class='form-control input-md'> </div>"; 
                    echo" <br><div> <input id='codigo_aeronave' style='margin-top: 10px; width:500px' name='codigo_aeronave' type='number' placeholder='Código da Aeronave' class='form-control input-md'> </div>"; 
                    echo" <br><div> <input id='aeroporto_chegada' style='margin-top: 10px; width:500px' name='aeroporto_chegada' type='number' placeholder='Código do Aeroporto de Chegada' class='form-control input-md'> </div>"; 
                    echo" <br><div> <input id='aeroporto_partida' style='margin-top: 10px; width:500px' name='aeroporto_partida' type='number' placeholder='Código do Aeroporto de Partida' class='form-control input-md'> </div>"; 
                    
                    echo"    <button type='submit' style='margin-top: 10px;' name='salvar' value=$action' class='btn btn-success'><i class='fa fa-floppy-o'></i> Salvar</button></center>";
                           echo"</fieldset>";
            echo"</form>";
        echo"</center>";
     }
     ?>

        <footer>
        <div class="container">
            <div class="row">
                
            </div>
        </div>
    </footer>

   

</body>

</html>
