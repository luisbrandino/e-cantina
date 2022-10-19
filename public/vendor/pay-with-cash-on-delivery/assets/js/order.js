var returnUrl = document.querySelector('#personalDetails').dataset.returnUrl;
var currency = document.querySelector('#personalDetails').dataset.currency;

function confirmGuestOrder(event) {
	event.preventDefault();
	var valid = formValidate();
	if (valid) {
		var itemsArray = [];
		var shippingPrice = $('.transfer').text();
		shippingPrice = shippingPrice.replace('$', '');
		var totalAmt = $('#totalOrderSummary').val();
		totalAmt = totalAmt.replace('$', '');
		$('#itemList li').each(function (index) {
			var imagePath = $(this).find('.order-list-img img').attr('src');
			var title = $(this).find('.order-list-details h4').html();
			var quantity = $(this).find('input[name=qty]').val();
			var itemTotalPrice = $(this).find('.order-list-price').text();
			itemTotalPrice = (itemTotalPrice.match(/[0-9.]+/g)) * 1;
			var itemPrice = itemTotalPrice / quantity;
			var arr = title.split('<br>');
			var productName = arr[0];
			itemsArray.push({
				'name': productName,
				'unit_price': itemPrice,
				'quantity': quantity
			});
		});
		$('#submitOrder').html('Processing...').css('text-align', 'left');
		$('.spinner-icon').show();
		$.ajax({
			contentType: 'application/json',
			url: 'endpoint/ajax/create-order.php',
			type: 'POST',
			data: JSON.stringify({
				items: [itemsArray],
				email: document.getElementById('emailCashPayment').value,
				name: document.getElementById('userNameCashPayment').value,
				phone: document.getElementById('phoneCashPayment').value,
				address: document.getElementById('addressCashPayment').value,
				message: document.getElementById('messageCashPayment').value,

				totalAmount: totalAmt,
				shippingTotal: shippingPrice,
				currency: currency

			}),
			success: function (data) {
				if (data != 'error') {
					window.location = returnUrl;
				} else {

					$('#submitOrder').html('Submit');
					$('.spinner-icon').hide();
				}

			}

		});
	}

}

function formValidate() {
	
	var name = $('#userNameCashPayment').parsley();
	var phone = $('#phoneCashPayment').parsley();
	var email = $('#emailCashPayment').parsley();
	var address = $('#addressCashPayment').parsley();
	var message = $('#messageCashPayment').parsley();
	var terms = $('#cbxCashPayment').parsley();	

	if (!name.isValid() || !phone.isValid() || !email.isValid() || !address.isValid() || !message.isValid() || !terms.isValid()) {
		return false;
	}
	return true;

}
