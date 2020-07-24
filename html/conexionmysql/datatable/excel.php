<?php

header('Content-type: application/vnd.ms-excel;charset=iso-8859-15');
header('Content-Disposition: attachment; filename=repuestos_Ciclat.xls');

?>
<html>

	<body>
			
    <table border="1" cellpadding="2" cellspacing="0" width="100%">
    	<caption>Tabla de Repuestos</caption>
              <thead >
                <tr>
                    <th>ID</th>
                    <th>Modelo</th>
                    <th>Marca</th>
                    <th>Repuesto</th>
                    <th>Color</th>
                    <th>Cantidad</th>
                </tr>
            </thead>
            
    <tbody>
                   <?php
    					
						$conexion = new mysqli("localhost","root","administrador","inventario");
    
                        $query="SELECT * FROM `repuestos` ORDER BY `repuestos`.`marca` ASC";
                        $resultado=$conexion->query($query);
                        while($row=$resultado->fetch_assoc()){
                    ?>

    		
    			<tr>
                
                	<td><?php echo $row['id'] ?></td>
                    <td><?php echo $row['marca'] ?></td>                    
                    <td><?php echo $row['modelo'] ?></td>                    
                    <td><?php echo $row['repuesto'] ?></td>
                    <td><?php echo $row['color'] ?></td>
                    <td><?php echo $row['cantidad'] ?></td>
    
    
    			<?php 
            			}
   				 ?>
    		</tr>
    	</tbody>
    </table>
                    </body>
              </html>
