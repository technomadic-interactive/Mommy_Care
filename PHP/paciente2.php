<?php
include "../../../connect_e_health.php";
	
	$link= db_Connection();
	$result= $link->query("SELECT * FROM paciente ORDER BY `ID` DESC LIMIT 1");
?>

<html>
   <head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Info Paciente</title>
      <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
   </head>
<body>
   <div class="container">
	    <img src="../images/ECG-heart.png" style="width:170px;height:130px">
	    </br></br>
   
   <h1>Datos del Paciente</h1>
   <table class="table table-striped">
		<tr>
			<td>&nbsp;Número&nbsp;</td>
			<td>&nbsp;Fecha&nbsp;</td>
			<td>&nbsp;Temperatura&nbsp;</td>
			<td>&nbsp;Presión Sistólica&nbsp;</td>
			<td>&nbsp;Presión Distólica&nbsp;</td>
			<td>&nbsp;Pulso&nbsp;</td>
		</tr>

      <?php 
		  if($result!==FALSE){
		     while($row = $result->fetch_assoc()) {
		        printf("<tr><td> &nbsp;%s&nbsp; </td><td> &nbsp;%s&nbsp; </td><td> &nbsp;%s&nbsp; </td><td> &nbsp;%s&nbsp; </td><td> &nbsp;%s&nbsp; </td></tr>", 
		           $row["ID"], $row["Fecha"], $row["Presion_sis"], $row["Presion_dis"], $row["Pulso"]);
		     }
		     $link->close();

		  }
      ?>
   
   </table>
  </div>
</body>
</html>

