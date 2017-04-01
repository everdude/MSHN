<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>Policies | MSHN - Mid-State Health Network</title>
	<meta name="description" content="Policies">
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
					<h2>Policies &amp; Procedures</h2>
						<p id="related">Related: <a href="forms.php">Forms</a> | <a href="procedures.php">Procedures</a></p>

<?php $policies = simplexml_load_file("xml/policies.xml"); ?>					

<h3>Compliance</h3>
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


<h3>Customer Service</h3>
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
$CS = $policies->xpath("/policies/policy[@chapter='Customer Service']");
foreach($CS as $CSpolicy){
?>
	<li><span class="number"><?php echo $CSpolicy->id; ?></span> <span class="policy"><a target="_blank" href="docs/policies/<?php echo $CSpolicy->link; ?>"><?php echo $CSpolicy->title; ?></a></span> <span class="adapted"><?php echo $CSpolicy->adopted; ?></span> <span class="review-cycle"><?php echo $CSpolicy->review_cycle; ?></span> <span class="review-date"><?php echo $CSpolicy->review_date; ?></span> <span class="revision-date"><?php echo $CSpolicy->revision_date; ?></span> 
	<?php 
	if (empty($CSpolicy->related)) {
		echo "</li>";
	}
	else { ?>
		<a class='related' onclick='toggle("<?php echo $CSpolicy->id; ?>");'>Related <img src='../images/close.png' alt='' id='img_<?php echo $CSpolicy->id; ?>' width='11' height='11' /></a>
		<div class='closed' id='ul_<?php echo $CSpolicy->id; ?>'>
			<div class="fourCol">
			<?php if(!empty($CSpolicy->related->rpolicy)){ ?>
				<h4>Related Policies</h4>
				<ul>
				<?php
				$CSRpolicy = $CSpolicy->related;
				foreach($CSRpolicy->rpolicy as $CSRpolicies){ ?>
					<li><a target='_blank' href='docs/policies/<?php echo $CSRpolicies->Plink; ?>'><?php echo $CSRpolicies->Ptitle; ?></a></li>
				<?php } ?>
				</ul>
			<?php } ?>
			</div>
			<div class="fourCol">
			<?php if(!empty($CSpolicy->related->rprocedure)) { ?>
				<h4>Related Procedures</h4>
				<ul>
				<?php
				$CSRprocedure = $CSpolicy->related;
				foreach ($CSRprocedure->rprocedure as $CSRprocedures) { ?>
					<li><a target="_blank" href="/docs/procedures/<?php echo $CSRprocedures->procedureLink; ?>"><?php echo $CSRprocedures->procedure; ?></a></li>
				<?php } ?>
				</ul>
			<?php } ?>
			</div>
			<div class="fourCol last">
			<?php if(!empty($CSpolicy->related->rform)) { ?>
				<h4>Related Forms</h4>
				<ul>
				<?php
				$CSRform = $CSpolicy->related;
				foreach ($CSRform->rform as $CSRforms) { ?>
					<li><a target="_blank" href="/docs/forms/<?php echo $CSRforms->Flink; ?>"><?php echo $CSRforms->Ftitle; ?></a></li>
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

<h3>Finance</h3>
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

<h3>Governance and General Management</h3>
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

<h3>Information Technology</h3>
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

<h3>Human Resources</h3>
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

<h3>Provider Network</h3>
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

<h3>Quality</h3>
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

<h3>Service Delivery System</h3>
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

<h3>Utilization Management</h3>
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