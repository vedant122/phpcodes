<html>
<head>
<title>Even Odd</title>
</head>
<body>
<form method="post">
Number 1 : <input type="number" name="n1">
<input type="submit" value="check" name="submit"></form>

<?php
if (isset($_POST['submit']))
{
$a=$_POST['n1'];
if($a%2==0)
{
echo "$a is even number";
}
else
{
echo "$a is odd number";
}
}
?>
</body>
</html>