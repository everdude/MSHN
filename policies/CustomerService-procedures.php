<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Customer Service Procedures | MSHN - Mid-State Health Network</title>
	<meta name="description" content="Customer Service Procedures">
	<meta name="keywords" content="">
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/head.php'); ?>
</head>
<!--[if lte IE 8]><body class="ie" id="policies"><![endif]-->
<!--[if gte IE 9]><!--><body id="policies"><!--<![endif]-->
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/header.php'); ?>
			<section id="promo">
				<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/promo.php'); ?>
			</section>
			<section id="content">
			<h2>Customer Service Procedrues</h2>
			<p id="related">Related: <a href="CustomerService-policies.php">Policies</a></p>
			<ul>
<?php 
$data = simplexml_load_file("xml/policies.xml");
$procedures = $data->xpath("/policies/policy[@chapter='Customer Service']/related/rprocedure");

// load xml data into array so we can sort them alphabetically
$alpha = array();
foreach($procedures as $procedure){
	$alpha["$procedure->procedure"] = $procedure->procedureLink; 
}
ksort($alpha);
foreach ($alpha as $test => $test_value){ ?>
	<li><a target="_blank" href="/policies/docs/procedures/<?php echo $procedure->procedureLink; ?>"><?php echo $procedure->procedure; ?></a></li>
<?php
}
?>
			</ul>
			</section>
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/footer.php');?>
</body>
</html>