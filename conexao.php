<?php
$dbconn = pg_connect("host=localhost port=5432 dbname=trafegoaereo 
                      user=postgres password=27dejaneiro123")
          or die('Não foi possível conectar: ' . pg_last_error());
if($dbconn)
    //echo "banco conectado!";
?>