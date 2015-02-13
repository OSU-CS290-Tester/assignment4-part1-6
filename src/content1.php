<html>
<body>
<?php
    if(empty($_POST['username']))
    {
         echo "UserName is empty!";
    } else
	{
		$username = trim($_POST['username']);    
		echo "Welcome $username! ";
	}
?>	
</body>
</html> 