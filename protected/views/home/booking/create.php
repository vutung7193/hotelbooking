


<!--MITONIOS-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="language" content="en"/>
    
 

    <!-- blueprint CSS framework -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/screen.css"
          media="screen, projection"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/print.css"
          media="print"/>
    <!--[if lt IE 8]>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/ie.css"
          media="screen, projection"/>
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/main.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin/form.css"/>
    <!-- blueprint CSS framework -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/home/main.css"/>
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <?php
    Yii::app()->clientScript->registerCoreScript('jquery');
    Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/imageTooltip.js');
    Yii::app()->clientScript->registerScriptFile(Yii::app()->request->baseUrl . '/js/slides.min.jquery.js');
    ?>
    <style type="text/css">
        #header h1 a {
            float: left;
            background: url(<?php echo Yii::app()->request->baseUrl?>/images/logo.png) no-repeat;
            display: block;
            margin-top: 20px;
            text-indent: -9999px;
            height: 96px;
            width: 245px;
        }

        #user #submitsearch {
            background: url(<?php echo Yii::app()->request->baseUrl?>/images/search-button.png) no-repeat;
            border: none;
            height: 20px;
            width: 25px;
            margin-left: 10px;
        }

        #menu li {
            float: left;
            background: url(<?php echo Yii::app()->request->baseUrl?>/images/menu-bg.png) no-repeat bottom right;
            padding-right: 62px;
        }

        #menu li#sale a {
            background: url(<?php echo Yii::app()->request->baseUrl?>/images/sale-bg.png) no-repeat center;
            padding: 17px 47px 17px 47px;
        }

        #mainnav li li {
            list-style: url(<?php echo Yii::app()->request->baseUrl?>/images/arrow.png) inside;
        }

        #mainnav li li:hover, #mainnav li li.current {
            background: url(<?php echo Yii::app()->request->baseUrl?>/images/right-title.png) no-repeat;
            list-style: url(<?php echo Yii::app()->request->baseUrl?>/images/arrow-hover.png) inside;
        }

        #main-content h3 {
            font-family: Tahoma, Geneva, sans-serif;
            font-size: 18px;
            color: #2f2f2f;
            background: url(<?php echo Yii::app()->request->baseUrl?>/images/heading-bg.png) no-repeat bottom;
            padding-bottom: 15px;
            margin: 15px 0;
        }

        #footer-bg {
            background: url(<?php echo Yii::app()->request->baseUrl?>/images/footer-bg.png) repeat-x;
            /*height: 281px;*/
        }

        #othernews h3 {
            background: url("<?php echo Yii::app()->request->baseUrl?>/images/heading-bg.png") no-repeat scroll center bottom transparent;
            color: #2F2F2F;
            font-family: Tahoma, Geneva, sans-serif;
            font-size: 18px;
            margin: 15px 0;
            padding-bottom: 15px;
        }

        #header h1 a {
            background: url("<?php echo Yii::app()->request->baseUrl?>/images/logo.jpg") no-repeat scroll 0 0 transparent;
        }

        #submitsearch {
            background: url("<?php echo Yii::app()->request->baseUrl?>/images/search-button.png") no-repeat scroll 0 0 transparent;
            border: medium none;
            height: 20px;
            margin-left: 10px;
            width: 25px;
        }
    </style>
