

<!DOCTYPE html>
<html>
<head>


<title>Jad Nehme</title>
<!-- bootstrap.php - this is HTML -->

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
<div class="container">
<h4>
<p><a href="index.php">Logout</a></p>
</h4>



<table >
	<thead>
		<tr>
			<th>Name &nbsp</th>
			<th> headline &nbsp</th>
            <th colspan="2"> Action</th>
			
		</tr>
	</thead>
    <tr>
<?php
$con= mysqli_connect("localhost", "root","", "misc");
$sql = "SELECT users.name,users.user_id,profile.headline FROM users,profile where users.user_id=profile.user_id ";
$result = mysqli_query($con, $sql);


if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
      $name=$row["name"];
      $headline=$row["headline"];
        $user_id=$row["user_id"];
      ?>
      <tr>
   <td><a href="view.php?id=<?php echo $row['user_id']; ?>"  >  <?php echo $row['name']; ?> </a></td>
			<td><?php echo $row['headline']; ?></td> 

            <td><a href="edit.php?id=<?php echo $row['user_id']; ?>"  >  edit &nbsp </a></td>
            <td><a href="delete.php?id=<?php echo $row['user_id']; ?>"  > delete </a></td>
	  </tr>
<?php  }}




?>

</tr>
</table>
<p><a href="#">Add a new entry</a></p>
</body>
