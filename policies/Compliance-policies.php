<?php $policies = simplexml_load_file("xml/policies.xml"); ?>					
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Compliance Policies | MSHN - Mid-State Health Network</title>
	<meta name="description" content="Compliance Policies">
	<meta name="keywords" content="Compliance, Policies">
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/head.php'); ?>
</head>
<!--[if lte IE 8]><body class="ie" id="policies"><![endif]-->
<!--[if gte IE 9]><!--><body id="policies"><!--<![endif]-->
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/header.php'); ?>
			<section id="promo">
				<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/promo.php'); ?>
			</section>
			<section id="content">
					<h2>Compliance Policies</h2>
<?php $procedures = $policies->xpath("/policies/policy[@chapter='Compliance']/related/rprocedure"); 
if(!empty($procedures)) { ?>					
					<p id="related">Related: <a href="Compliance-procedures.php">Procedures</a></p>
<?php } ?>					
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
$comp = $policies->xpath("/policies/policy[@chapter='Compliance']");
foreach($comp as $compPolicy){
?>
	<li><span class="number"><?php echo $compPolicy->id; ?></span> <span class="policy"><a target="_blank" href="docs/policies/<?php echo $compPolicy->link; ?>"><?php echo $compPolicy->title; ?></a></span> <span class="adapted"><?php echo $compPolicy->adopted; ?></span> <span class="review-cycle"><?php echo $compPolicy->review_cycle; ?></span> <span class="review-date"><?php echo $compPolicy->review_date; ?></span> <span class="revision-date"><?php echo $compPolicy->revision_date; ?></span> 
	<?php 
	if (empty($compPolicy->related)) {
		echo "</li>";
	}
	else { ?>
		<a class='related' onclick='toggle("<?php echo $compPolicy->id; ?>");'>Related <img src='../images/close.png' alt='' id='img_<?php echo $compPolicy->id; ?>' width='11' height='11' /></a>
		<div class='closed' id='ul_<?php echo $compPolicy->id; ?>'>
			<div class="fourCol">
			<?php if(!empty($compPolicy->related->rpolicy)){ ?>
				<h4>Related Policies</h4>
				<ul>
				<?php
				$compRpolicy = $compPolicy->related;
				foreach($compRpolicy->rpolicy as $compRpolicies){ ?>
					<li><a target='_blank' href='docs/policies/<?php echo $compRpolicies->Plink; ?>'><?php echo $compRpolicies->Ptitle; ?></a></li>
				<?php } ?>
				</ul>
			<?php } ?>
			</div>
			<div class="fourCol">
			<?php if(!empty($compPolicy->related->rprocedure)) { ?>
				<h4>Related Policies</h4>
				<ul>
				<?php
				$compRprocedure = $compPolicy->related;
				foreach($compRprocedure->rprocedure as $compRprocedures){ ?>
					<li><a target='_blank' href='docs/procedures/<?php echo $compRprocedures->procedurelink; ?>'><?php echo $compRprocedures->procedure; ?></a></li>
				<?php } ?>
				</ul>
			<?php } ?>
			</div>
			<div class="fourCol last">
			<?php if(!empty($compPolicy->related->rform)) { ?>
				<h4>Related Forms</h4>
				<ul>
				<?php
				$compRform = $compPolicy->related;
				foreach($compRform->rform as $compRforms){ ?>
					<li><a target='_blank' href='docs/forms/<?php echo $compRforms->Flink; ?>'><?php echo $compRforms->Ftitle; ?></a></li>
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