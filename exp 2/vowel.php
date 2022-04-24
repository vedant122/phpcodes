<html>
<body>
<form method="post">
Enter Character : <input type="character" name="c">
<input type="submit" name="submit" value="submit">
</form>

<?php
if (isset($_POST["submit"]))
{
$c=$_POST["c"];
switch ($c)
{
case "a":
{
echo "$c is vowel";
break;
}
case "e":
{
echo "$c is vowel";
break;
}
case "i":
{
echo "$c is vowel";
break;
}
case "o":
{
echo "$c is vowel";
break;
}
case "u":
{
echo "$c is vowel";
break;
}
case "A":
{
echo "$c is vowel";
break;
}
case "E":
{
echo "$c is vowel";
break;
}
case "I":
{
echo "$c is vowel";
break;
}
case "O":
{
echo "$c is vowel";
break;
}
case "U":
{
echo "$c is vowel";
break;
}
default:
{
echo "$c is consonent";
break;
}
}
}
?>
</body>
</html>

