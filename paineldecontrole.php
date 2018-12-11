<?php 
    include("conexao.php");
    
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

    <!-- Bootstrap Core JavaScript -->
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

        <form action="paineldecontrole.php" method="POST">
            <fieldset>
                    <div class="col-md-4">
                        <input id="pesquisa" style="margin-top: 10px" name="pesquisa" type="text" placeholder="Pesquise Aqui" class="form-control input-md">
                    *Apenas Números
                    </div>        
                    <div class="col-md-4">
                    <select style="margin-top: 10px" id="classificacao" name="classificacao" class="form-control" onchange="changeSelect();">
                            <option value="0">EM:</option>
                            <option value="1">Tarifa</option>
                            <option value="2">Voo</option>
                            <option value="3">Trecho de Voo</option>
                            <option value="4">Instancia Trecho</option>
                    </select>
                        <br>
                                       <select name="colunas" id="colunas" class="form-control">      
        <option value="">*****</option>  
    </select>

  <script type="text/javascript">
    function changeSelect(){

        var select = document.getElementById('classificacao');
        var selectSetor = document.getElementById('colunas');

        var value = select.options[select.selectedIndex].value;

        //remove itens
        var length = selectSetor.options.length;        
        var i;
        for(i = selectSetor.options.length-1 ; i>=0 ; i--)
        {
            selectSetor.remove(i);
        }


        if(value == '1') {

            var option = document.createElement('option');
            option.value = '11';
            option.text = 'Todos';

            var option2 = document.createElement('option');
            option2.value = '12';
            option2.text = 'Restricoes';
            
            var option3 = document.createElement('option');
            option3.value = '13';
            option3.text ='Quantidade';
            
            var option4 = document.createElement('option');
            option4.value = '14';
            option4.text = 'Codigo';
            
            var option5 = document.createElement('option');
            option5.value = '15';
            option5.text = 'Numero';

            selectSetor.add(option);
            selectSetor.add(option2);
            selectSetor.add(option3);
            selectSetor.add(option4);
            selectSetor.add(option5);

        } else if (value == '2'){

            var option6 = document.createElement('option');
            option6.value = '21';
            option6.text = 'Todos';

            var option7 = document.createElement('option');
            option7.value = '22';
            option7.text = 'Numero';
            
            var option8 = document.createElement('option');
            option8.value = '23';
            option8.text ='Companhia Aerea';
            
            var option9 = document.createElement('option');
            option9.value = '24';
            option9.text ='Dias da Semana';

            selectSetor.add(option6);
            selectSetor.add(option7);
            selectSetor.add(option8);
            selectSetor.add(option9);

        }  
        else if (value == '3'){

            var option10 = document.createElement('option');
            option10.value = '31';
            option10.text = 'Todos';

            var option11 = document.createElement('option');
            option11.value = '32';
            option11.text = 'Trecho Numero';
            
            var option12 = document.createElement('option');
            option12.value = '33';
            option12.text ='Aeroporto Partida';
            
            var option13 = document.createElement('option');
            option13.value = '34';
            option13.text ='Aeroporto Chegada';
            
            var option14 = document.createElement('option');
            option14.value = '35';
            option14.text ='Dia de Chegada';
            
            var option15 = document.createElement('option');
            option15.value = '36';
            option15.text ='Dia de Partida';
            
            var option16 = document.createElement('option');
            option16.value = '37';
            option16.text ='Codigo de Voo';

            selectSetor.add(option10);
            selectSetor.add(option11);
            selectSetor.add(option12);
            selectSetor.add(option13);
            selectSetor.add(option14);
            selectSetor.add(option15);
            selectSetor.add(option16);
} 
        else if (value == '4'){

            var option17 = document.createElement('option');
            option17.value = '41';
            option17.text = 'Todos';

            var option18 = document.createElement('option');
            option18.value = '42';
            option18.text = 'Assentos Disponiveis';
            
            var option19 = document.createElement('option');
            option19.value = '43';
            option19.text ='Data';
            
            var option20 = document.createElement('option');
            option20.value = '44';
            option20.text ='Trecho Numero';
            
            var option21 = document.createElement('option');
            option21.value = '45';
            option21.text ='Hora Partida';
            
            var option22 = document.createElement('option');
            option22.value = '46';
            option22.text ='Hora Chegada';
            
            var option23 = document.createElement('option');
            option23.value = '47';
            option23.text ='Codigo Aeronave';
            
            var option24 = document.createElement('option');
            option24.value = '48';
            option24.text ='Aeroporto Chegada';
            
            var option25 = document.createElement('option');
            option25.value = '49';
            option25.text ='Aeroporto Partida';

            selectSetor.add(option17);
            selectSetor.add(option18);
            selectSetor.add(option19);
            selectSetor.add(option20);
            selectSetor.add(option21);
            selectSetor.add(option22);
            selectSetor.add(option23);
            selectSetor.add(option24);
            selectSetor.add(option25);
} 
    }
</script>
                    </div>
                <button type="submit" style="margin-top: 10px; width:130px;" name="entrar" value="inserir" class="btn btn-success"><span class="glyphicon glyphicon-plus"></span> Inserir</button>
                <br> 
                 <button type="submit" style="margin-top: 10px;" name="entrar" value= "pesquisar" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Pesquisar</button>
                  
            </fieldset>
        </form>
