<html>
<body>
<form method="post">
Length of rectangle :<input type="number" name="n1">
Width of rectangle :<input type="number" name="n2">
<input type="submit" value="Submit" name="add">
</form>
<?php
if(isset($_POST["add"]) or isset($_POST["subtraction"])){
$a=$_POST["n1"];
$b=$_POST["n2"];
$c=function($a,$b){ return($a*$b); };
echo "Area of rectangle :";
echo $c($a,$b);
}
?>


</body>
</html>
