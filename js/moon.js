var slideNow = 1;
var slideCount = $('#slidewrapper').children().length;
var slideInterval = 3000;
var navBtnId = 0;
var translateWidth = 0;

function callFromEvent(e, fragments, cart_hash, $button) {
    console.log('aDDDeD');
};

jQuery(function($) {
    $(".set > a").on("click", function() {
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
            $(this).siblings('.content').slideUp(800);
            $(".set > a i").removeClass('fa-minus').addClass('fa-plus');
        } else {
            $(".set > a i").removeClass('fa-minus').addClass('fa-plus');
            $(this).find('i').removeClass('fa-plus').addClass('fa-minus');
            $(".set > a").addClass('active');
            $(this).addClass('active');
            $(".content").slideUp(800);
            $(this).siblings('.content').slideDown(800);
        }
    });
    var modal = document.getElementById('id01');
    var about = document.getElementById('id02');
    var workshops = document.getElementById('id03');
    var call = document.getElementById('id04');
    var agenda = document.getElementById('id05');

    // When the user clicks anywhere outside of the modal, close it
    // window.onclick = function(event) {
    //     if (event.target == modal) {
    //         modal.style.display = "none";
    //     }
    // };
    // window.onclick = function(event) {
    //     if (event.target == about) {
    //         about.style.display = "none";
    //     }
    // };
    // window.onclick = function(event) {
    //     if (event.target == workshops) {
    //         workshops.style.display = "none";
    //     }
    // };
    // window.onclick = function(event) {
    //     if (event.target == call) {
    //         call.style.display = "none";
    //     }
    // };
    // window.onclick = function(event) {
    //     if (event.target == agenda) {
    //         agenda.style.display = "none";
    //     }
    // };

    window.onclick = function(event) {
        var elemPopUp = event.target;
        if (elemPopUp.classList.contains("modal")) {
            elemPopUp.style.display = "none";
        }
        // if (event.target == agenda) {
        //     agenda.style.display = "none";
        // }
    };


    var about = $('.stack');
    $('.stack').on('click', function() {
        var order = $(this).attr("data-order");
        var tall = order * $(this).height;
        tl = new TimelineLite({ paused: true });
        tl.to(about, 0.3, { left: 0, top: tall, ease: Power2.easeInOut });
        tl.play();
    });
    $('.close').on('click', function() {
        tl.reverse();
    });



    // document.addEventListener("DOMContentLoaded", function() {
    //     document.addEventListener('updated_wc_div', function() {
    //         console.log('added to cart--');
    //     });
    // document.querySelector('body').addEventListener('added_to_cart', function() {
    //     console.log('added to cart--');
    // });
    // $('.donation_button').on('click', function() {
    //     //$(document.body).on('added_to_cart', callFromEvent);
    //     $('input[value="donation"]').each(function() {
    //         if (this.checked) {
    //             //console.log($(this).parent().siblings('a.button.add_to_cart_button.ajax_add_to_cart'));
    //             $(this).parent().siblings('a.button.add_to_cart_button.ajax_add_to_cart')[0].click();
    //         }

    //     });
    // });
    // var AfterAddFunction = function() {

    //     $(document.body)
    //         .on('added_to_cart', this.afterAdd);
    // };

    // AfterAddFunction.prototype.afterAdd = function(e) {
    //     console.log(e);
    //     $(document.body).trigger('update_checkout');
    // };
    // var rTime = setTimeout(function() {
    //     new AfterAddFunction();
    // }, 1000);
    // $(document.body).on('added_to_cart', callFromEvent);
    //document.addEventListener('adding_to_cart', callFromEvent);
    //document.addEventListener('added_to_cart', callFromEvent);
    // $(document.body).on('adding_to_cart', function() {
    //     console.log('aDDDing');
    // });
    // $(document.body).on('click', '.add_to_cart_button', callFromEvent);
    //$(document.body).on('added_to_cart', callFromEvent);
    //});

    $('.left').find('.container').find('.row').find('.img_click').find('img').on('click', function(e) {
        $('.right').find('.container').find('.row').find('.example_images').each(function(i, elem) {
            if ($(elem).data("index") == e.target.dataset.index) {
                $(elem).css("visibility", "visible");
            } else {
                $(elem).css("visibility", "hidden");
            }
        });
    });
});
//  var AfterAddFunction = function() {

//         $(document.body)
//             .on('added_to_cart', this.afterAdd);
//     };

//     AfterAddFunction.prototype.afterAdd = function(e) {
//         console.log(e);
//         $(document.body).trigger('update_checkout');
//     };
//     new AfterAddFunction();


$(document).ready(function(){
    $('.carousel').slick({
    slidesToShow: 1,
    dots:true,
    centerMode: true,
    });
  });
  
  
  