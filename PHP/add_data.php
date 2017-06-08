<?php
   	include "../../../connect_e_health.php";
   	
   	$link=db_Connection();

	  $temperatura=$_POST["temperatura"];
	  $presion_dis=$_POST["presion_dis"];
	  $presion_sis=$_POST["presion_sis"];
	  $pulso=$_POST["pulso"];
	  $peticion="INSERT INTO paciente VALUES (NULL, NULL, $temperatura, $presion_sis, $presion_dis, $pulso)";

    $link->query($peticion);

   	$link->close();

    $send_data -> temperatura = $temperatura;
    $send_data -> presion_distolica = $presion_dis;
    $send_data -> presion_sistolica = $presion_sis;
    $send_data -> pulso = $pulso;

    $myJSON = json_encode($send_data);

    $archivo = fopen("data.json", "w");
    fwrite($archivo, "[");
    fwrite($archivo, $myJSON);
    fwrite($archivo, "]");
    fclose($archivo);

   	header("Location: paciente.php");
?>


