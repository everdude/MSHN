<?php $policies = simplexml_load_file("xml/policies.xml"); ?>					
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Utilization Management Policies | MSHN - Mid-State Health Network</title>
	<meta name="description" content="Utilization Management Policies">
	<meta name="keywords" content="Utilization Management Policies">
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/head.php'); ?>
</head>
<!--[if lte IE 8]><body class="ie" id="policies"><![endif]-->
<!--[if gte IE 9]><!--><body id="policies"><!--<![endif]-->
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/header.php'); ?>
			<section id="promo">
				<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/promo.php'); ?>
			</section>
			<section id="content">
					<h2>Utilization Management Policies</h2>
<?php $procedures = $policies->xpath("/policies/policy[@chapter='Utilization Management']/related/rprocedure"); 
if(!empty($procedures)) { ?>
					<p id="related">Related: <a href="UtilizationManagement-procedures.php">Procedures</a></p>
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
$UM = $policies->xpath("/policies/policy[@chapter='Utilization Management']");
foreach($UM as $UMpolicy){
?>
	<li><span class="number"><?php echo $UMpolicy->id; ?></span> <span class="policy"><a target="_blank" href="docs/policies/<?php echo $UMpolicy->link; ?>"><?php echo $UMpolicy->title; ?></a></span> <span class="adapted"><?php echo $UMpolicy->adopted; ?></span> <span class="review-cycle"><?php echo $UMpolicy->review_cycle; ?></span> <span class="review-date"><?php echo $UMpolicy->review_date; ?></span> <span class="revision-date"><?php echo $UMpolicy->revision_date; ?></span> 
	<?php 
	if (empty($UMpolicy->related)) {
		echo "</li>";
	}
	else { ?>
		<a class='related' onclick='toggle("<?php echo $UMpolicy->id; ?>");'>Related <img src='../images/close.png' alt='' id='img_<?php echo $UMpolicy->id; ?>' width='11' height='11' /></a>
		<div class='closed' id='ul_<?php echo $UMpolicy->id; ?>'>
			<div class="fourCol">
			<?php if(!empty($UMpolicy->related->rpolicy)){ ?>
				<h4>Related Policies</h4>
				<ul>
				<?php
				$UMRpolicy = $UMpolicy->related;
				foreach($UMRpolicy->rpolicy as $UMRpolicies){ ?>
					<li><a target='_blank' href='docs/policies/<?php echo $UMRpolicies->Plink; ?>'><?php echo $UMRpolicies->Ptitle; ?></a></li>
				<?php } ?>
				</ul>
			<?php } ?>
			</div>
			<div class="fourCol">
			<?php if(!empty($UMpolicy->related->rprocedure)){ ?>
				<h4>Related Procedures</h4>
				<ul>
				<?php
				$UMRprocedure = $UMpolicy->related;
				foreach($UMRprocedure->rprocedure as $UMRprocedures){ ?>
					<li><a target='_blank' href='docs/procedures/<?php echo $UMRprocedures->procedureLink; ?>'><?php echo $UMRprocedures->procedure; ?></a></li>
				<?php } ?>
				</ul>
			<?php } ?>
			</div>
			<div class="fourCol last">
			<?php if(!empty($UMpolicy->related->rform)){ ?>
				<h4>Related Forms</h4>
				<ul>
				<?php
				$UMRform = $UMpolicy->related;
				foreach($UMRform->rform as $UMRforms){ ?>
					<li><a target='_blank' href='docs/forms/<?php echo $UMRforms->Flink; ?>'><?php echo $UMRforms->Ftitle; ?></a></li>
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