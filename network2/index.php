<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml" itemscope itemtype="http://schema.org/Map">

<head>
<title>LOLGraph - players layers</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="icon" type="image/png" href="././img/icolol.png" /> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1,user-scalable=no" />
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />


<!--[if IE]><script type="text/javascript" src="js/excanvas.js"></script><![endif]--> <!-- js/default.js -->
  <script src="js/jquery/jquery.min.js" type="text/javascript"></script>
  <script src="js/sigma/sigma.min.js" type="text/javascript" language="javascript"></script>
    <script src="js/sigma/sigma.parseJson.js" type="text/javascript" language="javascript"></script>
  <script src="js/fancybox/jquery.fancybox.pack.js" type="text/javascript" language="javascript"></script>
  <script src="js/main.js" type="text/javascript" language="javascript"></script>

  <link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox.css"/>
  <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
  <link rel="stylesheet" media="screen and (max-height: 770px)" href="css/tablet.css" />
</head>


<body>
  <div class="sigma-parent">
    <div class="sigma-expand" id="sigma-canvas"></div>
  </div>
<div id="mainpanel">
  <div class="col">
		<div id="maintitle"></div>
    <div id="title"></div>
    <div id="titletext"></div>
    <div class="info cf">
      <dl>
        <dt class="moreinformation"></dt>
        <dd class="line"><a href="../networkGold/index.html">Voir les bronzes</a></dd>
        <dd class="line"><a href="#information" class="line fb">More about this visualisation</a></dd>
      </dl>
    </div>
<div id="legend">
	<div class="box">
		<h2>Legend:</h2>
		<dl>
		<dt class="node"></dt>
		<dd></dd>
		<dt class="edge"></dt>
		<dd></dd>
		<dt class="colours"></dt>
		<dd></dd>		
		</dl>
	</div>
</div> 
    <div class="b1">
    <form>
      <div id="search" class="cf"><h2>Search:</h2>
        <input type="text" name="search" value="Search by name" class="empty"/><div class="state"></div>
        <div class="results"></div>
      </div>
      <div class="cf" id="attributeselect"><h2>Group Selector:</h2>
        <div class="select">Select Group</div>
	<div class="list cf"></div>
      </div>
    </form>
    </div>
  </div>
  <div id="information">
  </div>
</div>
	<div id="zoom">
  		<div class="z" rel="in"></div> <div class="z" rel="out"></div> <div class="z" rel="center"></div>
	</div>
	
<div id="attributepane">
<div class="text">
	<div title="Close" class="left-close returntext"><div class="c cf"><span>Return to the full network</span></div></div>	
<div class="headertext">
	<span>Information Pane</span>
</div>	
  <div class="nodeattributes">
    <div class="name"></div>
	<div class="data"></div>
    <div class="p">Connections:</div>
    <div class="link">
      <ul>
      </ul>
    </div>
  </div>
	</div>
</div>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21293169-4']);
  _gaq.push(['_setDomainName', 'none']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</body>
</html>
