<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>3DAW</h1>

	<?php
	$nome1 = "Luiz";
	$nome2 = "Jorge";
	$nome3 = "Anna";
	$nome4 = "Sergio";
	$nomes = array("Luiz", "Jorge", "Anna", "Sergio");
	
	$idade1 = 20;
	$idade2 = 21;
	$idade3 = 22;
	$idade4 = 23;
	$idades = array(20, 21, 22, 23);
	?>
	
	<table border = "1">
		<tr>
			<th>Nome</th>
			<th>Idade</th>
		</tr>
		
	<?php
		for($x=0; $x <= 2; $x++)
		{
			echo "<tr>";
            echo "<td>$nomes[$x]</td>";
            echo "<td>$idades[$x]</td>";
            echo "</tr>";
		}
	?>
	</table>
</body>
</html>