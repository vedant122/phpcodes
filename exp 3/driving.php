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
if ($num>=18)
{
echo "Applicable for driving licence";
}
else
{
echo "Not applicable for driving licence";
}
}
?>
</body>
</html>

