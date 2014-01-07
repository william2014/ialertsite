<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>i-alert Media Player</title>
<style type="text/css">
body { 
padding-top:0;
padding-bottom:0;
padding-left:0;
padding-right:0;
margin-top:0;
margin-bottom:0;
margin-left:0;
margin-right:0;
}
</style>
</head>
<body>
<?php
$name=$_GET["name"];
$nm="news @ialert";
?>

<OBJECT ID="MediaPlayer1" CLASSID="CLSID:22d6f312-b0f6-11d0-94ab-0080c74c7e95" CODEBASE="http://activex.microsoft.com/activex/controls/mplayer/ en/nsmp2inf.cab#Version=5,1,52,701"
STANDBY="Loading Microsoft Windows® Media Player components..." TYPE="application/x-oleobject" width="280" height="256">
<PARAM NAME="fileName" VALUE="<?php echo $nm;?>">
<PARAM NAME="animationatStart" VALUE="true">
<PARAM NAME="transparentatStart" VALUE="true">
<PARAM NAME="autoStart" VALUE="true">
<PARAM NAME="showControls" VALUE="true">
<PARAM NAME="Volume" value="-200">
<EMBED type="application/x-mplayer2" pluginspage="http://www.microsoft.com/Windows/MediaPlayer/" SRC="<?php echo $name; ?>" name="ialert MediaPlayer" width=280 height=256 autostart=1 showcontrols=1 volume=-200>
</OBJECT>
</body>
</html>