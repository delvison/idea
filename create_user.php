<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
</head>
<body>



  <h4>Signup for Idea!</h4>
  <form action="controllers/login_controller.php" method="POST">
    <input style="height:30px" type="text" placeholder="username" name="username" />
    </br>
    <input style="height:30px" type="text" placeholder="email" name="email" />
    </br>
    <input style="height:30px" type="password" placeholder="password" name="password" />
    </br>
    <input style="display:none" name="action" value="create_user"></input>
    <button type="submit" class="btn-primary">signup</button>
  </form>
  <p>
    Already have an account?
    <a href="login.php">Login</a>
  </p>


</body>
</html>
