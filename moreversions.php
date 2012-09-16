<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
<meta name="apple-mobile-web-app-capable" content="yes" />
<link rel="stylesheet" type="text/css" href="Resources/axelfamilyfont.css"/>
<link rel="stylesheet" type="text/css" href="Resources/generalstyle.css"/>
<link rel="apple-touch-icon-precomposed" href="Images/Icon.png"/>
<link rel="shortcut icon" href="Images/Icon.png" >
<link href="Images/Default.jpg" media="(device-width: 320px)" rel="apple-touch-startup-image">
<link href="Images/DefaultIpadPortrait.jpg" media="(device-width: 768px) and (orientation: portrait)" rel="apple-touch-startup-image">
<link href="Images/DefaultIpadLandscape.jpg" media="(device-width: 768px) and (orientation: landscape)" rel="apple-touch-startup-image">
<link href="Images/DefaultIpadLandscape@2x.jpg" media="(device-width: 768px) and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
<title>TOT - More Version</title>
<style type="text/css">

</style>
</head>

<SCRIPT LANGUAGE="JScript">
function toDetail(bundleIdentifier,betaVersion)
{
	var location = 'ipaapi.php?identifier=' + bundleIdentifier +'&betaversion=' + betaVersion;
	location = 'testipadetail.html';
    document.location=(location);
}
function backToPage(location)
{
    document.location=(location);
}
</SCRIPT>

<body>

<!-- 以上是Header -->

<!-- 顶部NavigationBar -->
<div class="navigationBar">
	<h1 class="headerTitle">com.openthread.issue11111111111111111111111</h1>
	<div style="position:absolute; top:7px; left:4px">
		<img onclick="backToPage('index.php')" width=50px; height=30px; src="Images/GrayBackButtonHD.png"/>
	</div>
</div>


<div class="cell" onclick="toDetail('com.openthread.issue','1')">
		<div class="iconContainer">
			<img class="iconImage" src='Images/Icon.png'/>
			<img class="iconRoundedRectImage" src="Images/RoundedRectAngel.png"/>
		</div>
		<div class="labelOuterContentView">
			<div class="labelInnerContentView">
				<p class="cellTitleLabel">[REPLACE_APP_TITLE]</p>
				<p class="cellVersionLabel">[REPLACE_APP_VERSION]</p>
				<p class="cellDateLabel">[REPLACE_APP_UPDATE_TIME]</p>
			</div>
		</div>
		<img class="detailButton" src="Images/DetailButton.png"/>
</div>

<h1 class="errorLabel">No beta test ipa package available.</h1>

<!-- 以下是Footer -->

<div style="height:88px;"> 
</div>
<div style="height:33px;">
	<a href="http://github.com/openfibers/php-tot">
		<h1 class="downloadLabel">Download TOT Server</h1>
	</a>
</div>
<div style="height:33px;"> 
	<a href="mailto:openfibers@gmail.com">
		<div>
		<h1 class="contractMeLabel">Contact Author</h1>
		</div>
	</a>
</div>

<h1>Powered by PHP-TOT</h1>
<h1>Copyright (c) 2012, Open Fibers</h1>
<h1 style="height:33px">All rights reserved.</h1>


</body>
</html>
