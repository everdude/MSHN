<?php $policies = simplexml_load_file("xml/policies.xml"); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>General Management Policies | MSHN - Mid-State Health Network</title>
	<meta name="description" content="General Management Policies">
	<meta name="keywords" content="General Management Policies">
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/head.php'); ?>
</head>
<!--[if lte IE 8]><body class="ie" id="policies"><![endif]-->
<!--[if gte IE 9]><!--><body id="policies"><!--<![endif]-->
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/header.php'); ?>
			<section id="promo">
				<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/promo.php'); ?>
			</section>
			<section id="content">
					<h2>General Management Policies</h2>
					<p id="related">Related: <a href="GeneralManagement-forms.php">Forms</a> | <a href="GeneralManagement-procedures.php">Procedures</a></p>
<h3>General Management</h3>
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
$GM = $policies->xpath("/policies/policy[@chapter='General Management']");
foreach($GM as $GMpolicy){
?>
	<li><span class="number"><?php echo $GMpolicy->id; ?></span> <span class="policy"><a target="_blank" href="docs/policies/<?php echo $GMpolicy->link; ?>"><?php echo $GMpolicy->title; ?></a></span> <span class="adapted"><?php echo $GMpolicy->adopted; ?></span> <span class="review-cycle"><?php echo $GMpolicy->review_cycle; ?></span> <span class="review-date"><?php echo $GMpolicy->review_date; ?></span> <span class="revision-date"><?php echo $GMpolicy->revision_date; ?></span> 
	<?php 
	if (empty($GMpolicy->related)) {
		echo "</li>";
	}
	else { ?>
		<a class='related' onclick='toggle("<?php echo $GMpolicy->id; ?>");'>Related <img src='../images/close.png' alt='' id='img_<?php echo $GMpolicy->id; ?>' width='11' height='11' /></a>
		<div class='closed' id='ul_<?php echo $GMpolicy->id; ?>'>
			<div class="fourCol">
			<?php if(!empty($GMpolicy->related->rpolicy)) { ?>
				<h4>Related Policies</h4>
				<ul>
				<?php
				$GMRpolicy = $GMpolicy->related;
				foreach($GMRpolicy->rpolicy as $GMRpolicies){ ?>
					<li><a target='_blank' href='docs/policies/<?php echo $GMRpolicies->Plink; ?>'><?php echo $GMRpolicies->Ptitle; ?></a></li>
				<?php } ?>
				</ul>
			<?php } ?>
			</div>
			<div class="fourCol">
			<?php if(!empty($GMpolicy->related->rprocedure)) { ?>
				<h4>Related Procedures</h4>
				<ul>
				<?php
				$GMRprocedure = $GMpolicy->related;
				foreach($GMRprocedure->rprocedure as $GMRprocedures){ ?>
					<li><a target='_blank' href='docs/procedures/<?php echo $GMRprocedures->procedureLink; ?>'><?php echo $GMRprocedures->procedure; ?></a></li>
				<?php } ?>
				</ul>
			<?php } ?>
			</div>
			<div class="fourCol last">
			<?php if(!empty($GMpolicy->related->rform)) { ?>
				<h4>Related Forms</h4>
				<ul>
				<?php
				$GMRform = $GMpolicy->related;
				foreach($GMRform->rform as $GMRforms){ ?>
					<li><a target='_blank' href='docs/forms/<?php echo $GMRforms->Flink; ?>'><?php echo $GMRforms->Ftitle; ?></a></li>
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