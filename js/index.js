function startUp(){
	var name=prompt("Admin:");
	$.get('files_/checkAdmin.php?admin='+name, function(data) {
		if(data==1){
			$.get('files_/manageData.php?mode=r', function(dataRead) {
				$('#main div').hide();
				$('#footer textarea').append(dataRead);
				$('#footer').show();
			});
		}
	});
}
function click_f(which){
	if(which==1){
		$.post('files_/manageData.php?mode=w', {dataWrite:$('#footer textarea').val()});
		$('#footer').hide();
		alert("Saved!");
	}
	$('#footer').hide();
	$('#main div').show();
	$('#works').hide();
}
function clickMenu(num){
	randomBG();
	switch (num){
		case 0:
			home();
			break;
		case -1:
			menu_work();
			break;
		case -2:
			menu_contact();
			break;
	}
}
function menu_contact(){
	$('#list').hide();
	$('#details').hide();
	$('#details div').hide();
	$('#contact').show();
	
	$('#image').hide();
	$('#works').show();
}
function menu_work(){
	$('#list').show();
	$('#details').hide();
	$('#details div').hide();
	$('#contact').hide();
	
	$('#image').hide();
	$('#works').show();
}
function home(){
	$('#works').hide();
	$('#contact').hide();
	$('#list').hide();
	$('#details').hide();
	$('#details div').hide();
	$('#contact').hide();
	callVideo('');
	$('#image').hide();
}
function callVideo(link,i){
	randomBG();
	$('#video').attr({src: "http://player.vimeo.com/video/"+link+"?title=0&amp;by- line=0&amp;portrait=0&amp;color=ffffff"});
	$('#image').show();
	showDetail(i);
}
function showDetail(i){
	$('#list').hide();
	$('#details div').hide();
	$('#detail_'+i).show();
	$('#details').show();
}
function randomBG(){
	switch(Math.floor(Math.random() * 3)){
		case 1:
			randomValue = "URL('img/bg.jpg') 0 0";
			break;
		case 2:
			randomValue = "URL('img/bg.jpg') 0 -674px";
			break;
		case 0:
			randomValue = "URL('img/bg.jpg') 0 -1348px";
			break;
	}
	$('#main').css('background', randomValue);
}
document.onkeydown=function(e){
	switch(e.which){
		case 16:
			shift = true;
			break;
		case 17:
			ctrl = true;
			break;
		case 65:
			if(shift && ctrl){
				startUp();
				break;
			}
	}
}
document.onkeyup=function(e){
	shift = false;
	ctrl = false
}