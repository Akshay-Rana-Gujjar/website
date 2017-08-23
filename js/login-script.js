$(document).ready(function(){

	$("#menu").click(function(){
		$(".content").css("width",250);
		$(".content-bg").css("display","block");
		
	});
    $("#close").click(function(){
        $(".content").css("width","0");
        $(".content-bg").css("display","none");
    });

    $("#forget-btn").click(function(){
    	$(".forget-password").css({"height":"100%"});
    });

      $(".head span").click(function(){
    	$(".forget-password").css({"height":"0"});
    });

});