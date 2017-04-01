<?php $policies = simplexml_load_file("xml/policies.xml"); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Information Technology Policies | MSHN - Mid-State Health Network</title>
	<meta name="description" content="Information Technology Policies">
	<meta name="keywords" content="Information Technology Policies">
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/head.php'); ?>
</head>
<!--[if lte IE 8]><body class="ie" id="policies"><![endif]-->
<!--[if gte IE 9]><!--><body id="policies"><!--<![endif]-->
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/header.php'); ?>
			<section id="promo">
				<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/promo.php'); ?>
			</section>
			<section id="content">
					<h2>Information Technology Policies</h2>
<?php $procedures = $policies->xpath("/policies/policy[@chapter='Information Technology']/related/rprocedure"); 
if(!empty($procedures)) { ?>
					<p id="related">Related: <a href="InformationTechnology-procedures.php">Procedures</a></p>
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
$IT = $policies->xpath("/policies/policy[@chapter='Information Technology']");
foreach($IT as $ITpolicy){
?>
	<li><span class="number"><?php echo $ITpolicy->id; ?></span> <span class="policy"><a target="_blank" href="docs/policies/<?php echo $ITpolicy->link; ?>"><?php echo $ITpolicy->title; ?></a></span> <span class="adapted"><?php echo $ITpolicy->adopted; ?></span> <span class="review-cycle"><?php echo $ITpolicy->review_cycle; ?></span> <span class="review-date"><?php echo $ITpolicy->review_date; ?></span> <span class="revision-date"><?php echo $ITpolicy->revision_date; ?></span> 
	<?php 
	if (empty($ITpolicy->related)) {
		echo "</li>";
	}
	else { ?>
		<a class='related' onclick='toggle("<?php echo $ITpolicy->id; ?>");'>Related <img src='../images/close.png' alt='' id='img_<?php echo $ITpolicy->id; ?>' width='11' height='11' /></a>
		<div class='closed' id='ul_<?php echo $ITpolicy->id; ?>'>
			<div class="fourCol">
			<?php if(!empty($ITpolicy->related->rpolicy)) { ?>
				<h4>Related Policies</h4>
				<ul>
				<?php
				$ITRpolicy = $ITpolicy->related;
				foreach($ITRpolicy->rpolicy as $ITRpolicies){ ?>
					<li><a target='_blank' href='docs/policies/<?php echo $ITRpolicies->Plink; ?>'><?php echo $ITRpolicies->Ptitle; ?></a></li>
				<?php } ?>
				</ul>
			<?php } ?>
			</div>
			<div class="fourCol">
			<?php if(!empty($ITpolicy->related->rprocedure)) { ?>
				<h4>Related Procedures</h4>
				<ul>
				<?php
				$ITRprocedure = $ITpolicy->related;
				foreach($ITRprocedure->rprocedure as $ITRprocedures){ ?>
					<li><a target='_blank' href='docs/procedures/<?php echo $ITRprocedures->procedureLink; ?>'><?php echo $ITRprocedures->procedure; ?></a></li>
				<?php } ?>
				</ul>
			<?php } ?>
			</div>
			<div class="fourCol last">
			<?php if(!empty($ITpolicy->related->rform)) { ?>
				<h4>Related Forms</h4>
				<ul>
				<?php
				$ITRform = $ITpolicy->related;
				foreach($ITRform->rform as $ITRforms){ ?>
					<li><a target='_blank' href='docs/forms/<?php echo $ITRforms->Flink; ?>'><?php echo $ITRforms->Ftitle; ?></a></li>
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