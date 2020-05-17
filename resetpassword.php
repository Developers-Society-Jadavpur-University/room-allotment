<?php include 'config.php' ?>
<?php include 'controllers/do_resetpassword.php' ?>
<?php include 'header.php'?>
<?php session_start()?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="main.css">
  <title>VBMS - Login</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4 form-wrapper auth login">
        <h3 class="text-center form-title">Reset Password</h3>
        <?php if (count($errors) > 0): ?>
        <div class="alert alert-danger">
            <?php foreach ($errors as $error): ?>
            <li>
            <?php echo $error; ?>
            </li>
            <?php endforeach;?>
        </div>
        <?php endif;?>
        <form action="resetpassword.php" method="post">
          <!--<div class="form-group">
            <br>
            <label>Enter your New Password</label>
            <input type="email" name="email" class="form-control form-control-lg" value="<?php echo $username; ?>">
          </div>-->
          <div class="form-group">
            <label>Enter your New Password</label>
            <input type="password" name="password" class="form-control form-control-lg">
          </div>
          <div class="form-group">
            <button type="submit" name="resetpass-btn" class="btn btn-lg btn-block">Submit</button>
          </div>
        </form>
        <p><a href="login.php">Go to Login</a><p>
        
        </div>
    </div>
  </div>
</body>
</html>