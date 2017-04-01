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
	<title>Behavioral Health Provider Network | MSHN - Mid-State Health Network</title>
	<meta name="description" content="Behavioral Health Provider Network">
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
			<div class="eightCol">
				<h2>Behavioral Health Provider Network</h2>
				<div class="row">
					<div class="sixCol">
						<ul class="provider-list">
						  <li><span class="option1"></span> Bay-Arenac Behavioral Health <br>
						  1.800.327.4693 - <a href="http://www.babha.org/" target="_blank">Website</a></li>
							<li><span class="option2"></span> CMH for Clinton, Eaton, Ingham Counties<br>
							1.888.800.1559 - <a href="http://www.ceicmh.org/" target="_blank">Website</a></li>
							<li><span class="option3"></span> CMH for Central Michigan <br>
							  1.800.317.0708 - <a href="http://cmhcm.org/" target="_blank">Website</a></li>
							<li><span class="option4"></span> Gratiot County CMH Services<br>
							  1.800.622.5583 - <a href="http://www.gccmha.org/" target="_blank">Website</a></li>
							<li><span class="option5"></span> Huron County Behavioral Health<br>
							  1.800.356.5568 - <a href="http://www.huroncmh.org" target="_blank">Website</a></li>
							<li><span class="option6"></span> The Right Door (Ionia County CMH) <br>
							  1.888.527.1790 - <a href="http://www.ioniacmhs.org/" target="_blank">Website</a></li>
						</ul>
					</div>
					<div class="sixCol last">
						<ul class="provider-list">
							<li><span class="option7"></span> Lifeways CMH Authority <br>
							  1.800.284.8288 - <a href="http://www.lifewayscmh.org/" target="_blank">Website</a></li>
							<li><span class="option8"></span> Montcalm Care Network <br>
							  1.800.377.0974 - <a href="http://www.montcalmcenter.org/" target="_blank">Website</a></li>
							<li><span class="option9"></span> Newaygo County - Mental Health Center <br>
							  1.800.968.7330 - <a href="http://www.newaygocmh.org/" target="_blank">Website</a></li>
							<li><span class="option10"></span> Saginaw County CMH Authority <br>
							  1.800.258.8678 - <a href="https://www.sccmha.org/" target="_blank">Website</a></li>
							<li><span class="option11"></span> Shiawassee County CMH Authority <br>
							  1.800.622.4514 - <a href="http://www.shiacmh.org/" target="_blank">Website</a></li>
							<li><span class="option12"></span> Tuscola Behavioral Health Systems <br>
							  1.800.462.6814 - <a href="http://www.tbhsonline.com/" target="_blank">Website</a></li>
						</ul>
					</div>
				</div>
				<form method="post" action="Behavioral-Health.php#pn-list" id="provider-form">
					<p>Select your location 
					<select name="location" id="location">
						<option>-- Please Select --</option>
						<option class="option1" value="Bay-Arenac">Bay-Arenac</option>
						<option class="option2" value="CEI">CEI &ndash; Clinton, Eaton, Ingham</option>
						<option class="option3" value="CMHCM">CMHCM &ndash; Osceola, Clare, Gladwin, Mecosta, Isabella, Midland</option>
						<option class="option4" value="Gratiot">Gratiot</option>
						<option class="option5" value="Huron">Huron</option>
						<option class="option6" value="Ionia">Ionia</option>
						<option class="option7" value="Lifeways">Lifeways &ndash; Jackson, Hillsdale</option>
						<option class="option8" value="Montcalm">Montcalm</option>
						<option value="Newaygo">Newaygo</option>
						<option class="option10" value="Saginaw">Saginaw</option>
						<option class="option11" value="Shiawassee">Shiawassee</option>
						<option class="option12" value="Tuscola">Tuscola</option>
				  </select> <input type="submit" value="Go"></p>
				</form>
					<?php 
						if ($location1 == NULL) {
						}
						else{
						?>
							<h3>Location: <?php echo $location; ?></h3>
							<ul id="pn-list">
							<?php
							$data = simplexml_load_file ("xml/providers.xml");
							$providers = $data->xpath("/providers/provider[@location='".$location1."']");
							foreach($providers as $item) {
					?>
						<li>
							<span class="name"><?php echo $item->name; ?></span> <span class="site"><?php echo $item->site; ?></span><br>
							<div class="address"><?php echo $item->address.' '.$item->address2.'&nbsp; &nbsp;'.$item->city.', '.$item->state.' '.$item->zip; ?></div>
							<span class="services"><?php echo $item->services; ?></span><br>
							<span class="member"><?php echo $item->member; ?></span>	
						</li>
					<?php } ?>
					</ul> 
					<?php } ?>
				</div>
				<div class="fourCol last">
					<img class="img-sizer" src="../images/provider-map.gif" alt="provider network county map">
				</div>
				</section>
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/footer.php'); ?>
</body>
</html>