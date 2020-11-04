
<title>Jad Nehme</title>


 
<?php 

session_start();


	if (isset($_GET['id'])) {
		$id = $_GET['id'];
        
        

       
        $con= mysqli_connect("localhost", "root","", "misc");
        $sql = "SELECT * from profile where user_id=$id";
        $result = mysqli_query($con, $sql);
        
        
        if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
             
              $first_name=$row["first_name"];
              $last_name=$row["last_name"];
              $email=$row["email"];
              $headline=$row["headline"];
              $summary=$row["summary"];
              
          }}
        
        
        
        
        ?>
       
        
        
        
        
        
        
        
        <BR><br>
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" type="text/css" media="screen" href="main.css">
            <script src="main.js"></script>
            <link rel="stylesheet" href="All.css">
        
        </head>
        <body>
            
        </body>
        </html>
        
        
        
        
        
        <form method=post>
        <h2>Here you can edit your information</h2><BR>
        
        First name:<input value="<?php echo $first_name?>" type="text" name="first_name"placeholder="<?php echo $first_name?>" ><br>
        Last name:</h2><input value="<?php echo $last_name?>" type="text" name="last_name"placeholder="<?php echo $last_name?>" ><br>
        email:</h2><input value="<?php echo $email?>" type="text"  id="email" name="email"placeholder="<?php echo $email?>" ><br>
        headline:</h2><input value="<?php echo $headline?>" type="text" name="headline"placeholder="<?php echo $headline?>" ><br>
        summary:</h2><input value="<?php echo $summary?>" type="text" name="summary"placeholder="<?php echo $summary?>" ><br>
        
        <br>
      
        
        <br><br>
        
        <input type="submit" name="submit"  value=" save ">
        <input type="submit" name="cancel"  value=" cancel ">
    </form>
        
        </form>
        
        
        
        
        
        <?php
        if (isset($_POST['submit'])) {
            if (empty($_POST['first_name'])||empty($_POST['last_name'])||empty($_POST['email'])
            ||empty($_POST['headline'])||empty($_POST['summary'])) 
          echo '<script>alert("All the fields are required")</script>';
          
            else{
                if($_POST['email'] != ''){
                    // The email to validate
                    $email = $_POST['email'];
            
                    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {{
                        $email=$_POST['email'];
                
                $_SESSION['first_name']=$_POST['first_name'];
                $_SESSION['last_name']=$_POST['last_name'];		
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['headline'] = $_POST['headline'];
                $_SESSION['summary'] = $_POST['summary'];

        
                $first_name=$_SESSION['first_name'];
                $last_name=$_SESSION['last_name'];
                $email=$_SESSION['email'];
                $headline=$_SESSION['headline'];
                $summary=$_SESSION['summary'];

        
                $con= mysqli_connect("localhost", "root","", "misc");
                $query="UPDATE profile
                SET  first_name = '$first_name', last_name= '$last_name' , email= '$email' , headline= '$headline' , summary= '$summary'
                WHERE user_id=$id;
                ";
            
                $res =  mysqli_query($con,$query);
            if ($res ==1 && $res ==1 ) {//run the query
            header("location: index2.php");
            echo '<script>alert("Everything went successfuly,thnk you")</script>';}
                else
            echo '<script>alert("Something went wrong,try again")</script>';
        
                mysqli_close($con);
            
            
        
            
        
            }}else {
                ?> <script>  alert("your email is not valid");</script><?php
              }
        }}}}