<?php 
  session_start();
  ob_end_clean(); 
?>

<html lang="en">
  <header>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/login.css"/>
    
  </header>
  
  <body>
      <div> 
        <h2> iTask: Technology Edge Inc. </h2>
      </div>

      <div class="body">

        <form method="POST" action="index.php">

          <div class="form">
            <div>
              <input type="email" class="input" name="email" required placeholder="Email">
            </div>
          
            <div>
              <input type="password" class="input" name="password" required placeholder="Password">
            </div>
            
            <div class="pss">
                <input type="checkbox" id="remember"> 
                <label for="remember"> Remember Me </label>
            </div>
              
            <div> 
              <button type="submit" class="button" name="login"> Log In </button>
            </div>
              
          </div>
        </form>

      </div>

  </body>
</html>

<?php

    include "db_connect.php";

    if (!$conn -> connect_error) {
        echo "Connected"; /* Connected */
    }

    if (isset ($_POST['login'])){   /* button */
        $email = $_POST ['email'];
        $password = $_POST ['password'];

        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        /*$sql1 = "INSERT INTO tbl_log (email, action, date) values ('$email', 'Logged in', NOW())";*/

        $result = $conn -> QUERY ($sql);
        /*$result1 = $conn -> QUERY ($sql1);*/

        if ($result -> num_rows > 0) {
            $row = $result -> FETCH_ASSOC ();
            $type = $row ['position'];

            if ($jobtitle == "Project Manager"){
?>
                <script>
                    alert("Welcome Project Manager");
                </script>
<?php
            header ("refresh: 0; url=manager/manager_dashboard.php");
        }elseif ($jobtitle == "Team Leader"){
?>
            <script>
                alert("Welcome Team Leader!");
            </script>
<?php
            header("refresh: 0; url=leader/leader_dashboard.php");
        }elseif ($jobtitle == "Employee"){
            ?>
                        <script>
                            alert("Welcome Employee!");
                        </script>
            <?php
                        header("refresh: 0; url=member/member_dashboard.php");
                    }
    }   
        else {
?>
            <script>
                alert ("Invalid Account");
            </script>
<?php
        }
    }
?>