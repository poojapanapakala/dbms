<?php require_once 'controllers/authControllers.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>reset password</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width ,initialisation-scale=1"><!-- not clear-->
<meta http-equiv="X-UA-Compatible" content="IE=edge"><!--i donot know-->
	
	
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="reset password.css">
</head>
<body>
<header class="box1">
    <nav id="header-nav" class="navbar navbar-default">
    <div class="container">

      <div class="navbar-header">
        <div class="navbar-brand">
        <a href="#">
                  <h1>Crime record management system</h1>
                </a>
              </div>
      </div>
     <div id="collapsable-nav" class="collapse navbar-collapse">
      <ul id="nav-list" class="nav navbar-nav navbar-right">
         <button type="button" class="btn" onclick="window.location.href='#';">Home</button>
         
      </ul>
    </div>
   
    </div>
   </nav>
    
  </header>
   <div class="loginbox" class="box1" >
    <form action="reset password.php" method="post">
      <h1>Login</h1>
      <?php if(count($errors) >0):?>
      <div class="alert alert-danger">
        <?php foreach($errors as $error): ?>
          <li><?php echo $error; ?></li>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
      
      <div class="textbox">
        
        <i class="fa fa-lock"></i>
        <input type="password" placeholder="New password" name="newpassword" value="">
      </div>
      <div class="textbox">
        <i class="fa fa-lock"></i>
        <input type="password" placeholder="Confirm new password" name="confirmpassword" value="">
      </div>
     <input class="btns" type="submit" name="reset-password" value="Reset password" >
      </form>
      </div>
  <footer >
    <div class="container" id="footer">
      <div class="row" >
        
        <section id="hours" class="col-sm-4">
          <span>National emergency number:</span><br>
          <i class="fa fa-phone"></i>: 112<br>
          <hr class="visible-xs">
        </section>
        <section id="hours" class="col-sm-4">
          <span>Police:</span><br>
          <i class="fa fa-phone"></i>: 100<br>
          <hr class="visible-xs">
        </section>
        <section id="hours" class="col-sm-4">
          <span>Women helpline:</span><br>
          <i class="fa fa-phone"></i>: 1091<br>
          <hr class="visible-xs">
        </section>
      </div>
      
    </div>
  </footer>
</body>
</html>