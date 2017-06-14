$(document).ready(function(){
	clock(); //часы

	$('.title-panel-imp-note a').tooltip();  //Добавление всплывающей подсказки к иконтакам редактирования и удаления

	validateFormNote();		//Валидация формы добавления/изменения заметки
	validateFormPhone();	//Валидация формы добавления/изменения телефонной записи

});

/**
 * часы (дата и время) на странице
 */
function clock(){
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

	date_time = day + "." + month_num + "." + d.getFullYear() + '  ' +hours + ":" + minutes + ":" + seconds;

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

//Валидация формы добавления/изменения заметки
function validateFormNote(){
	$('#formNote').validate({
		rules:{
			category: 'required',
			header: 'required',
			date: 'required'
		},

		messages:{
			category:{
				required: 'Выберете категорию!'
			},
			header:{
				required: 'Введите заголовок!'
			},
			date:{
				required: 'Заполните дату!'
			}
		}
	});
}

//Валидация формы добавления/изменения телефонной записи
function validateFormPhone(){
	$('#formPhone').validate({
		rules:{
			owner: 'required',
			phone: 'required'
		},

		messages:{
			owner:{
				required: 'Введите владельца!'
			},
			phone:{
				required: 'Введите телефон!'
			}
		}
	});
}



