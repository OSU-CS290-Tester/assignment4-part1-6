<html>
<body>
Login();
function Login()
{
    if(empty($_POST['username']))
    {
        $this->HandleError("UserName is empty!");
        return false;
    }
          
    $username = trim($_POST['username']);     
}
</body>
</html> 