
$(document).ready(function(){
$("span.glyphicon").each(function(){
	
var className = $(this).attr("class");
className = className.replace(/glyphicon /g, "");

$(this).parent().attr("title", className);


	
});
});