<html>
<head>
<title>Grade</title>
</head>
<body>
<form method="post">
Number : <input type="number" name="n">
<input type="submit" name="submit" value="submit">
</form>

<?php
if (isset($_POST["submit"]))
{
$num=$_POST["n"];
$n=$num;
$resn=0;
while($num>1){
$res=$num%10;
$resn=($resn*10)+$res;
$num=$num/10;
}
echo "Reverse of $n is $resn";
}
?>
</body>
</html>

