<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>MSHN - Mid-State Health Network</title>
	<meta name="description" content="Mid-State Health Network (MSHN) is the new Medicaid Managed Care Organization for a portion of Michigan’s behavioral health services for twenty-one (21) counties through contracts with twelve (12) Community Mental Health Programs (see Affiliates tab).  MSHN and its provider network are responsible for maintaining an adequate service delivery system for persons with Serious and Persistent Mental Illness, Serious Emotional Disturbances, Developmental Disabilities, and Substance Use Disorders.">
	<meta name="keywords" content="">
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/head.php'); ?>
</head>
<!--[if lte IE 8]><body class="ie" id="home"><![endif]-->
<!--[if gte IE 9]><!--><body id="home"><!--<![endif]-->
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/header.php'); ?>

			<section id="promo">
				<h2> New Hopes, New Opportunities</h2>
				<img src="images/girl-fly.jpg" alt="photo of girl">			
			</section>
			<section id="content">
				<div class="eightCol">
					<h2>Welcome</h2>
					<p>Mid-State Health Network (MSHN) is the new Medicaid Managed Care Organization for a portion of Michigan’s behavioral health services for twenty-one (21) counties through contracts with twelve (12) Community Mental Health Programs (see Affiliates tab).  MSHN and its provider network are responsible for maintaining an adequate service delivery system for persons with Serious and Persistent Mental Illness, Serious Emotional Disturbances, Developmental Disabilities, and Substance Use Disorders.</p>
					<article>
						<h2><a href="/News/">News</a></h2>
						<?php
						$rss = simplexml_load_file ("News/xml/news.xml");
						$news = $rss->xpath("/rss/channel/item");
						$i=0;
						$count = count($news);
						foreach ($news as $item) {
							if (++$i > 3){
								break;
							}
						?>
						<h4><a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a></h4>
						<p><?php echo $item->description; ?></p>
						<p><a href="<?php echo $item->link; ?>">Read more...</a></p>
						<?php
					if($i == $count - 1){
						?>
						<hr>
						<?php
					}
						}
						?>						
					</article>
				</div>
				<div class="fourCol last">
					<h2>Dashboard</h2>
					<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/dashboard.php'); ?>
					<hr>
					<p class="compliance">MSHN Compliance Line <br><span>1.844.793.1288</span></p>
					<p class="compliance">MSHN Customer Service Line <br><span>1.844.405.3094</span></p>
					<p class="compliance">MSHN Access/UM Line <br><span>1.844.405.3095</span></p>
				</div>
			</section>
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/footer.php');?>
</body>
</html>