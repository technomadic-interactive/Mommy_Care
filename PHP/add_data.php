<?php
   	include "../../../connect_e_health.php";
   	
   	$link=db_Connection();
    $fecha=date("l d-m-Y h:i:s a");
	  $temperatura=$_POST["temperatura"];
    $pulso=$_POST["pulso"];
    $contracciones=$_POST["contracciones"];
    $frecuencia_respiratoria=$_POST["frecuencia_respiratoria"];
    $glucosa=$_POST["glucosa"];
    $frecuencia_fetal=$_POST["frecuencia_fetal"];
	  $rand=mt_rand(1, 3);
    echo $rand;
    $json_string = file_get_contents('data.json')
    $datos=json_decode($json_string, true);
    //$send_data -> fecha = $fecha;
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
      $datos[0]['fecha']=$fecha;
      $datos[0]['temperatura']=$temperatura;
      //$send_data -> temperatura = $temperatura;
    }
    elseif ($pulso){
      echo "pulso \n";
      //$send_data -> pulso = $pulso;
    }
    elseif ($glucosa){
      echo "glucosa\n";
      //$send_data -> glucosa = $glucosa;
    }
    elseif ($frecuencia_respiratoria){
      echo "frecuencia respiartoria\n";
      //$send_data -> frecuencia_respiratoria = $frecuencia_respiratoria;
    }
    elseif ($contracciones){
      echo "contracciones\n";
      //$send_data -> contracciones = $contracciones;
    }
    elseif ($frecuencia_fetal){
      echo "frecuencia fetal\n";
      //$send_data -> frecuencia_fetal = $frecuencia_fetal;
    }
    elseif (!$temperatura || !$pulso || !$glucosa || !$frecuencia_respiratoria || !$frecuencia_fetal || !$contracciones){
      echo "presion \n";
      //$send_data -> presion_distolica = $presion_dis;
      //$send_data -> presion_sistolica = $presion_sis;
    }
    
    
	  $peticion="INSERT INTO pacientes VALUES (NULL, NULL, $temperatura, $presion_sis, $presion_dis, $pulso, $contracciones, $frecuencia_respiratoria, $glucosa, $frecuencia_fetal)";

    $link->query($peticion);

   	$link->close();

    //$myJSON = json_encode($send_data);
    $myJSON = json_encode($datos);
    $archivo = fopen("data.json", "w");
    fwrite($archivo, "[");
    fwrite($archivo, $myJSON);
    fwrite($archivo, "]");
    fclose($archivo);

   	header("Location: paciente.php");
?>


