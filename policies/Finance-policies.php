<?php $policies = simplexml_load_file("xml/policies.xml"); ?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Finance Policies | MSHN - Mid-State Health Network</title>
	<meta name="description" content="Finance Policies">
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
					<h2>Finance Policies</h2>
<?php $procedures = $policies->xpath("/policies/policy[@chapter='Finance']/related/rprocedure"); 
if(!empty($procedures)) { ?>				
					<p id="related">Related: <a href="Finance-procedures.php">Procedures</a></p>
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
$F = $policies->xpath("/policies/policy[@chapter='Finance']");
foreach($F as $Fpolicy){
?>
	<li><span class="number"><?php echo $Fpolicy->id; ?></span> <span class="policy"><a target="_blank" href="docs/policies/<?php echo $Fpolicy->link; ?>"><?php echo $Fpolicy->title; ?></a></span> <span class="adapted"><?php echo $Fpolicy->adopted; ?></span> <span class="review-cycle"><?php echo $Fpolicy->review_cycle; ?></span> <span class="review-date"><?php echo $Fpolicy->review_date; ?></span> <span class="revision-date"><?php echo $Fpolicy->revision_date; ?></span> 
	<?php 
	if (empty($Fpolicy->related)) {
		echo "</li>";
	}
	else { ?>
		<a class='related' onclick='toggle("<?php echo $Fpolicy->id; ?>");'>Related <img src='../images/close.png' alt='' id='img_<?php echo $Fpolicy->id; ?>' width='11' height='11' /></a>
		 <div class='closed' id='ul_<?php echo $Fpolicy->id; ?>'>
			<div class="fourCol">
			<?php
			if (!empty($Fpolicy->related->rpolicy)){
			?>
				<h4>Related Policies</h4>
				<ul>
				<?php 
				$FRpolicy = $Fpolicy->related;
				foreach($FRpolicy->rpolicy as $FRpolicies) { ?>
					<li><a target='_blank' href='docs/policies/<?php echo $FRpolicies->Plink;?>'><?php echo $FRpolicies->Ptitle;?></a></li>
				<?php } ?>
				</ul>
			<?php } ?>
			</div>
			<div class="fourCol">
			<?php
			if (!empty($Fpolicy->related->rprocedure)){
			?>
				<h4>Related Procedures</h4>
				<ul>
				<?php 
				$FRprocedure = $Fpolicy->related;
				foreach($FRprocedure->rprocedure as $FRprocedures) { ?>
					<li><a target="_blank" href="docs/procedures/<?php echo $FRprocedures->procedureLink;?>"><?php echo $FRprocedures->procedure;?></a></li>
				<?php } ?>
				</ul>
			<?php } ?>
			</div>
			<div class="fourCol last">
			<?php
			if (!empty($Fpolicy->related->rform)){
			?>
				<h4>Related Forms</h4>
				<ul>
				<?php 
				$FRform = $Fpolicy->related;
				foreach($FRform->rform as $FRforms) { ?>
					<li><a target='_blank' href='docs/forms/<?php echo $FRforms->Flink;?>'><?php echo $FRforms->Ftitle;?></a></li>
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