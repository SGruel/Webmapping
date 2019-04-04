<?php
$dbconn = pg_connect("host=localhost port=5432 dbname=dbCouffin  user=postgres password=postgres");
if (!$dbconn){
  echo "Erreur de connection\n";
  exit;
};
$query= "SELECT * FROM couffin ORDER BY date";
if(!$result){
  echo "Erreur de requete";
  exit;
};
$array=pg_fetch_all($result);
$array=array('melclient' =>  $array[0], 'prenom' => $array[1], 'nom' => $array[2],
'melparent' => $array[3], 'lat' => $array[4],'lon' => $array[5],'tel' => $array[6],'pic'
=> $array[7],'agree' => $array[8],'date' => $array[9],'id' => $array[10]);
$ajax=json_encode($array);
echo $ajax
?>
