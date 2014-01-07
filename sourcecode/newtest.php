<!DOCTYPE html>
<html>
<head>
	<title>Creating comments</title>

	<script type="text/javascript">

window.onload=intAll;

function intAll () {
	// body...
	document.getElementsByTagName("form")[0].onsubmit=addNode;
}
function addNode()
{
var inText = document.getElementById("leaveAcomment").value;
var newtext = document.createTextNode(inText);
var comment = document.createElement("p");
comment.appendChild(newtext);
var docBody = document.getElementsByTagName("div")[0];
docBody.appendChild(comment);
return false();
}
</script>
</head>
<body>
<div id ="comments"></div>
<form action="#" method="GET">
	<p><textarea id="leaveAcomment" rows="3" cols="25"></textarea></p>
	<input type="submit" value="Leave a comment"/>
</form>
</body>
</html>
