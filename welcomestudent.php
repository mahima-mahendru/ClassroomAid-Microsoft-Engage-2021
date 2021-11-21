	<?php
session_start();

if ( $_SESSION[ "sidx" ] == "" || $_SESSION[ "sidx" ] == NULL ) {
	header( 'Location:studentlogin' );
}

$userid = $_SESSION[ "sidx" ];
$userfname = $_SESSION[ "fname" ];
$sEno = $_SESSION[ "seno" ];
$userlname = $_SESSION[ "lname" ];
?>
<?php include('studenthead.php'); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<!--Welcome page for student-->
			<h3> Welcome <?php echo "<span style='color:red'>".$userfname." ".$userlname."</span>";?></h3>

			<a href="mydetailsstudent.php?myds=<?php echo $userid;  ?>"> <button type="submit" class="btn btn-success" style="border-radius:0%;" title="My Details"><i class="fa fa-user"></i> My Profile</button></a>
			
			<a href="viewvideos.php?eid=<?php echo $userid;  ?>"> <button  href="" type="submit" class="btn btn-success" style="border-radius:0%;"><i class="fa fa-video-camera"></i> Videos (E-Learn)</button></a>
			
			<a href="logoutstudent"><button  href="" type="submit" class="btn btn-danger" style="border-radius:0%;">Logout</button></a>

		</div>

	</div>
	<?php include('allfoot.php'); ?>