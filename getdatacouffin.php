<?php

$dbconn = pg_connect("host=localhost port=5432 dbname=dbcouffin password=postgres");
if (!$dbconn){
  echo "Erreur de connection\n";
  exit;
};
$query= "SELECT * FROM couffin "
$result= pg_query($dbconn,$query)
if(!result){
  echo "Erreur de requete";
  exit;
};
$array=pg_fetch_all($result);
$ajax=json_encode($result)
echo $ajax




?>
