var stripeKey = document.querySelector('#personalData').dataset.consumerKey;
var createOrderUrl = document.querySelector('#personalData').dataset.createOrderUrl;
var returnUrl = document.querySelector('#personalData').dataset.returnUrl;
var currency = document.querySelector('#personalData').dataset.currency;
var stripe = Stripe(stripeKey);
var elements = stripe.elements();

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
        $('#submitPayment').html('Processing...').css('text-align', 'left');
        $('.spinner-icon').show();
        $.ajax({
            contentType: 'application/json',
            url: createOrderUrl,
            type: 'POST',
            data: JSON.stringify({
                items: [
                    itemsArray
                ],
                email: document.getElementById('emailOnlinePayment').value,
                name: document.getElementById('userNameOnlinePayment').value,
                phone: document.getElementById('phoneOnlinePayment').value,
                address: document.getElementById('addressOnlinePayment').value,
                message: document.getElementById('messageOnlinePayment').value,

                totalAmount: totalAmt,
                shippingTotal: shippingPrice,
                currency: currency
            }),
            success: function (data) {
                if (data != 'error') {
                    stripe.redirectToCheckout({
                        sessionId: data
                    }).then(function (result) {
                        console.log(result.error.message);
                    });
                } else {
                    console.log('Unable to create a checkout session. Please try again.');
                    $('#submitPayment').html('Submit');
                    $('.spinner-icon').hide();
                }
            }
        });
    }

}

function formValidate() {

    var name = $('#userNameOnlinePayment').parsley();
    var phone = $('#phoneOnlinePayment').parsley();
    var email = $('#emailOnlinePayment').parsley();
    var address = $('#addressOnlinePayment').parsley();
    var message = $('#messageOnlinePayment').parsley();
    var terms = $('#cbxOnlinePayment').parsley();

    if (!name.isValid() || !phone.isValid() || !email.isValid() || !address.isValid() || !message.isValid() || !terms.isValid()) {
        return false;
    }
    return true;

}
