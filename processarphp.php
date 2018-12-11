 <?php
include("conexao.php");
     if(isset($_POST['acao']))
     {
        $x=0;
        $msg=$_POST['acao'];
        list($comando, $linha,$coluna) = explode("/", $msg);
        if($comando==='editar')
        {
            if($coluna=="11" || $coluna=="12" || $coluna=="13" || $coluna=="14" || $coluna=="15")//tarifa
            {
                $a;$b;$c;$d;
                $result= pg_query($dbconn, "SELECT * FROM trafego_aereo.tarifa");
                if(!$result)
                {
                    echo "Erro na Consulta.<br>";
                    exit;
                }
                while ($row = pg_fetch_row($result))
                {
                    $x++;
                    if($x==$linha){
                       $a=$row[0]; $b= $row[1];   $c=$row[2];   $d=$row[3]; break;}
                }
                echo"$a $b $c $d";
                exit("<script>location.href = 'editar.php?action=1/$a/$b/$c/$d'</script>");
                
            }
            else if($coluna=="21" || $coluna=="22" || $coluna=="23" || $coluna=="24")//voo
            {
                $a;$b;$c;
                $result= pg_query($dbconn, "SELECT * FROM trafego_aereo.voo");
                if(!$result)
                {
                    echo "Erro na Consulta.<br>";
                    exit;
                }
                while ($row = pg_fetch_row($result))
                {
                    $x++;
                    if($x==$linha){
                       $a=$row[0]; $b= $row[1];   $c=$row[2]; break;}
                }
                echo"$a $b $c ";
                exit("<script>location.href = 'editar.php?action=2/$a/$b/$c'</script>");
                
            }
            else if($coluna=="31" || $coluna=="32" || $coluna=="33" || $coluna=="34" || $coluna=="35" || $coluna=="36" || $coluna=="37")//trecho_voo
            {
                $a;$b;$c;$d;$e;$f;
                $result= pg_query($dbconn, "SELECT * FROM trafego_aereo.trecho_voo");
                if(!$result)
                {
                    echo "Erro na Consulta.<br>";
                    exit;
                }
                while ($row = pg_fetch_row($result))
                {
                    $x++;
                    if($x==$linha){
                       $a=$row[0];$b= $row[1];$c=$row[2];$d=$row[3];$e=$row[4];$f=$row[5]; break;}
                }
               exit("<script>location.href = 'editar.php?action=3/$a/$b/$c/$d/$e/$f'</script>");
            }
            else if($coluna=="41" || $coluna=="42" || $coluna=="43" || $coluna=="44" || $coluna=="45" || $coluna=="46" || $coluna=="47" || $coluna=="48" || $coluna=="49")//instancia_trecho
            {
                $a;$b;$c;$d;$e;$f;$g;$h;
                $result= pg_query($dbconn, "SELECT * FROM trafego_aereo.instancia_trecho");
                if(!$result)
                {
                    echo "Erro na Consulta.<br>";
                    exit;
                }
                while ($row = pg_fetch_row($result))
                {
                    $x++;
                    if($x==$linha){
                       $a=$row[0];$b= $row[1];$c=$row[2];$d=$row[3];$e=$row[4];$f=$row[5];$g=$row[6];$h=$row[7]; break;}
                }
               exit("<script>location.href = 'editar.php?action=4/$a/$b/$c/$d/$e/$f/$g/$h'</script>");
            }
        }
        else if($comando=='excluir')
        {
            if($coluna=="11")//tarifa
            {
                $a;$b;$c;$d;
                $result= pg_query($dbconn, "SELECT * FROM trafego_aereo.tarifa");
                if(!$result)
                {
                    echo "Erro na Consulta.<br>";
                    exit;
                }
                while ($row = pg_fetch_row($result))
                {
                    $x++;
                    if($x==$linha){
                       $a=$row[0]; $b= $row[1];   $c=$row[2];   $d=$row[3]; break;}
                }
               $result= pg_query($dbconn, "DELETE FROM trafego_aereo.tarifa WHERE restricoes='$a' AND quantidade=$b AND codigo_tarifa=$c AND numero=$d;");
                        if(!$result)
                        {
                            echo "Erro na Consulta.<br>";
                            exit;
                        }
                        else{
                             echo "<script>alert('Deletado com sucesso!');</script>";
                            exit('<script>location.href = "paineldecontrole.php"</script>');
                        }
                
                
            }
            else if($coluna=="21")//voo
            {
                $a;$b;$c;
                $result= pg_query($dbconn, "SELECT * FROM trafego_aereo.voo");
                if(!$result)
                {
                    echo "Erro na Consulta.<br>";
                    exit;
                }
                while ($row = pg_fetch_row($result))
                {
                    $x++;
                    if($x==$linha){
                       $a=$row[0]; $b= $row[1];   $c=$row[2];   break;}
                }
               $result= pg_query($dbconn, "DELETE FROM trafego_aereo.voo WHERE numero=$a AND companhia_aerea='$b' AND dias_da_semana='$c';");
                        if(!$result)
                        {
                            echo "Erro na Consulta.<br>";
                            exit;
                        }
                        else{
                             echo "<script>alert('Deletado com sucesso!');</script>";
                            exit('<script>location.href = "paineldecontrole.php"</script>');
                        }               
            }
            else if($coluna=="31")//trecho_voo
            {
                $a;$b;$c;$d;$e;$f;
                $result= pg_query($dbconn, "SELECT * FROM trafego_aereo.trecho_voo");
                if(!$result)
                {
                    echo "Erro na Consulta.<br>";
                    exit;
                }
                while ($row = pg_fetch_row($result))
                {
                    $x++;
                    if($x==$linha){
                       $a=$row[0]; $b= $row[1];   $c=$row[2];   $d=$row[3]; $e=$row[4]; $f=$row[5];   break;}
                }
               $result= pg_query($dbconn, "DELETE FROM trafego_aereo.trecho_voo WHERE trecho_num=$a AND \"codigo_aeroportoP\"=$b AND \"codigo_aeroportoC\"=$c AND horario_chegada_previsto='$d' AND horario_partida_previsto='$e' AND codigo_voo=$f;");
                        if(!$result)
                        {
                            echo "Erro na Consulta.<br>";
                            exit;
                        }
                        else{
                             echo "<script>alert('Deletado com sucesso!');</script>";
                            exit('<script>location.href = "paineldecontrole.php"</script>');
                        }               
            }
            else if($coluna=="41")//trecho_voo
            {
                $a;$b;$c;$d;$e;$f;
                $result= pg_query($dbconn, "SELECT * FROM trafego_aereo.instancia_trecho");
                if(!$result)
                {
                    echo "Erro na Consulta.<br>";
                    exit;
                }
                while ($row = pg_fetch_row($result))
                {
                    $x++;
                    if($x==$linha){
                       $a=$row[0]; $b= $row[1];   $c=$row[2];   $d=$row[3]; $e=$row[4]; $f=$row[5]; $g=$row[6]; $h=$row[7];  break;}
                }
               $result= pg_query($dbconn, "DELETE FROM trafego_aereo.instancia_trecho WHERE numero_assentos_disponiveis=$a AND data='$b' AND trecho_numero=$c AND hora_partida='$d' AND hora_chegada='$e' AND cod_aeronave=$f AND aeroporto_partida=$g AND aeroporto_chegada=$h;");
                        if(!$result)
                        {
                            echo "Erro na Consulta.<br>";
                            exit;
                        }
                        else{
                             echo "<script>alert('Deletado com sucesso!');</script>";
                            exit('<script>location.href = "paineldecontrole.php"</script>');
                        }               
            }
        }
    }
     if(isset($_POST['alterar']))
     { 
        list($resposta,$id) = explode("/", $_POST['alterar']);
        if($resposta==1)//tarifa
        {
            $dado1=$_POST['restricoes']; 
            $dado2=$_POST['quantidade'];
            $dado3=$_POST['codigo_tarifa'];
            $dado4=$_POST['numero'];
            $result= pg_query($dbconn, "UPDATE trafego_aereo.tarifa	SET restricoes='$dado1', quantidade=$dado2, codigo_tarifa=$dado3, numero=$dado4	WHERE codigo_tarifa=$id;");
                    if(!$result)
                    {
                        echo "<script>alert('Erro na alteração, tente novamente!');</script>";
                        exit("<script>location.href = 'paineldecontrole.php'</script>");
                    }
                    else{
                         echo "<script>alert('Alterado com sucesso!');</script>";
                        exit('<script>location.href = "paineldecontrole.php"</script>');
                    }
        } 
        else if($resposta==2)//voo
        {
            $dado1=$_POST['numero_voo']; 
            $dado2=$_POST['companhia_aerea'];
            $dado3=$_POST['dias_da_semana'];
            $result= pg_query($dbconn, "UPDATE trafego_aereo.voo	SET numero=$dado1, companhia_aerea='$dado2', dias_da_semana='$dado3'	WHERE numero=$id;");
                    if(!$result)
                    {
                        echo "<script>alert('Erro na alteração, tente novamente!');</script>";
                        //exit("<script>location.href = 'paineldecontrole.php'</script>");
                    }
                    else{
                         echo "<script>alert('Alterado com sucesso!');</script>";
                        exit('<script>location.href = "paineldecontrole.php"</script>');
                    }
        } 
        else if($resposta==3)//trecho_voo
        {
            $dado1=$_POST['numero_trecho']; 
            $dado2=$_POST['aeroportop'];
            $dado3=$_POST['aeroportoc'];
            $dado4=$_POST['datac'];
            $dado5=$_POST['datap'];
            $dado6=$_POST['codigo_voo']; 
            $result= pg_query($dbconn, "UPDATE trafego_aereo.trecho_voo	SET trecho_num=$dado1, \"codigo_aeroportoP\"=$dado2, \"codigo_aeroportoC\"=$dado3, horario_chegada_previsto='$dado4', horario_partida_previsto='$dado5', codigo_voo=$dado6 WHERE trecho_num=1234;");
                    if(!$result)
                    {
                        echo "<script>alert('Erro na alteração, tente novamente!');</script>";
                        exit("<script>location.href = 'paineldecontrole.php'</script>");
                    }
                    else{
                         echo "<script>alert('Alterado com sucesso!');</script>";
                        exit('<script>location.href = "paineldecontrole.php"</script>');
                    }
        }
        else if($resposta==4)//instancia_trecho
        {
            list($id,$tn) = explode("+",$id);
            $dado1=$_POST['assentos_disponiveis']; 
            $dado2=$_POST['data'];
            $dado3=$_POST['numero_trecho']; 
            $dado4=$_POST['horap'];
            $dado5=$_POST['horac'];
            $dado6=$_POST['codigo_aeronave'];
            $dado7=$_POST['aeroportoc'];
            $dado8=$_POST['aeroportop'];
            $result= pg_query($dbconn, "UPDATE trafego_aereo.instancia_trecho SET numero_assentos_disponiveis=$dado1, data='$dado2', trecho_numero=$dado3, hora_partida='$dado4', hora_chegada='$dado5', cod_aeronave=$dado6, aeroporto_partida=$dado7, aeroporto_chegada=$dado8	WHERE trecho_numero=$tn and data='$id';");
                    if(!$result)
                    {
                        echo "<script>alert('Erro na alteração, tente novamente!');</script>";
                        //exit("<script>location.href = 'paineldecontrole.php'</script>");
                    }
                    else{
                         echo "<script>alert('Alterado com sucesso!');</script>";
                        exit('<script>location.href = "paineldecontrole.php"</script>');
                    }
        }
     }
        if(isset($_POST['salvar']))
        {
            $resposta=$_POST['salvar'];
            if($resposta==1)//tarifa
            {
                $dado1=$_POST['restricoes']; 
                $dado2=$_POST['quantidade'];
                $dado3=$_POST['codigo_tarifa'];
                $dado4=$_POST['numero'];
                $result= pg_query($dbconn, "INSERT INTO trafego_aereo.tarifa(restricoes, quantidade, codigo_tarifa, numero) VALUES ('$dado1', $dado2, $dado3, $dado4);");
                        if(!$result)
                        {
                            echo "<script>alert('Erro na inserção, Tente novamente!');</script>";
                            exit('<script>location.href = "paineldecontrole.php"</script>');
                        }
                        else{
                             echo "<script>alert('Inserido com sucesso!');</script>";
                            exit('<script>location.href = "paineldecontrole.php"</script>');
                        }
        }
            else if($resposta==2)//voo
            {
                $dado1=$_POST['numero']; 
                $dado2=$_POST['companhia_aerea'];
                $dado3=$_POST['dias_da_Semana'];
                $result= pg_query($dbconn, "INSERT INTO trafego_aereo.voo(numero, companhia_aerea, dias_da_semana) VALUES ($dado1, '$dado2', '$dado3');");
                        if(!$result)
                        {
                            echo "<script>alert('Erro na inserção, Tente novamente!');</script>";
                            //exit('<script>location.href = "paineldecontrole.php"</script>');
                        }
                        else{
                             echo "<script>alert('Inserido com sucesso!');</script>";
                            exit('<script>location.href = "paineldecontrole.php"</script>');
                        }
            }
            else if($resposta==3)//trecho_voo
            {
                $dado1=$_POST['trecho_numero']; 
                $dado2=$_POST['codigo_aeroportoP'];
                $dado3=$_POST['codigo_aeroportoC'];
                $dado4=$_POST['horario_chegada_previsto'];
                $dado5=$_POST['horario_partida_previsto'];
                $dado6=$_POST['codigo_voo'];
                $result= pg_query($dbconn, "INSERT INTO trafego_aereo.trecho_voo(trecho_num, \"codigo_aeroportoP\", \"codigo_aeroportoC\", horario_chegada_previsto, horario_partida_previsto, codigo_voo) VALUES ($dado1, $dado2, $dado3, '$dado4', '$dado5', $dado6);");
                        if(!$result)
                        {
                            echo "<script>alert('Erro na inserção, Tente novamente!');</script>";
                            //exit('<script>location.href = "paineldecontrole.php"</script>');
                        }
                        else{
                             echo "<script>alert('Inserido com sucesso!');</script>";
                            exit('<script>location.href = "paineldecontrole.php"</script>');
                        }
            }
            else if($resposta==4)//instancia_trecho
            {
                $dado1=$_POST['assentos_disponiveis']; 
                $dado2=$_POST['data'];
                $dado3=$_POST['trecho_numero'];
                $dado4=$_POST['hora_partida'];
                $dado5=$_POST['hora_chegada'];
                $dado6=$_POST['codigo_aeronave'];
                $dado7=$_POST['aeroporto_chegada'];
                $dado8=$_POST['aeroporto_partida'];
                $result= pg_query($dbconn, "INSERT INTO trafego_aereo.instancia_trecho(numero_assentos_disponiveis, data, trecho_numero, hora_partida, hora_chegada, cod_aeronave, aeroporto_partida, aeroporto_chegada) VALUES ($dado1, '$dado2', $dado3, '$dado4', '$dado5', $dado6,$dado7,$dado8);");
                        if(!$result)
                        {
                            echo "<script>alert('Erro na inserção, Tente novamente!');</script>";
                            //exit('<script>location.href = "paineldecontrole.php"</script>');
                        }
                        else{
                             echo "<script>alert('Inserido com sucesso!');</script>";
                            exit('<script>location.href = "paineldecontrole.php"</script>');
                        }
            }
     }
            
    ?>
