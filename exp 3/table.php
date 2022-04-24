<html>
<body>
<form method="post">
Number : <input type="number" name="n">
<input type="submit" name="submit" value="submit">
</form>

<?php
if (isset($_POST["submit"]))
{
$num=$_POST["n"];
for ($i=1;$i<=10;$i++)
{
$t=$i*$num;
echo "$t<br>";
}
}
?>
</body>
</html>

