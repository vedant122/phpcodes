<!DOCTYPE html>
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
$c=$_POST["n"];
$f=1;
for ($i=1;$i<=$c;$i++)
{
$f*=$i;
}
echo "Factorial of $c is $f";
}
?>
</body>
</html>

