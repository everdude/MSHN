<?php
$loc = $_POST["loc"];
$location1 = $_POST["location"];
$location = $loc.$location1;
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Substance Use Disorder Provider Network | MSHN - Mid-State Health Network</title>
	<meta name="description" content="Substance Use Disorder Provider Network">
	<meta name="keywords" content="">
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/head.php'); ?>
</head>
<!--[if lte IE 8]><body class="ie" id="provider"><![endif]-->
<!--[if gte IE 9]><!--><body id="provider"><!--<![endif]-->
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/header.php'); ?>
			<section id="promo">
				<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/promo.php'); ?>
			</section>
			<section id="content">
				<div class="row">
					<div class="eightCol">
						<h2>Search Substance Use Disorder Providers in the Network</h2>
						<h3>Mid-State Health Network</h3>
						<p>530 W. Ionia, Ste.F Lansing, MI 48933<br>
						<strong>P</strong> 517.253.7525<br>
						<strong>F</strong> 517.253.7552 / 517.574.4093</p>
						
						<div class="box">
						<h3>Substance Use Disorder Providers by County</h3>
												<hr>
<?php
$servername = "localhost";
$database = "midsta16_SUD_Providers";
$username = "midsta16_sud";
$password = "R3g10n_*5";
?>						
				<form method="post" action="Search-Provider.php#pn-list" id="provider-form">
					<p><label for="location">Select your location</label>
					<select name="location" id="location">
						<option>-- Please Select --</option>
<?php						
try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$sql = "SELECT DISTINCT County FROM SUD_Providers  ORDER BY county";
		foreach ($conn->query($sql) as $row) { ?>
			<option value="<?php echo  $row['County']; ?>"><?php echo  $row['County']; ?></option>
		<?php }

    }
catch(PDOException $e)
    {
    }?>
				  </select> <input type="submit" value="Go"></p>
				</form>	
			
				<?php 
						if ($location1 == NULL) {
						}
						else{
						?>
				<h3>Providers in <?php echo $location; ?> County</h3>
				<ul id="pn-list">
<?php
try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
		$sql = "SELECT * FROM SUD_Providers  WHERE County='".$location1."' ORDER BY name";
		foreach ($conn->query($sql) as $row) { ?>
			<li><span class="name"><?php if($row['Website']!=""){ ?><a href="<?php echo $row['Website']; ?>"> <?php echo  $row['Name']; ?></a><?php } else { echo $row['Name']; }?></span><br>
			<?php echo $row['Address'].", ".$row['City'].", ".$row['State']." ".$row['Zip']; ?><br>
			<?php if($row['Phone']!=""){ ?><span class="tabs"><strong>Tel: </strong><?php echo $row['Phone']."</span>"; } if($row['Fax']!="") { ?> <span class="tabs"><strong>Fax: </strong><?php echo $row['Fax']."</span>"; } if($row['email']!=""){ ?><strong>Email:</strong> <a href="mailto:<?php echo $row['email'];?>"><?php echo $row['email'];?></a><?php } ?><br>
			<?php if($row['Services']!=""){?>
			<strong>Services Provided:</strong><br>
			<?php echo $row['Services']; }?>
			</li>
		<?php }

    }
catch(PDOException $e)
    {
    }
?>
					</ul> 
					<?php }  // end location != null ?>	
						</div>

					</div>
					<div class="fourCol last">
						<img class="img-sizer" src="../images/SUD-provider-map.gif" alt="Substance Use Disorder Provider Network county map">
						<p class="compliance">MSHN Access/UM Line <br><span>1.844.405.3095</span></p>
						<p class="compliance">MSHN Customer Service Line <br><span>1.844.405.3094</span></p>
						<p class="compliance">MSHN Compliance Line <br><span>1.844.793.1288</span></p>
					</div>
				</div>	
			</section>
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/footer.php'); ?>
</body>
</html>