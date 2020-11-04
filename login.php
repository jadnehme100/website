<title>Jad nehme</title>

<!DOCTYPE html>
<html>
<h1>Please login</h1>

<head>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
    integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" 
    crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" 
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" 
    integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" 
    crossorigin="anonymous">

</head>
<body>
<form method="post" >
    
    <input type="text" name="email" id="email" placeholder="email" ><br>
    <input  type="password"  name="password" id="password" placeholder="password" ><br>
  
    
    
    <input type="submit" name="submit"  value=" Login ">
    <input type="submit" name="cancel"  value=" cancel ">
    </form>
</div>
</body>






<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message

if (isset($_POST['submit'])) {
	if (empty($_POST['email']) || empty($_POST['password'])) {
     ?> <script>  alert("both fields must be filled in");</script><?php
        return false;
    
    
    }else  if($_POST['email'] != ''){
        // The email to validate
        $email = $_POST['email'];

        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {{
            $email=$_POST['email'];
            $password=$_POST['password'];		
            // To protect MySQL injection for Security purpose
            $email = stripslashes($email);
            $password = stripslashes($password);
            $con= mysqli_connect("localhost", "root","", "misc");
            $sql="select * from users where password='".$password."' AND email='".$email."'";
            $result=mysqli_query($con,$sql);
            $rows=mysqli_num_rows($result);//count the rows
            if ($rows == 1) {
                    header("location: index2.php"); // Redirecting To Other Page
                
                
                
                } else {
                    ?> <script>  alert("Incorrect password");</script><?php
                
        
            mysqli_close($con); // Closing Connection
        }
    }
          } else {
            ?> <script>  alert("your email is not valid");</script><?php
          }
    }
    
  
    
    
  }



