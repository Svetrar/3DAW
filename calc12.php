<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>3DAW</h1>
<?php 
	function somaNumero($soma)
	{
		$x = $_POST['var1'];
		$y = $_POST['var2'];
		echo $soma = $x + $y;
	}
?>
<br>
<form action="calc12.php" method=POST>
    <h3>SOMAR DOIS NUMEROS</h3>
    a- <input type=number name="var1"> +
    b- <input type=number name="var2"> = 
	<?php 
	if($_SERVER["REQUEST_METHOD"] == "POST") 
	{						
		$soma = "";	
		somaNumero($soma); 
	}	
	?>	
    <br><br>
    <input type="submit" value="Somar">
</form>
<br>
</body>
</html>