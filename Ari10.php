<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>3DAW</h1>
<?php
$x=$_GET['var1'];
$y=$_GET['var2'];

if ($x == $y) 
{
    echo "<p>Primeira opção (x) é igual a segunda opção (y), x = $x e y = $y</p>";
} else{
    echo "<p>Primeira opção (x) NÃO é igual a segunda opção (y), x = $x e y = $y</p>";
}

if ($x === $y) 
{
    echo "Primeira opção (x) é identica a segunda opção (y), x = $x e y = $y";
} else{
    echo "Primeira opção (x) NÃO é identica a segunda opção (y), x = $x e y = $y";
}

if ($x != $y) 
{
    echo "Primeira opção (x) é diferente a segunda opção (y), x = $x e y = $y";
} else{
    echo "Primeira opção (x) NÃO é diferente a segunda opção (y), x = $x e y = $y";
}

if ($x > $y) 
{
    echo "Primeira opção (x) é maior que a segunda opção (y), x = $x e y = $y";
} else{
    echo "Primeira opção (x) é menor que a segunda opção (y), x = $x e y = $y";
}

if ($x && $y >= 5) 
{
    echo "As opções (x) e (y) são maiores ou iguais a 5, x = $x e y = $y";
} else{
    echo "As opções (x) e (y) são menores que 5, x = $x e y = $y";
}

if ($x && $y <= 6) 
{
    echo "As opções (x) e (y) são menores ou iguais a 6, x = $x e y = $y";
} else{
    echo "As opções (x) e (y) são maiores que 6, x = $x e y = $y";
}
?>
<br>
<form action="Ari10.php" method=GET>
    <h3>Valores</h3>
    <input type=number name="var1"> +
    <input type=number name="var2"> =
    <br><br>
    <input type="submit" value="Comparar">
</form>
<br>
</body>
</html>


