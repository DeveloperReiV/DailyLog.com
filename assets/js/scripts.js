function getActionMenu(item)
{
	if(item.className == "active")
	{
		item.className = "";
	}
	else
	{
		$('#menu li').removeClass('active');
		item.className = "active";
	}
}

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


//function searchNotice()
//{
//	var txt = $('#search_text').val();
//
//	$.ajax({
//		url: 'notice',
//		data : {
//			txt : txt
//		},
//		type : 'GET',
//		success: function(res){
//			if(!res)
//			{
//				alert('Ничего не надено!');
//			}
//		},
//		error: function(){
//			alert("Ошибка!");
//		}
//	});
//}
