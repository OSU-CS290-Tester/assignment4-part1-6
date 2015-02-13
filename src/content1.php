<html>
<body>
<?php
    if(empty($_POST['username']))
    {
         echo "A username must be entered. Click here to return to the login screen";
		 $callingserver = $_SERVER['HTTP_REFERER'];
		 echo $callingserver;

    } else
	{
		
		session_start();
		session_name(($_POST['username']));
		if (empty($_SESSION['count'])) {
			$_SESSION['count'] = 1;
		} else {
			$_SESSION['count']++;
			}
	}
?>	
		<p>
		Hello visitor, you have seen this page <?php echo $_SESSION['count']; ?> times.
		</p>

</body>
</html> 