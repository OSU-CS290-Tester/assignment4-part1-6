<html>
<body>
<?php

class makemyjson
{
		public $Type; 
		public $parameters = array();
}


$makemyjson = new makemyjson;
$makemyjson->Type = $_SERVER['REQUEST_METHOD'];
foreach($_POST as $key=>$value)
	{
		array_push($makemyjson->parameters,"$key:$value");
	}
 $someJSON = json_encode($makemyjson);
  //console.log($someJSON);
 echo $someJSON;

?>
</body>
</html> 