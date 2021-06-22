jQuery(function($) {
    $('.donation_button').on('click', function() {
        //$(document.body).on('added_to_cart', callFromEvent);
        $('input[value="donation"]').each(function() {
            if (this.checked) {
                //console.log($(this).parent().siblings('a.button.add_to_cart_button.ajax_add_to_cart'));
                $(this).parent().siblings('a.button.add_to_cart_button.ajax_add_to_cart')[0].click();
            }

        });
    });
    $(document.body).on('added_to_cart', function() {
        console.log('ttrer');
        $(document.body).trigger('update_checkout');

    });

});