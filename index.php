<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>LOGIN USER</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <form method="post" action="index.html" class="login">
    <p>
      <label for="login">UserName:</label>
      <input type="text" name="username" id="username" placeholder="UserName">
    </p>

    <p>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" placeholder="Password">
    </p>

    <p class="login-submit">
      <button type="submit" class="login-button">Login</button>
    </p>

    <p class="forgot-password"><a href="Register.html">Forgot your password? Click here to Register</a></p>
  </form>
  <?php
  require_once("validateFormContact.php"); 

      if(isset($_POST['btnSignUp'])) 
      { 
          global $contacts;
         
          if (empty($_POST["name"])) {
              $nameErr = "Nhập Tên";
          } else {
              $name = ($_POST["name"]);
            
          }
          if (empty($_POST["sdt"])) {
              $sdtErr = "Nhập Số Điện Thoại";
          } else {
              $sdt = ($_POST["sdt"]);
             
          }
          if (empty($_POST["email"])) {
              $emailErr = "Nhập Email";
          } else {
              $email = ($_POST["email"]);
             
          }
          if (empty($_POST["nd"])) {
              $ndErr = "Nhập Nội Dung";
          } else {
              $nd = ($_POST["nd"]);          
          }
      };
      if(empty($nameErr) && empty($sdtErr) && empty($emailErr) && empty($ndErr)){
          addContact($name,$sdt,$email,$nd,count( getAllContacts()));
      }else
      {
       
      }
?>
</body>
</html>
