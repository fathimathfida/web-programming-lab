<html>
<body>
<h1>Name of students</h1>
<?php
$name=["noah","liam","ryan","robert","carter"];
$t=$name;
echo "Display using print_r<br>";
print_r($name);
echo "<br><br>";
echo "Sorting using asort()<br>";
asort($t);
print_r($t);
echo "<br><br>";
echo "Sorting using arsort()<br>";
arsort($name);
print_r($name);
?>
</body>
</html>

