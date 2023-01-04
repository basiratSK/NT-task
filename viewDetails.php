<!DOCTYPE html>
<html>
<head>
	<link href="jGrowl/jquery.jgrowl.css" rel="stylesheet" media="screen"/>
	<script src="js/jquery-1.9.1.min.js"></script>
	<?php 
        include('dbconn.php'); 
        include('session.php');
        include('header.php'); 
    ?>
   
</head>

<body>
    <?php 
        $username   = $member_row['username'];
        $password   = $member_row['password'];  //while($r = $results->fetch_assoc()){
         $query = "SELECT * FROM user WHERE username= '$username' AND password='$password'";
         $results = mysqli_query($conn, $query);
             while ($r = mysqli_fetch_array($results)) {
    ?>
    <br>
	<div class="title text-center"><h2><label>Welcome <?php echo $member_row['firstname']." ".$member_row['lastname'];?></label></h2></div>
	<br><br>

	<div align="right">
		<?php
            if($r['role']=='Editor'){ ?>
            <a href="editorview.php"><button class="btn btn-primary">View Posts</button></a>
        <?php }else{ ?>
        <a href="home.php"><button class="btn btn-primary">Add/View Posts</button></a>
        <?php }?>
			<a href="updateDetails.php"><button class="btn btn-primary">Update Profile</button></a>
			<a href="logout.php"><button class="btn btn-primary">Log Out</button></a>
	</div>
		<br>
		<br>
        
    <div id="container">
    <div><table class="table" style="color:gray">
    <tr>
        <th>User ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Email</th>
        <th>Role</th>
     </tr>
     <tr>
        <td><?php echo $r['user_id']?></td>
        <td><?php echo $r['firstname']?></td>
        <td><?php echo $r['lastname']?></td>
        <td><?php echo $r['username']?></td>
        <td><?php echo $r['role']?></td>
     </tr>
    <?php 
    }
    ?>
</table>
</div>
<br>

<?php include('scripts.php');?>

</body>
</html>