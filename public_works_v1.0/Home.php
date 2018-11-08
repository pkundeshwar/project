<?php  ?>
<!DOCTYPE html>
<html>
<head><br>

	<center><b>PUBLIC WORKS DEPARTMENT</b></CENTER>
<style>
.button1 {
    background: 
    border: none;
    color: White;
    padding: 50px 50px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    margin-left: auto;
    margin-right: auto;
    margin-top: 0%;
    margin-bottom: 0%;
    background-size:490px;
}
.button2 {
    background: 
    border: none;
    color: White;
    padding: 50px 50px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    margin-left: auto;
    margin-right: auto;
    margin-top: 0%;
    background-size:490px;
    margin-bottom: 0%;


}
.button3 {
    background: 
    border: none;
    color: White;
    padding: 50px 50px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    margin-left: auto;
    margin-right: auto;
    margin-top: 5%;
    margin-bottom: 0%;

}
.button4 {
    background: 
    border: none;
    color: White;
    padding: 50px 50px;
    text-align: center;
    text-decoration: none;
    display: inline-block
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    margin-left: auto;
    margin-right: auto;
    margin-top: 5%;
    margin-bottom: 0%;
</style>
</head>
<body>
<center>
<input type="image" img src="/public_works_v1.0/truck1.png" class="button1" value="Trash">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp


<input type="image" img src="/public_works_v1.0/tree.png" class="button2"  value="Potholes"><br>

<input type="image" img src="/public_works_v1.0/tree.png" class="button3" value="Trees">
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp

<input type="image" img src="/public_works_v1.0/Others.jpg" class="button4" value="Others">
</center>
</body>
</html>


<?php

if (empty($_POST['username']) || empty($_POST['password'])) //Validating inputs using PHP code 
 { 
 echo 
 "Incorrect username or password"; //
 header("location: index.php");//You will be sent to Login.php for re-login 
 } 
 ?>