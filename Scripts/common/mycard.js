
function AddToCard(productId, quantity) {
    $.ajax({
        url: '/OrderModule/AddToCard',
        type: 'POST',
        data: JSON.stringify({ 'productId': productId, 'quantity': quantity }),
        dataType: 'json',
        contentType: 'application/json; charset=utf-8',
        success: function (data) {
            if (data.Result == "OK") {
                if (data.Data.IsVariant) {
                    window.location.href = "/san-pham/" + data.Data.ProductCode + ".html";
                }
                else {
                    window.location.href = "/gio-hang.html";
                }
            }
        },
        error: function () {
        }
    });
}





