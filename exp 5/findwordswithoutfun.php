<html>
<body>
<form method="post">
Enter the string : <input name="s">
<input type="submit" name="submit" value="submit">
</form>
<?php
if (isset($_POST["submit"]))
{
$a=$_POST["s"];
$s=1;
$j=0;
for ($i=0;$i<strlen($a);$i++)
{
if ($a[$i]!=' '){
$j=$s;
}
if ($a[$i]==' '){
++$s;
}
}

echo "Total words in string \"$a\" is : ".$j;
}
?>
</body>
</html>
