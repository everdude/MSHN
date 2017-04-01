<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Policies &amp; Procedures | MSHN - Mid-State Health Network</title>
	<meta name="description" content="">
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
			<div class="eightCol">
			<h2>Policies &amp; Procedures</h2>
<!--------------------- START POLICIES --------------------------->
<div class="box">
<h3>Policies</h3>
<ul class="pp-list">
<li><a href="Compliance-policies.php">Compliance</a></li>
<li><a href="CustomerService-policies.php">Customer Service</a></li>
<li><a href="Finance-policies.php">Finance</a></li>
<li><a href="GeneralManagement-policies.php">General Management</a></li>
<li><a href="GovernanceandGeneralManagement-policies.php">Governance and General Management</a></li>
<li><a href="HumanResources-policies.php">Human Resources</a></li>
<li><a href="InformationTechnology-policies.php">Information Technology</a></li>
<li><a href="ProviderNetwork-policies.php">Provider Network</a></li>
<li><a href="Quality-policies.php">Quality</a></li>
<li><a href="ServiceDeliverySystem-policies.php">Service Delivery System</a></li>
<li><a href="UtilizationManagement-policies.php">Utilization Management</a></li>
<li><a href="policies.php">Complete List of Policies</a></li>
</ul>
<!--------------------- END POLICIES --------------------------->
</div>

<!--------------------- START PROCEDURES  ----------------->
<div class="box">
<h3>Procedures</h3>
<ul class="pp-list">
<?php $data = simplexml_load_file("xml/policies.xml");

// Compliance
$Pcomps = $data->xpath("/policies/policy[@chapter='Compliance']");
$iComp=0;
foreach($Pcomps as $Pcomp){
	if(!empty($Pcomp->related->rprocedure)){
		$href = str_replace(' ', '', $Pcomp->attributes()->chapter);
		?>
		<li><a href="<?php echo $href; ?>-procedures.php"><?php echo $Pcomp->attributes()->chapter; ?></a></li>
		<?php
		$iComp++;
	}
	if($iComp==1) break;
}

// Customer Service
$Pcss = $data->xpath("/policies/policy[@chapter='Customer Service']");
$iCs=0;
foreach($Pcss as $Pcs){

	if (!empty($Pcs->related->rprocedure)) {
		$href = str_replace(' ', '', $Pcs->attributes()->chapter); // removes spaces from chapter to form valid href
	?>
	<li><a href="<?php echo $href; ?>-procedures.php"><?php echo $Pcs->attributes()->chapter; ?></a></li>
<?php
		$iCs++;
	}
	if($iCs==1) break;
}

// Finance
$Pfins = $data->xpath("/policies/policy[@chapter='Finance']");
$iFin=0;
foreach($Pfins as $Pfin){

	if (!empty($Pfin->related->rprocedure)) {
		$href = str_replace(' ', '', $Pfin->attributes()->chapter); // removes spaces from chapter to form valid href
	?>
	<li><a href="<?php echo $href; ?>-procedures.php"><?php echo $Pfin->attributes()->chapter; ?></a></li>
<?php
		$iFin++;
	}
	if($iFin==1) break;
}

// General Management
$Pgms = $data->xpath("/policies/policy[@chapter='General Management']");
$iGm=0;
foreach($Pgms as $Pgm){

	if (!empty($Pgm->related->rprocedure)) {
		$href = str_replace(' ', '', $Pgm->attributes()->chapter); // removes spaces from chapter to form valid href
	?>
	<li><a href="<?php echo $href; ?>-procedures.php"><?php echo $Pgm->attributes()->chapter; ?></a></li>
<?php
		$iGm++;
	}
	if($iGm==1) break;
}

// Governance and General Management
$Pggms = $data->xpath("/policies/policy[@chapter='Governance and General Management']");
$iGgm=0;
foreach($Pggms as $Pggm){

	if (!empty($Pggm->related->rprocedure)) {
		$href = str_replace(' ', '', $Pggm->attributes()->chapter); // removes spaces from chapter to form valid href
	?>
	<li><a href="<?php echo $href; ?>-procedures.php"><?php echo $Pggm->attributes()->chapter; ?></a></li>
<?php
		$iGgm++;
	}
	if($iGgm==1) break;
}

// Human Resources
$Phrs = $data->xpath("/policies/policy[@chapter='Human Resources']");
$iHr=0;
foreach($Phrs as $Phr){

	if (!empty($Phr->related->rprocedure)) {
		$href = str_replace(' ', '', $Phr->attributes()->chapter); // removes spaces from chapter to form valid href
	?>
	<li><a href="<?php echo $href; ?>-procedures.php"><?php echo $Phr->attributes()->chapter; ?></a></li>
<?php
		$iHr++;
	}
	if($iHr==1) break;
}

