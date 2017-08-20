<?php
   	include "../../../connect_e_health.php";
   	
   	$link=db_Connection();

	  $temperatura=$_POST["temperatura"];
    $pulso=$_POST["pulso"];
    $contracciones=$_POST["contracciones"];
    $frecuencia_respiratoria=$_POST["frecuencia_respiratoria"];
    $glucosa=$_POST["glucosa"];
    $frecuencia_fetal=$_POST["frecuencia_fetal"];
	  $rand=mt_rand(1, 3);
    echo $rand;
    switch ($rand){
      case 1:
        $presion_sis=115;
        $presion_dis=75;
        break;
      case 2:
        $presion_sis=110;
        $presion_dis=60;
        break;
      case 3:
        $presion_sis=120;
        $presion_dis=80;
        break;
    }	  
    if ($temperatura){
      echo "temperatura \n";

    }
    if ($pulso){
      echo "pulso \n";
      
    }
    if ($glucosa){
      echo "glucosa\n";
      
    }
    if ($frecuencia_respiratoria){
      echo "frecuencia respiartoria\n";
      
    }
    if ($contracciones){
      echo "contracciones\n";
      
    }
    if ($frecuencia_fetal){
      echo "frecuencia fetal\n";
      
    }
    if (!$temperatura || !$pulso || !$glucosa || !$frecuencia_respiratoria || !$frecuencia_fetal || !$contracciones){
      echo "presion \n";
      
    }
    
    $fecha=date("l d-m-Y h:i:s a");
	  $peticion="INSERT INTO pacientes VALUES (NULL, NULL, $temperatura, $presion_sis, $presion_dis, $pulso, $contracciones, $frecuencia_respiratoria, $glucosa, $frecuencia_fetal)";

    $link->query($peticion);

   	$link->close();
    $send_data -> fecha = $fecha;
    $send_data -> temperatura = $temperatura;
    $send_data -> presion_distolica = $presion_dis;
    $send_data -> presion_sistolica = $presion_sis;
    $send_data -> pulso = $pulso;
    $send_data -> contracciones = $contracciones;
    $send_data -> frecuencia_respiratoria = $frecuencia_respiratoria;
    $send_data -> glucosa = $glucosa;
    $send_data -> frecuencia_fetal = $frecuencia_fetal;

    $myJSON = json_encode($send_data);

    $archivo = fopen("data.json", "w");
    fwrite($archivo, "[");
    fwrite($archivo, $myJSON);
    fwrite($archivo, "]");
    fclose($archivo);

   	header("Location: paciente.php");
?>


