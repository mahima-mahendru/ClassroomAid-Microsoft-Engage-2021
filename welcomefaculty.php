<?php
session_start();

if ( $_SESSION[ "fidx" ] == "" || $_SESSION[ "fidx" ] == NULL ) {
	header( 'Location:facultylogin' );
}

$userid = $_SESSION[ "fidx" ];
$fname = $_SESSION[ "fname" ];

?>
<?php include('fhead.php');  ?>
<div class="container">
	<div class="row">

		<div class="col-md-12 text-center">
			<!--Welcome page for faculty-->
			<h3> Welcome Faculty : <a href="welcomefaculty.php" ><span style="color:#FF0004"> <?php echo $fname; ?></span></h3>
			</a> 
			<a href="mydetailsfaculty.php?myfid=<?php echo $userid ?>"><button  href="" type="submit" class="btn btn-primary" style="border-radius:0%"><i class="fa fa-user"></i> My Profile</button></a>
			
			<a href="videos.php"> <button  href="" type="submit" class="btn btn-primary" style="border-radius:0%"><i class="fa fa-video-camera"></i> Videos</button>
			  
			<a href="logoutfaculty"><button  href="" type="submit" class="btn btn-danger" style="border-radius:0%">Logout</button></a>

		</div>



	</div>
	<?php include('allfoot.php');  ?>