// Information Technology
$Pits = $data->xpath("/policies/policy[@chapter='Information Technology']");
$iIt=0;
foreach($Pits as $Pit){

	if (!empty($Pit->related->rprocedure)) {
		$href = str_replace(' ', '', $Pit->attributes()->chapter); // removes spaces from chapter to form valid href
	?>
	<li><a href="<?php echo $href; ?>-procedures.php"><?php echo $Pit->attributes()->chapter; ?></a></li>
<?php
		$iIt++;
	}
	if($iIt==1) break;
}

// Provider Network
$Ppns = $data->xpath("/policies/policy[@chapter='Provider Network']");
$iPn=0;
foreach($Ppns as $Ppn){

	if (!empty($Ppn->related->rprocedure)) {
		$href = str_replace(' ', '', $Ppn->attributes()->chapter); // removes spaces from chapter to form valid href
	?>
	<li><a href="<?php echo $href; ?>-procedures.php"><?php echo $Ppn->attributes()->chapter; ?></a></li>
<?php
		$iPn++;
	}
	if($iPn==1) break;
}

// Quality
$Pqtys = $data->xpath("/policies/policy[@chapter='Quality']");
$iQ=0;
foreach($Pqtys as $Pqty){

	if (!empty($Pqty->related->rprocedure)) {
		$href = str_replace(' ', '', $Pqty->attributes()->chapter); // removes spaces from chapter to form valid href
	?>
	<li><a href="<?php echo $href; ?>-procedures.php"><?php echo $Pqty->attributes()->chapter; ?></a></li>
<?php
		$iQ++;
	}
	if($iQ==1) break;
}

// Service Delivery System
$Psdss = $data->xpath("/policies/policy[@chapter='Service Delivery System']");
$iSds=0;
foreach($Psdss as $Psds){

	if (!empty($Psds->related->rprocedure)) {
		$href = str_replace(' ', '', $Psds->attributes()->chapter); // removes spaces from chapter to form valid href
	?>
	<li><a href="<?php echo $href; ?>-procedures.php"><?php echo $Psds->attributes()->chapter; ?></a></li>
<?php
		$iSds++;
	}
	if($iSds==1) break;
}

// Utilization Management
$Pums = $data->xpath("/policies/policy[@chapter='Utilization Management']");
$iUm=0;
foreach($Pums as $Pum){

	if (!empty($Pum->related->rprocedure)) {
		$href = str_replace(' ', '', $Pum->attributes()->chapter); // removes spaces from chapter to form valid href
	?>
	<li><a href="<?php echo $href; ?>-procedures.php"><?php echo $Pum->attributes()->chapter; ?></a></li>
<?php
		$iUm++;
	}
	if($iUm==1) break;
}
?>
<li><a href="procedures.php">Complete List of Procedures</a></li>
</ul>
</div>
<!--------------------- END PROCEDURES --------------------------->

<!--------------------- START FORMS  ----------------->
<div class="box">
<h3>Forms</h3>
<ul class="pp-list">
<?php

// Compliance
$Fcomps = $data->xpath("/policies/policy[@chapter='Compliance']");
$FiComp=0;
foreach($Fcomps as $Fcomp){
	if(!empty($Fcomp->related->rform)){
		$href = str_replace(' ', '', $Fcomp->attributes()->chapter);
		?>
		<li><a href="<?php echo $href; ?>-forms.php"><?php echo $Fcomp->attributes()->chapter; ?></a></li>
		<?php
		$FiComp++;
	}
	if($FiComp==1) break;
}

// Customer Service
$Fcss = $data->xpath("/policies/policy[@chapter='Customer Service']");
$FiCs=0;
foreach($Fcss as $Fcs){

	if (!empty($Fcs->related->rform)) {
		$href = str_replace(' ', '', $Fcs->attributes()->chapter); // removes spaces from chapter to form valid href
	?>
	<li><a href="<?php echo $href; ?>-forms.php"><?php echo $Fcs->attributes()->chapter; ?></a></li>
<?php
		$FiCs++;
	}
	if($FiCs==1) break;
}

// Finance
$Ffins = $data->xpath("/policies/policy[@chapter='Finance']");
$FiFin=0;
foreach($Ffins as $Ffin){

	if (!empty($Ffin->related->rform)) {
		$href = str_replace(' ', '', $Ffin->attributes()->chapter); // removes spaces from chapter to form valid href
	?>
	<li><a href="<?php echo $href; ?>-forms.php"><?php echo $Ffin->attributes()->chapter; ?></a></li>
<?php
		$FiFin++;
	}
	if($FiFin==1) break;
}

