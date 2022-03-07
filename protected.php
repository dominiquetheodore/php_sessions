<?php
   session_start();

   ?>
<html lang = "en">
   
   <head>
      <title>Login with PHP sessions</title>
   </head>
	
   <body>
   
      <div>
         
         <?php
            $msg = '';
            print_r($_SESSION);
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'dominique' && 
                  $_POST['password'] == '1234') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'dominique';
                  
                  echo 'You have entered valid use name and password';
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
      </div> <!-- /container -->
      
      <div class = "container">
        <?php  
        if ($_SESSION['valid'] == true) {
            echo "<h2>Welcome " . $_SESSION['username'] . "</h2>";
        }
        ?>
        Click here to clean <a href = "logout.php" tite = "Logout">Session.
      </div> 
      
   </body>
</html>