	<?php
session_start();

if ( $_SESSION[ "sidx" ] == "" || $_SESSION[ "sidx" ] == NULL ) {
	header( 'Location:studentlogin' );
}

$userid = $_SESSION[ "sidx" ];
$userfname = $_SESSION[ "fname" ];
$userlname = $_SESSION[ "lname" ];
?>

<?php include('studenthead.php'); ?>

<div class="container">
	<div class="row">
		

		<div class="col-md-12">
			<h1> Welcome <a href="welcomestudent.php" <?php echo "<span style='color:red'>".				
			$userfname." ".$userlname."</span>";?> </a></h1>
			
		<?php 
			
			include('database.php');
			$video_id= $_GET['viewid'];
			$sql="SELECT * FROM video WHERE V_id=$video_id";
			$rs=mysqli_query($connect,$sql);?>			
			<?php
			while($row=mysqli_fetch_array($rs))
				{
				?>
					<tr>
						<td>
							<h2>Subject: <?PHP echo $row['V_Title'];?></h2>
						</td>
						<br>
						<br>
						<td>
							<h2> Description: <?PHP echo $row['V_Remarks'];?> </h2>
						</td>
						<br>
						<td>
				
						<a href="<?php echo $row['V_Url']; ?>"><input type=	"button" Value="Join The Class"  class="btn btn-info" style="border-radius:0%"  data-toggle="modal" data-target="#myModal"></a>
						</td>
                        <br>				
						<br>						
						<br>
						<td><a href="viewvideos.php"> <input type=	"button" Value="Back"  class="btn btn-info" style="border-radius:0%"  data-toggle="modal" data-target="#myModal"></a>
						</td>
					</tr>
				<?php
				}
				?>
		
	</div>

		
	</div>
	<?php include('allfoot.php');  ?>