// General Management
$Fgms = $data->xpath("/policies/policy[@chapter='General Management']");
$FiGm=0;
foreach($Fgms as $Fgm){

	if (!empty($Fgm->related->rform)) {
		$href = str_replace(' ', '', $Fgm->attributes()->chapter); // removes spaces from chapter to form valid href
	?>
	<li><a href="<?php echo $href; ?>-forms.php"><?php echo $Fgm->attributes()->chapter; ?></a></li>
<?php
		$FiGm++;
	}
	if($FiGm==1) break;
}

// Governance and General Management
$Fggms = $data->xpath("/policies/policy[@chapter='Governance and General Management']");
$FiGgm=0;
foreach($Fggms as $Fggm){

	if (!empty($Fggm->related->rform)) {
		$href = str_replace(' ', '', $Fggm->attributes()->chapter); // removes spaces from chapter to form valid href
	?>
	<li><a href="<?php echo $href; ?>-forms.php"><?php echo $Fggm->attributes()->chapter; ?></a></li>
<?php
		$FiGgm++;
	}
	if($FiGgm==1) break;
}

// Human Resources
$Fhrs = $data->xpath("/policies/policy[@chapter='Human Resources']");
$FiHr=0;
foreach($Fhrs as $Fhr){

	if (!empty($Fhr->related->rform)) {
		$href = str_replace(' ', '', $Fhr->attributes()->chapter); // removes spaces from chapter to form valid href
	?>
	<li><a href="<?php echo $href; ?>-forms.php"><?php echo $Fhr->attributes()->chapter; ?></a></li>
<?php
		$FiHr++;
	}
	if($FiHr==1) break;
}

// Information Technology
$Fits = $data->xpath("/policies/policy[@chapter='Information Technology']");
$FiIt=0;
foreach($Fits as $Fit){

	if (!empty($Fit->related->rform)) {
		$href = str_replace(' ', '', $Fit->attributes()->chapter); // removes spaces from chapter to form valid href
	?>
	<li><a href="<?php echo $href; ?>-forms.php"><?php echo $Fit->attributes()->chapter; ?></a></li>
<?php
		$FiIt++;
	}
	if($FiIt==1) break;
}

// Provider Network
$Fpns = $data->xpath("/policies/policy[@chapter='Provider Network']");
$FiPn=0;
foreach($Fpns as $Fpn){

	if (!empty($Fpn->related->rform)) {
		$href = str_replace(' ', '', $Fpn->attributes()->chapter); // removes spaces from chapter to form valid href
	?>
	<li><a href="<?php echo $href; ?>-forms.php"><?php echo $Fpn->attributes()->chapter; ?></a></li>
<?php
		$FiPn++;
	}
	if($FiPn==1) break;
}

// Quality
$Fqtys = $data->xpath("/policies/policy[@chapter='Quality']");
$FiQ=0;
foreach($Fqtys as $Fqty){

	if (!empty($Fqty->related->rform)) {
		$href = str_replace(' ', '', $Fqty->attributes()->chapter); // removes spaces from chapter to form valid href
	?>
	<li><a href="<?php echo $href; ?>-forms.php"><?php echo $Fqty->attributes()->chapter; ?></a></li>
<?php
		$FiQ++;
	}
	if($FiQ==1) break;
}

// Service Delivery System
$Fsdss = $data->xpath("/policies/policy[@chapter='Service Delivery System']");
$FiSds=0;
foreach($Fsdss as $Fsds){

	if (!empty($Fsds->related->rform)) {
		$href = str_replace(' ', '', $Fsds->attributes()->chapter); // removes spaces from chapter to form valid href
	?>
	<li><a href="<?php echo $href; ?>-forms.php"><?php echo $Fsds->attributes()->chapter; ?></a></li>
<?php
		$FiSds++;
	}
	if($FiSds==1) break;
}

// Utilization Management
$Fums = $data->xpath("/policies/policy[@chapter='Utilization Management']");
$FiUm=0;
foreach($Fums as $Fum){

	if (!empty($Fum->related->rform)) {
		$href = str_replace(' ', '', $Fum->attributes()->chapter); // removes spaces from chapter to form valid href
	?>
	<li><a href="<?php echo $href; ?>-forms.php"><?php echo $Fum->attributes()->chapter; ?></a></li>
<?php
		$FiUm++;
	}
	if($FiUm==1) break;
}
?>
<li><a href="forms.php">Complete List of Forms</a></li>
</ul>
</div>
<!--------------------- END FORMS --------------------------->
</div>
				<div class="fourCol last">
				<h3>Dashboard</h3>
				<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/dashboard.php'); ?>
				</div>
			</section>
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/footer.php');?>
</body>
</html>