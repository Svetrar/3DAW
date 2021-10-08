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
	
	function subtraiNumero($subtrai)
	{
		$x = $_POST['var1'];
		$y = $_POST['var2'];
		echo $subtrai = $x - $y;
	}
	function multiplicaNumero($multiplica)
	{
		$x = $_POST['var1'];
		$y = $_POST['var2'];
		echo $multiplica = $x * $y;
	}
	
	function divideNumero($divide)
	{
		$x = $_POST['var1'];
		$y = $_POST['var2'];
		echo $divide = $x / $y;
	}
		
	function expNumero($exp)
	{
		$x = $_POST['var1'];
		$y = $_POST['var2'];
		echo $exp = $x ** $y;
	}
	function raizQuadradaNumero($raiz)
	{
		$z = $_POST['var3'];
		echo $raiz = (sqrt($z));	
	}
?>
<br>
<form action="calc12.php" method=POST>
    <h3>CALC</h3>
    1° Número <input type=number name="var1">
    2° Numero <input type=number name="var2">
	<br><br>
	Square Root <input type=number name="var3">
	
	<br><br><br><br>
	<select name="selectOp">
		<option value="+">Soma</option>
		<option value="-">Subtração</option>
		<option value="*">Multiplicação</option>
		<option value="/">Divisão</option>
		<option value="**">Exponeciação</option>
		<option value="sqrt">Raiz Quadrada</option>
	</select>
	<br><br>
    <input type="submit" value="Exe"> Resultado:
	<?php 
	if($_SERVER["REQUEST_METHOD"] == "POST") 
	{
		$selectOp = $_POST["selectOp"];
		
		if($selectOp == '+')
		{
		$soma = "";	
		somaNumero($soma);
		}
		if($selectOp == '-')
		{
		$subtrai = "";	
		subtraiNumero($subtrai);
		}
		if($selectOp == '*')
		{
		$multiplica = "";	
		multiplicaNumero($multiplica);
		}
		if($selectOp == '/')
		{
		$divide = "";	
		divideNumero($divide);
		}
		if($selectOp == '**')
		{
		$exp = "";	
		expnumero($exp);
		}
		if($selectOp == 'sqrt')
		{
		$raiz = "";	
		raizQuadradaNumero($raiz);
		}
		
	}	
	?>	
    
</form>
<br>
</body>
</html>