<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Adding Bootstrap Library -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
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

<form method="POST" action ="Home.php" onsubmit="return validate();" style="max-width:800px;margin:auto"  >
  <div class="container">
 
    <img src="download.png" > <h1><center>Department Of Public Works</center></h1>

  </div>
   
  
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="username" name="username">
  </div>
  
  <div class="input-container">
    <i class="fa fa-lock icon"></i>
    <input class="input-field" type="password" placeholder="password" name="password">
  </div>
  <div class="input-container">
      <input type="checkbox" checked="checked" name="remember"> Remember me
       &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
    <span class="psw"> <a href="#">Forgot password?</a></span>
   <br><br><br>
</div>
  <button type="submit" class="btn">Sign In</button>
</form>
</body>
</html>
<?php 
include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $username = mysqli_real_escape_string($db,$_POST['username']);
      $password = mysqli_real_escape_string($db,$_POST['Admin_password']); 
      
      $sql = "SELECT id FROM admin WHERE Username = '$username' and Admin_password = '$password'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == 1) {
         session_register("username");
         $_SESSION['login_user'] = $username;
         
         header("location: Home.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>