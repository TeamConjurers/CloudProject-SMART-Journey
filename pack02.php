<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>SMART Journey | Market Place</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Arial, Helvetica, sans-serif;}

.navbar01 {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

.navbar01 a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
  width: 25%; /* Four links of equal widths */
  text-align: center;
}

.navbar01 a:hover {
  background-color: #000;
}

.navbar01 a.active {
  background-color: #04AA6D;
}

@media screen and (max-width: 500px) {
  .navbar01 a {
    float: none;
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
</head>
<body>
<?php include('includes/header.php');?>
<!--- banner ---->
<div class="banner-3">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">Market Place</h1>
	</div>
</div>
<div class="navbar01">
  <a href="pack01.php">Traveling Equipments</a> 
  <a href="pack02.php">Transportation Services</a> 
  <a href="pack03.php">Accommodation</a> 
  <a href="pack04.php">Clothing</a>
</div>

<!--- /banner ---->
<!--- rooms ---->
<div class="rooms">
	<div class="container">
		
		<div class="room-bottom">
			<h3>Transportation Services</h3>

					
<?php $sql = "SELECT * from tblmarketplace03";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
			<div class="rom-btm">
				<div class="col-md-3 room-left wow fadeInLeft animated" data-wow-delay=".5s">
					<img src="admin/pacakgeimages/<?php echo htmlentities($result->ProductImage);?>" class="img-responsive" alt="">
				</div>
				<div class="col-md-6 room-midle wow fadeInUp animated" data-wow-delay=".5s">
					<h4>Vehicle Name: <?php echo htmlentities($result->ProductName);?></h4>
					<h6>Vehicle Type : <?php echo htmlentities($result->ProductType);?></h6>
					<p><b>Provider Details :</b> <?php echo htmlentities($result->SellerDetails);?></p>
					<p><b>Contact No:</b> <?php echo htmlentities($result->ProductFeatures);?></p>
				</div>
				<div class="col-md-3 room-right wow fadeInRight animated" data-wow-delay=".5s">
					<h5>Rs. <?php echo htmlentities($result->ProductPrice);?></h5>
					<a href="product-details02.php?pkgid=<?php echo htmlentities($result->AddT03_id);?>" class="view">Details</a>
				</div>
				<div class="clearfix"></div>
			</div>

<?php }} ?>
			
		
		
		</div>
	</div>
</div>
<!--- /rooms ---->

<!--- /footer-top ---->
<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>			
<!-- //write us -->
</body>
</html>
