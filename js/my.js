($(document).ready(function(){
	
	$("pre").addClass("prettyprint linenums");
	prettyPrint();

	$(".back2top").click(function(){
		
		$("body,html").animate({
            scrollTop:0
        },800);
		
	});
	
})
)()


