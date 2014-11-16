<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>PDS - Contact us</title>
        <meta name="description" content="">
        <? include "inc_common_css.php" ?>
        <style>
        .inner-banner{
            min-height: 120px;
            background-color: #000;
            background: url('img/contactus/contactus_banner.png') no-repeat top center;
        }
        .contactus-info{ float: left; margin-top:10px; }
        .contactus-form{ float: left; width: 620px;}
        .contactus-info-list{ margin: 0; padding: 0; list-style: none;}
        .contactus-info-list:after { content:''; display:block; clear: both; }
        .contactus-info-list li{
            float: left;
        }
        </style>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
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
                                <li>Contact us</li>
                                <br clear="all">
                            </ul>
                        </div>
                        <div class="main-section-content">
                            <div class="contactus-content-section">
                                <div class="contactus-top-content-wrap">
                                    <div class="contactus-form">
                                        <div class="container">
                                          <form id="attributeForm" method="post" class="form-horizontal"
                                                  data-bv-message="This value is not valid"
                                                  data-bv-feedbackicons-valid="glyphicon glyphicon-ok"
                                                  data-bv-feedbackicons-invalid="glyphicon glyphicon-remove"
                                                  data-bv-feedbackicons-validating="glyphicon glyphicon-refresh">
                                                <div class="form-group">
                                                    <div class="col-sm-3">
                                                        <label class="control-label">Full name</label>
                                                        <input type="text" class="form-control" name="firstName" placeholder="First name"
                                                               data-bv-notempty="true" data-bv-notempty-message="The first name is required and cannot be empty" />
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <label class="control-label">Full name</label>
                                                        <input type="text" class="form-control" name="lastName" placeholder="Last name"
                                                               data-bv-notempty="true" data-bv-notempty-message="The last name is required and cannot be empty" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-sm-6">
                                                        <label class="control-label">Username</label>
                                                        <input type="text" class="form-control" name="username"
                                                               data-bv-message="The username is not valid"
                                                               data-bv-notempty="true" data-bv-notempty-message="The username is required and cannot be empty"
                                                               data-bv-regexp="true" data-bv-regexp-regexp="^[a-zA-Z0-9_\.]+$" data-bv-regexp-message="The username can only consist of alphabetical, number, dot and underscore"
                                                               data-bv-stringlength="true" data-bv-stringlength-min="6" data-bv-stringlength-max="30" data-bv-stringlength-message="The username must be more than 6 and less than 30 characters long"
                                                               data-bv-different="true" data-bv-different-field="password" data-bv-different-message="The username and password cannot be the same as each other" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-sm-6">
                                                        <label class="control-label">Email address</label>
                                                        <input class="form-control" name="email" type="email"
                                                               data-bv-emailaddress="true" data-bv-emailaddress-message="The input is not a valid email address" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-sm-6">
                                                        <label class="control-label">Email address</label>
                                                        <input class="form-control" name="email" type="email"
                                                               data-bv-emailaddress="true" data-bv-emailaddress-message="The input is not a valid email address" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-sm-6">
                                                        <label class="control-label">Email address</label>
                                                        <input class="form-control" name="email" type="email"
                                                               data-bv-emailaddress="true" data-bv-emailaddress-message="The input is not a valid email address" />
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="contactus-info">
                                        <div><img src="img/contactus/tag_contact_info.png"></div>
                                        <ul class="contactus-info-list">
                                            <li><img src="img/contactus/icon_mail.png" alt=""></li><li>12312</li>
                                        </ul>
                                        <ul class="contactus-info-list">
                                            <li><img src="img/contactus/icon_fax.png" alt=""></li><li>21321</li>
                                        </ul>
                                        <ul class="contactus-info-list">
                                            <li><img src="img/contactus/icon_phone.png" alt=""></li><li>21321</li>
                                        </ul>
                                    </div>
                                    <br clear="all">
                                </div>
                            </div>
                            <div class="section-line">
                                <div class="contactus-bottom-content-wrap">
                                    <div class="contactus-map">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3691.762693282912!2d114.13346750000002!3d22.286977400000012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3403ff835e30ea5d%3A0x3d593a6ba3543804!2z55-z5aGY5ZKA5b636LyU6YGT6KW_NDQ0LTQ1MuiZn-mmmea4r-W3pealreWkp-W7iA!5e0!3m2!1szh-TW!2shk!4v1416071078515" width="400" height="300" frameborder="0" style="border:0"></iframe>
                                    </div>
                                    <div class="contactus-address"></div>
                                    <br clear="all">
                                </div>
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
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script> 
        <script type="text/javascript">
            $(document).ready(function() {
                $('#attributeForm').bootstrapValidator();
            });
        </script>   
    </body>
</html>
