<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>About | MSHN - Mid-State Health Network</title>
	<meta name="description" content="Mid-State Health Network (MSHN) is the new Medicaid Managed Care Organization for a portion of Michigan’s behavioral health services for twenty-one (21) counties through contracts with twelve (12) Community Mental Health Programs (see Affiliates tab).  MSHN and its provider network are responsible for maintaining an adequate service delivery system for persons with Serious and Persistent Mental Illness, Serious Emotional Disturbances, Developmental Disabilities, and Substance Use Disorders.">
	<meta name="keywords" content="">
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/head.php'); ?>
</head>
<!--[if lte IE 8]><body class="ie" id="about"><![endif]-->
<!--[if gte IE 9]><!--><body id="about"><!--<![endif]-->
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/header.php'); ?>
	<section id="promo">
			<?php require_once('includes/promo.php'); ?>
	</section>
		<section id="content">
				<div class="twelveCol">
<h2>Search Results</h2><div id="cse" style="width: 100%;">Loading</div>
<script src="http://www.google.com/jsapi" type="text/javascript"></script>
<script type="text/javascript"> 
  function parseQueryFromUrl () {
    var queryParamName = "query";
    var search = window.location.search.substr(1);
    var parts = search.split('&');
    for (var i = 0; i < parts.length; i++) {
      var keyvaluepair = parts[i].split('=');
      if (decodeURIComponent(keyvaluepair[0]) == queryParamName) {
        return decodeURIComponent(keyvaluepair[1].replace(/\+/g, ' '));
      }
    }
    return '';
  }
  google.load('search', '1', {language : 'en'});
  var _gaq = _gaq || [];
  _gaq.push(["_setAccount", "UA-53783423-2"]);
  function _trackQuery(control, searcher, query) {
    var gaQueryParamName = "query";
    var loc = document.location;
    var url = [
      loc.pathname,
      loc.search,
      loc.search ? '&' : '?',
      gaQueryParamName == '' ? 'q' : encodeURIComponent(gaQueryParamName),
      '=',
      encodeURIComponent(query)
    ].join('');
    _gaq.push(["_trackPageview", url]);
  }
  google.setOnLoadCallback(function() {
    var customSearchControl = new google.search.CustomSearchControl('011351022415749680578:cgedi9iy5de');
    customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
    customSearchControl.setLinkTarget(google.search.Search.LINK_TARGET_SELF);
    customSearchControl.setSearchStartingCallback(null, _trackQuery);
    customSearchControl.draw('cse');
    var queryFromUrl = parseQueryFromUrl();
    if (queryFromUrl) {customSearchControl.execute(queryFromUrl);}
  }, true);
</script>

<gcse:searchresults-only></gcse:searchresults-only>
				</div>
</section>
<?php include_once($_SERVER["DOCUMENT_ROOT"].'/includes/footer.php');?>
</body>
</html>