function invoke(f, start, interval, end){
	if (!start) start=0;
	if(arguments.length <=2)
		setTimeout(f, start);
	else {
		setTimeout(repeat, start);
		function repeat() {
			var h =setInterval(f, interval);
			if (end) setTimeout(function() {clearInterval(h); }, end);
		}
	}
}

function showHint(str)
{
	if (str.length<3)
		{
		document.getElementById("ziphint").innerHTML="";
		return;
		}
	var xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
			document.getElementById("ziphint").innerHTML=xmlhttp.responseText;
			}
	}
	xmlhttp.open("GET", "_/components/php/gethint.php?q="+str, true);
	xmlhttp.send();
	$('ul.dropdown-menu')
};

$(function(){
	$("#index a:contains('Home')").parent().addClass('active');
	$("#findhosp a:contains('Find Hospital')").parent().addClass('active');
	$("#hosptype a:contains('Hospital Types')").parent().addClass('active');
	$("#treatment a:contains('Treatment Types')").parent().addClass('active');
	$("#claim a:contains('Claim Types')").parent().addClass('active');
	$("#rate a:contains('Rate Hospital')").parent().addClass('active');
	$("#register a:contains('Register')").parent().addClass('active');
	$("#about a:contains('About')").parent().addClass('active');
	//make menus drop down automatically
	$('ul.nav li.dropdown').hover(function() {
		$('.dropdown-menu', this).fadeIn();
	}, function() {
		$('.dropdown-menu', this).fadeOut('fast');
	});//hover
	
});