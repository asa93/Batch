//Script pour une gallerie de photos ~ SALAADEEN ~ 2015 MINES NANTES
 $(function(){
	
	var count=1;
	var maxValue=28;
	
	$("#img1").fadeIn("slow");
	$("#previous").on('click', function(e){
		e.preventDefault();
		$(this).attr('color', 'red');
		
		var oldId = "#img" + count.toString();
		//On cache l'image actuelle pour la remplacer par l'ancienne
		$(oldId).fadeOut('slow');
		
		if(count==1){
			count=maxValue;}
		else{
			count = count-1;}
		
		var newId = "#img" + count.toString();
		$(newId).fadeIn('slow');
		
		$("#shortMenuGallerie p").html(count + "/" + maxValue);
		
		
	});
	
	$("#next").on('click', function(e){
		e.preventDefault();
		$(this).attr('color', 'red');
		
		var oldId = "#img" + count.toString();
		//On cache l'image actuelle pour la remplacer par l'ancienne
		$(oldId).fadeOut('slow');
		if(count==maxValue){
			count=1;}
		else{
			count = count+1;}
		
		var newId = "#img" + count.toString();
		
		$(newId).fadeIn('slow');
		
		$("#shortMenuGallerie p").html(count + "/" + maxValue);
		
	});
	
 });