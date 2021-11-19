const { update } = require("lodash");

$(document).ready(function() {
    $('.item').click(function() {
        const value = $(this).attr('data-filter');
        const gender = $(this).attr('data-gender');

        if(gender == 'men') {
            if(value == 'all'){
                $('.product-item-men').show();
            }
            else {
                $('.product-item-men').not('.'+value).hide('1000');
                $('.product-item-men').filter('.'+value).show('1000');
            }
        }

        if(gender == 'women') {
            if(value == 'all'){
                $('.product-item-women').show();
            }
            else {
                $('.product-item-women').not('.'+value).hide('1000');
                $('.product-item-women').filter('.'+value).show('1000');
            }
        }
        })
        
        
    
})

var proQty = $('.pro-qty');
proQty.prepend('<span class="dec qtybtn">-</span>');
proQty.append('<span class="inc qtybtn">+</span>');
proQty.on('click', '.qtybtn', function() {
    var $button = $(this);
    var oldValue = $button.parent().find('input').val();
    if($button.hasClass('inc')) {
        var newVal = parseFloat(oldValue) + 1;
    }else {
        if(oldValue > 0) {
            var newVal = parseFloat(oldValue) - 1;
        } else {
            newVal = 0;
        }
    }
    $button.parent().find('input').val(newVal);

    // Update cart
    const rowId = $button.parent().find('input').data('rowid');
    updateCart(rowId, newVal);
});

function updateCart(rowId, qty) {
    $.ajax({
        type: 'GET',
        url: 'cart/update',
        data: '{rowId: rowId, qty: qty}',
        success: function(response) {
            alert('Update successful!');
            console.log(response);
            location.reload();
        },
        error: function(error) {
            alert('Update fail!');
            console.log(error);
        },

    });;
}