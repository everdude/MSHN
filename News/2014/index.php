<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>2014 News | MSHN - Mid-State Health Network</title>
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
					$rss = simplexml_load_file ("../xml/news.xml");
					$news = $rss->xpath("/rss/channel/item[@year='2014']");
					$i=0;
					foreach ($news as $item) {
						if (++$i > 3){
							break;
						}
					?>
					<h4><a href="<?php echo $item->link; ?>"><?php echo $item->title; ?></a></h4>
					<p><?php echo $item->description; ?></p>
					<p><a href="<?php echo $item->link; ?>">Read more...</a></p>
					<?php
					}
					?>
				</div>
				<div class="fourCol last">
					<?php include_once($_SERVER["DOCUMENT_ROOT"].'/News/sideNav.html'); ?>
				</div>
			</section>
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/footer.php');?>
</body>
</html>