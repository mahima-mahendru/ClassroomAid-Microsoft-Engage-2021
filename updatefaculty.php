<?php
session_start();

if($_SESSION["umail"]=="" || $_SESSION["umail"]==NULL)
{
header('Location:AdminLogin.php');
}

$userid = $_SESSION["umail"];
?><?php include('after-login.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Classroom-Aid</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  
</head>

<body>

 
  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
        <h3 class="page-header">Welcome <a href="welcomeadmin">Admin</a> </h3>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
      <?php
				include("database.php");
				$new2=$_GET['fid'];
				
     			$sql="select * from  facutlytable where FID=$new2";
				$result=mysqli_query($connect,$sql);
				
				while($row=mysqli_fetch_array($result))
				{ 
				?>
				<form action="" method="POST" name="update">
				<div class="form-group">
				Faculty ID : <?php echo $row['FID']; ?></div>
				<div class="form-group">
				Faculty Name : <input type="text" name="fname" class="form-control" value="<?php echo $row['FName']; ?>"></div>
				<div class="form-group">
				Father Name : <input type="text" name="faname" class="form-control" value="<?PHP echo $row['FaName'];?>"><br></div>
				<div class="form-group">
				Address : <input type="text" name="addrs" class="form-control" rows="5" cols="40" value="<?PHP echo $row['Addrs'];?>"><br></div>
				<div class="form-group">
				Gender : <input type="text" name="gender" class="form-control" value="<?PHP echo $row['Gender'];?>"><br></div>
				<div class="form-group">
				Phone Number : <input type="tel" name="phno" class="form-control" value="<?PHP echo $row['PhNo'];?>" maxlength="10"><br></div>
				<div class="form-group">
				Joining Date : <input type="date" name="jdate" class="form-control" value="<?PHP echo $row['JDate'];?>" readonly> <br></div>
				<div class="form-group">
				City : <input type="text" name="city" class="form-control" value="<?PHP echo $row['City'];?>" ><br></div>
				<div class="form-group">
				Password : <input type="text" name="pass" class="form-control" value="<?PHP echo $row['Pass'];?>" maxlength="10"><br></div><br>
				<div class="form-group">
				<input type="submit" value="Make Changes" name="update" class="btn btn-success" style="border-radius:0%"></div>
				
				</form>
				<?php
				}
				?>
           
          <?php
		if(isset($_POST['update']))		
			{
				$tempfname=$_POST['fname'];				
				$tempfaname=$_POST['faname'];
				$tempaddrs=$_POST['addrs'];					
				$tempgender=$_POST['gender'];
				$tempphno=$_POST['phno'];
				$tempcity=$_POST['city'];
				$temppass=$_POST['pass'];
				//below SQL query will update the existing faculty 
				$sql="UPDATE `facutlytable` SET FName='$tempfname',FaName='$tempfaname',Addrs='$tempaddrs', Gender='$tempgender', City='$tempcity',Pass='$temppass', PhNo=$tempphno WHERE FID=$new2"; 
				
				$query_run=mysqli_query($connect, $sql);

				//alert message
                if($query_run)
				{
					$_SESSION['status']="Updated Successfully!";
					$_SESSION['status_code']="success";
		
				}
				else
				{
					$_SESSION['status']="Updated Unsuccessful!";
					$_SESSION['status_code']="error";
			

				}
						
				//for close connection
					mysqli_close($connect);

			} 
				?>

      </div>
    </section>

  </main><!-- End #main -->

 <!-- ======= Footer ======= -->
 <footer id="footer">
    
   
</footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <?php include('alert.php'); ?>

</body>

</html>

