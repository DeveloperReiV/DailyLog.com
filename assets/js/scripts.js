/**
 * Событие загрузки страницы
 */
window.onload = function(){
	clock();

	/*куки активного пункта меню*/
	//CookieMenu();
	/****************************/

	//clearCookie();
};


function clearCookie()
{
	$.cookie("menuCookie", null);
}

/**
 * Установка активного пункта меню
 */
/*function CookieMenu()
{
	$('#menu li').on('click', function() {
		var list = [];
		var item = $(this);
		list.push(item.attr("id"));
		$.cookie("menuCookie", list.join(','));
		return;
	});

	if($.cookie("menuCookie") == null) {
		return;
	}
	var chMap = $.cookie("menuCookie").split(',');
	for (var i in chMap){
		$('#'+chMap[i]).prop("class", "active");
	}
}*/


/**
 * часы (дата и время) на странице
 */
function clock()
{
	var d = new Date();
	var month_num = d.getMonth();
	var day = d.getDate();
	var hours = d.getHours();
	var minutes = d.getMinutes();
	var seconds = d.getSeconds();

	//month = new Array("января", "февраля", "марта", "апреля", "мая", "июня","июля", "августа", "сентября", "октября", "ноября", "декабря");

	if (day <= 9) day = "0" + day;
	if (hours <= 9) hours = "0" + hours;
	if (minutes <= 9) minutes = "0" + minutes;
	if (seconds <= 9) seconds = "0" + seconds;
	if (month_num <= 9) month_num = "0" + month_num;

	date_time = day + "." + month_num + "." + d.getFullYear() + '   ' + hours + ":" + minutes + ":" + seconds;

	if (document.layers)
	{
		document.layers.doc_time.document.write(date_time);
		document.layers.doc_time.document.close();
	}
	else
	{
		document.getElementById("doc_time").innerHTML = date_time;
	}
	setTimeout("clock()", 1000);
}
