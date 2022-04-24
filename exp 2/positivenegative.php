<html>
<head><title>Positive Negative</title></head>
<body>
<form method="post">
Number : <input type="number" name="n">
<input type="submit" name="submit" value="submit">
</form>
<?php
if (isset($_POST['submit']))
{
$a=$_POST['n'];
if ($a>0)
{
echo "$a is positive number";
}
else{
echo "$a is negative number";
}
}
?>
</body>
</html>