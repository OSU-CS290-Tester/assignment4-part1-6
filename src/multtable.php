<html>
<body>

The max multiplicand is: <?php echo $_GET["max-multiplicand"]; ?><br>
The min multiplicand is: <?php echo $_GET["min-multiplicand"]; ?><br>
The min multiplier is: <?php echo $_GET["min-multiplier"]; ?><br>
The max multiplier is: <?php echo $_GET["max-multiplier"]; ?><br>
<?php $maxcand = $_GET["max-multiplicand"];?>
<?php $mincand = $_GET["min-multiplicand"];?>
<?php $minmult = $_GET["min-multiplier"];?>
<?php $maxmult = $_GET["max-multiplier"];?>
 
<?php echo $maxcand; ?><br>
<?php echo $mincand; ?><br>
<?php echo $minmult; ?><br>
<?php echo $maxmult; ?><br>

<?php intcheck($maxcand,'max multiplicand');?><br>
<?php intcheck($mincand,'min multiplicand');?><br>
<?php intcheck($minmult,'min multiplicand');?><br>
<?php intcheck($maxmult,'max multiplicand');?><br>

<?php compareminmax($minmult, $maxmult, 'multiplier');?><br>
<?php compareminmax($mincand, $maxcand, 'multiplicand');?><br>


<?php
function compareminmax($min, $max,$description)
{
	$retval = $description;
    if ($min > $max)
	{
		echo "The minimum value of $description is greater than the maximum value of $description";
	}
}
?><br>
<?php
function intcheck($thisvar,$description)
{
	if (empty($thisvar)) {
		echo "Missing parameter $description . ";
	}
   if (is_numeric($thisvar)=== false) 
	{
		echo "$description must be an integer. ";
	}
}
?><br>
</body>
</html> 