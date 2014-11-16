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
        .products-detail-list{
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .products-detail-list li{
            float: left;
        }
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
                                <li>Communications</li>
                                <li>></li>
                                <li>Telex Radio Com</li>
                                <li>></li>
                                <li>Product detail name</li>
                                <br clear="all">
                            </ul>
                        </div>
                        <div class="main-section-content">
                            <div class="products-detail-section">
                               <div class="products-detail-photo-wrap"></div>
                               <div class="products-detail-content">
                                   <div class="products-name-wrap">
                                        <ul class="products-detail-list">
                                            <li>name</li>
                                            <li>id</li>
                                        </ul>
                                        <br clear="all">
                                   </div>
                                   <div class="products-description-wrap">
                                       <div>hi</div>
                                   </div>
                                   <div class="products-weight-wrap">
                                       <ul class="products-detail-list">
                                            <li class="products-detail-list-title">weight</li>
                                            <li>number</li>
                                        </ul>
                                        <br clear="all">
                                   </div>
                                   <div class="products-details-dei">
                                       <ul class="products-detail-list">
                                            <li class="products-detail-list-title">name</li>
                                            <li>id</li>
                                            <li>name</li>
                                            <li>id</li>
                                            <li>name</li>
                                            <li>id</li>
                                        </ul>
                                        <br clear="all">
                                   </div>
                               </div>
                               <br clear="all">
                            </div>
                            <div class="products-detail-remark">
                                <div><img src="" alt=""></div>
                                <div>content</div>
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
        <script type="text/javascript">
            $(document).ready(function(){});
        </script>        
    </body>
</html>
