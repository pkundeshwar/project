<?php
    require("config.php");

    // Inialize session
      // Retrieve username and password from database according to user's input


     if(isset($_POST['username']))
     {

        $username = $_POST['username'];
        $password = $_POST['password'];


      $sql = "SELECT * FROM admin WHERE username='$username' and admin_passWord='$password'";
      //$login = mysqli_query("SELECT userName,password FROM 'member' WHERE userName=          $_post['username'] AND passWord= $_post['password'])");
       // Check username and password match
      $result = $conn->query($sql);
      $row_count = mysqli_num_rows($result);
      echo($row_count);
       if ($row_count > 0) 
      {

        echo("FOUND  SOMETHING");
      // Set username session variable

      $_SESSION['userName'] = $username;

     // Jump to secured page
      header("Location: Home.php");
     }
     else {
     // Jump to login page 
  //header("Location:index.php");
      $msg= "incorrect usrename and password";
     
     }

     }
      
       //*********retrieving data from Database**********
     ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Adding Bootstrap Library -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
    display: -ms-flexbox; /* IE10 */
    display: flex;
    width: 300px;
    margin-bottom: 30px;
    margin-left: 250px;
}
.container {
  /*display: -ms-flexbox; /* IE10 */
    display: flex;
    width: 200px;
    margin-bottom: 20px;
    margin-left: 0px;

}

.icon {
    padding: 10px;
    background: green;
    color: white;
    min-width: 50px;
    text-align: center;
}

.input-field {
    width: 100%;
    padding: 10px;
    outline: none;
}

.input-field:focus {
    border: 2px solid dodgerblue;
}

.imgcontainer {
    style ="width:50px; height:50px;

}


/* Set a style for the submit button */
.btn {
    background-color: green;
    color: white;
    padding: 15px 20px;
    border: none;
    cursor: pointer;
    width: 100px;
    opacity: 0.9;
    margin-left: 350px;
}

.btn:hover {
    opacity: 1;
}
</style>
</head>
<body>

<form method="POST" onsubmit="return validate();" style="max-width:800px;margin:auto"  >
  <div class="container">
 
    <img src="download.png" > <h1><center>Department Of Public Works</center></h1>

  </div>
   
  
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="username" name="username" id = "username" required>
  </div>
  
  <div class="input-container">
    <i class="fa fa-lock icon"></i>
    <input class="input-field" type="password" placeholder="password" name="password" id = "password" required>
  </div>
  <div class="input-container">
      <input type="checkbox" checked="checked" name="remember"> Remember me
       &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
    <span class="psw"> <a href="#">Forgot password?</a></span>
   <br><br><br>
</div>
  <button type="submit" class="btn">Sign In</button>
</form>
 <p >
  <center>
 <style="color: red" >
                  <b><?php if(isset($msg)) {echo $msg;} ?> </b> 
                  
                  </p></style></center>
</body>
</html>
