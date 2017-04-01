<?php $policies = simplexml_load_file("xml/policies.xml"); ?>					
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Quality Policies | MSHN - Mid-State Health Network</title>
	<meta name="description" content="Quality Policies">
	<meta name="keywords" content="Quality Policies">
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/head.php'); ?>
</head>
<!--[if lte IE 8]><body class="ie" id="policies"><![endif]-->
<!--[if gte IE 9]><!--><body id="policies"><!--<![endif]-->
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/header.php'); ?>
			<section id="promo">
				<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/promo.php'); ?>
			</section>
			<section id="content">
					<h2>Quality Policies</h2>
<?php $procedures = $policies->xpath("/policies/policy[@chapter='Quality']/related/rprocedure"); 
if(!empty($procedures)) { ?>
					<p id="related">Related: <a href="Quality-forms.php">Forms</a> | <a href="Quality-procedures.php">Procedures</a></p>
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
$Q = $policies->xpath("/policies/policy[@chapter='Quality']");
foreach($Q as $Qpolicy){
?>
	<li><span class="number"><?php echo $Qpolicy->id; ?></span> <span class="policy"><a target="_blank" href="docs/policies/<?php echo $Qpolicy->link; ?>"><?php echo $Qpolicy->title; ?></a></span> <span class="adapted"><?php echo $Qpolicy->adopted; ?></span> <span class="review-cycle"><?php echo $Qpolicy->review_cycle; ?></span> <span class="review-date"><?php echo $Qpolicy->review_date; ?></span> <span class="revision-date"><?php echo $Qpolicy->revision_date; ?></span> 
	<?php 
	if (empty($Qpolicy->related)) {
		echo "</li>";
	}
	else { ?>
		<a class='related' onclick='toggle("<?php echo $Qpolicy->id; ?>");'>Related <img src='../images/close.png' alt='' id='img_<?php echo $Qpolicy->id; ?>' width='11' height='11' /></a>
		<div class='closed' id='ul_<?php echo $Qpolicy->id; ?>'>
			<div class="fourCol">
			<?php if(!empty($Qpolicy->related->rpolicy)){ ?>
				<h4>Related Policies</h4>
				<ul>
				<?php
				$QRpolicy = $Qpolicy->related; 
				foreach($QRpolicy->rpolicy as $QRpolicies){ ?>
					<li><a target='_blank' href='docs/policies/<?php echo $QRpolicies->Plink; ?>'><?php echo $QRpolicies->Ptitle; ?></a></li>
				<?php } ?>
				</ul>
			<?php } ?>
			</div>
			<div class="fourCol">
			<?php if(!empty($Qpolicy->related->rprocedure)){ ?>
				<h4>Related Procedures</h4>
				<ul>
				<?php
				$QRprocedure = $Qpolicy->related; 
				foreach($QRprocedure->rprocedure as $QRprocedures){ ?>
					<li><a target='_blank' href='docs/procedures/<?php echo $QRprocedures->procedureLink; ?>'><?php echo $QRprocedures->procedure; ?></a></li>
				<?php } ?>
				</ul>
			<?php } ?>
			</div>
			<div class="fourCol last">
			<?php if(!empty($Qpolicy->related->rform)){ ?>
				<h4>Related Forms</h4>
				<ul>
				<?php
				$QRform = $Qpolicy->related; 
				foreach($QRform->rform as $QRforms){ ?>
					<li><a target='_blank' href='docs/forms/<?php echo $QRforms->Flink; ?>'><?php echo $QRforms->Ftitle; ?></a></li>
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