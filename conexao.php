<?php
$dbconn = pg_connect("host=localhost port=5432 dbname=trafegoaereo 
                      user=postgres password=27dejaneiro123")
          or die('N�o foi poss�vel conectar: ' . pg_last_error());
if($dbconn)
    //echo "banco conectado!";
?>