
<!DOCTYPE html>
<html lang="fr">

<head>

  <link rel="stylesheet" href="login_style.css">
</head>
<body>
<header>
        <img src="img/logo.png" alt="abdelmail">
        <h3>AbdelMail</h3>
</header>

    <div class="login">
       <form action="index.php" method="get">
       <label for="password" >Username</label>
     <input type="text" name="username">
     <label for="password" >Password</label>
     <input type="password" name="password">
     <input type="submit" value="login">
</form>
</div>
<div class="error">
<?php
if (isset($_GET['error']))
{
  echo 'wrong username or password';  
}
?>
</div>
<span>username : admin   //   password : 1234 </span>
</body>
</html>