
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
        
        First name:<?php echo $first_name?><br>
        Last name:<?php echo $last_name?><br>
       
        <br>
      
        
        <br><br>
        
        <input type="submit" name="submit"  value=" Delete ">
        
        <input type="submit" name="cancel"  value=" cancel ">
    </form>
        </form>
        
        
        
        
        
        <?php
        if (isset($_POST['submit'])) {
           
               
                $con= mysqli_connect("localhost", "root","", "misc");
                $query="DELETE FROM users WHERE user_id=$id;
                ";
            
                $res =  mysqli_query($con,$query);
            if ($res ==1 && $res ==1 ) {//run the query
            header("location: index2.php");
            echo '<script>alert("Everything went successfuly,thnk you")</script>';}
                else
            echo '<script>alert("Something went wrong,try again")</script>';
        
                mysqli_close($con);
            
            
        
            
        
            }else {
                
              }}
            