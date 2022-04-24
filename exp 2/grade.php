<html>
<head>
<title>Grade</title>
</head>
<body>
<form method="post">
Marathi : <input type="number" name="marathi">
Hindi : <input type="number" name="hindi">
English : <input type="number" name="english">
<input type="submit" name="submit" value="submit">
</form>

<?php
if (isset($_POST["submit"]))
{
$m=$_POST["marathi"];
$h=$_POST["hindi"];
$e=$_POST["english"];
$grade=($m+$h+$e)*100/300;
if ($grade>80)
{
echo "Class A $grade %";
}
else if ($grade>60)
{
echo "Class B $grade %";
}
else if ($grade>35)
{
echo "Class C $grade %";
}
else
{
echo "Fail $grade %";
}
}
?>
</body>
</html>