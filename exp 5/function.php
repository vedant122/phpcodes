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
echo "str_word_count() : ".str_word_count($a)."<br><br>";
echo "strlen() : ".strlen($a)."<br><br>";
echo "strtoupper() : ".strtoupper($a)."<br><br>";
echo "strtolower() :".strtolower($a)."<br><br>";
echo "ucwords() : ".ucwords($a)."<br><br>";
echo "strrev() : ".strrev($a)."<br><br>";
echo "Removing blank space using str_replace() : ".str_replace(" ",'',$a)."<br><br>";
echo "str_repeat() : ".str_repeat($a,2)."<br><br>";
echo "searching vedant strpos() : ".strpos($a,"vedant")."<br><br>";
}
?>
</body>
</html>
