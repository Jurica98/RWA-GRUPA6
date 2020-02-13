<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <title>Login</title>
      <link rel="stylesheet" type="text/css" href="stylelogin.css">
    
  </head>
  <body>
      <header>
        <a href="index.html"><input type="button" class="btn1" value=" X "></a>

          <div class="login-box">
            <h1>Login</h1>
              <form action="validation.php" method="post">
            <div class="textbox">
                <i class="fas fa-user"></i>
                <input type="text" name="username" placeholder="Username" required>           
                  </div>

            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            
                  <label  for="userType"></label>
                            <input type="radio" name="userType" value="admin" class="custom-radio" required>&nbsp;Admin &nbsp;&nbsp;&nbsp;&nbsp;
                            <input type="radio" name="userType" value="igrac" class="custom-radio" required>&nbsp;Igrac &nbsp;&nbsp;&nbsp;&nbsp;
                             <input type="radio" name="userType" value="sudac" class="custom-radio" required>&nbsp;Sudac
                   <input type="submit" name="login" value="Log in" class="btn">
                  </form>
              <?php 
              if(isset($_GET['error'])==true){
                  echo'<font color="darkorange"><p align="center">Username ili Password su netočni</p></font>';
              }
              
              
              ?>
          </div>
      </header>
  </body>
</html>
