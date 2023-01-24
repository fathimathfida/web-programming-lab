<html>
<body bgcolor="lightyellow">
<h4></h4>
<?php
$name=["james","oliver(c)       ","jack","pitter","jhons","steve","johns","smith","NILEENA","SREYA","daneil"];
$role=["BALL BOY","WICKET KEEPER","RIGHT-HAND BATSMAN","RIGHT-HAND BATSMAN","RIGHT-HAND BATSMAN","FAST BOWLER","SPIN BOWLER","ALL ROUNDER","captain","ball keeper","ALL ROUNDER"];
echo "<u>STARTING XI</u>";
echo "<br>
<table border='2px'>
<tr><th> sl no.</th>
<th>player</th>
<th>ROLE</th>";
 
for ($i=0;$i<11;$i++)
{
$sl=$i+1;
echo "<tr><th>$sl</th><th>$name[$i]</th><th>$role[$i]</th></tr>";
}
echo "</table>"
?>
</body>
</html>
