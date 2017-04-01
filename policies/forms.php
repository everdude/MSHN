<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Forms | MSHN - Mid-State Health Network</title>
	<meta name="description" content="Forms">
	<meta name="keywords" content="Forms">
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/head.php'); ?>
</head>
<!--[if lte IE 8]><body class="ie" id="policies"><![endif]-->
<!--[if gte IE 9]><!--><body id="policies"><!--<![endif]-->
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/header.php'); ?>
<section id="promo">
	<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/promo.php'); ?>
</section>
<section id="content">
	<h2>Forms</h2>
	<p id="related">Related: <a href="policies.php">Policies</a> | <a href="procedures.php">Procedures</a></p>
<ul>
<?php $data = simplexml_load_file("xml/policies.xml");
$forms = $data->xpath("/policies/policy/related/rform");

// load xml data into array so we can sort them alphabetically
$alpha = array();
foreach($forms as $form){
	$alpha["$form->Ftitle"] = $form->Flink; 
}
ksort($alpha);
foreach ($alpha as $test => $test_value){ ?>
	<li><a target="_blank" href="/policies/docs/forms/<?php echo $test_value; ?>"><?php echo $test; ?></a></li> <?php echo "\n";
}
?>
</ul>
</section>
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/footer.php');?>
</body>
</html>