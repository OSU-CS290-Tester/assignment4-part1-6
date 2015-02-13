<html>
<body>
<form action="content1.php" method="post">
Welcome <?php echo $_GET["name"]; ?><br>
Please enter your username: <?php echo $_GET["email"]; ?>
<input type="text" name="username">
<button type="button">Login</button> 
<input type="submit">
 
</body>
</html> 