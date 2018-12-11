<?php include("conexao.php");?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
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
   <!-- LOGIN -->
    <section id="login_admin" class="bg-light-gray">
        <center>
            <h1>COMPFLY</h1><br>
            <h4>login</h4>
            <p></p><p></p>
        <form action="admin.php" class="form-horizontal" method="POST">
            <fieldset>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="senha"></label>
                    <div class="col-md-4">
                        <input id="nome" name="nome" type="text" placeholder="Nome" class="form-control input-md">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="senha"></label>
                    <div class="col-md-4">
                        <input id="senha" name="senha" type="password" placeholder="Senha" class="form-control input-md">
                    </div>
                </div>
                
                    <div class="portfolio-hover"></div>
                    <p></p>
                    <button type="submit" name="entrar" class="btn btn-xl">Entrar</button>
               
            </fieldset>
        </form>
        <?php
        if(isset($_POST['entrar']))
       {
           $login=$_POST['nome'];
           $senha=$_POST['senha'];
           if($login=='admin' && $senha=='2015.2')
           {
               header('location:paineldecontrole.php');
           }
           else
           {
              echo "<script>alert('Acesso Negado!');</script>";
              redirect('admin.php');
           }
       }
           ?>
        </center>
    </section>

     <!-- RODAPÉ -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4"><p></p>
                    <span class="copyright">CompFly 2017 <i class="fa fa-university" aria-hidden="true"></i> UFT</span>
                    
                </div>
                <div class="col-md-4">
                    
                </div>
            </div>
        </div>
    </footer>

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

</body>

</html>
