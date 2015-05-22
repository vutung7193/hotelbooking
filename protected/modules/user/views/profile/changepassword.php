<html class="no-js" lang="vi"><!--<![endif]--><head>
    <title>booking hotel online</title>
    <meta charset="UTF-8">
    <meta name="robots" content="index, follow">
   
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
 

    


    <link rel="shortcut icon" href="//res.ivivu.com/hotel/img/favicon.ico" type="image/x-icon">
    <link href="https://plus.google.com/109621980211258897268/" rel="author">

     <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/home/home.css"/>
      <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/home/main.css"/>
<!--<link href="//res.ivivu.com/hotel/css/iVIVU.HomePage.css?v=0.0.0.1" rel="stylesheet" type="text/css">-->

<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/main.css"/>
      <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/form.css"/>
    


<script type="text/javascript" async="" src="//www.googleadservices.com/pagead/conversion_async.js"></script><script type="text/javascript" async="" src="//www.googleadservices.com/pagead/conversion_async.js"></script><script type="text/javascript" async="" src="//www.googleadservices.com/pagead/conversion_async.js"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script><script type="text/javascript" async="" src="https://www.google-analytics.com/plugins/ua/ec.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.gstatic.com/maps-api-v3/api/js/20/10/intl/vi_ALL/common.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.gstatic.com/maps-api-v3/api/js/20/10/intl/vi_ALL/util.js"></script><script type="text/javascript" charset="UTF-8" src="https://maps.gstatic.com/maps-api-v3/api/js/20/10/intl/vi_ALL/stats.js"></script></head>
<body data-page="homepage">
    <!-- Google Tag Manager -->
    <noscript>
        &lt;iframe src="//www.googletagmanager.com/ns.html?id=GTM-MLGXNH"
                height="0" width="0" style="display:none;visibility:hidden"&gt;&lt;/iframe&gt;
    </noscript>
    <script async="" src="//www.google-analytics.com/analytics.js"></script><script async="" src="//www.googletagmanager.com/gtm.js?id=GTM-MLGXNH"></script><script>
        (function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
            '//www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-MLGXNH');
    </script>
    <!-- End Google Tag Manager -->
    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="//browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->    
    
    <!-- BEGIN HEADER -->
    <header>
    <div class="container">
        <a class="site-logo" href="#" title="booking hotel online">
            <!--<i class="sprites ivivu-logo"></i>-->
        </a>
        <a href="javascript:;" class="mobi-toggler menu-toggle hover-opacity-8">
            <i class="sprites icn-menu-list"></i>
        </a>
        <!-- BEGIN HOTLINE -->
        <ul class="hotline pull-right">
            <li><a class="hotline" href="tel:0988332563">0988.332.563</a></li>
            <li>from 7h30-21h every day</li>
            <li class="menu-search hover-opacity-8" data-toggle="tooltip" data-placement="left" title="" data-original-title="search hotel">
                <a href="javascript:;">
                    <i class="sprites icn-menu-search"></i>
                </a>
            </li>
            <li class="menu-phone sprites icn-menu-phone"></li>
            <li class="menu-arrow sprites icn-menu-arrow"></li>
        </ul>
        <!-- END HOTLINE -->
        <!-- BEGIN NAVIGATION -->
        <div class="header-navigation pull-left font-transform-inherit">
            <ul>
                 <li class="active">
                    <a href="<?php echo Yii::app()->baseUrl; ?>">
                        Homepage
                    </a>
                </li>
                <li>
                    <a href="#">
                        Contact
                    </a>
                </li>
                 <li>
                    <a href="#">
                        Help
                    </a>
                </li>
                <?php 
                if(Yii::app()->user->isGuest){
                ?>
                 <li>
                    <a href="<?php echo Yii::app()->baseUrl; ?>/index.php/user/login">
                        Login
                    </a>
                </li>
                 <li>
                    <a href="<?php echo Yii::app()->baseUrl; ?>/index.php/user/registration">
                        Register
                    </a>
                </li>
                <?php }?>
               <?php if( !Yii::app()->user->isGuest){
                   
                   ?>
             <li class="dropdown" style="margin-right:  50px">
                    <a class="dropdown-toggle menu-more" data-toggle="dropdown" href="javascript:;">
                        <i style="font-size: 12px"><img src="<?php echo Yii::app()->baseUrl?>/img/profile_icon.png" width="40px" height="40px" >welcome,</i>
                        
                        <i><?php echo Yii::app()->user->name; ?>!</i>
                         <!--<li><a href="">Profile</li>-->
                    </a>
                    <ul class="dropdown-menu bullet">
                        <li><a href="<?php echo Yii::app()->baseUrl?>/index.php/user/profile">Profile</a></li>
                        <li><a href="<?php echo Yii::app()->baseUrl?>/index.php/user/profile/edit">Edit</a></li>
                        <li><a href="<?php echo Yii::app()->baseUrl?>/index.php/user/profile/changepassword">Change password</a></li>
                        <li><a href="<?php echo Yii::app()->baseUrl?>/index.php/user/logout">Logout</a></li>
                    </ul>
                </li>
               <?php }?>
                
            </ul>
        </div>
      
       
    </div>
