<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}
label {
    width: 50%;
    margin: 8px 0;
    margin-left: 22%;
    display: inline-block;
}
input[type=text], input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    margin-left: 22%;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: GREY;
    color: white;
    padding: 14px 20px;
    margin-left:50%;
    border: none;
    cursor: pointer;
    width: 8%;
    align-self: center;

}
button1 {
    background-color: GREY;
    color: white;
    padding: 14px 20px;
    margin-left:;
    border: none;
    cursor: pointer;
    width: 8%;
    align-self: center;

}

button:hover 
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #808080;
}

.imgcontainer {
    text-align: left;
    margin: 24px 0 12px 0;

}

img.avatar {
    width: 50%;
    height:50%;
    border-radius: 50%;
    size: ;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
       margin-left: 2%
    }
}
</style>
</head>
<body>
<form action="action_page.php">
  <div class="imgcontainer">
    <img src="download.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Username :</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>
    <br>
    <label for="psw"><b>Password :</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
    <br>
    <button type="submit">Login</button>
    <br>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
  <div class="container" style="background-color:#f1f1f1">
    <button1 type="button" class="cancelbtn">Cancel</button1>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
</body>
</html>
<<?php 

 ?>