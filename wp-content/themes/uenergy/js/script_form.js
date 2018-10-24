$(document).on('click', '.footer__btn', function (e) {
	e.preventDefault();
	// var data = $('.modal-form').serialize();
	var name = $("input[name='name']").val();
	var phone = $("input[name='phone']").val();
	var text = $("textarea[name='text']").val();
	var form_data = new FormData();
	if (name ==='') {
		alert('Введите Ваше имя!');
		return false;
	}
	if(phone === '') {
		alert('Введите номер телефона!');
		return false;
	}
	if(name !== '') {
		form_data.append('action', 'sendForm');
		form_data.append('name', name);
		form_data.append('phone', phone);
		form_data.append('text', text);
		$.ajax({
			url: myajax.url,
			type: 'post',
			data: form_data,
			contentType: false,
			processData: false,
			success: function (response) {
				if (response.result === 'success') {
					/*form.reset();*/
					$('.footer__item').trigger('reset');
					alert(response.message);
				} else {
					alert(response.message);
				}
			}
		});
		return false;
	} else {
		alert('Вы не заполнили все поля!');
	}
});