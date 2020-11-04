
<title>Jad Nehme</title>
<h1>Profile information</h1><br>
<?php 

session_start();


	if (isset($_GET['id'])) {
		$id = $_GET['id'];
        
        

        $con= mysqli_connect("localhost", "root","", "misc");
$sql = "SELECT * from profile where user_id=$id  ";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
      $first_name=$row["first_name"];
      $last_name=$row["last_name"];
      $email=$row["email"];
      $headline=$row["headline"];
      $summary=$row["summary"];?>

      
      First name : <?php echo $row['first_name'];?><br>
      Last name : <?php echo $row['last_name'];?><br>
    Email : <?php echo $row['email'];?><br>
      Headline : <?php echo $row['headline'];?><br>
      Summary : <?php echo $row['summary'];?><br>

<?php
    }}}

?>