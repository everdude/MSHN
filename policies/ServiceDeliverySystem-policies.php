<?php $policies = simplexml_load_file("xml/policies.xml"); ?>					
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Service Delivery System Policies | MSHN - Mid-State Health Network</title>
	<meta name="description" content="Service Delivery System Policies">
	<meta name="keywords" content="Service Delivery System Policies">
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/head.php'); ?>
</head>
<!--[if lte IE 8]><body class="ie" id="policies"><![endif]-->
<!--[if gte IE 9]><!--><body id="policies"><!--<![endif]-->
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/header.php'); ?>
			<section id="promo">
				<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/promo.php'); ?>
			</section>
			<section id="content">
					<h2>Service Delivery System Policies</h2>
<?php $procedures = $policies->xpath("/policies/policy[@chapter='Service Delivery System']/related/rprocedure"); 
if(!empty($procedures)) { ?>
					<p id="related">Related: <a href="ServiceDeliverySystem-procedures.php">Procedures</a></p>
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
$SDS = $policies->xpath("/policies/policy[@chapter='Service Delivery System']");
foreach($SDS as $SDSpolicy){
?>
	<li><span class="number"><?php echo $SDSpolicy->id; ?></span> <span class="policy"><a target="_blank" href="docs/policies/<?php echo $SDSpolicy->link; ?>"><?php echo $SDSpolicy->title; ?></a></span> <span class="adapted"><?php echo $SDSpolicy->adopted; ?></span> <span class="review-cycle"><?php echo $SDSpolicy->review_cycle; ?></span> <span class="review-date"><?php echo $SDSpolicy->review_date; ?></span> <span class="revision-date"><?php echo $SDSpolicy->revision_date; ?></span> 
	<?php 
	if (empty($SDSpolicy->related)) {
		echo "</li>";
	}
	else { ?>
		<a class='related' onclick='toggle("<?php echo $SDSpolicy->id; ?>");'>Related <img src='../images/close.png' alt='' id='img_<?php echo $SDSpolicy->id;?>' width='11' height='11' /></a>
		<div class='closed' id='ul_<?php echo $SDSpolicy->id; ?>'>
			<div class="fourCol">
			<?php if(!empty($SDSpolicy->related->rpolicy)) { ?>
				<h4>Related Policies</h4>
				<ul>
				<?php 
				$SDSRpolicy = $SDSpolicy->related;
				foreach($SDSRpolicy->rpolicy as $SDSRpolicies){ ?>
					<li><a target='_blank' href='docs/policies/<?php echo $SDSRpolicies->Plink; ?>'><?php echo $SDSRpolicies->Ptitle; ?></a></li>
				<?php } ?>
				</ul>
			<?php } ?>
			</div>
			<div class="fourCol">
			<?php if(!empty($SDSpolicy->related->rprocedure)) { ?>
				<h4>Related Procedures</h4>
				<ul>
				<?php 
				$SDSRprocedure = $SDSpolicy->related;
				foreach($SDSRprocedure->rprocedure as $SDSRprocedures){ ?>
					<li><a target='_blank' href='docs/procedures/<?php echo $SDSRprocedures->procedureLink; ?>'><?php echo $SDSRprocedures->procedure; ?></a></li>
				<?php } ?>
				</ul>
			<?php } ?>
			</div>
			<div class="fourCol last">
			<?php if(!empty($SDSpolicy->related->rform)) { ?>
				<h4>Related Forms</h4>
				<ul>
				<?php 
				$SDSRform = $SDSpolicy->related;
				foreach($SDSRform->rform as $SDSRforms){ ?>
					<li><a target='_blank' href='docs/forms/<?php echo $SDSRforms->Flink; ?>'><?php echo $SDSRforms->Ftitle; ?></a></li>
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