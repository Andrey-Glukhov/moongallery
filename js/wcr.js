<<<<<<< HEAD
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

=======
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

>>>>>>> 1411dc22a5c785570e066d7006ce1f135dcd345c
});