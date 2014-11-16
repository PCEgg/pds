           $( document ).ready(function() { 

// ============= Menu Mouse Over ================= //

            var activeMenu = $( ".menu" ).find( ".menu-active" );
            var shapePosition = activeMenu.attr( "data-left" );
            var shapeWidth = activeMenu.attr( "data-width" );
            var currentSubCateName = "";

            $( "#menu-bg-shape" ).css({
                "left": shapePosition + "px",
                "width": shapeWidth + "px"
            })

            $( ".menu-n" )
              .on( "mouseenter", function() {
                $('.subMenuHere').animate({ "height": 0 }, "slow" );
                $('.menu-n').removeClass('menu-active');
                $( '#menu-bg-shape' ).stop();
                
                $(this).addClass('menu-active');

                shapePosition = $(this).attr( "data-left" );
                shapeWidth = $(this).attr( "data-width" );
                var showSubMenuItems = $(this).attr('data-name');
                    
                $( "#menu-bg-shape" ).animate({
                    "left": shapePosition + "px",
                    "width": shapeWidth + "px"
                    }, 1000, function() {
                        if($( ".menu-active" ).hasClass( "sub-menu" )){
                          var getSubMenuCurHeight = $(showSubMenuItems).height() + 10;
                            $('.submenu-wrap').css("display","none");
                            $('.subMenuHere').animate({ "height": getSubMenuCurHeight }, "slow" );
                            $(showSubMenuItems).css("display","block");
                        }
                    });
              })
              .on( "mouseleave", function() {
                
              });

              $( ".subMenuHere" )
              .on("mouseenter", function() {
                
              }).on( "mouseleave", function() {
                $('.subMenuHere').animate({ "height": 0 }, "slow" );
              });
             
              $( "#backToTop" ).on( "click", function() {
                scrollToTop();
                });

              // ============= Back to top ================= //
              function scrollToTop() {
                verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
                element = $('body');
                offset = element.offset();
                offsetTop = offset.top;
                $('html, body').animate({scrollTop: offsetTop}, 500, 'linear');
                } 
           });