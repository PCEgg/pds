<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>PDS - Products</title>
        <meta name="description" content="">
        <? include "inc_common_css.php" ?>
        <style>
        .inner-banner{
            min-height: 120px;
            background-color: #000;
            background: url('img/products/product_banner.jpg') no-repeat top center;
        }
        
        </style>
    </head>
<ul>
                                        <li class="product-mover">
                                            <div class="product-btn-wrap">
                                                <div class="btn-detail">
                                                    <a href="products_detail.php">Details</a>
                                                </div>
                                            </div>
                                            <div class="product-mask"></div>
                                            <div class="product-pic">
                                                <img src="img/products/product_list_items.jpg">
                                            </div>
                                            <div class="product-title">HR 2</div>
                                        </li>
                                        <li class="product-mover">
                                            <div class="product-btn-wrap">
                                                <div class="btn-detail">
                                                    <a href="products_detail.php">Details</a>
                                                </div>
                                            </div>
                                            <div class="product-mask"></div>
                                            <div class="product-pic">
                                                <img src="img/products/product_list_items.jpg">
                                            </div>
                                            <div class="product-title">HR 2</div>
                                        </li>
                                        <li class="product-mover">
                                            <div class="product-btn-wrap">
                                                <div class="btn-detail">
                                                    <a href="products_detail.php">Details</a>
                                                </div>
                                            </div>
                                            <div class="product-mask"></div>
                                            <div class="product-pic">
                                                <img src="img/products/product_list_items.jpg">
                                            </div>
                                            <div class="product-title">HR 2</div>
                                        </li>
                                        <li class="product-mover">
                                            <div class="product-btn-wrap">
                                                <div class="btn-detail">
                                                    <a href="products_detail.php">Details</a>
                                                </div>
                                            </div>
                                            <div class="product-mask"></div>
                                            <div class="product-pic">
                                                <img src="img/products/product_list_items.jpg">
                                            </div>
                                            <div class="product-title">HR 2</div>
                                        </li>
                                        <li class="product-mover">
                                            <div class="product-btn-wrap">
                                                <div class="btn-detail">
                                                    <a href="products_detail.php">Details</a>
                                                </div>
                                            </div>
                                            <div class="product-mask"></div>
                                            <div class="product-pic">
                                                <img src="img/products/product_list_items.jpg">
                                            </div>
                                            <div class="product-title">HR 2</div>
                                        </li>
                                        <li class="product-mover">
                                            <div class="product-btn-wrap">
                                                <div class="btn-detail">
                                                   <a href="products_detail.php">Details</a>
                                                </div>
                                            </div>
                                            <div class="product-mask"></div>
                                            <div class="product-pic">
                                                <img src="img/products/product_list_items.jpg">
                                            </div>
                                            <div class="product-title">HR 2</div>
                                        </li>
                                        <li class="product-mover">
                                            <div class="product-btn-wrap">
                                                <div class="btn-detail">
                                                    <a href="products_detail.php">Details</a>
                                                </div>
                                            </div>
                                            <div class="product-mask"></div>
                                            <div class="product-pic">
                                                <img src="img/products/product_list_items.jpg">
                                            </div>
                                            <div class="product-title">HR 2</div>
                                        </li>
                                        <li class="product-mover">
                                            <div class="product-btn-wrap">
                                                <div class="btn-detail">
                                                    <a href="products_detail.php">Details</a>
                                                </div>
                                            </div>
                                            <div class="product-mask"></div>
                                            <div class="product-pic">
                                                <img src="img/products/product_list_items.jpg">
                                            </div>
                                            <div class="product-title">HR 2</div>
                                        </li>
                                        <li class="product-mover">
                                            <div class="product-btn-wrap">
                                                <div class="btn-detail">
                                                    <a href="products_detail.php">Details</a>
                                                </div>
                                            </div>
                                            <div class="product-mask"></div>
                                            <div class="product-pic">
                                                <img src="img/products/product_list_items.jpg">
                                            </div>
                                            <div class="product-title">HR 2</div>
                                        </li>
                                    </ul>
        <script type="text/javascript">
            $(document).ready(function(){

                // =============== reload cate =============== //
                $('.sub-cate').on( "click", function () {
                    var curLocation = $(location).attr('href');
                    //check if different cate or not, then
                    //if sub cate name != current sub cate path, then jump page, else
                    $('.product-list-image > ul').remove();
                    $('.product-list-image').load('products_list_items.php').fadeIn('slow');
                    $(".product-mask").hide();
                    $(".product-btn-wrap").hide();
                })


                // =============== mouseover effect =============== //
                $(".product-mask").hide();
                $(".product-btn-wrap").hide();
                
                $(".product-mover").mouseover(function(){
                    var curOverItem = $(this);
                    curOverItem.find(".product-mask").show();
                    curOverItem.find(".product-btn-wrap").show();
                })
                .mouseout(function(){
                    var curOverItem = $(this);
                    curOverItem.find(".product-mask").hide();
                    curOverItem.find(".product-btn-wrap").hide();
                });
                // =============== toggle cate function =============== //
                $( ".cate" ).on( "click", function() {
                    var showSubCate = $( this ).find( ".sub-cate-list" );
                    if(!$( this ).hasClass('cate-active')){
                    $( ".cate" ).removeClass("cate-active");
                    $( this ).addClass("cate-active");
                    //$( ".sub-cate" ).css("color", "#d1d1d1");
                    $( ".sub-cate-list" ).animate({'height': '0'}, 500);
                    
                    
                    
                    var curHeight = showSubCate.height();
                    showSubCate.css('height', 'auto');
                    var autoHeight = showSubCate.height();
                    showSubCate.height(curHeight).animate({height: autoHeight}, 500);

                    }
                    
                });
            })
        </script>        
    </body>
</html>