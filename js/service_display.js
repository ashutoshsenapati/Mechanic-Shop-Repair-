$(document).ready(function(){

		$("#new").hide();



 		$("#add").click(function(){
 			$("ul").append("<li>" + $("#new").val() + "</li>");

 		});


		$("ul").on("click", "li", function(){
			$(this).toggleClass("completed");

 		});

		$("ul").on("click", "span",function(){
			$(this).parent().toggleClass("deleted");
		});

 		
 		$("#new").mouseenter(function(){
 				$(this).css("border-color","blue")
 		});
 		$("#new").mouseleave(function(){
 				$(this).css("border-color","black")
 		});
 		$(".fa-plus").click(function(){
 			$("#new").toggle()
 		});

 		$("#new").keypress(function(event){
 			if(event.which =="13")
 			{
 				$("ul").append("<li><span class='trash'><i class='fa fa-trash'></i></span>" + $("#new").val() + "</li>");
 				$(this).val(" ");
 				
 			}
 		});



 	});
