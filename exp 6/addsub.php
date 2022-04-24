<html>
<body>
<form method="post">
Number 1 :<input type="number" name="n1">
Number 2 :<input type="number" name="n2">
<input type="submit" value="+" name="add">
<input type="submit" value="-" name="add">
</form>
<?php
function add($n1,$n2)
{
echo "Addition of $n1 and $n2 :",$n1+$n2;
}

function sub($n1,$n2)
{
echo "Substraction of $n1 and $n2 :",$n1-$n2;
}

if(isset($_POST["add"])){
$a=$_POST["n1"];
$b=$_POST["n2"];
$c=$_POST["add"];

switch ($c)
{
case "+":
	add($a,$b);
	break;
case "-":
	sub($a,$b);
	break;
}

}

?>
</body>
</html>
