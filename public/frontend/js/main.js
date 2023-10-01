(function ($) {
    "use strict";
    $(".razorpay-payment-button").addClass('btn btn-primary');

    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 40) {
            $('.navbar').addClass('sticky-top');
        } else {
            $('.navbar').removeClass('sticky-top');
        }
    });

    // jquery ui dilogbox
    // $(function() {
    //     // Initialize the dialog box
    //     $("#dialog").dialog({
    //       autoOpen: false, // Do not open the dialog box on page load
    //       modal: true // Make the dialog box modal (prevent interactions outside the dialog box)
    //     });
      
    //     // Open the dialog box when a button is clicked
    //     $("#byuplan").on("click", function() {
    //         $('#explode-effect').effect('explode');
    //     });
    // });      


    //eye butoon hide
    // $(document).on('click', '.toggle-password', function() {
    //     var input = $(this).closest('.input-group').find('input');
    //     var icon = $(this).find('i');
    
    //     if (input.attr('type') === 'text') {
    //         input.attr('type', 'text');
    //         icon.removeClass('bi-eye').addClass('bi-eye-slash');
    //     } else {
    //         input.attr('type', 'text');
    //         icon.removeClass('bi-eye-slash').addClass('bi-eye');
    //     }
    // });
    $(function(){
        $(".bi-eye").click(function(event){
            $(this).toggleClass('bi-eye-slash');
            var x =$(".form-control").attr("type"); //getting attribute in variable x
            if (x == "text") {
                $(".form-control").attr("type","text");
            } else {
                $(".form-control").attr("type","password");
            }
        })
    });
    
    //eye butoon hide 


    //---- blog page animation in tags 
    $(document).ready(function() {
        $('#pet-tags').hover(function() {
          $(this).css({
            'transition': 'transform .2s',
            'transform': 'scale(1.1)'
          });
        }, function() {
          $(this).css({
            'transition': 'transform .2s',
            'transform': 'scale(1)'
          });
        });
    });

    
    //--------------- Zoom in the image on hover
    $('.zoomable-image').hover(function() {
        $(this).animate({ 
        width: '110%', // increase width by 10%
        marginLeft: '-5%', // center the image in the parent container
        marginTop: '-5%' // center the image in the parent container
        }, 'fast');
    }, function() {
        $(this).animate({ 
        width: '100%', // restore original width
        marginLeft: '0', // reset margins
        marginTop: '0' // reset margins
        }, 'fast');
    });

    $(document).ready(function() {
        $('.img-zoom').hover(function() {
          $(this).css({
            'transition': 'transform .2s',
            'transform': 'scale(1.1)'
          });
        }, function() {
          $(this).css({
            'transition': 'transform .2s',
            'transform': 'scale(1)'
          });
        });
    });
    //----------------------------------------------------------------=====

    //--------for pop up of bread
    $(document).ready(function() {
        $('.nav-item.nav-link.my-pets-link').hover(function() {
          $('.my-pets-popup').fadeIn('fast');
        }, function() {
          $('.my-pets-popup').fadeOut('fast');
        });
      });
    //----------------------------      

    // --------for cart page price changes
    $(".cart-input").on("change",function(){
        var quantity = $(this).val();
        var key = $(this).attr('data-key');
        var price = $(this).attr('data-price');
        $('#totalPrice'+key).html('₹ ' + (quantity*price));

        updateTotal();
    });
    //--- onclick of + button on cart

    //-------- for bg-light hover
    $(document).ready(function() {
        $('.bg-light').hover(function() {
            $(this).addClass('shadow-lg');
        }, function() {
            $(this).removeClass('shadow-lg');
        });
    });
    //----------------------- 

    $(".inc-btn").on("click",function(){
        var key = $(this).attr('data-key');
        var price = $(this).attr('data-price');
        var quantity = $("#cart"+key).val();
        quantity++;
        $("#cart"+key).val(quantity)
        $('#totalPrice'+key).html('₹ ' + (quantity*price));

        updateTotal();
    });

    //-----------on click of (-) button decrease quantity----------------------
    $(".dec-btn").on("click",function(){
        var key = $(this).attr('data-key');
        var price = $(this).attr('data-price');
        var quantity = $("#cart"+key).val();
        quantity--;
        $("#cart"+key).val(quantity)
        $('#totalPrice'+key).html('₹ ' + (quantity*price));

        updateTotal();
    });

    //---------- end of onclick  button on cart

    //======================== updatetotal function for pet-products in cart 
    function updateTotal(el) {
        
        let totalPrice = 0;
        
        // Loop through all the input fields with name="quantity"
        document.querySelectorAll('input[name="quantity"]').forEach(function(el) {
          // Get the quantity value and price of the current input field
          let quantity = parseInt(el.value);
          let price = parseInt(el.getAttribute('data-price'));
 
          // Calculate the total for the current product and add it to the totalPrice
          totalPrice += price * quantity;
        });
        
        $('#sum-price').html('₹ ' + totalPrice);
        $('#product-total-price').html('₹ ' + totalPrice);
        $('input[name="final-Price"]').val(totalPrice);
        $('input[name="total_price"]').val(totalPrice);
      }
      
    //===========================================================

    //======================== updatetotal function for pet in cart 
    
    $(document).ready(function(){
        var finalPetPrice = 0;
        $('.petPrice').each(function(){
            var price = parseFloat($(this).data('price'));
            finalPetPrice += price;
            console.log(finalPetPrice);
        });
        $('.coolPrice').text(finalPetPrice);
        $('#finalPetPrice').val(finalPetPrice);
        $('input[name="total_price"]').val(finalPetPrice);
    });
        
    //===========================================================


    // success message print
    $(document).ready(function(){
        // Hide the success message after 2 seconds
        setTimeout(function() {
            $("#success-alert").fadeOut("slow");
        }, 2000 );

        setTimeout(function() {
            $("#danger-alert").fadeOut("slow");
        }, 3000 );

        setTimeout(function() {
            $("#email-alert").fadeOut("slow");
        }, 2000 );
    });

