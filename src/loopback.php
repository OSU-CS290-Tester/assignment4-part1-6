<html>
<body>
<?php

class makemyjson
{
    
	function createjson()
    {
		echo "{Type: ";
		echo $_SERVER['REQUEST_METHOD'];
		echo " parameters :{";
		$myarray = array();
		foreach($_POST as $key=>$value)
		{
			array_push($myarray,"$key:$value");
		}
		print_r($myarray);
    }
}


$makemyjson = new makemyjson;
$makemyjson->createjson();

?>
</body>
</html> 