<?php 
    include("conexao.php");
    $action=$_GET['action'];
    list($tabela) = explode("/", $action);
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
         <center><h2>ALTERAR DADOS EM 
         <?php
         if($tabela==1)//tarifa
         {
             echo"TARIFA</h2>";
             list($tabela,$a,$b,$c,$d) = explode("/", $action);
             $id=$c;?>
               <form action='processarphp.php' method='POST'>
                <fieldset>
                    <div> Restrições:<input id='restricoes' style='margin-top: 10px; width:500px' name='restricoes' value='<?php echo"$a";?>' type='text' placeholder='Restrições' class='form-control input-md'> </div>
                    <br> <div> Quantidade:<input id='quantidade' style='margin-top: 10px; width:500px' name='quantidade' value='<?php echo"$b";?>' type='number' placeholder='Quantidade' class='form-control input-md'> </div>
                    <br> <div> Código de Tarifa:<input id='codigo_tarifa' style='margin-top: 10px; width:500px' name='codigo_tarifa' value='<?php echo"$c";?>' type='number' placeholder='Código de Tarifa' class='form-control input-md'> </div>
                    <br> <div> Número de Voo:<input id='numero' style='margin-top: 10px; width:500px' name='numero' value='<?php echo"$d";?>' type='number' placeholder='Numero' class='form-control input-md'> </div>
                    <button type='submit' style='margin-top: 10px;' name='alterar' value='<?php echo"$tabela/$id"; ?>' class='btn btn-success'><i class='fa fa-floppy-o'></i> Salvar</button>
                    </fieldset>
            </form>            
         <?php }
         else if($tabela==2)//voo
         {
             echo"VOO</h2>";
             list($tabela,$a,$b,$c) = explode("/", $action);
             $id=$a;?>
               <form action='processarphp.php' method='POST'>
                <fieldset>
                    <br> <div> Número:<input id='numero_voo' style='margin-top: 10px; width:500px' name='numero_voo' value='<?php echo"$a";?>' type='number' placeholder='Número' class='form-control input-md'> </div>
                    <br> <div> Companhia Aérea:<input id='companhia_aerea' style='margin-top: 10px; width:500px' name='companhia_aerea' value='<?php echo"$b";?>' type='text' placeholder='Companhia Aérea' class='form-control input-md'> </div>
                    <br> <div> Dias da semana:<input id='dias_da_semana' style='margin-top: 10px; width:500px' name='dias_da_semana' value='<?php echo"$c";?>' type='text' placeholder='Dias da semana' class='form-control input-md'> </div>
                    <button type='submit' style='margin-top: 10px;' name='alterar' value='<?php echo"$tabela/$id"; ?>' class='btn btn-success'><i class='fa fa-floppy-o'></i> Salvar</button>
                    </fieldset>
            </form>            
         <?php }
         else if($tabela==3)//trecho_voo
         {
             echo"TRECHO DE VOO</h2>";
             list($tabela,$a,$b,$c,$d,$e,$f) = explode("/", $action);
             $id=$a;?>
               <form action='processarphp.php' method='POST'>
                <fieldset>
                    <br> <div> Número do Trecho:<input id='numero_trecho' style='margin-top: 10px; width:500px' name='numero_trecho' value='<?php echo"$a";?>' type='number' placeholder='Número de trecho' class='form-control input-md'> </div>
                    <br> <div> Aeroporto de Partida:<input id='aeroportop' style='margin-top: 10px; width:500px' name='aeroportop' value='<?php echo"$b";?>' type='number' placeholder='Aeroporto de Partida' class='form-control input-md'> </div>
                    <br> <div> Aeroporto de Chegada:<input id='aeroportoc' style='margin-top: 10px; width:500px' name='aeroportoc' value='<?php echo"$c";?>' type='number' placeholder='Aeroporto de Chegada' class='form-control input-md'> </div>
                    <br> <div> Data de Chegada:<input id='datac' style='margin-top: 10px; width:500px' name='datac' value='<?php echo"$d";?>' type='text' placeholder='Data de Chegada' class='form-control input-md'> </div>
                    <br> <div> Data de Partida:<input id='datap' style='margin-top: 10px; width:500px' name='datap' value='<?php echo"$e";?>' type='text' placeholder='Data de Partida' class='form-control input-md'> </div>
                    <br> <div> Código do Voo:<input id='codigo_voo' style='margin-top: 10px; width:500px' name='codigo_voo' value='<?php echo"$f";?>' type='number' placeholder='codigo_voo' class='form-control input-md'> </div>
                    <button type='submit' style='margin-top: 10px;' name='alterar' value='<?php echo"$tabela/$id"; ?>' class='btn btn-success'><i class='fa fa-floppy-o'></i> Salvar</button>
                    </fieldset>
            </form>            
         <?php }
         else if($tabela==4)//instancia_trecho
         {
             echo"INSTÂNCIA DE TRECHO</h2>";
             list($tabela,$a,$b,$c,$d,$e,$f,$g,$h) = explode("/", $action);
             $id="$b+$c";?>
               <form action='processarphp.php' method='POST'>
                <fieldset>
                    <br> <div> Assentos Disponíveis:<input id='assentos_disponiveis' style='margin-top: 10px; width:500px' name='assentos_disponiveis' value='<?php echo"$a";?>' type='number' placeholder='Assentos Disponíveis' class='form-control input-md'> </div>
                    <br> <div> Data:<input id='data' style='margin-top: 10px; width:500px' name='data' value='<?php echo"$b";?>' type='text' placeholder='Data' class='form-control input-md'> </div>
                     <br> <div> Número do Trecho:<input id='numero_trecho' style='margin-top: 10px; width:500px' name='numero_trecho' value='<?php echo"$c";?>' type='number' placeholder='Número de trecho' class='form-control input-md'> </div>
                    <br> <div> Hora da Partida:<input id='horap' style='margin-top: 10px; width:500px' name='horap' value='<?php echo"$d";?>' type='text' placeholder='Hora de Partida' class='form-control input-md'> </div>
                    <br> <div> Hora da Chegada:<input id='horac' style='margin-top: 10px; width:500px' name='horac' value='<?php echo"$e";?>' type='text' placeholder='Hora de Chegada' class='form-control input-md'> </div>
                    <br> <div> Código da Aeronave:<input id='codigo_aeronave' style='margin-top: 10px; width:500px' name='codigo_aeronave' value='<?php echo"$f";?>' type='number' placeholder='codigo_aeronave' class='form-control input-md'> </div>
                    <br> <div> Aeroporto de Chegada:<input id='aeroportoc' style='margin-top: 10px; width:500px' name='aeroportoc' value='<?php echo"$g";?>' type='number' placeholder='aeroporto_chegada' class='form-control input-md'> </div>
                    <br> <div> Aeroporto de Partida:<input id='aeroportop' style='margin-top: 10px; width:500px' name='aeroportop' value='<?php echo"$h";?>' type='number' placeholder='aeroporto_partida' class='form-control input-md'> </div>
                    <button type='submit' style='margin-top: 10px;' name='alterar' value='<?php echo"$tabela/$id"; ?>' class='btn btn-success'><i class='fa fa-floppy-o'></i> Salvar</button>
                    </fieldset>
            </form>            
         <?php }
         ?>        
        </center>
    </div>     
</body>
</html>