//----------------------------------------- for dates in cart page

    var currentDate = new Date();

    // Add 6 days to the current date
    var futureDate = new Date(currentDate.getTime() + (6 * 24 * 60 * 60 * 1000));

    // Format the dates as strings
    var formattedCurrentDate = currentDate.toLocaleDateString();
    var formattedFutureDate = futureDate.toLocaleDateString();

    // Set the text of the paragraph element to show the shipping dates
    $('#shipping-dates').text(formattedCurrentDate + ' TO ' + formattedFutureDate);

//----------------------------------------- for dates in cart page

    //============== to delete item in cart
    $(document).ready(function(){
    
        // to search in blog page
        $("#blogSearch").on("keyup",function(){
            var value = $(this).val().toLowerCase();
            $("#blogSearchContainer .d-flex.flex-column.justify-content-start a").filter(function(){
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1);
                if(!value){
                    $(this).val('does not exits');
                }
            });
            
        });

        // to search pet in index page

        $("#petsearch").on("keyup", function(){
            var value = $(this).val().toLowerCase();
            $(".blog-item").filter(function(){
                var match = $(this).find("#petcategory").text().toLowerCase().indexOf(value) > -1;
                $(this).toggle(match);
                if (match) {
                    $(this).css('display', 'block');
                }
            });
        });
        // $( function() {
        //     var availableTags = [
        //     "cat",
        //     "dog",
        //     "fish",
        //     "turtle",
        //     ];
    
        //     $( "#petsearch" ).autocomplete({
        //         source: availableTags
        //     });
        // });
        

    }); 

    //----------------- for checkbox filter in index page

    $(document).ready(function(){
        // When any checkbox is clicked
        $('input[type="checkbox"]').click(function(){
            // Get the checked categories
            var categories = [];
            $('input[type="checkbox"]:checked').each(function(){
                categories.push($(this).attr('name'));
            });
            
            // If no checkbox is checked, show all products
            if (categories.length == 0) {
                $('.blog-item').css('display', 'block');
            }
            else {
                // Hide product all products in index
                $('.blog-item').css('display', 'none');

                // Show products with matching categories
                $('.blog-item').each(function(){
                    var category = $(this).find('#petcategory').text();
                    if (categories.indexOf(category) >= 0) {
                        $(this).css('display', 'block');
                    }
                });
            }
        });
    });
    
    

    //--------- Dropdown on mouse hover
    $(document).ready(function () {
        function toggleNavbarMethod() {
            if ($(window).width() > 992) {
                $('.navbar .dropdown').on('mouseover', function () {
                    $('.dropdown-toggle', this).trigger('click');
                }).on('mouseout', function () {
                    $('.dropdown-toggle', this).trigger('click').blur();
                });
            } else {
                $('.navbar .dropdown').off('mouseover').off('mouseout');
            }
        }
        toggleNavbarMethod();
        $(window).resize(toggleNavbarMethod);
    });


    //------------------ Modal Video
    $(document).ready(function () {
        var $videoSrc;
        $('.btn-play').click(function () {
            $videoSrc = $(this).data("src");
        });
        console.log($videoSrc);

        $('#videoModal').on('shown.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
        })

        $('#videoModal').on('hide.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc);
        })
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Product carousel
    $(".product-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 45,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            },
            1200:{
                items:4
            }
        }
    });


    // Team carousel
    $(".team-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        margin: 45,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            },
            992:{
                items:3
            },
            1200:{
                items:4
            }
        }
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        items: 1,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
    });
    
})(jQuery);
    



