<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>PDS - News</title>
        <meta name="description" content="">
        <? include "inc_common_css.php" ?>
        <style>
        .inner-banner{
            min-height: 120px;
            background-color: #000;
            background: url('img/news/news_banner.png') no-repeat top center;
        }
        #banner-fade{ width: 905px; height: 535px; margin: 0 auto; padding: 27px 0}
        </style>
    </head>
    <body class="inner-color">
        <div id="wrapepr">
            <!-- ===== Logo + menu section ===== !-->
            <? include "inc_header.php" ?>
            <!-- ===== Logo + menu section end ===== !-->
            <!-- ===== Banner section ===== !-->
            <div class="inner-banner">

            </div>
            <div class="yellow-line"></div>
            <!-- ===== Banner section end ===== !-->
            <!-- ===== main content section ===== !-->
            <div class="main-section">
                <div class="container">
                    <div class="center-content-wrap">
                        <div class="path-section">
                            <ul>
                                <li><a href="index.php"><img src="img/common/icon_home.jpg"></a></li>
                                <li>></li>
                                <li><a href="news.php">News</a></li>
                                <li>></li>
                                <li>Sample title - Style and Script Libraries Sample title - Style and Script Libraries Sample</li>
                                <br clear="all">
                            </ul>
                        </div>
                        <div class="main-section-content">
                            <div class="news-content-detail">
                                <div id="banner-fade">
                                    <ul class="bjqs">
                                        <li><img src="img/news/big_sample_photo.jpg"></li>
                                        <li><img src="img/news/big_sample_photo.jpg"></li>
                                        <li><img src="img/news/big_sample_photo.jpg"></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="news-detail-content-wrap">
                                <h2 class="news-item-title">Sample title - Style and Script Libraries Sample title - Style and Script Libraries Sample</h2>
                                    <div class="news-item-date-wrap">
                                        <div class="news-item-date">09 - 11 -2014</div>
                                    </div>
                                    <div class="news-item-content">
                                        The next step is to handle a button click and scroll to the top of the page. To do this we use the jQuery ‘click’ event. 
                                        The scrollToTop function uses the jQuery animate method to scroll up with animation rather than instantly<br>

                                        The next step is to handle a button click and scroll to the top of the page. To do this we use the jQuery ‘click’ event. 
                                        The scrollToTop function uses the jQuery animate method to scroll up with animation rather than instantly<br>

                                        The next step is to handle a button click and scroll to the top of the page. To do this we use the jQuery ‘click’ event. 
                                        The scrollToTop function uses the jQuery animate method to scroll up with animation rather than instantly<br>

                                        The next step is to handle a button click and scroll to the top of the page. To do this we use the jQuery ‘click’ event. 
                                        The scrollToTop function uses the jQuery animate method to scroll up with animation rather than instantly<br>

                                        The next step is to handle a button click and scroll to the top of the page. To do this we use the jQuery ‘click’ event. 
                                        The scrollToTop function uses the jQuery animate method to scroll up with animation rather than instantly<br>

                                        The next step is to handle a button click and scroll to the top of the page. To do this we use the jQuery ‘click’ event. 
                                        The scrollToTop function uses the jQuery animate method to scroll up with animation rather than instantly<br>
                                    </div>
                                    <div class="btn-over-wrap-for-pos">
                                    <div class="btn-wrap">
                                        <div class="btn-detail"><a href="news_detail.php">Details</a></div>
                                    </div>
                                </div>
                                <br clear="all">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ===== main content section end===== !-->
            <!-- ===== footer section ===== !-->
            <? include "inc_footer.php" ?>
            <!-- ===== footer section end ===== !-->
        </div>

        <? include "inc_function.php" ?>

        <script src="js/bjqs-1.3.js"></script>

        <!-- =====  Detail slider ===== !-->
        <script type="text/javascript">
            $(document).ready(function() {
                $('#banner-fade').bjqs({
                    animtype      : 'slide',
                    height        : 535,
                    width         : 905,
                    responsive    : true,
                    randomstart   : true
                });
            });
        </script>       
    </body>
</html>
