$(function(){
	
	//$("#texteJQ").html("<em>GROS PENI</em>");
	/*$("h2").fadeOut("slow",function(){

      $(this).fadeIn("slow");

    }); */
	//$("h2").hide().fadeIn("slow");
	
	switch($("title").html()){
		case "Accueil":
			$('#mainMenu ul #home a').css('background',"url('pics/design/backgroundNav-hover.png') repeat-x");
		break;
		
		case "Equipe BDE":
			$('#mainMenu ul #team a').css('background',"url('pics/design/backgroundNav-hover.png') repeat-x");
		break;
		
		case "Associations":
			$('#mainMenu ul #associations a').css('background',"url('pics/design/backgroundNav-hover.png') repeat-x");
		break;
		
		case "L'école des Mines":
			$('#mainMenu ul #ecole a').css('background',"url('pics/design/backgroundNav-hover.png') repeat-x");
		
		break;
		
		case "Le Campus":
			$('#mainMenu ul #campus a').css('background',"url('pics/design/backgroundNav-hover.png') repeat-x");
		break;
		
		case "Partenaires":
			$('#mainMenu ul #liens a').css('background',"url('pics/design/backgroundNav-hover.png') repeat-x");
		break;
		
		case "Contact":
			$('#mainMenu ul #contact a').css('background',"url('pics/design/backgroundNav-hover.png') repeat-x");
		break;
			default:
		
	}
	
	
	$("#mainMenu ul li a").mouseenter(function(event){
		$(this).fadeOut("fast", function(){ $(this).fadeIn("slow");});
		
		
		
	});
	
	
	
	//code pour adapter la taille de la police à celle de la page
	$aw = parseInt($('article').css('width'));
	if($aw<580){
		$('h2').css('font-size', ($aw/30).toString() + 'px');
		$('h1').css('font-size', ($aw/28).toString() + 'px');
		$('#mainMenu').css('font-size', ($aw/40).toString()+'px');
		
		
	}
	
});