</header>

    <div class="form" style="margin-left: 400px; margin-top: 100px; min-height: 500px">
<?php $form=$this->beginWidget('UActiveForm', array(
	'id'=>'changepassword-form',
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note"><?php echo UserModule::t('Fields with <span class="required">*</span> are required.'); ?></p>
	<?php echo CHtml::errorSummary($model); ?>
	
	<div class="row">
	<?php echo $form->labelEx($model,'password'); ?>
	<?php echo $form->passwordField($model,'password'); ?>
	<?php echo $form->error($model,'password'); ?>
	<p class="hint">
	<?php echo UserModule::t("Minimal password length 4 symbols."); ?>
	</p>
	</div>
	
	<div class="row">
	<?php echo $form->labelEx($model,'verifyPassword'); ?>
	<?php echo $form->passwordField($model,'verifyPassword'); ?>
	<?php echo $form->error($model,'verifyPassword'); ?>
	</div>
	
	
	<div class="row submit">
	<?php echo CHtml::submitButton(UserModule::t("Save")); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->

<footer>
    <div class="container">
        <div class="foot-col-1 col-xs-12 col-sm-6 col-md-3 col-lg-2">
            
        </div>
    </div>
    <div class="container">
        <div class="foot-col-6 col-xs-12 col-sm-12 col-md-6 col-lg-4">
            <ul>
                <li class="foot-call">Please call me for more detail</li>
                <li class="foot-fone">Help:&nbsp;<a href="tel:0988.332.563">0988.332.563</a> </li>
                <li class="foot-fone">Other:&nbsp;&nbsp;<a href="tel:01293711994">01293.71.1994</a></li>
                <li class="foot-time">from 7h30 - 21h everyday</li>
            </ul>
        </div>
        <div class="foot-col-7 col-xs-12 col-sm-12 col-md-6 col-lg-8">
            <ul>
                <li>
                    <i class="sprites icn-footermail foot-mail"></i>
                    <a href="mailto:vvt7193@gmail.com">vvt7193@gmail.com</a>
                </li>
                <li>
                    <i class="sprites icn-footerpin foot-pin"></i>
                    <b> Copyright@2015 All Right Reserved </b>
                    
                    <br>
                    <b>ADDRESS: HANOI UNIVERSITY OF SCIENCE AND TECHNOLOGY </b> (<a href="javascript:;" class=" font-size-14 call-modal-map" data-lat="21.0202535" data-lng="105.84974699999998">view map</a>)
                </li>
                
                
            </ul>
        </div>
    </div>
</footer>

<!-- END FOOTER -->

    <!-- BEGIN MODAL -->
    <div id="ivivuModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header hide">
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer hide"></div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        </div>
    </div>
</div>

<!-- END MODAL -->

    <!-- BEGIN PRELOADER -->
    <div id="preloader" class="hide">
    <i class="preloader"></i>
    <h4>Please Waiting</h4>
    <span>loading data</span>
</div>

    <!-- END PRELOADER -->    
    
    <!-- BEGIN GLOBAL -->
    <div id="PRG" class="hide">
    <div class="head">
        <b>Vui lòng để lại thông tin yêu cầu đặt phòng khách sạn của Quý khách.</b><br>
        <small>
                
            Giá chỉ mang tính chất tham khảo và không áp dụng vào các ngày lễ tết. Chúng tôi sẽ liên hệ lại trong 24h.
                
        </small>
    </div>
    <div class="body">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 pad-l-0 pad-r-10">
            <ul class="pad-b-10">
                <li class="font-size-12">Họ &amp; Tên: <span class="color-dred content-asterisk"></span></li>
                <li>
                    <input type="text" name="modal-cusname" value="" class="br-4 pad-tb-4 pad-lr-8 bdr-a-d wth-full" placeholder="Nguyễn Văn A" tabindex="1">
                </li>
            </ul>
            <ul class="pad-b-10">
                <li class="font-size-12">Số điện thoại: <span class="color-dred content-asterisk"></span></li>
                <li>
                    <input type="text" name="modal-cusfone" value="" class="br-4 pad-tb-4 pad-lr-8 bdr-a-d wth-full" placeholder="(+84) 839 308 290" tabindex="2">
                </li>
            </ul>
            <ul class="pad-b-10">
                <li class="font-size-12">Email: <span class="color-dred content-asterisk"></span></li>
                <li>
                    <input type="text" name="modal-cusmail" value="" class="br-4 pad-tb-4 pad-lr-8 bdr-a-d wth-full" placeholder="vidu@ivivu.com" tabindex="3">
                </li>
            </ul>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 pad-l-0 pad-r-10">
            <ul class="pad-b-10">
                <li class="font-size-12">Vùng/thành phố yêu cầu:</li>
                <li>
                    <input type="hidden" name="modal-regionid" value="">
                    <input type="text" name="modal-regioname" value="" class="br-4 pad-tb-4 pad-lr-8 bdr-a-d wth-full" readonly="readonly">
                </li>
            </ul>
            <ul class="pad-b-10">
                <li class="font-size-12">Tên khách sạn:</li>
                <li>
                    <input type="hidden" name="modal-hotelid" value="">
                    <input type="text" name="modal-hotelname" value="" class="br-4 pad-tb-4 pad-lr-8 bdr-a-d wth-full" readonly="readonly">
                </li>
            </ul>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pad-l-0 pad-r-4">
                <ul class="pad-b-10">
                    <li class="font-size-12">Ngày nhận phòng:</li>
                    <li class="date-modal-checkin">
                        <input type="text" name="datepicker-modal-chkin" class="br-4 pad-tb-4 pad-lr-8 bdr-a-d wth-full" value="08-05-2015" tabindex="4">
                        <input type="hidden" name="datepicker-modal-nights" value="1">
                        <i class="sprites icn-datecheckin"></i>
                    </li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 pad-lr-0">
                <ul class="pad-b-10">
                    <li class="font-size-12">Ngày trả phòng:</li>
                    <li class="date-modal-checkin">
                        <input type="text" name="datepicker-modal-chkout" class="br-4 pad-tb-4 pad-lr-8 bdr-a-d wth-full" value="09-05-2015" tabindex="5">
                        <i class="sprites icn-datecheckout"></i>
                    </li>
                </ul>
            </div>
        </div>
        <div class="clearfix">
            <ul class="pad-r-10">
                <li class="font-size-12">Yêu cầu khác:</li>
                <li>
                    <textarea name="modal-other" class="br-4 pad-tb-4 pad-lr-8 bdr-a-d wth-full txtarea-resize-none" placeholder="VD: chi phí dự kiến, số người ở, dịch vụ phòng..." tabindex="6"></textarea>
                </li>
            </ul>
        </div>
    </div>
    <div class="foot">
        <button type="button" class="prg-submit btn-orange pad-tb-4 pad-lr-10 uppercase" onclick="ga('send', { 'hitType': 'event', 'eventCategory': 'YCG', 'eventAction': 'Click', 'eventLabel': 'Thành công' }); goog_report_conversion();">Gửi yêu cầu</button>
    </div>
</div>
<div id="MMP" class="hide">
    <div class="head"></div>
    <div class="body">
        <div id="modalmap" style="width: 100%; height: 320px;"></div>
    </div>
    <div class="foot"></div>
</div>
    <!-- END GLOBAL -->

<!-- BEGIN JAVASCRIPT -->
    <script src="//res.ivivu.com/hotel/vendor/jquery-1.11.2.min.js" type="text/javascript"></script>
    <script src="//res.ivivu.com/hotel/vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="//res.ivivu.com/hotel/vendor/moment/moment.js" type="text/javascript"></script>
    <script src="//res.ivivu.com/hotel/vendor/moment/locale/vi.js" type="text/javascript"></script>
    <script src="//res.ivivu.com/hotel/vendor/bootstrap.datetimepicker.min.js" type="text/javascript"></script>
    <script src="//res.ivivu.com/hotel/vendor/mcustomscrollbar/jquery.mCustomScrollbar.min.js" type="text/javascript"></script>
    <script src="//maps.google.com/maps/api/js?sensor=false&amp;language=vi"></script><script src="https://maps.gstatic.com/maps-api-v3/api/js/20/10/intl/vi_ALL/main.js"></script>
    <script src="//res.ivivu.com/hotel/vendor/gmap3.min.js"></script>
    
<script src="//res.ivivu.com/hotel/vendor/jquery.royalslider.min.js"></script>
<script src="//res.ivivu.com/hotel/vendor/owlcarousel/owl.carousel.min.js"></script>



    <script src="//res.ivivu.com/hotel/js/0.0.1/static.min.js?v=0.0.1.2" type="text/javascript"></script>
    <script src="//res.ivivu.com/hotel/js/0.0.1/common.min.js" type="text/javascript"></script>
    <script src="//res.ivivu.com/hotel/js/0.0.1/searchbox.min.js" type="text/javascript"></script>

    
<script src="//res.ivivu.com/hotel/js/0.0.1/homepage.min.js"></script>


    
<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "WebSite",
        "url": "https://ivivu.com/",
        "potentialAction": {
            "@type": "SearchAction",
            "target": "https://www.ivivu.com/tim-kiem?q={search_term_string}",
            "query-input": "required name=search_term_string"
        }
    }
</script>

<!-- END JAVASCRIPT -->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-61182265-1', 'auto');
        ga('send', 'pageview');

    </script>

</body></html>