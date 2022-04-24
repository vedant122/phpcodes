<html>
<body>
<form method="post">
Number 1 :<input type="number" name="n1">
Number 2 :<input type="number" name="n2">
<input type="submit" value="add" name="add">
</form>
<?php
if(isset($_POST["add"])){
$a=$_POST["n1"];
$b=$_POST["n2"];
$c=function($a1,$b1) { return($a1+$b1); };
echo "Addition using lambda function : ";
echo $c($a,$b);
}
?>


</body>
</html>
