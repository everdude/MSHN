<?php $policies = simplexml_load_file("xml/policies.xml"); ?>					
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Provider Network Policies | MSHN - Mid-State Health Network</title>
	<meta name="description" content="Provider Network Policies">
	<meta name="keywords" content="Provider Network Policies">
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/head.php'); ?>
</head>
<!--[if lte IE 8]><body class="ie" id="policies"><![endif]-->
<!--[if gte IE 9]><!--><body id="policies"><!--<![endif]-->
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/header.php'); ?>
			<section id="promo">
				<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/promo.php'); ?>
			</section>
			<section id="content">
					<h2>Provider Network Policies</h2>
					<p id="related">Related: <a href="ProviderNetwork-forms.php">Forms</a> | <a href="ProviderNetwork-procedures.php">Procedures</a></p>
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
$PN = $policies->xpath("/policies/policy[@chapter='Provider Network']");
foreach($PN as $PNpolicy){
?>
	<li><span class="number"><?php echo $PNpolicy->id; ?></span> <span class="policy"><a target="_blank" href="docs/policies/<?php echo $PNpolicy->link; ?>"><?php echo $PNpolicy->title; ?></a></span> <span class="adapted"><?php echo $PNpolicy->adopted; ?></span> <span class="review-cycle"><?php echo $PNpolicy->review_cycle; ?></span> <span class="review-date"><?php echo $PNpolicy->review_date; ?></span> <span class="revision-date"><?php echo $PNpolicy->revision_date; ?></span> 
	<?php 
	if (empty($PNpolicy->related)) {
		echo "</li>";
	}
	else { ?>
		<a class='related' onclick='toggle("<?php echo $PNpolicy->id; ?>");'>Related <img src='../images/close.png' alt='' id='img_<?php echo $PNpolicy->id; ?>' width='11' height='11' /></a>
		<div class='closed' id='ul_<?php echo $PNpolicy->id; ?>'>
			<div class="fourCol">
			<?php if(!empty($PNpolicy->related->rpolicy)) { ?>
				<h4>Related Policies</h4>
				<ul>
				<?php
				$PNRpolicy = $PNpolicy->related;
				foreach($PNRpolicy->rpolicy as $PNRpolicies){ ?>
					<li><a target='_blank' href='docs/policies/<?php echo $PNRpolicies->Plink; ?>'><?php echo $PNRpolicies->Ptitle; ?></a></li>
				<?php } ?>
				</ul>
			<?php } ?>
			</div>
			<div class="fourCol">
			<?php if(!empty($PNpolicy->related->rprocedure)) { ?>
				<h4>Related Procedures</h4>
				<ul>
				<?php
				$PNRprocedure = $PNpolicy->related;
				foreach($PNRprocedure->rprocedure as $PNRprocedures){ ?>
					<li><a target='_blank' href='docs/procedures/<?php echo $PNRprocedures->procedureLink; ?>'><?php echo $PNRprocedures->procedure; ?></a></li>
				<?php } ?>
				</ul>
			<?php } ?>
			</div>
			<div class="fourCol last">
			<?php if(!empty($PNpolicy->related->rform)) { ?>
				<h4>Related Forms</h4>
				<ul>
				<?php
				$PNRform = $PNpolicy->related;
				foreach($PNRform->rform as $PNRforms){ ?>
					<li><a target='_blank' href='docs/forms/<?php echo $PNRforms->Flink; ?>'><?php echo $PNRforms->Ftitle; ?></a></li>
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