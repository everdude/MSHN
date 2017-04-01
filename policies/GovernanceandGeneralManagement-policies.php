<?php $policies = simplexml_load_file("xml/policies.xml"); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Governance and General Management Policies | MSHN - Mid-State Health Network</title>
	<meta name="description" content="Governance and General Management Policies">
	<meta name="keywords" content="Governance and General Management Policies">
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/head.php'); ?>
</head>
<!--[if lte IE 8]><body class="ie" id="policies"><![endif]-->
<!--[if gte IE 9]><!--><body id="policies"><!--<![endif]-->
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/header.php'); ?>
			<section id="promo">
				<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/promo.php'); ?>
			</section>
			<section id="content">
					<h2>Governance and General Management Policies</h2>
<?php $procedures = $policies->xpath("/policies/policy[@chapter='Governance and General Management']/related/rprocedure"); 
if(!empty($procedures)) { ?>
					<p id="related">Related: <a href="GovernanceandGeneralManagement-procedures.php">Procedures</a></p>
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
$GGM = $policies->xpath("/policies/policy[@chapter='Governance and General Management']");
foreach($GGM as $GGMpolicy){
?>
	<li><span class="number"><?php echo $GGMpolicy->id; ?></span> <span class="policy"><a target="_blank" href="docs/policies/<?php echo $GGMpolicy->link; ?>"><?php echo $GGMpolicy->title; ?></a></span> <span class="adapted"><?php echo $GGMpolicy->adopted; ?></span> <span class="review-cycle"><?php echo $GGMpolicy->review_cycle; ?></span> <span class="review-date"><?php echo $GGMpolicy->review_date; ?></span> <span class="revision-date"><?php echo $GGMpolicy->revision_date; ?></span> 
	<?php 
	if (empty($GGMpolicy->related)) {
		echo "</li>";
	}
	else { ?>
		<a class='related' onclick='toggle("<?php echo $GGMpolicy->id; ?>");'>Related <img src='../images/close.png' alt='' id='img_<?php echo $GGMpolicy->id; ?>' width='11' height='11' /></a>
		<div class='closed' id='ul_<?php echo $GGMpolicy->id; ?>'>
			<div class="fourCol">
			<?php if(!empty($GGMpolicy->related->rpolicy)){ ?>
				<h4>Related Policies</h4>
				<ul>
				<?php
				$GGMRpolicy = $GGMpolicy->related; 
				foreach($GGMRpolicy->rpolicy as $GGMRpolicies){?>
					<li><a target='_blank' href='docs/policies/<?php echo $GGMRpolicies->Plink; ?>'><?php echo $GGMRpolicies->Ptitle; ?></a></li>
				<?php } ?>
				</ul>
			<?php } ?>
			</div>
			<div class="fourCol">
			<?php if(!empty($GGMpolicy->related->rprocedure)){ ?>
				<h4>Related Procedures</h4>
				<ul>
				<?php
				$GGMRprocedure = $GGMpolicy->related; 
				foreach($GGMRprocedure->rprocedure as $GGMRprocedures){?>
					<li><a target='_blank' href='docs/procedures/<?php echo $GGMRprocedures->procedureLink; ?>'><?php echo $GGMRprocedures->procedure; ?></a></li>
				<?php } ?>
				</ul>
			<?php } ?>
			</div>
			<div class="fourCol last">
			<?php if(!empty($GGMpolicy->related->rform)){ ?>
				<h4>Related Forms</h4>
				<ul>
				<?php
				$GGMRform = $GGMpolicy->related; 
				foreach($GGMRform->rform as $GGMRforms){?>
					<li><a target='_blank' href='docs/forms/<?php echo $GGMRforms->Flink; ?>'><?php echo $GGMRforms->Ftitle; ?></a></li>
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