</head>
<body>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&appId=306536419550310&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="fb-root"></div>
<script>(function (d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=413999868678661";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div id="header">
    <table width="100%">
        <tbody>
        <tr>
            <td valign="top">
                <h1>
                    <!--<a href="/" style="margin-top: 0">achino</a>-->
                </h1>
            </td>
            <td align="center">
                <div id="support" style="width: auto;float: right; margin-top:40px; text-align: center;">
                    <table border="0" cellpadding="8">
                        <tbody>
<!--                        <tr>
                            <td colspan="5">
                                <h3 style="margin-bottom: 0px;">
                                    Hỗ trợ trực tuyến</h3>
                            </td>
                        </tr>-->
<!--                        <tr>
                            <td align="center" style="padding: 0 4px">
                                <a href="ymsgr:sendim?vvt93">
                                    <img height="50" src="http://opi.yahoo.com/online?u=vvt93&amp;t=14" style="border-width: 0px;
                                            border-style: solid;" alt=""><br>
                                    HotelBookingSystem</a>
                            </td>
                        </tr>-->
                        <tr>
                            <td align="right">
                                <form action="<?php echo $this->createUrl('/site/search')?>" method="get">
                                    <input type="text" name="v" id="s" placeholder="Search Google"
                                           title="Tìm kiếm theo mã" class="blur">
                                    <input type="submit" name="sub" id="submitsearch" value="" style="cursor: pointer">
                                </form>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </td>
        </tr>
        <tr>
            <td>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<!--header-->
    <!--<div id ="header">-->
        <!--<img src="<?php echo Yii::app()->request->baseUrl?>/images/logo.png" span style="width: 100%;height: 100%"></img>-->
<!--</div>-->
<div id="menu-bg">
    <div id="menu">
        <ul>
            <li id="sale"><a href="<?php echo $this->createUrl('/')?>" title="Trang chủ"> Trang chủ</a></li>
<!--           <li><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/hometeam" title="Dữ Liệu Bóng Đá">Dữ Liệu Đội Bóng</a></li>
             <li ><a href="<?php echo $this->createUrl('/')?>" title="Live Score">Live Score</a></li>
               <li ><a href="<?php echo $this->createUrl('/')?>" title="Liên Hệ">Liên Hệ</a></li>-->
                             

                 <li ><a href="http://localhost/hotel6/admin.php?r=user/login" title="Quản Trị">Quản Trị</a></li>
        </ul>
    </div>
</div>
<!--menu-->
<div id="container">
    <div id="slides">
        <div class="slides_container">
            <img src="<?php echo Yii::app()->request->baseUrl?>/images/banner/baner1.png" width="966"
                 height="386"/>
            <img src="<?php echo Yii::app()->request->baseUrl?>/images/banner/baner2.png" width="966"
                 height="386"/>
            <img src="<?php echo Yii::app()->request->baseUrl?>/images/banner/baner3.png" width="966"
                 height="386"/>
            <img src="<?php echo Yii::app()->request->baseUrl?>/images/banner/baner4.png" width="966"
                 height="386"/>
            <img src="<?php echo Yii::app()->request->baseUrl?>/images/banner/baner5.png" width="966"
                 height="386"/>
            
        </div>
    </div>
    <!--slide-->
    <div id="left">
<!--        <div id="mainnav">
         <?php echo Mitonios::danhsachchuyenmuc2();?>
         
         
     <?php //   $giaidaus = giaidau::model()->findAll();?>
         <h3 span style="font-weight: bold ; margin-top: 35px; background: url(<?php echo Yii::app()->request->baseUrl?>/images/heading-bg.png);">Các Giải Đấu</h3>
         <ul style="border:solid 1px; border-color: grey">
         <ul span style="margin-top: 15px">
                 <a href="#"><?php // echo $giaidaus[0]->ten ?></a>
                 <ul>
                 
                     <li> <img  style="margin-left: 10px" width="10" height="10" src="<?php echo Yii::app()->request->baseUrl?>/images/arrow-next.png"><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/news1">Tin Tức</a></li>
                 <li><img  style="margin-left: 10px" width="10" height="10" src="<?php echo Yii::app()->request->baseUrl?>/images/arrow-next.png"><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/team1">Đội Bóng</a></li>
                 <li><img  style="margin-left: 10px" width="10" height="10" src="<?php echo Yii::app()->request->baseUrl?>/images/arrow-next.png"><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/rank1">Bảng Xếp Hạng</a></li>
                 </ul>
                 
         </ul>
          <ul span style="margin-top: 5px">
                 <a href="#"><?php // echo $giaidaus[1]->ten ?></a>
                 <ul>
               
                 <li><img  style="margin-left: 10px" width="10" height="10" src="<?php echo Yii::app()->request->baseUrl?>/images/arrow-next.png"><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/news2">Tin Tức</a></li>
                 <li><img  style="margin-left: 10px" width="10" height="10" src="<?php echo Yii::app()->request->baseUrl?>/images/arrow-next.png"><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/team2">Đội Bóng</a></li>
                  <li><img  style="margin-left: 10px" width="10" height="10" src="<?php echo Yii::app()->request->baseUrl?>/images/arrow-next.png"><a href="<?php echo Yii::app()->request->baseUrl?>/index.php/site/rank2">Bảng Xếp Hạng</a></li>
                 </ul>
                 
         </ul>
             </ul>
         
        </div>-->
        <br/>
        <br/>

        <div class="fb-like-box" data-href="https://www.facebook.com/thucphamchucnanghoakyusa" data-width="184" data-show-faces="true"
             data-stream="false" data-header="true"></div>
        <br/>
        <br/>
        <!-- Histats.com  (div with counter) -->
        <div id="histats_counter"></div>
<!--     <!-- Histats.com  START  (standard)-->
<script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script>
<a href="http://www.histats.com" target="_blank" title="counter easy hit" ><script  type="text/javascript" >
try {Histats.start(1,2851220,4,401,118,80,"00011011");
Histats.track_hits();} catch(err){};
</script></a>
<noscript><a href="http://www.histats.com" target="_blank"><img  src="http://sstatic1.histats.com/0.gif?2851220&101" alt="counter easy hit" border="0"></a></noscript>
<!-- Histats.com  END  -->
    </div>
    <!--left-->
    <div id="main-content">
      <?php
/* @var $this BookingController */
/* @var $model Booking */

//$this->breadcrumbs=array(
//	'Bookings'=>array('index'),
//	'Create',
//);
//
//$this->menu=array(
//	array('label'=>'List Booking', 'url'=>array('index')),
//	array('label'=>'Manage Booking', 'url'=>array('admin')),
//);
//?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>
    </div>
    <!--main-content-->
    <div class="clr"></div>
</div>
<!--container-->
<div id="footer-bg" span style="height: 100px">
  
       


    <p span align="center" >Designed by <a style="padding-top: 30px" href="https://www.facebook.com/vutung.vvt93">Vũ Tùng</a></p>

</div>
   
<!--footer-bg-->
<script type="text/javascript">
    $(function () {
        $('#slides').slides({
            play:2000,
            pause:1000,
            hoverPause:true
        });
    });
</script>
<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-38998923-1']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

</script>
</body>
</html>

