<?php
   	include "../../../connect_e_health.php";
   	
   	$link=db_Connection();

	  $temperatura=$_POST["temperatura"];
	  $presion_dis=mt_rand(68, 88);
	  $presion_sis=mt_rand(100, 120);
	  $pulso=$_POST["pulso"];
      $fecha=date("l d-m-Y h:i:s a");
	  $peticion="INSERT INTO paciente VALUES (NULL, NULL, $temperatura, $presion_sis, $presion_dis, $pulso)";

    $link->query($peticion);

   	$link->close();
    $send_data -> fecha = $fecha;
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


