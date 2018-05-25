<!DOCTYPE hyml>
<!DOCTYPE html>
<html>
<head>
	<title>Celdas</title>
	<meta charset="utf-8">
</head>
<body>
	<div>
		<?php 

		$HojaDeTrabajo=array("Administrativa"=>array("A001"=>array("Carlos","Vargas","SI","1500000"),
												     "A003"=>array("Ana","Rivera","NO","500000"),
												     "A005"=>array("Catalina","Bernal","SI","780000")),

			                 "Operativa"=>array("P001"=>array("Eliza","Selfin","SI","640000"),
			                 	                "P006"=>array("Rodrigo","Latorre","SI","620000"),
			                 	                "P007"=>array("Sandra","Vega","NO","650000")),

			                 "Marketing"=>array("M003"=>array("Jennifer","Pineda","NO","1000000"),
			                 	                "M001"=>array("Maria Fernanda","Perez","SI","1500000")),

			                 "Cartera"=>array("C001"=>array("Leidy","Bustos","SI","850000"),
			                 	              "C002"=>array("Viviana","Bonilla","NO","890000"),
			                 	              "C005"=>array("Estefani","Sandoval","SI","860000")));

		?>
			<?php
				//echo "<ol>";

					//foreach ($HojaDeTrabajo as $cargo => $tipo) {
						//echo "<li>".$cargo."</li>";
						//echo "<ul>";

						//foreach ($tipo as $oficina => $lugar) {
							//echo "<li>".$oficina."</li>";

							//echo "<ul>";

							//foreach ($lugar as $persona) {
								//echo "<li>".$persona."</li>";
							//}
							//echo "</ul>";
						//}
						//echo "</ul>";

					//}
	            	
            	//echo "</ol>";
			?>
	</div>
</body>
</html>