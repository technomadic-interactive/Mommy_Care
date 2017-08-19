<?php
   	include "../../../connect_e_health.php";
   	
   	$link=db_Connection();
    $peticion2="Select ID from paciente where ID=1";

    $result=$link->query($peticion2);
    while($row = $result->cubrid_fetch_assoc()){
      echo $row["ID"];
    }
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
?>