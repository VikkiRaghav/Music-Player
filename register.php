<?php
  include("includes/config.php");
  include("includes/Classes/Account.php");
  include("includes/Classes/Constants.php");
  $account = new Account($con);

  include("includes/handlers/register-handler.php");
  include("includes/handlers/login-handler.php");


  function getInputValue($name)
  {
    if(isset($_POST[$name]))
    {
      echo $_POST[$name];
    }
  }

 ?>

<html>
<head>
  <title> Welcome to Music Player </title>
  <link rel = "stylesheet" type="text/css" href="assets/css/register.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src ="assets/js/register.js"></script>

  </script>
</head>
<body>
  <div id ="background">
  <div id ="loginContainer">
  <div id ="inputContainer">
 <form id ="loginForm" action="register.php" method="POST">
    <h2>Login to your account </h2>
    <p>
    <?php echo $account->getError(Constants::$loginFailed); ?>
    <label for ="loginUsername">Username</label>
    <input id="loginUsername" name="loginUsername" type="text" placeholder="eg.Matt Damon" required>
    </p>
    <p>
    <label for = "loginPassword">Password</label>
    <input id="loginPassword" name="loginPassword" type="password" required>
    </p>
    <button type="submit" name="loginButton">Login</button>
    <div class ="hasAccountText">
    <span id="hideLogin"> Don't have an account yet? Signup here.</span>
    </div>
 </form>
 <form id ="registerForm" action="register.php" method="POST">
    <h2>Create your free account </h2>
    <p>
      <?php echo $account->getError(Constants::$userNameCharacters); ?>
      <?php echo $account->getError(Constants::$usernameTaken); ?>
    <label for ="Username">Username</label>
    <input id="Username" name="Username" type="text" placeholder="eg.Matt Damon" value="<?php getInputValue('Username') ?>" required>
    </p>
    <p>
      <?php echo $account->getError(Constants::$firstNameCharacters); ?>
    <label for ="firstname">First name</label>
    <input id="firstname" name="firstname" type="text" placeholder="eg.Matt" value="<?php getInputValue('firstname') ?>" required>
    </p>
    <p>
      <?php echo $account->getError(Constants::$lastNameCharacters); ?>
    <label for ="lastname">Last name</label>
    <input id="lastname" name="lastname" type="text" placeholder="eg Damon" value="<?php getInputValue('lastname') ?>" required>
    </p>
    <p>
      <?php echo $account->getError(Constants::$EmailsDoNotMatch); ?>
      <?php echo $account->getError(Constants::$emailInvalid); ?>
      <?php echo $account->getError(Constants::$emailTaken); ?>
    <label for ="email">Email</label>
    <input id="email" name="email" type="email" placeholder="matt@gmail.com" value="<?php getInputValue('email') ?>" required>
    </p>
    <p>
      <?php echo $account->getError(Constants::$EmailsDoNotMatch); ?>
      <?php echo $account->getError(Constants::$emailInvalid); ?>
    <label for ="email2">Confirm Email</label>
    <input id="email2" name="email2" type="email" placeholder="damon@gmail.com" value="<?php getInputValue('email2') ?>" required>
    </p>
    <p>
      <?php echo $account->getError(Constants::$passwordsDoNoMatch); ?>
      <?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
      <?php echo $account->getError(Constants::$passwordCharacters); ?>
    <label for = "Password">Password</label>
    <input id="Password" name="Password" type="password" placeholder ="your password" value="<?php getInputValue('Password') ?>" required>
    </p>
    <p>
      <?php echo $account->getError(Constants::$passwordsDoNoMatch); ?>
      <?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
      <?php echo $account->getError(Constants::$passwordCharacters); ?>
    <label for = "Password2">Confirm Password</label>
    <input id="Password2" name="Password2" type="password" placeholder ="your password" value="<?php getInputValue('Password2') ?>" required>
    <button type="submit" name="registerButton" id="registerBut">Sign Up</button>
    <div class ="hasAccountText">
    <span id="hideRegister">Already have an Account?Login here.</span>
    </div>
    </p>

 </form>
</div>
</div>
</div>

</body>
</html>
