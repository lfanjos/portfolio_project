<?php  require_once('config.php'); ?>
<?php  require_once('includes/registration_login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/login-style.css">
    <script src="https://kit.fontawesome.com/864872c2f6.js" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
    <div class="login">
  <div class="heading">
    <h2>Sign in</h2>
    <form action="login.php" method="post">
    <?php include(ROOT_PATH . '/includes/errors.php') ?>
      <div class="input-group input-group-lg">
        <span class="input-group-addon"><i class="fa fa-user"></i></span>
        <input type="text" name="username" value="<?php echo $username; ?>" value="" class="form-control" placeholder="Username">
          </div>

        <div class="input-group input-group-lg">
          <span class="input-group-addon"><i class="fa fa-lock"></i></span>
          <input type="password" name="password" class="form-control" placeholder="Password">
        </div>

        <button type="submit" class="float" name="login_btn">Login</button>
       </form>
 		</div>
 </div>
</body>
</html>