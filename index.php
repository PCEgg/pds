<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>PDS</title>
        <meta name="description" content="">
        
        <link rel="stylesheet" type="text/css" href="css/parallaxslider.css" />
        <? include "inc_common_css.php" ?>
        
    </head>
    <body>
        <div id="wrapepr">
            <!-- ===== Logo + menu section ===== !-->
            <? include "inc_header.php" ?>
            <!-- ===== Logo + menu section end ===== !-->
            <!-- ===== Banner section ===== !-->
            <div class="banner">
                <div style="background: url('img/slider/bg.png') no-repeat top center; margin:0;">
                    <div id="myparallaxslider" class="parallaxslider">
                    
                    <div class="slide">
                        <div class="bgoverlay" data-bgimage="img/slider/pdt.png"></div>
                        <div class="desc">
                        <div style="position:absolute; bottom:125px; color:#000000; left:30px; padding:10px; border-radius:10px; line-height:1.4em;">
                            <img src="img/slider/content.png">
                        </div>
                        </div>
                    </div>

                    <div class="slide">
                        <div class="bgoverlay" data-bgimage="img/slider/pdt2.png"></div>
                        <div class="desc">
                        <div style="position:absolute; bottom:125px; color:#000000; left:30px; padding:10px; border-radius:10px; line-height:1.4em;">
                            <img src="img/slider/content.png">
                        </div>
                        </div>
                    </div>

                    </div>
                </div>
            </div>
            <!-- ===== Banner section end ===== !-->
            <!-- ===== main content section ===== !-->
            <div class="cate">
                <div class="container">
                    <div class="box1"></div>
                    <div class="box2"></div>
                    <div class="box3"></div>
                    <br claer="all">
                </div>
            </div>
            <!-- ===== main content section end===== !-->
            <!-- ===== news section ===== !-->
            <div class="main-news">
                <div class="container">
                    <div class="tag"><img src="img/main/news-center-line.png" alt=""></div>
                    <div class="news-content-wrap">
                        <div class="news-pic">
                            <img src="img/main/sample-news-photo.png">
                        </div>
                        <div class="news-content">
                            <h2>Lawmakers vote against probing CE's HK$50m deal - long title testing</h2>
                            <span>09-10-2014</span>
                            <p>
                                Legislators on Thursday voted down a motion seeking a special investigation into the Chief Executive C Y Leung's HK$50 million deal with Australian engineering firm, UGL. Thirty-six lawmakers voted against the motion......
                            </p>
                            <div class="btn-wrap">
                                <div class="btn-detail">
                                    Details
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ===== news section end ===== !-->
            <!-- ===== footer section ===== !-->
            <? include "inc_footer.php" ?>
            <!-- ===== footer section end ===== !-->
        </div>

        <? include "inc_function.php" ?>

       
        <script type="text/javascript" src="js/jquery.velocity.min.js"></script>
        <script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>

        <script type="text/javascript" src="js/parallaxslider.js"></script>
        
        <script type="text/javascript">

        var firstparallaxslider=new parallaxSlider({
        wrapperid: 'myparallaxslider', //ID of DIV on page to house slider
        displaymode: {type:'manual', pause:3000, cycles:2, stoponclick:true, pauseonmouseover:true},
        delaybtwdesc: 500, // delay in milliseconds between the revealing of each description layer inside a slide
        navbuttons: ['img/slider/left.png', 'img/slider/right.png', 'img/slider/up.png', 'img/slider/down.png'], // path to nav images
        activeslideclass: 'selectedslide', // CSS class that gets added to currently shown DIV slide
        orientation: 'h', //Valid values: "h" or "v"
        persist: true, //remember last viewed slide and recall within same session?
        slideduration: 800 //transition duration (milliseconds)
        })

        </script>
        
    </body>
</html>
