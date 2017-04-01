<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>News | MSHN - Mid-State Health Network</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/head.php'); ?>
</head>
<!--[if lte IE 8]><body class="ie" id="news"><![endif]-->
<!--[if gte IE 9]><!--><body id="news"><!--<![endif]-->
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/header.php'); ?>
			<section id="promo">
				<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/promo.php'); ?>
			</section>
			<section id="content">
				<div class="eightCol">
					<h2>News</h2>
					<?php
					$rss = simplexml_load_file ("xml/news.xml");
					$news = $rss->xpath("/rss/channel/item");
					$i=0;
					$count = count($news);
					foreach ($news as $item) {
						if (++$i > 10){
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
					<p><a href="../board/docs/domemagazine.com-A_State_Leader_Jim_Haveman.pdf" target="_blank">Dome Magazine: &quot;A State Leader: Jim Haveman&quot;</a></p>
					<p><a href="http://www.npr.org/blogs/health/2015/03/23/393651417/rethinking-alcohol-can-heavy-drinkers-learn-to-cut-back" target="_blank">Rethinking Alcohol: Can Heavy Drinkers Learn to Cut Back?</a></p>
				</div>
				<div class="fourCol last">
					<?php include_once($_SERVER["DOCUMENT_ROOT"].'/News/sideNav.html'); ?>
					<hr>
					<p class="compliance">MSHN Compliance Line <br><span>1.844.793.1288</span></p>
					<p class="compliance">MSHN Customer Service Line <br><span>1.844.405.3094</span></p>
					<p class="compliance">MSHN Access/UM Line <br><span>1.844.405.3095</span></p>
				</div>
			</section>
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/footer.php');?>
</body>
</html>