</div>
   <!-- LOGIN -->
    <section id="login_admin" class="bg-light-gray">
        <center>
      <?php
        if(isset($_POST['entrar']))
       {
            $faca=$_POST['entrar']; 
            $coluna=$_POST['colunas'];
            $pesquisa=$_POST['pesquisa'];
            $resposta=$_POST['classificacao'];
            switch($resposta){
               case 0:
                   $faca=" ";
                   echo"Selecione Tabela";
            break;}
           if($faca=="inserir")
           { 
               if($resposta==1){exit('<script>location.href = "inserir.php?action=1"</script>');}
               if($resposta==2){exit('<script>location.href = "inserir.php?action=2"</script>');}
               if($resposta==3){exit('<script>location.href = "inserir.php?action=3"</script>');}
               if($resposta==4){exit('<script>location.href = "inserir.php?action=4"</script>');}
               $faca="pesquisar";
               
           }
           if($faca="pesquisar"){
              if($coluna==""){exit('<script>location.href = "paineldecontrole.php"</script>');}
           switch($resposta){
              case 1:
                  if($pesquisa=="")
                  {
                      if($coluna=="11"){
                            $result= pg_query($dbconn, "SELECT * FROM trafego_aereo.tarifa");
                            if(!$result)
                            {
                                echo "Erro na Consulta.<br>";
                                exit;
                            }
                            echo"<H1> TARIFA </H1> <br>";
                             echo"<form action='processarphp.php' method='POST' id='form'>";
                            echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                              echo"<tr>";
                              echo"<td> Restricoes </td>";
                              echo"<td> Quantidade </td>";
                              echo"<td> Codigo de Tarifa </td>";
                              echo"<td> Numero </td>";
                              echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                              echo"</tr>";
                              $line=0;
                            while($row= pg_fetch_row($result))
                            {
                                $line=$line+1;
                               echo"<tr>";
                              echo"<td> $row[0] </td>";
                              echo"<td> $row[1] </td>";
                              echo"<td> $row[2] </td>";
                              echo"<td> $row[3] </td>";
                              echo"<td> ";
                              echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                              echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                              echo"</td>";
                              echo"</tr>";
                            }
                            echo "</table>";
                            echo"</form>";
                       }
                      if($coluna=="12"){
                            $result= pg_query($dbconn, "SELECT restricoes FROM trafego_aereo.tarifa");
                            if(!$result)
                            {
                                echo "Erro na Consulta.<br>";
                                exit;
                            }
                            echo"<H1> TARIFA </H1> <br>";
                             echo"<form action='processarphp.php' method='POST' id='form'>";
                            echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                              echo"<tr>";
                              echo"<td> Restricoes </td>";

                              echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                              echo"</tr>";
                              $line=0;
                            while($row= pg_fetch_row($result))
                            {
                                $line=$line+1;
                               echo"<tr>";
                              echo"<td> $row[0] </td>";
                              echo"<td> ";
                              echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                              echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                              echo"</td>";
                              echo"</tr>";
                            }
                            echo "</table>";
                            echo"</form>";
                       }
                      if($coluna=="13"){
                            $result= pg_query($dbconn, "SELECT quantidade FROM trafego_aereo.tarifa");
                            if(!$result)
                            {
                                echo "Erro na Consulta.<br>";
                                exit;
                            }
                            echo"<H1> TARIFA </H1> <br>";
                             echo"<form action='processarphp.php' method='POST' id='form'>";
                            echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                              echo"<tr>";
                              echo"<td> Quantidade </td>";

                              echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                              echo"</tr>";
                              $line=0;
                            while($row= pg_fetch_row($result))
                            {
                                $line=$line+1;
                               echo"<tr>";
                              echo"<td> $row[0] </td>";
                              echo"<td> ";
                              echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                              echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                              echo"</td>";
                              echo"</tr>";
                            }
                            echo "</table>";
                            echo"</form>";
                       }
                      if($coluna=="14"){
                            $result= pg_query($dbconn, "SELECT codigo_tarifa FROM trafego_aereo.tarifa");
                            if(!$result)
                            {
                                echo "Erro na Consulta.<br>";
                                exit;
                            }
                            echo"<H1> TARIFA </H1> <br>";
                             echo"<form action='processarphp.php' method='POST' id='form'>";
                            echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                              echo"<tr>";
                              echo"<td> Código </td>";

                              echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                              echo"</tr>";
                              $line=0;
                            while($row= pg_fetch_row($result))
                            {
                                $line=$line+1;
                               echo"<tr>";
                              echo"<td> $row[0] </td>";
                              echo"<td> ";
                              echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                              echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                              echo"</td>";
                              echo"</tr>";
                            }
                            echo "</table>";
                            echo"</form>";
                       }
                      if($coluna=="15"){
                            $result= pg_query($dbconn, "SELECT numero FROM trafego_aereo.tarifa");
                            if(!$result)
                            {
                                echo "Erro na Consulta.<br>";
                                exit;
                            }
                            echo"<H1> TARIFA </H1> <br>";
                             echo"<form action='processarphp.php' method='POST' id='form'>";
                            echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                              echo"<tr>";
                              echo"<td> Numero do Voo </td>";

                              echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                              echo"</tr>";
                              $line=0;
                            while($row= pg_fetch_row($result))
                            {
                                $line=$line+1;
                               echo"<tr>";
                              echo"<td> $row[0] </td>";
                              echo"<td> ";
                              echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                              echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                              echo"</td>";
                              echo"</tr>";
                            }
                            echo "</table>";
                            echo"</form>";
                       }
                  }
                  else
                  {
                      if($coluna=="11"){
                            $result= pg_query($dbconn, "SELECT restricoes, quantidade, codigo_tarifa, numero FROM trafego_aereo.tarifa WHERE restricoes='$pesquisa' OR quantidade='$pesquisa' OR codigo_tarifa='$pesquisa' OR numero='$pesquisa';");
                            if(!$result)
                            {
                                echo "Erro na Consulta.<br>";
                                exit;
                            }
                            echo"<H1> TARIFA </H1> <br>";
                             echo"<form action='processarphp.php' method='POST' id='form'>";
                            echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                              echo"<tr>";
                              echo"<td> Restricoes </td>";
                              echo"<td> Quantidade </td>";
                              echo"<td> Codigo de Tarifa </td>";
                              echo"<td> Numero </td>";
                              echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                              echo"</tr>";
                              $line=0;
                            while($row= pg_fetch_row($result))
                            {
                                $line=$line+1;
                               echo"<tr>";
                              echo"<td> $row[0] </td>";
                              echo"<td> $row[1] </td>";
                              echo"<td> $row[2] </td>";
                              echo"<td> $row[3] </td>";
                              echo"<td> ";
                              echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                              echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                              echo"</td>";
                              echo"</tr>";
                            }
                            echo "</table>";
                            echo"</form>";
                       }
                      if($coluna=="12"){
                            $result= pg_query($dbconn, "SELECT restricoes FROM trafego_aereo.tarifa WHERE restricoes='$pesquisa' OR quantidade=$pesquisa OR codigo_tarifa=$pesquisa OR numero=$pesquisa;");
                            if(!$result)
                            {
                                echo "Erro na Consulta.<br>";
                                exit;
                            }
                            echo"<H1> TARIFA </H1> <br>";
                             echo"<form action='processarphp.php' method='POST' id='form'>";
                            echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                              echo"<tr>";
                              echo"<td> Restricoes </td>";

                              echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                              echo"</tr>";
                              $line=0;
                            while($row= pg_fetch_row($result))
                            {
                                $line=$line+1;
                               echo"<tr>";
                              echo"<td> $row[0] </td>";
                              echo"<td> ";
                              echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                              echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                              echo"</td>";
                              echo"</tr>";
                            }
                            echo "</table>";
                            echo"</form>";
                       }
                      if($coluna=="13"){
                            $result= pg_query($dbconn, "SELECT quantidade FROM trafego_aereo.tarifa WHERE restricoes='$pesquisa' OR quantidade=$pesquisa OR codigo_tarifa=$pesquisa OR numero=$pesquisa;");
                            if(!$result)
                            {
                                echo "Erro na Consulta.<br>";
                                exit;
                            }
                            echo"<H1> TARIFA </H1> <br>";
                             echo"<form action='processarphp.php' method='POST' id='form'>";
                            echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                              echo"<tr>";
                              echo"<td> Quantidade </td>";

                              echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                              echo"</tr>";
                              $line=0;
                            while($row= pg_fetch_row($result))
                            {
                                $line=$line+1;
                               echo"<tr>";
                              echo"<td> $row[0] </td>";
                              echo"<td> ";
                              echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                              echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                              echo"</td>";
                              echo"</tr>";
                            }
                            echo "</table>";
                            echo"</form>";
                       }
                      if($coluna=="14"){
                            $result= pg_query($dbconn, "SELECT codigo_tarifa FROM trafego_aereo.tarifa WHERE restricoes='$pesquisa'OR quantidade=$pesquisa OR codigo_tarifa=$pesquisa OR numero=$pesquisa;");
                            if(!$result)
                            {
                                echo "Erro na Consulta.<br>";
                                exit;
                            }
                            echo"<H1> TARIFA </H1> <br>";
                             echo"<form action='processarphp.php' method='POST' id='form'>";
                            echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                              echo"<tr>";
                              echo"<td> Código </td>";

                              echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                              echo"</tr>";
                              $line=0;
                            while($row= pg_fetch_row($result))
                            {
                                $line=$line+1;
                               echo"<tr>";
                              echo"<td> $row[0] </td>";
                              echo"<td> ";
                              echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                              echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                              echo"</td>";
                              echo"</tr>";
                            }
                            echo "</table>";
                            echo"</form>";
                       }
                      if($coluna=="15"){
                            $result= pg_query($dbconn, "SELECT numero FROM trafego_aereo.tarifa WHERE restricoes='$pesquisa' OR quantidade=$pesquisa OR codigo_tarifa=$pesquisa OR numero=$pesquisa;");
                            if(!$result)
                            {
                                echo "Erro na Consulta.<br>";
                                exit;
                            }
                            echo"<H1> TARIFA </H1> <br>";
                             echo"<form action='processarphp.php' method='POST' id='form'>";
                            echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                              echo"<tr>";
                              echo"<td> Numero do Voo </td>";

                              echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                              echo"</tr>";
                              $line=0;
                            while($row= pg_fetch_row($result))
                            {
                                $line=$line+1;
                               echo"<tr>";
                              echo"<td> $row[0] </td>";
                              echo"<td> ";
                              echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                              echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                              echo"</td>";
                              echo"</tr>";
                            }
                            echo "</table>";
                            echo"</form>";
                       }
                  }
                   break;
               case 2:
                   if($pesquisa=="")
                  {
                      if($coluna=="21"){
                            $result= pg_query($dbconn, "SELECT * FROM trafego_aereo.voo");
                            if(!$result)
                            {
                                echo "Erro na Consulta.<br>";
                                exit;
                            }
                            echo"<H1> VOO </H1> <br>";
                             echo"<form action='processarphp.php' method='POST' id='form'>";
                            echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                              echo"<tr>";
                              echo"<td> Numero do Voo </td>";
                              echo"<td> Companhia Aerea </td>";
                              echo"<td> Dias da semana</td>";
                              echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                              echo"</tr>";
                              $line=0;
                            while($row= pg_fetch_row($result))
                            {
                                $line=$line+1;
                               echo"<tr>";
                              echo"<td> $row[0] </td>";
                              echo"<td> $row[1] </td>";
                              echo"<td> $row[2] </td>";
                              echo"<td> ";
                              echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                              echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                              echo"</td>";
                              echo"</tr>";
                            }
                            echo "</table>";
                            echo"</form>";
                       }
                      if($coluna=="22"){
                            $result= pg_query($dbconn, "SELECT numero FROM trafego_aereo.voo");
                            if(!$result)
                            {
                                echo "Erro na Consulta.<br>";
                                exit;
                            }
                            echo"<H1> VOO </H1> <br>";
                             echo"<form action='processarphp.php' method='POST' id='form'>";
                            echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                              echo"<tr>";
                              echo"<td> Numero do Voo </td>";
                              echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                              echo"</tr>";
                              $line=0;
                            while($row= pg_fetch_row($result))
                            {
                                $line=$line+1;
                               echo"<tr>";
                              echo"<td> $row[0] </td>";
                              echo"<td> ";
                              echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                              echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                              echo"</td>";
                              echo"</tr>";
                            }
                            echo "</table>";
                            echo"</form>";
                       }
                      if($coluna=="23"){
                            $result= pg_query($dbconn, "SELECT companhia_aerea FROM trafego_aereo.voo");
                            if(!$result)
                            {
                                echo "Erro na Consulta.<br>";
                                exit;
                            }
                            echo"<H1> VOO </H1> <br>";
                             echo"<form action='processarphp.php' method='POST' id='form'>";
                            echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                              echo"<tr>";
                              echo"<td> Companhia Aérea </td>";
                              echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                              echo"</tr>";
                              $line=0;
                            while($row= pg_fetch_row($result))
                            {
                                $line=$line+1;
                               echo"<tr>";
                              echo"<td> $row[0] </td>";
                              echo"<td> ";
                              echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                              echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                              echo"</td>";
                              echo"</tr>";
                            }
                            echo "</table>";
                            echo"</form>";
                       }
                      if($coluna=="24"){
                            $result= pg_query($dbconn, "SELECT dias_da_semana FROM trafego_aereo.voo");
                            if(!$result)
                            {
                                echo "Erro na Consulta.<br>";
                                exit;
                            }
                            echo"<H1> VOO </H1> <br>";
                             echo"<form action='processarphp.php' method='POST' id='form'>";
                            echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                              echo"<tr>";
                              echo"<td> Dias da semana </td>";
                              echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                              echo"</tr>";
                              $line=0;
                            while($row= pg_fetch_row($result))
                            {
                                $line=$line+1;
                               echo"<tr>";
                              echo"<td> $row[0] </td>";
                              echo"<td> ";
                              echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                              echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                              echo"</td>";
                              echo"</tr>";
                            }
                            echo "</table>";
                            echo"</form>";
                       }
                  }
                  else
                  {
                      if($coluna=="21"){
                            $result= pg_query($dbconn, "SELECT numero, companhia_aerea, dias_da_semana FROM trafego_aereo.voo WHERE numero=$pesquisa OR companhia_aerea='$pesquisa' OR dias_da_semana='$pesquisa';");
                            if(!$result)
                            {
                                echo "Erro na Consulta.<br>";
                                exit;
                            }
                            echo"<H1> VOO </H1> <br>";
                             echo"<form action='processarphp.php' method='POST' id='form'>";
                            echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                              echo"<tr>";
                              echo"<td> Numero do Voo </td>";
                              echo"<td> Companhia Aerea </td>";
                              echo"<td> Dias da semana</td>";
                              echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                              echo"</tr>";
                              $line=0;
                            while($row= pg_fetch_row($result))
                            {
                                $line=$line+1;
                               echo"<tr>";
                              echo"<td> $row[0] </td>";
                              echo"<td> $row[1] </td>";
                              echo"<td> $row[2] </td>";
                              echo"<td> ";
                              echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                              echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                              echo"</td>";
                              echo"</tr>";
                            }
                            echo "</table>";
                            echo"</form>";
                       }
                      if($coluna=="22"){
                            $result= pg_query($dbconn, "SELECT numero FROM trafego_aereo.voo WHERE numero=$pesquisa OR companhia_aerea='$pesquisa' OR dias_da_semana='$pesquisa';");
                            if(!$result)
                            {
                                echo "Erro na Consulta.<br>";
                                exit;
                            }
                            echo"<H1> VOO </H1> <br>";
                             echo"<form action='processarphp.php' method='POST' id='form'>";
                            echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                              echo"<tr>";
                              echo"<td> Numero do Voo </td>";
                              echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                              echo"</tr>";
                              $line=0;
                            while($row= pg_fetch_row($result))
                            {
                                $line=$line+1;
                               echo"<tr>";
                              echo"<td> $row[0] </td>";
                              echo"<td> ";
                              echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                              echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                              echo"</td>";
                              echo"</tr>";
                            }
                            echo "</table>";
                            echo"</form>";
                       }
                      if($coluna=="23"){
                            $result= pg_query($dbconn, "SELECT companhia_aerea FROM trafego_aereo.voo WHERE numero=$pesquisa OR companhia_aerea='$pesquisa' OR dias_da_semana='$pesquisa';");
                            if(!$result)
                            {
                                echo "Erro na Consulta.<br>";
                                exit;
                            }
                            echo"<H1> VOO </H1> <br>";
                             echo"<form action='processarphp.php' method='POST' id='form'>";
                            echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                              echo"<tr>";
                              echo"<td> Companhia Aérea </td>";
                              echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                              echo"</tr>";
                              $line=0;
                            while($row= pg_fetch_row($result))
                            {
                                $line=$line+1;
                               echo"<tr>";
                              echo"<td> $row[0] </td>";
                              echo"<td> ";
                              echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                              echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                              echo"</td>";
                              echo"</tr>";
                            }
                            echo "</table>";
                            echo"</form>";
                       }
                      if($coluna=="24"){
                            $result= pg_query($dbconn, "SELECT dias_da_semana FROM trafego_aereo.voo WHERE numero=$pesquisa OR companhia_aerea='$pesquisa' OR dias_da_semana='$pesquisa';");
                            if(!$result)
                            {
                                echo "Erro na Consulta.<br>";
                                exit;
                            }
                            echo"<H1> VOO </H1> <br>";
                             echo"<form action='processarphp.php' method='POST' id='form'>";
                            echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                              echo"<tr>";
                              echo"<td> Dias da semana </td>";
                              echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                              echo"</tr>";
                              $line=0;
                            while($row= pg_fetch_row($result))
                            {
                                $line=$line+1;
                               echo"<tr>";
                              echo"<td> $row[0] </td>";
                              echo"<td> ";
                              echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                              echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                              echo"</td>";
                              echo"</tr>";
                            }
                            echo "</table>";
                            echo"</form>";
                       } 
                  }
                   break;
               case 3:
                   if($pesquisa=="")
                  {
                       if($coluna=="31"){
                            $result= pg_query($dbconn, "SELECT * FROM trafego_aereo.trecho_voo");
                            if(!$result)
                            {
                                echo "Erro na Consulta.<br>";
                                exit;
                            }
                            echo"<H1> TRECHO DE VOO </H1> <br>";
                             echo"<form action='processarphp.php' method='POST' id='form'>";
                            echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                              echo"<tr>";
                              echo"<td> Número do Trecho </td>";
                              echo"<td> Aeroporto Partida </td>";
                              echo"<td> Aeroporto Chegada </td>";
                              echo"<td> Data prevista de Chegada </td>";
                              echo"<td> Data prevista de Partida </td>";
                              echo"<td> Codigo do Voo </td>";
                              echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                              echo"</tr>";
                              $line=0;
                            while($row= pg_fetch_row($result))
                            {
                                $line=$line+1;
                               echo"<tr>";
                              echo"<td> $row[0] </td>";
                              echo"<td> $row[1] </td>";
                              echo"<td> $row[2] </td>";
                              echo"<td> $row[3] </td>";
                              echo"<td> $row[4] </td>";
                              echo"<td> $row[5] </td>";
                              echo"<td> ";
                              echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                              echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                              echo"</td>";
                              echo"</tr>";
                            }
                            echo "</table>";
                            echo"</form>";
                       }
                       if($coluna=="32"){
                            $result= pg_query($dbconn, "SELECT trecho_num FROM trafego_aereo.trecho_voo");
                            if(!$result)
                            {
                                echo "Erro na Consulta.<br>";
                                exit;
                            }
                            echo"<H1> TRECHO DE VOO </H1> <br>";
                             echo"<form action='processarphp.php' method='POST' id='form'>";
                            echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                              echo"<tr>";
                              echo"<td> Número do Trecho </td>";
                              echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                              echo"</tr>";
                              $line=0;
                            while($row= pg_fetch_row($result))
                            {
                                $line=$line+1;
                               echo"<tr>";
                              echo"<td> $row[0] </td>";
                              echo"<td> ";
                              echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                              echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                              echo"</td>";
                              echo"</tr>";
                            }
                            echo "</table>";
                            echo"</form>";
                       }
                       if($coluna=="33"){
                            $result= pg_query($dbconn, "SELECT \"codigo_aeroportoP\" FROM trafego_aereo.trecho_voo");
                            if(!$result)
                            {
                                echo "Erro na Consulta.<br>";
                                exit;
                            }
                            echo"<H1> TRECHO DE VOO </H1> <br>";
                             echo"<form action='processarphp.php' method='POST' id='form'>";
                            echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                              echo"<tr>";
                              echo"<td> Aeroporto de Partida </td>";
                              echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                              echo"</tr>";
                              $line=0;
                            while($row= pg_fetch_row($result))
                            {
                                $line=$line+1;
                               echo"<tr>";
                              echo"<td> $row[0] </td>";
                              echo"<td> ";
                              echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                              echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                              echo"</td>";
                              echo"</tr>";
                            }
                            echo "</table>";
                            echo"</form>";
                       }
                       if($coluna=="34"){
                            $result= pg_query($dbconn, "SELECT \"codigo_aeroportoC\" FROM trafego_aereo.trecho_voo");
                            if(!$result)
                            {
                                echo "Erro na Consulta.<br>";
                                exit;
                            }
                            echo"<H1> TRECHO DE VOO </H1> <br>";
                             echo"<form action='processarphp.php' method='POST' id='form'>";
                            echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                              echo"<tr>";
                              echo"<td> Aeroporto de Chegada </td>";
                              echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                              echo"</tr>";
                              $line=0;
                            while($row= pg_fetch_row($result))
                            {
                                $line=$line+1;
                               echo"<tr>";
                              echo"<td> $row[0] </td>";
                              echo"<td> ";
                              echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                              echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                              echo"</td>";
                              echo"</tr>";
                            }
                            echo "</table>";
                            echo"</form>";
                       }
                       if($coluna=="35"){
                            $result= pg_query($dbconn, "SELECT horario_chegada_previsto FROM trafego_aereo.trecho_voo");
                            if(!$result)
                            {
                                echo "Erro na Consulta.<br>";
                                exit;
                            }
                            echo"<H1> TRECHO DE VOO </H1> <br>";
                             echo"<form action='processarphp.php' method='POST' id='form'>";
                            echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                              echo"<tr>";
                              echo"<td> Dia de Chegada </td>";
                              echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                              echo"</tr>";
                              $line=0;
                            while($row= pg_fetch_row($result))
                            {
                                $line=$line+1;
                               echo"<tr>";
                              echo"<td> $row[0] </td>";
                              echo"<td> ";
                              echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                              echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                              echo"</td>";
                              echo"</tr>";
                            }
                            echo "</table>";
                            echo"</form>";
                       }
                       if($coluna=="36"){
                            $result= pg_query($dbconn, "SELECT horario_partida_previsto FROM trafego_aereo.trecho_voo");
                            if(!$result)
                            {
                                echo "Erro na Consulta.<br>";
                                exit;
                            }
                            echo"<H1> TRECHO DE VOO </H1> <br>";
                             echo"<form action='processarphp.php' method='POST' id='form'>";
                            echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                              echo"<tr>";
                              echo"<td> Dia de Partida </td>";
                              echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                              echo"</tr>";
                              $line=0;
                            while($row= pg_fetch_row($result))
                            {
                                $line=$line+1;
                               echo"<tr>";
                              echo"<td> $row[0] </td>";
                              echo"<td> ";
                              echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                              echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                              echo"</td>";
                              echo"</tr>";
                            }
                            echo "</table>";
                            echo"</form>";
                       }
                       if($coluna=="37"){
                            $result= pg_query($dbconn, "SELECT codigo_voo FROM trafego_aereo.trecho_voo");
                            if(!$result)
                            {
                                echo "Erro na Consulta.<br>";
                                exit;
                            }
                            echo"<H1> TRECHO DE VOO </H1> <br>";
                             echo"<form action='processarphp.php' method='POST' id='form'>";
                            echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                              echo"<tr>";
                              echo"<td> Código de voo </td>";
                              echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                              echo"</tr>";
                              $line=0;
                            while($row= pg_fetch_row($result))
                            {
                                $line=$line+1;
                               echo"<tr>";
                              echo"<td> $row[0] </td>";
                              echo"<td> ";
                              echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                              echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                              echo"</td>";
                              echo"</tr>";
                            }
                            echo "</table>";
                            echo"</form>";
                       }
                  }
                  else
                  {
                       if($coluna=="31"){
                            $result= pg_query($dbconn, "SELECT trecho_num, \"codigo_aeroportoP\", \"codigo_aeroportoC\", horario_chegada_previsto, horario_partida_previsto, codigo_voo FROM trafego_aereo.trecho_voo WHERE trecho_num=$pesquisa OR \"codigo_aeroportoP\"=$pesquisa OR \"codigo_aeroportoC\"=$pesquisa OR horario_chegada_previsto='$pesquisa' OR horario_partida_previsto='$pesquisa' OR codigo_voo=$pesquisa;");
                            if(!$result)
                            {
                                echo "Erro na Consulta.<br>";
                                exit;
                            }
                            echo"<H1> TRECHO DE VOO </H1> <br>";
                             echo"<form action='processarphp.php' method='POST' id='form'>";
                            echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                              echo"<tr>";
                              echo"<td> Número do Trecho </td>";
                              echo"<td> Aeroporto Partida </td>";
                              echo"<td> Aeroporto Chegada </td>";
                              echo"<td> Data prevista de Chegada </td>";
                              echo"<td> Data prevista de Partida </td>";
                              echo"<td> Codigo do Voo </td>";
                              echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                              echo"</tr>";
                              $line=0;
                            while($row= pg_fetch_row($result))
                            {
                                $line=$line+1;
                               echo"<tr>";
                              echo"<td> $row[0] </td>";
                              echo"<td> $row[1] </td>";
                              echo"<td> $row[2] </td>";
                              echo"<td> $row[3] </td>";
                              echo"<td> $row[4] </td>";
                              echo"<td> $row[5] </td>";
                              echo"<td> ";
                              echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                              echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                              echo"</td>";
                              echo"</tr>";
                            }
                            echo "</table>";
                            echo"</form>";
                       }
                       if($coluna=="32"){
                            $result= pg_query($dbconn, "SELECT trecho_num FROM trafego_aereo.trecho_voo WHERE trecho_num=$pesquisa OR \"codigo_aeroportoP\"=$pesquisa OR \"codigo_aeroportoC\"=$pesquisa OR horario_chegada_previsto='$pesquisa' OR horario_partida_previsto='$pesquisa' OR codigo_voo=$pesquisa;");
                            if(!$result)
                            {
                                echo "Erro na Consulta.<br>";
                                exit;
                            }
                            echo"<H1> TRECHO DE VOO </H1> <br>";
                             echo"<form action='processarphp.php' method='POST' id='form'>";
                            echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                              echo"<tr>";
                              echo"<td> Número do Trecho </td>";
                              echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                              echo"</tr>";
                              $line=0;
                            while($row= pg_fetch_row($result))
                            {
                                $line=$line+1;
                               echo"<tr>";
                              echo"<td> $row[0] </td>";
                              echo"<td> ";
                              echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                              echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                              echo"</td>";
                              echo"</tr>";
                            }
                            echo "</table>";
                            echo"</form>";
                       }
                       if($coluna=="33"){
                            $result= pg_query($dbconn, "SELECT \"codigo_aeroportoP\" FROM trafego_aereo.trecho_voo WHERE trecho_num=$pesquisa OR \"codigo_aeroportoP\"=$pesquisa OR \"codigo_aeroportoC\"=$pesquisa OR horario_chegada_previsto='$pesquisa' OR horario_partida_previsto='$pesquisa' OR codigo_voo=$pesquisa;");
                            if(!$result)
                            {
                                echo "Erro na Consulta.<br>";
                                exit;
                            }
                            echo"<H1> TRECHO DE VOO </H1> <br>";
                             echo"<form action='processarphp.php' method='POST' id='form'>";
                            echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                              echo"<tr>";
                              echo"<td> Aeroporto de Partida </td>";
                              echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                              echo"</tr>";
                              $line=0;
                            while($row= pg_fetch_row($result))
                            {
                                $line=$line+1;
                               echo"<tr>";
                              echo"<td> $row[0] </td>";
                              echo"<td> ";
                              echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                              echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                              echo"</td>";
                              echo"</tr>";
                            }
                            echo "</table>";
                            echo"</form>";
                       }
                       if($coluna=="34"){
                            $result= pg_query($dbconn, "SELECT \"codigo_aeroportoC\" FROM trafego_aereo.trecho_voo WHERE trecho_num=$pesquisa OR \"codigo_aeroportoP\"=$pesquisa OR \"codigo_aeroportoC\"=$pesquisa OR horario_chegada_previsto='$pesquisa' OR horario_partida_previsto='$pesquisa' OR codigo_voo=$pesquisa;");
                            if(!$result)
                            {
                                echo "Erro na Consulta.<br>";
                                exit;
                            }
                            echo"<H1> TRECHO DE VOO </H1> <br>";
                             echo"<form action='processarphp.php' method='POST' id='form'>";
                            echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                              echo"<tr>";
                              echo"<td> Aeroporto de Chegada </td>";
                              echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                              echo"</tr>";
                              $line=0;
                            while($row= pg_fetch_row($result))
                            {
                                $line=$line+1;
                               echo"<tr>";
                              echo"<td> $row[0] </td>";
                              echo"<td> ";
                              echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                              echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                              echo"</td>";
                              echo"</tr>";
                            }
                            echo "</table>";
                            echo"</form>";
                       }
                       if($coluna=="35"){
                            $result= pg_query($dbconn, "SELECT horario_chegada_previsto FROM trafego_aereo.trecho_voo WHERE trecho_num=$pesquisa OR \"codigo_aeroportoP\"=$pesquisa OR \"codigo_aeroportoC\"=$pesquisa OR horario_chegada_previsto='$pesquisa' OR horario_partida_previsto='$pesquisa' OR codigo_voo=$pesquisa;");
                            if(!$result)
                            {
                                echo "Erro na Consulta.<br>";
                                exit;
                            }
                            echo"<H1> TRECHO DE VOO </H1> <br>";
                             echo"<form action='processarphp.php' method='POST' id='form'>";
                            echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                              echo"<tr>";
                              echo"<td> Dia de Chegada </td>";
                              echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                              echo"</tr>";
                              $line=0;
                            while($row= pg_fetch_row($result))
                            {
                                $line=$line+1;
                               echo"<tr>";
                              echo"<td> $row[0] </td>";
                              echo"<td> ";
                              echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                              echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                              echo"</td>";
                              echo"</tr>";
                            }
                            echo "</table>";
                            echo"</form>";
                       }
                       if($coluna=="36"){
                            $result= pg_query($dbconn, "SELECT horario_partida_previsto FROM trafego_aereo.trecho_voo WHERE trecho_num=$pesquisa OR \"codigo_aeroportoP\"=$pesquisa OR \"codigo_aeroportoC\"=$pesquisa OR horario_chegada_previsto='$pesquisa' OR horario_partida_previsto='$pesquisa' OR codigo_voo=$pesquisa;");
                            if(!$result)
                            {
                                echo "Erro na Consulta.<br>";
                                exit;
                            }
                            echo"<H1> TRECHO DE VOO </H1> <br>";
                             echo"<form action='processarphp.php' method='POST' id='form'>";
                            echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                              echo"<tr>";
                              echo"<td> Dia de Partida </td>";
                              echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                              echo"</tr>";
                              $line=0;
                            while($row= pg_fetch_row($result))
                            {
                                $line=$line+1;
                               echo"<tr>";
                              echo"<td> $row[0] </td>";
                              echo"<td> ";
                              echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                              echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                              echo"</td>";
                              echo"</tr>";
                            }
                            echo "</table>";
                            echo"</form>";
                       }
                       if($coluna=="37"){
                            $result= pg_query($dbconn, "SELECT codigo_voo FROM trafego_aereo.trecho_voo WHERE trecho_num=$pesquisa OR \"codigo_aeroportoP\"=$pesquisa OR \"codigo_aeroportoC\"=$pesquisa OR horario_chegada_previsto='$pesquisa' OR horario_partida_previsto='$pesquisa' OR codigo_voo=$pesquisa;");
                            if(!$result)
                            {
                                echo "Erro na Consulta.<br>";
                                exit;
                            }
                            echo"<H1> TRECHO DE VOO </H1> <br>";
                             echo"<form action='processarphp.php' method='POST' id='form'>";
                            echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                              echo"<tr>";
                              echo"<td> Código de voo </td>";
                              echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                              echo"</tr>";
                              $line=0;
                            while($row= pg_fetch_row($result))
                            {
                                $line=$line+1;
                               echo"<tr>";
                              echo"<td> $row[0] </td>";
                              echo"<td> ";
                              echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                              echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                              echo"</td>";
                              echo"</tr>";
                            }
                            echo "</table>";
                            echo"</form>";
                       }
                  }
                   break;
               case 4:
                   if($pesquisa=="")
                  {
                    if($coluna=="41"){
                        $result= pg_query($dbconn, "SELECT * FROM trafego_aereo.instancia_trecho");
                        if(!$result)
                        {
                            echo "Erro na Consulta.<br>";
                            exit;
                        }
                        echo"<H1> INSTANCIA DE TRECHO </H1> <br>";
                         echo"<form action='processarphp.php' method='POST' id='form'>";
                        echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                          echo"<tr>";
                          echo"<td> Assentos Disponiveis </td>";
                          echo"<td> Data </td>";
                          echo"<td> Trecho Numero </td>";
                          echo"<td> Hora Partida </td>";
                          echo"<td> Hora Chegada </td>";
                          echo"<td> Codigo Aeronave </td>";
                          echo"<td> Aeroporto Chegada </td>";
                          echo"<td> Aeroporto Partida </td>";
                          echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                          echo"</tr>";
                           $line=0;
                        while($row= pg_fetch_row($result))
                        {
                            $line=$line+1;
                           echo"<tr>";
                          echo"<td> $row[0] </td>";
                          echo"<td> $row[1] </td>";
                          echo"<td> $row[2] </td>";
                          echo"<td> $row[3] </td>";
                          echo"<td> $row[4] </td>";
                          echo"<td> $row[5] </td>";
                          echo"<td> $row[6] </td>";
                          echo"<td> $row[7] </td>";
                           echo"<td>";
                           echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                          echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                          echo "</td>";
                          echo"</tr>";
                        }
                        echo "</table>";
                        echo "</form>";
                   }
                    if($coluna=="42"){
                        $result= pg_query($dbconn, "SELECT numero_assentos_disponiveis FROM trafego_aereo.instancia_trecho");
                        if(!$result)
                        {
                            echo "Erro na Consulta.<br>";
                            exit;
                        }
                        echo"<H1> INSTANCIA DE TRECHO </H1> <br>";
                         echo"<form action='processarphp.php' method='POST' id='form'>";
                        echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                          echo"<tr>";
                          echo"<td> Assentos Disponiveis </td>";
                          echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                          echo"</tr>";
                           $line=0;
                        while($row= pg_fetch_row($result))
                        {
                            $line=$line+1;
                           echo"<tr>";
                          echo"<td> $row[0] </td>";
                          echo"<td>";
                           echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                          echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                          echo "</td>";
                          echo"</tr>";
                        }
                        echo "</table>";
                        echo "</form>";
                   }
                    if($coluna=="43"){
                        $result= pg_query($dbconn, "SELECT data FROM trafego_aereo.instancia_trecho");
                        if(!$result)
                        {
                            echo "Erro na Consulta.<br>";
                            exit;
                        }
                        echo"<H1> INSTANCIA DE TRECHO </H1> <br>";
                         echo"<form action='processarphp.php' method='POST' id='form'>";
                        echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                          echo"<tr>";
                          echo"<td> Data </td>";
                          echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                          echo"</tr>";
                           $line=0;
                        while($row= pg_fetch_row($result))
                        {
                            $line=$line+1;
                           echo"<tr>";
                          echo"<td> $row[0] </td>";
                          echo"<td>";
                           echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                          echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                          echo "</td>";
                          echo"</tr>";
                        }
                        echo "</table>";
                        echo "</form>";
                   }
                    if($coluna=="44"){
                        $result= pg_query($dbconn, "SELECT trecho_numero FROM trafego_aereo.instancia_trecho");
                        if(!$result)
                        {
                            echo "Erro na Consulta.<br>";
                            exit;
                        }
                        echo"<H1> INSTANCIA DE TRECHO </H1> <br>";
                         echo"<form action='processarphp.php' method='POST' id='form'>";
                        echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                          echo"<tr>";
                          echo"<td> Número de trecho </td>";
                          echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                          echo"</tr>";
                           $line=0;
                        while($row= pg_fetch_row($result))
                        {
                            $line=$line+1;
                           echo"<tr>";
                          echo"<td> $row[0] </td>";
                          echo"<td>";
                           echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                          echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                          echo "</td>";
                          echo"</tr>";
                        }
                        echo "</table>";
                        echo "</form>";
                   }
                    if($coluna=="45"){
                        $result= pg_query($dbconn, "SELECT hora_partida FROM trafego_aereo.instancia_trecho");
                        if(!$result)
                        {
                            echo "Erro na Consulta.<br>";
                            exit;
                        }
                        echo"<H1> INSTANCIA DE TRECHO </H1> <br>";
                         echo"<form action='processarphp.php' method='POST' id='form'>";
                        echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                          echo"<tr>";
                          echo"<td> Horário de Partida </td>";
                          echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                          echo"</tr>";
                           $line=0;
                        while($row= pg_fetch_row($result))
                        {
                            $line=$line+1;
                           echo"<tr>";
                          echo"<td> $row[0] </td>";
                          echo"<td>";
                           echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                          echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                          echo "</td>";
                          echo"</tr>";
                        }
                        echo "</table>";
                        echo "</form>";
                   }
                    if($coluna=="46"){
                        $result= pg_query($dbconn, "SELECT hora_chegada FROM trafego_aereo.instancia_trecho");
                        if(!$result)
                        {
                            echo "Erro na Consulta.<br>";
                            exit;
                        }
                        echo"<H1> INSTANCIA DE TRECHO </H1> <br>";
                         echo"<form action='processarphp.php' method='POST' id='form'>";
                        echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                          echo"<tr>";
                          echo"<td> Horário de Chegada </td>";
                          echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                          echo"</tr>";
                           $line=0;
                        while($row= pg_fetch_row($result))
                        {
                            $line=$line+1;
                           echo"<tr>";
                          echo"<td> $row[0] </td>";
                          echo"<td>";
                           echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                          echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                          echo "</td>";
                          echo"</tr>";
                        }
                        echo "</table>";
                        echo "</form>";
                   }
                    if($coluna=="47"){
                        $result= pg_query($dbconn, "SELECT cod_aeronave FROM trafego_aereo.instancia_trecho");
                        if(!$result)
                        {
                            echo "Erro na Consulta.<br>";
                            exit;
                        }
                        echo"<H1> INSTANCIA DE TRECHO </H1> <br>";
                         echo"<form action='processarphp.php' method='POST' id='form'>";
                        echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                          echo"<tr>";
                          echo"<td> Codigo da Aeronave </td>";
                          echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                          echo"</tr>";
                           $line=0;
                        while($row= pg_fetch_row($result))
                        {
                            $line=$line+1;
                           echo"<tr>";
                          echo"<td> $row[0] </td>";
                          echo"<td>";
                           echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                          echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                          echo "</td>";
                          echo"</tr>";
                        }
                        echo "</table>";
                        echo "</form>";
                   }
                    if($coluna=="48"){
                        $result= pg_query($dbconn, "SELECT aeroporto_chegada FROM trafego_aereo.instancia_trecho");
                        if(!$result)
                        {
                            echo "Erro na Consulta.<br>";
                            exit;
                        }
                        echo"<H1> INSTANCIA DE TRECHO </H1> <br>";
                         echo"<form action='processarphp.php' method='POST' id='form'>";
                        echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                          echo"<tr>";
                          echo"<td> Aeroporto de Chegada </td>";
                          echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                          echo"</tr>";
                           $line=0;
                        while($row= pg_fetch_row($result))
                        {
                            $line=$line+1;
                           echo"<tr>";
                          echo"<td> $row[0] </td>";
                          echo"<td>";
                           echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                          echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                          echo "</td>";
                          echo"</tr>";
                        }
                        echo "</table>";
                        echo "</form>";
                   }
                    if($coluna=="49"){
                        $result= pg_query($dbconn, "SELECT aeroporto_partida FROM trafego_aereo.instancia_trecho");
                        if(!$result)
                        {
                            echo "Erro na Consulta.<br>";
                            exit;
                        }
                        echo"<H1> INSTANCIA DE TRECHO </H1> <br>";
                         echo"<form action='processarphp.php' method='POST' id='form'>";
                        echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                          echo"<tr>";
                          echo"<td> Aeroporto de Partida </td>";
                          echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                          echo"</tr>";
                           $line=0;
                        while($row= pg_fetch_row($result))
                        {
                            $line=$line+1;
                           echo"<tr>";
                          echo"<td> $row[0] </td>";
                          echo"<td>";
                           echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                          echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                          echo "</td>";
                          echo"</tr>";
                        }
                        echo "</table>";
                        echo "</form>";
                   }
                  }
                  else
                  {
                    if($coluna=="41"){
                        $result= pg_query($dbconn, "SELECT numero_assentos_disponiveis, data, trecho_numero, hora_partida, hora_chegada, cod_aeronave, aeroporto_partida, aeroporto_chegada FROM trafego_aereo.instancia_trecho WHERE numero_assentos_disponiveis=$pesquisa OR data='$pesquisa' OR trecho_numero=$pesquisa OR hora_partida='$pesquisa' OR hora_chegada='$pesquisa' OR cod_aeronave=$pesquisa OR aeroporto_partida=$pesquisa OR aeroporto_chegada=$pesquisa;");
                        if(!$result)
                        {
                            echo "Erro na Consulta.<br>";
                            exit;
                        }
                        echo"<H1> INSTANCIA DE TRECHO </H1> <br>";
                         echo"<form action='processarphp.php' method='POST' id='form'>";
                        echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                          echo"<tr>";
                          echo"<td> Assentos Disponiveis </td>";
                          echo"<td> Data </td>";
                          echo"<td> Trecho Numero </td>";
                          echo"<td> Hora Partida </td>";
                          echo"<td> Hora Chegada </td>";
                          echo"<td> Codigo Aeronave </td>";
                          echo"<td> Aeroporto Chegada </td>";
                          echo"<td> Aeroporto Partida </td>";
                          echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                          echo"</tr>";
                           $line=0;
                        while($row= pg_fetch_row($result))
                        {
                            $line=$line+1;
                           echo"<tr>";
                          echo"<td> $row[0] </td>";
                          echo"<td> $row[1] </td>";
                          echo"<td> $row[2] </td>";
                          echo"<td> $row[3] </td>";
                          echo"<td> $row[4] </td>";
                          echo"<td> $row[5] </td>";
                          echo"<td> $row[6] </td>";
                          echo"<td> $row[7] </td>";
                           echo"<td>";
                           echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                          echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                          echo "</td>";
                          echo"</tr>";
                        }
                        echo "</table>";
                        echo "</form>";
                   }
                    if($coluna=="42"){
                        $result= pg_query($dbconn, "SELECT numero_assentos_disponiveis FROM trafego_aereo.instancia_trecho WHERE numero_assentos_disponiveis=$pesquisa OR data='$pesquisa' OR trecho_numero=$pesquisa OR hora_partida='$pesquisa' OR hora_chegada='$pesquisa' OR cod_aeronave=$pesquisa OR aeroporto_partida=$pesquisa OR aeroporto_chegada=$pesquisa;");
                        if(!$result)
                        {
                            echo "Erro na Consulta.<br>";
                            exit;
                        }
                        echo"<H1> INSTANCIA DE TRECHO </H1> <br>";
                         echo"<form action='processarphp.php' method='POST' id='form'>";
                        echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                          echo"<tr>";
                          echo"<td> Assentos Disponiveis </td>";
                          echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                          echo"</tr>";
                           $line=0;
                        while($row= pg_fetch_row($result))
                        {
                            $line=$line+1;
                           echo"<tr>";
                          echo"<td> $row[0] </td>";
                          echo"<td>";
                           echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                          echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                          echo "</td>";
                          echo"</tr>";
                        }
                        echo "</table>";
                        echo "</form>";
                   }
                    if($coluna=="43"){
                        $result= pg_query($dbconn, "SELECT data FROM trafego_aereo.instancia_trecho WHERE numero_assentos_disponiveis=$pesquisa OR data='$pesquisa' OR trecho_numero=$pesquisa OR hora_partida='$pesquisa' OR hora_chegada='$pesquisa' OR cod_aeronave=$pesquisa OR aeroporto_partida=$pesquisa OR aeroporto_chegada=$pesquisa;");
                        if(!$result)
                        {
                            echo "Erro na Consulta.<br>";
                            exit;
                        }
                        echo"<H1> INSTANCIA DE TRECHO </H1> <br>";
                         echo"<form action='processarphp.php' method='POST' id='form'>";
                        echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                          echo"<tr>";
                          echo"<td> Data </td>";
                          echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                          echo"</tr>";
                           $line=0;
                        while($row= pg_fetch_row($result))
                        {
                            $line=$line+1;
                           echo"<tr>";
                          echo"<td> $row[0] </td>";
                          echo"<td>";
                           echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                          echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                          echo "</td>";
                          echo"</tr>";
                        }
                        echo "</table>";
                        echo "</form>";
                   }
                    if($coluna=="44"){
                        $result= pg_query($dbconn, "SELECT trecho_numero FROM trafego_aereo.instancia_trecho WHERE numero_assentos_disponiveis=$pesquisa OR data='$pesquisa' OR trecho_numero=$pesquisa OR hora_partida='$pesquisa' OR hora_chegada='$pesquisa' OR cod_aeronave=$pesquisa OR aeroporto_partida=$pesquisa OR aeroporto_chegada=$pesquisa;");
                        if(!$result)
                        {
                            echo "Erro na Consulta.<br>";
                            exit;
                        }
                        echo"<H1> INSTANCIA DE TRECHO </H1> <br>";
                         echo"<form action='processarphp.php' method='POST' id='form'>";
                        echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                          echo"<tr>";
                          echo"<td> Número de trecho </td>";
                          echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                          echo"</tr>";
                           $line=0;
                        while($row= pg_fetch_row($result))
                        {
                            $line=$line+1;
                           echo"<tr>";
                          echo"<td> $row[0] </td>";
                          echo"<td>";
                           echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                          echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                          echo "</td>";
                          echo"</tr>";
                        }
                        echo "</table>";
                        echo "</form>";
                   }
                    if($coluna=="45"){
                        $result= pg_query($dbconn, "SELECT hora_partida FROM trafego_aereo.instancia_trecho WHERE numero_assentos_disponiveis=$pesquisa OR data='$pesquisa' OR trecho_numero=$pesquisa OR hora_partida='$pesquisa' OR hora_chegada='$pesquisa' OR cod_aeronave=$pesquisa OR aeroporto_partida=$pesquisa OR aeroporto_chegada=$pesquisa;");
                        if(!$result)
                        {
                            echo "Erro na Consulta.<br>";
                            exit;
                        }
                        echo"<H1> INSTANCIA DE TRECHO </H1> <br>";
                         echo"<form action='processarphp.php' method='POST' id='form'>";
                        echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                          echo"<tr>";
                          echo"<td> Horário de Partida </td>";
                          echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                          echo"</tr>";
                           $line=0;
                        while($row= pg_fetch_row($result))
                        {
                            $line=$line+1;
                           echo"<tr>";
                          echo"<td> $row[0] </td>";
                          echo"<td>";
                           echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                          echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                          echo "</td>";
                          echo"</tr>";
                        }
                        echo "</table>";
                        echo "</form>";
                   }
                    if($coluna=="46"){
                        $result= pg_query($dbconn, "SELECT hora_chegada FROM trafego_aereo.instancia_trecho WHERE numero_assentos_disponiveis=$pesquisa OR data='$pesquisa' OR trecho_numero=$pesquisa OR hora_partida='$pesquisa' OR hora_chegada='$pesquisa' OR cod_aeronave=$pesquisa OR aeroporto_partida=$pesquisa OR aeroporto_chegada=$pesquisa;");
                        if(!$result)
                        {
                            echo "Erro na Consulta.<br>";
                            exit;
                        }
                        echo"<H1> INSTANCIA DE TRECHO </H1> <br>";
                         echo"<form action='processarphp.php' method='POST' id='form'>";
                        echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                          echo"<tr>";
                          echo"<td> Horário de Chegada </td>";
                          echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                          echo"</tr>";
                           $line=0;
                        while($row= pg_fetch_row($result))
                        {
                            $line=$line+1;
                           echo"<tr>";
                          echo"<td> $row[0] </td>";
                          echo"<td>";
                           echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                          echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                          echo "</td>";
                          echo"</tr>";
                        }
                        echo "</table>";
                        echo "</form>";
                   }
                    if($coluna=="47"){
                        $result= pg_query($dbconn, "SELECT cod_aeronave FROM trafego_aereo.instancia_trecho WHERE numero_assentos_disponiveis=$pesquisa OR data='$pesquisa' OR trecho_numero=$pesquisa OR hora_partida='$pesquisa' OR hora_chegada='$pesquisa' OR cod_aeronave=$pesquisa OR aeroporto_partida=$pesquisa OR aeroporto_chegada=$pesquisa;");
                        if(!$result)
                        {
                            echo "Erro na Consulta.<br>";
                            exit;
                        }
                        echo"<H1> INSTANCIA DE TRECHO </H1> <br>";
                         echo"<form action='processarphp.php' method='POST' id='form'>";
                        echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                          echo"<tr>";
                          echo"<td> Codigo da Aeronave </td>";
                          echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                          echo"</tr>";
                           $line=0;
                        while($row= pg_fetch_row($result))
                        {
                            $line=$line+1;
                           echo"<tr>";
                          echo"<td> $row[0] </td>";
                          echo"<td>";
                           echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                          echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                          echo "</td>";
                          echo"</tr>";
                        }
                        echo "</table>";
                        echo "</form>";
                   }
                    if($coluna=="48"){
                        $result= pg_query($dbconn, "SELECT aeroporto_chegada FROM trafego_aereo.instancia_trecho WHERE numero_assentos_disponiveis=$pesquisa OR data='$pesquisa' OR trecho_numero=$pesquisa OR hora_partida='$pesquisa' OR hora_chegada='$pesquisa' OR cod_aeronave=$pesquisa OR aeroporto_partida=$pesquisa OR aeroporto_chegada=$pesquisa;");
                        if(!$result)
                        {
                            echo "Erro na Consulta.<br>";
                            exit;
                        }
                        echo"<H1> INSTANCIA DE TRECHO </H1> <br>";
                         echo"<form action='processarphp.php' method='POST' id='form'>";
                        echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                          echo"<tr>";
                          echo"<td> Aeroporto de Chegada </td>";
                          echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                          echo"</tr>";
                           $line=0;
                        while($row= pg_fetch_row($result))
                        {
                            $line=$line+1;
                           echo"<tr>";
                          echo"<td> $row[0] </td>";
                          echo"<td>";
                           echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                          echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                          echo "</td>";
                          echo"</tr>";
                        }
                        echo "</table>";
                        echo "</form>";
                   }
                    if($coluna=="49"){
                        $result= pg_query($dbconn, "SELECT aeroporto_partida FROM trafego_aereo.instancia_trecho WHERE numero_assentos_disponiveis=$pesquisa OR data='$pesquisa' OR trecho_numero=$pesquisa OR hora_partida='$pesquisa' OR hora_chegada='$pesquisa' OR cod_aeronave=$pesquisa OR aeroporto_partida=$pesquisa OR aeroporto_chegada=$pesquisa;");
                        if(!$result)
                        {
                            echo "Erro na Consulta.<br>";
                            exit;
                        }
                        echo"<H1> INSTANCIA DE TRECHO </H1> <br>";
                         echo"<form action='processarphp.php' method='POST' id='form'>";
                        echo"<table class='table table-bordered table-striped table-condensed table-hover '>";
                          echo"<tr>";
                          echo"<td> Aeroporto de Partida </td>";
                          echo"<td> <center><img src='img/config.png' width='30' height='30'></center> </td>";
                          echo"</tr>";
                           $line=0;
                        while($row= pg_fetch_row($result))
                        {
                            $line=$line+1;
                           echo"<tr>";
                          echo"<td> $row[0] </td>";
                          echo"<td>";
                           echo"<center><button type='submit' name='acao' value='editar/$line/$coluna' class='btn btn-sucess'><span class='glyphicon glyphicon-pencil'></span></button>   ";
                          echo"    <button type='submit' name='acao' value='excluir/$line/$coluna' class='btn btn-sucess'><i class='glyphicon glyphicon-remove'></i></button></center>";
                          echo "</td>";
                          echo"</tr>";
                        }
                        echo "</table>";
                        echo "</form>";
                   }
                  }
                   break;
               }
       }}
           ?>            
        </center>     
    </section>
</body>

</html>
