
<?php

function sanitizeFormUsername($inputText)
{
  $inputText = strip_tags($inputText);
  $inputText = str_replace(" ", "", $inputText);
  return $inputText;
}
function sanitizeFormString($inputText)
{
  $inputText = strip_tags($inputText);
  $inputText = str_replace(" ", "", $inputText);
  $inputText = ucfirst(strtolower($inputText));
  return $inputText;
}
function sanitizeFormPassword($inputText)
{
  $inputText = strip_tags($inputText);
  return $inputText;
}

if(isset($_POST['registerButton']))
{
  $Username =  sanitizeFormUsername($_POST['Username']);
  $firstname = sanitizeFormString($_POST['firstname']);
  $lastname =  sanitizeFormString($_POST['lastname']);
  $email =  sanitizeFormString($_POST['email']);
  $email2 =  sanitizeFormString($_POST['email2']);
  $Password = sanitizeFormPassword($_POST['Password']);
  $Password2 = sanitizeFormPassword($_POST['Password2']);

  $wasSuccessful = $account->register($Username,$firstname,$lastname,$email,$email2,$Password,$Password2);
  if($wasSuccessful)
  {
    $_SESSION['userLoggedIn'] = $username;
    header("Location: index.php");
  }
}
?>
