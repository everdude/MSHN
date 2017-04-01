<?php $policies = simplexml_load_file("xml/policies.xml"); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Human Resources Policies | MSHN - Mid-State Health Network</title>
	<meta name="description" content="Human Resources Policies">
	<meta name="keywords" content="Policies">
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/head.php'); ?>
</head>
<!--[if lte IE 8]><body class="ie" id="policies"><![endif]-->
<!--[if gte IE 9]><!--><body id="policies"><!--<![endif]-->
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/header.php'); ?>
			<section id="promo">
				<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/promo.php'); ?>
			</section>
			<section id="content">
					<h2>Human Resources Policies</h2>
<?php $procedures = $policies->xpath("/policies/policy[@chapter='Human Resources']/related/rprocedure"); 
if(!empty($procedures)) { ?>
					<p id="related">Related: <a href="HumanResources-forms.php">Forms</a> | <a href="HumanResources-procedures.php">Procedures</a></p>
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
$HR = $policies->xpath("/policies/policy[@chapter='Human Resources']");
foreach($HR as $HRpolicy){
?>
	<li><span class="number"><?php echo $HRpolicy->id; ?></span> <span class="policy"><a target="_blank" href="docs/policies/<?php echo $HRpolicy->link; ?>"><?php echo $HRpolicy->title; ?></a></span> <span class="adapted"><?php echo $HRpolicy->adopted; ?></span> <span class="review-cycle"><?php echo $HRpolicy->review_cycle; ?></span> <span class="review-date"><?php echo $HRpolicy->review_date; ?></span> <span class="revision-date"><?php echo $HRpolicy->revision_date; ?></span> 
	<?php 
	if (empty($HRpolicy->related)) {
		echo "</li>";
	}
	else { ?>
		<a class='related' onclick='toggle("<?php echo $HRpolicy->id; ?>");'>Related <img src='../images/close.png' alt='' id='img_<?php echo $HRpolicy->id; ?>' width='11' height='11' /></a>
		<div class='closed' id='ul_<?php echo $HRpolicy->id; ?>'>
			<div class="fourCol">
			<?php if(!empty($HRpolicy->related->rpolicy)) { ?>
				<h4>Related Policies</h4>
				<ul>
				<?php
				$HRRpolicy = $HRpolicy->related;
				foreach($HRRpolicy->rpolicy as $HRRpolicies){ ?>
					<li><a target='_blank' href='docs/policies/<?php echo $HRRpolicies->Plink; ?>'><?php echo $HRRpolicies->Ptitle; ?></a></li>
				<?php } ?>
				</ul>
			<?php } ?>
			</div>
			<div class="fourCol">
			<?php if(!empty($HRpolicy->related->rprocedure)) { ?>
				<h4>Related Procedures</h4>
				<ul>
				<?php
				$HRRprocedure = $HRpolicy->related;
				foreach($HRRprocedure->rprocedure as $HRRprocedures){ ?>
					<li><a target='_blank' href='docs/procedures/<?php echo $HRRprocedures->procedureLink; ?>'><?php echo $HRRprocedures->procedure; ?></a></li>
				<?php } ?>
				</ul>
			<?php } ?>
			</div>
			<div class="fourCol last">
			<?php if(!empty($HRpolicy->related->rform)) { ?>
				<h4>Related Forms</h4>
				<ul>
				<?php
				$HRRform = $HRpolicy->related;
				foreach($HRRform->rform as $HRRforms){ ?>
					<li><a target='_blank' href='docs/forms/<?php echo $HRRforms->Flink; ?>'><?php echo $HRRforms->Ftitle; ?></a></li>
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