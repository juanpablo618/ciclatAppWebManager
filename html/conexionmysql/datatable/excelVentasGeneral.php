<?php

header('Content-type: application/vnd.ms-excel;charset=iso-8859-15');
header('Content-Disposition: attachment; filename=ventasGenerales_Ciclat.xls');

?>
<html>

	<body>
			
              <table border="1" cellpadding="2" id="dataTable" cellspacing="0" width="100%">
    <caption>Tabla de Ventas</caption>
              <thead>
                    <tr>
                      
                      <th>ID</th>
                      <th><center>IMEI</center></th>
                      <th>Marca</th>
                      <th>Modelo</th>
                      <th>Fecha</th>
                      <th>Estado</th>
                      <th>Revisor</th>
                      <th>GB</th>
                      <th>Color</th>
                      <th>Estetica</th>
                      <th>Carcasa</th>
                      <th>CamaraTrasera</th>
                      <th>CamaraDelantera</th>
                      <th>PinCarga</th>
                      <th>Auriculares</th>
                      <th>ParlanteFrontal</th>
                      <th>SensorProx</th>
                      <th>Bateria</th>
                      <th>BateriaPorcentaje</th>
                      <th>Wifi</th>
                      <th>Bluetooth</th>
                      <th>Vidrio</th>
                      <th>Modulo</th>
                      <th>Traslucido</th>
                      <th width="60px">Otros</th>
                      <th>Lugar</th>
                      <th>Liberar</th>
                      <th>PortaSim</th>
                      <th>Microfono</th>
                      <th>Botones</th>
                      <th>Tactil</th>
                      <th>version</th>
                      
                    </tr>
                  </thead>
    <tbody>
                   <?php
                        $conexion = new mysqli("localhost","root","administrador","ultimavers_db");
                        
                        $query="SELECT * FROM VENTAS";
                        $resultado=$conexion->query($query);
                        while($row=$resultado->fetch_assoc()){
                    ?>
                   <tr>
                   
                    <td><?php echo $row['ID'] ?></td>
                    <td><?php echo $row['IMEI'] ?></td>                    
                    <td><?php echo $row['Marca'] ?></td>                    
                    <td><?php echo $row['Modelo'] ?></td>
                    <td><?php echo $row['Fecha'] ?></td>
                    <td><?php echo $row['Estado'] ?></td>
                    <td><?php echo $row['Revisor'] ?></td>
                    <td><?php echo $row['GB'] ?></td>
                    <td><?php echo $row['Color'] ?></td>
                    <td><?php echo $row['Estetica'] ?></td>
                    <td><?php echo $row['Carcasa'] ?></td>
                    <td><?php echo $row['CamaraTrasera'] ?></td>
                    <td><?php echo $row['CamaraDelantera'] ?></td>
                    <td><?php echo $row['PinCarga'] ?></td>
                    <td><?php echo $row['Auriculares'] ?></td>   
                    <td><?php echo $row['ParlanteFrontal'] ?></td>
                    <td><?php echo $row['SensorProx'] ?></td>
                    <td><?php echo $row['Bateria'] ?></td>
                    <td><?php echo $row['BateriaPorcentaje'] ?></td>
                    <td><?php echo $row['Wifi'] ?></td>
                    <td><?php echo $row['Bluetooth'] ?></td>
                    <td><?php echo $row['Vidrio'] ?></td>
                    <td><?php echo $row['Modulo'] ?></td>
                    <td><?php echo $row['Traslucido'] ?></td>
                    <td><?php echo $row['Otros'] ?></td>
                    <td><?php echo $row['Lugar'] ?></td>
                    <td><?php echo $row['Liberar'] ?></td>
                    <td><?php echo $row['PortaSim'] ?></td>
                    <td><?php echo $row['Microfono'] ?></td>
                    <td><?php echo $row['Botones'] ?></td>
                    <td><?php echo $row['Tactil'] ?></td>
                    <td><?php echo $row['version'] ?></td>
                    
                    <?php
                      }
                   ?>
                   
                   
                   </tr>
                  
                   
                  
                  </tbody>
</table>
              
	</body>

</html>