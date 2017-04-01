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
						<h2>Substance Use Disorder Provider Network</h2>
						<h3>Mid-State Health Network</h3>
						<p>530 W. Ionia, Ste.F Lansing, MI 48933<br>
						<strong>P</strong> 517.253.7525<br>
						<strong>F</strong> 517.253.7552 / 517.574.4093</p>						
						<div class="box">
						<h3>Search Substance Use Disorder Providers</h3>
						<ul class="pp-list">
							<li><a href="Search-Provider.php">Search Providers</a></li>
						</ul>
						</div>
						<div class="box">
						<h3>Provider Resources</h3>
						<ul>
						<li><a target="_blank" href="/provider-network/docs/MSHN SUD Provider Manual Final 10-8-15.pdf">MSHN SUD Provider Manual</a></li>
						<li><a target="_blank" href="/provider-network/docs/SUD Provider Manual 4-6-15.pdf">SUD Services Policy Manual</a> <em>(FY15 Attachment, etc)</em></li>
						<li><a target="_blank" href="/provider-network/docs/FY2015-16MSHN-SUD-Provider-Timeline-Reporting-Requirements.pdf">FY2015-16 Timeline Reporting Requirements</a></li>
						<li><a target="_blank" href="/provider-network/docs/SUDDirectoryInformationUpdate.docx">SUD Directory Information Update Form</a></li>
					</ul>
						<ul class="pp-list">
							<li><a href="Provider-Applications.php">Provider Applications - Initial Credentialing</a></li>
							<li><a href="Compliance-Forms.php">Compliance</a></li>
							<li><a href="Quality-Forms.php">Quality</a></li>
							<li><a href="Customer-Service.php">Customer Service</a></li>
							<li><a href="Finance-Forms.php">Finance Forms</a></li>
							<li><a href="CareNet-Access.php">CareNet Access - Request</a></li>
						</ul>
						<ul class="pp-list">
							<li><a href="Provider-Newsletter.php">Provider Newsletter</a></li>
						</ul>
						</div>
						
						<iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=vdo4lnqf7346hg6blu918e217o%40group.calendar.google.com&amp;color=%23AB8B00&amp;ctz=America%2FNew_York" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
						
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