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
    $dat=file_get_contents('data.json');
    //var_dump($dat);
    $decod=json_decode($dat, true);
    //var_dump($decod);
    $temperatura_json=$decod[0]['temperatura'];
    $pulso_json=$decod[0]['pulso'];
    $presion_dis_json=$decod[0]['presion_distolica'];
    $presion_sis_json=$decod[0]['presion_sistolica'];
    $contracciones_json=$decod[0]['contracciones'];
    $frecuencia_respiratoria_json=$decod[0]['frecuencia_respiratoria'];
    $glucosa_json=$decod[0]['glucosa'];
    $frecuencia_fetal_json=$decod[0]['frecuencia_fetal'];
    echo $temperatura_json;
    echo "\n";
    echo $pulso_json;
    echo "\n";
    echo $presion_dis_json;
    echo "\n";
    echo $presion_sis_json;
    echo "\n";
    echo $contracciones_json;
    echo "\n";
    echo $frecuencia_respiratoria_json;
    echo "\n";
    echo $glucosa_json;
    echo "\n";
    echo $frecuencia_fetal_json;
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "\n";
    echo "hola";
    echo $frecuencia_respiratoria;
    
    switch ($rand){
      case 1:
        $presion_sis=115;
        $presion_dis=75;

        $fecha=date("l d-m-Y h:i:s a");
        $send_data -> fecha = $fecha;
        $send_data -> temperatura = $temperatura_json;
        $send_data -> presion_distolica = $presion_dis;
        $send_data -> presion_sistolica = $presion_sis;
        $send_data -> pulso = $pulso_json;
        $send_data -> contracciones = $contracciones_json;
        $send_data -> frecuencia_respiratoria = $frecuencia_respiratoria_json;
        $send_data -> glucosa = $glucosa_json;
        $send_data -> frecuencia_fetal = $frecuencia_fetal_json;

        // $jsonString = file_get_contents('data.json');
        // $send_data = json_decode($jsonString, true);

        // $send_data[0]['temperatura'] = $temperatura;

        $myJSON = json_encode($send_data);

        $archivo = fopen("data.json", "w");
        fwrite($archivo, "[");
        fwrite($archivo, $myJSON);
        fwrite($archivo, "]");
        fclose($archivo);

        break;
      case 2:
        $presion_sis=110;
        $presion_dis=60;

        $fecha=date("l d-m-Y h:i:s a");
        $send_data -> fecha = $fecha;
        $send_data -> temperatura = $temperatura_json;
        $send_data -> presion_distolica = $presion_dis;
        $send_data -> presion_sistolica = $presion_sis;
        $send_data -> pulso = $pulso_json;
        $send_data -> contracciones = $contracciones_json;
        $send_data -> frecuencia_respiratoria = $frecuencia_respiratoria_json;
        $send_data -> glucosa = $glucosa_json;
        $send_data -> frecuencia_fetal = $frecuencia_fetal_json;

        // $jsonString = file_get_contents('data.json');
        // $send_data = json_decode($jsonString, true);

        // $send_data[0]['temperatura'] = $temperatura;

        $myJSON = json_encode($send_data);

        $archivo = fopen("data.json", "w");
        fwrite($archivo, "[");
        fwrite($archivo, $myJSON);
        fwrite($archivo, "]");
        fclose($archivo);

        break;
      case 3:
        $presion_sis=120;
        $presion_dis=80;

        $fecha=date("l d-m-Y h:i:s a");
        $send_data -> fecha = $fecha;
        $send_data -> temperatura = $temperatura_json;
        $send_data -> presion_distolica = $presion_dis;
        $send_data -> presion_sistolica = $presion_sis;
        $send_data -> pulso = $pulso_json;
        $send_data -> contracciones = $contracciones_json;
        $send_data -> frecuencia_respiratoria = $frecuencia_respiratoria_json;
        $send_data -> glucosa = $glucosa_json;
        $send_data -> frecuencia_fetal = $frecuencia_fetal_json;

        // $jsonString = file_get_contents('data.json');
        // $send_data = json_decode($jsonString, true);

        // $send_data[0]['temperatura'] = $temperatura;

        $myJSON = json_encode($send_data);

        $archivo = fopen("data.json", "w");
        fwrite($archivo, "[");
        fwrite($archivo, $myJSON);
        fwrite($archivo, "]");
        fclose($archivo);

        break;
    }	  
    if ($temperatura){
      echo "temperatura \n";
      $fecha=date("l d-m-Y h:i:s a");
      $send_data -> fecha = $fecha;
      $send_data -> temperatura = $temperatura;
      $send_data -> presion_distolica = $presion_dis_json;
      $send_data -> presion_sistolica = $presion_sis_json;
      $send_data -> pulso = $pulso_json;
      $send_data -> contracciones = $contracciones_json;
      $send_data -> frecuencia_respiratoria = $frecuencia_respiratoria_json;
      $send_data -> glucosa = $glucosa_json;
      $send_data -> frecuencia_fetal = $frecuencia_fetal_json;

      // $jsonString = file_get_contents('data.json');
      // $send_data = json_decode($jsonString, true);

      // $send_data[0]['temperatura'] = $temperatura;

      $myJSON = json_encode($send_data);

      $archivo = fopen("data.json", "w");
      fwrite($archivo, "[");
      fwrite($archivo, $myJSON);
      fwrite($archivo, "]");
      fclose($archivo);

    }
    elseif ($pulso){
      echo "pulso \n";
      $fecha=date("l d-m-Y h:i:s a");
      $send_data -> fecha = $fecha;
      $send_data -> temperatura = $temperatura_json;
      $send_data -> presion_distolica = $presion_dis_json;
      $send_data -> presion_sistolica = $presion_sis_json;
      $send_data -> pulso = $pulso;
      $send_data -> contracciones = $contracciones_json;
      $send_data -> frecuencia_respiratoria = $frecuencia_respiratoria;
      $send_data -> glucosa = $glucosa_json;
      $send_data -> frecuencia_fetal = $frecuencia_fetal_json;

      // $jsonString = file_get_contents('data.json');
      // $send_data = json_decode($jsonString, true);

      // $send_data[0]['temperatura'] = $temperatura;

      $myJSON = json_encode($send_data);

      $archivo = fopen("data.json", "w");
      fwrite($archivo, "[");
      fwrite($archivo, $myJSON);
      fwrite($archivo, "]");
      fclose($archivo);
      
    }
    elseif ($glucosa){
      echo "glucosa\n";
      $fecha=date("l d-m-Y h:i:s a");
      $glucosa=mt_rand(70, 110);
      $send_data -> fecha = $fecha;
      $send_data -> temperatura = $temperatura_json;
      $send_data -> presion_distolica = $presion_dis_json;
      $send_data -> presion_sistolica = $presion_sis_json;
      $send_data -> pulso = $pulso_json;
      $send_data -> contracciones = $contracciones_json;
      $send_data -> frecuencia_respiratoria = $frecuencia_respiratoria_json;
      $send_data -> glucosa = $glucosa;
      $send_data -> frecuencia_fetal = $frecuencia_fetal_json;

      // $jsonString = file_get_contents('data.json');
      // $send_data = json_decode($jsonString, true);

      // $send_data[0]['temperatura'] = $temperatura;

      $myJSON = json_encode($send_data);

      $archivo = fopen("data.json", "w");
      fwrite($archivo, "[");
      fwrite($archivo, $myJSON);
      fwrite($archivo, "]");
      fclose($archivo);
      
    }
    // elseif ($frecuencia_respiratoria){
    //   echo "frecuencia respiartoria\n";
    //   $fecha=date("l d-m-Y h:i:s a");
    //   //$frecuencia_respiratoria=mt_rand(16, 25);
    //   $send_data -> fecha = $fecha;
    //   $send_data -> temperatura = $temperatura_json;
    //   $send_data -> presion_distolica = $presion_dis_json;
    //   $send_data -> presion_sistolica = $presion_sis_json;
    //   $send_data -> pulso = $pulso;
    //   $send_data -> contracciones = $contracciones_json;
    //   $send_data -> frecuencia_respiratoria = $frecuencia_respiratoria;
    //   $send_data -> glucosa = $glucosa_json;
    //   $send_data -> frecuencia_fetal = $frecuencia_fetal_json;

    //   // $jsonString = file_get_contents('data.json');
    //   // $send_data = json_decode($jsonString, true);

    //   // $send_data[0]['temperatura'] = $temperatura;

    //   $myJSON = json_encode($send_data);

    //   $archivo = fopen("data.json", "w");
    //   fwrite($archivo, "[");
    //   fwrite($archivo, $myJSON);
    //   fwrite($archivo, "]");
    //   fclose($archivo);
      
    // }
    elseif ($contracciones){
      echo "contracciones\n";
      $fecha=date("l d-m-Y h:i:s a");
      $contracciones=mt_rand(1, 3);
      $send_data -> fecha = $fecha;
      $send_data -> temperatura = $temperatura_json;
      $send_data -> presion_distolica = $presion_dis_json;
      $send_data -> presion_sistolica = $presion_sis_json;
      $send_data -> pulso = $pulso_json;
      $send_data -> contracciones = $contracciones;
      $send_data -> frecuencia_respiratoria = $frecuencia_respiratoria_json;
      $send_data -> glucosa = $glucosa_json;
      $send_data -> frecuencia_fetal = $frecuencia_fetal_json;

      // $jsonString = file_get_contents('data.json');
      // $send_data = json_decode($jsonString, true);

      // $send_data[0]['temperatura'] = $temperatura;

      $myJSON = json_encode($send_data);

      $archivo = fopen("data.json", "w");
      fwrite($archivo, "[");
      fwrite($archivo, $myJSON);
      fwrite($archivo, "]");
      fclose($archivo);
      
    }
    elseif ($frecuencia_fetal){
      echo "frecuencia fetal\n";
      $fecha=date("l d-m-Y h:i:s a");
      $frecuencia_fetal=mt_rand(110, 170);
      $send_data -> fecha = $fecha;
      $send_data -> temperatura = $temperatura_json;
      $send_data -> presion_distolica = $presion_dis_json;
      $send_data -> presion_sistolica = $presion_sis_json;
      $send_data -> pulso = $pulso_json;
      $send_data -> contracciones = $contracciones_json;
      $send_data -> frecuencia_respiratoria = $frecuencia_respiratoria_json;
      $send_data -> glucosa = $glucosa_json;
      $send_data -> frecuencia_fetal = $frecuencia_fetal;

      // $jsonString = file_get_contents('data.json');
      // $send_data = json_decode($jsonString, true);

      // $send_data[0]['temperatura'] = $temperatura;

      $myJSON = json_encode($send_data);

      $archivo = fopen("data.json", "w");
      fwrite($archivo, "[");
      fwrite($archivo, $myJSON);
      fwrite($archivo, "]");
      fclose($archivo);
      
    }
    elseif (!$temperatura || !$pulso || !$glucosa || !$frecuencia_respiratoria || !$frecuencia_fetal || !$contracciones){
      echo "presion \n";
      
    }
    
    
	  $peticion="INSERT INTO pacientes VALUES (NULL, NULL, $temperatura, $presion_sis, $presion_dis, $pulso, $contracciones, $frecuencia_respiratoria, $glucosa, $frecuencia_fetal)";

    $link->query($peticion);


   	$link->close();

    

   	header("Location: paciente.php");
?>


