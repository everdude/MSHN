<?php $policies = simplexml_load_file("xml/policies.xml"); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Customer Service Policies | MSHN - Mid-State Health Network</title>
	<meta name="description" content="Customer Service Policies">
	<meta name="keywords" content="Customer Service, Policies">
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/head.php'); ?>
</head>
<!--[if lte IE 8]><body class="ie" id="policies"><![endif]-->
<!--[if gte IE 9]><!--><body id="policies"><!--<![endif]-->
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/header.php'); ?>
			<section id="promo">
				<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/promo.php'); ?>
			</section>
			<section id="content">
					<h2>Customer Service Policies</h2>
<?php $procedures = $policies->xpath("/policies/policy[@chapter='Customer Service']/related/rprocedure"); 
if(!empty($procedures)) { ?>
					<p id="related">Related: <a href="CustomerService-procedures.php">Procedures</a></p>
<?php } ?>					
<h3>Customer Service</h3>
<div class="holder">
	<ul class="key">
		<li class="number">#</li>
		<li class="policy">Policy</li>
		<li class="adapted">Adopted Date</li>
		<li class="review-cycle">Review Cycle</li>
		<li class="review-date">Review Date</li>
		<li class="revision-date">Revision Date</li>
		<li class="related">Related Docs</li>
	</ul>
<ul class="DeptPolicies">
<?php
$CS = $policies->xpath("/policies/policy[@chapter='Customer Service']");
foreach($CS as $CSpolicy){
?>
	<li><span class="number"><?php echo $CSpolicy->id; ?></span> <span class="policy"><a target="_blank" href="docs/policies/<?php echo $CSpolicy->link; ?>"><?php echo $CSpolicy->title; ?></a></span> <span class="adapted"><?php echo $CSpolicy->adopted; ?></span> <span class="review-cycle"><?php echo $CSpolicy->review_cycle; ?></span> <span class="review-date"><?php echo $CSpolicy->review_date; ?></span> <span class="revision-date"><?php echo $CSpolicy->revision_date; ?></span> 
	<?php 
	if (empty($CSpolicy->related)) {
		echo "</li>";
	}
	else { ?>
		<a class='related' onclick='toggle("<?php echo $CSpolicy->id; ?>");'>Related <img src='../images/close.png' alt='' id='img_<?php echo $CSpolicy->id; ?>' width='11' height='11' /></a>
		<div class='closed' id='ul_<?php echo $CSpolicy->id; ?>'>
			<div class="fourCol">
			<?php if(!empty($CSpolicy->related->rpolicy)){ ?>
				<h4>Related Policies</h4>
				<ul>
				<?php
				$CSRpolicy = $CSpolicy->related;
				foreach($CSRpolicy->rpolicy as $CSRpolicies){ ?>
					<li><a target='_blank' href='docs/policies/<?php echo $CSRpolicies->Plink; ?>'><?php echo $CSRpolicies->Ptitle; ?></a></li>
				<?php } ?>
				</ul>
			<?php } ?>
			</div>
			<div class="fourCol">
			<?php if(!empty($CSpolicy->related->rprocedure)) { ?>
				<h4>Related Procedures</h4>
				<ul>
				<?php
				$CSRprocedure = $CSpolicy->related;
				foreach ($CSRprocedure->rprocedure as $CSRprocedures) { ?>
					<li><a target="_blank" href="docs/procedures/<?php echo $CSRprocedures->procedureLink; ?>"><?php echo $CSRprocedures->procedure; ?></a></li>
				<?php } ?>
				</ul>
			<?php } ?>
			</div>
			<div class="fourCol last">
			<?php if(!empty($CSpolicy->related->rform)) { ?>
				<h4>Related Forms</h4>
				<ul>
				<?php
				$CSRform = $CSpolicy->related;
				foreach ($CSRform->rform as $CSRforms) { ?>
					<li><a target="_blank" href="docs/forms/<?php echo $CSRforms->Flink; ?>"><?php echo $CSRforms->Ftitle; ?></a></li>
				<?php } ?>
				</ul>
			<?php } ?>
			</div>
		</div>
</li>
<?php
	}
}
?>
</ul>
</div>
			</section>
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/footer.php');?>
<script type="text/javascript">function toggle(id){ ul = "ul_" + id; img = "img_" + id; ulElement = document.getElementById(ul); imgElement = document.getElementById(img); if (ulElement){ if (ulElement.className == 'closed'){ ulElement.className = "open"; imgElement.src = "../images/open.png"; }else{ ulElement.className = "closed"; imgElement.src = "../images/close.png"; } } }</script>
</body>
</html>