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

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

    <div id="header">
        <div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?> <span style="font-size: 13px"><a href="<?php echo Yii::app()->request->baseUrl?>/index.php" >Back To UserView</a></span></div>
    </div>
    <!-- header -->
    <div id="mainmenu">
        <?php
        $this->widget('zii.widgets.CMenu', array(
            'items' => array(
                array('label' => 'Home', 'url' => array('/site/index')),
                 array('label' => 'Hotels', 'url' => array('/hotels/admin')),
               array('label' => 'rooms', 'url' => array('/rooms/admin')),
                array('label' => 'Roomtype', 'url' => array('/roomtype/admin')),
                array('label' => 'purpose', 'url' => array('/purpose/admin')),
//                array('label' => 'convenient', 'url' => array('/convenient/admin')),
                 array('label' => 'roomconvenient', 'url' => array('/roomConvenient/admin')),
                 array('label' => 'hotelconvenient', 'url' => array('/hotelConvenient/admin')),
                 array('label' => 'convenient', 'url' => array('/convenient/admin')),
                 array('label' => 'services', 'url' => array('/services/admin')),
                 array('label' => 'hotelservices', 'url' => array('/hotelServices/admin')),
                 array('label' => 'bookingdetail', 'url' => array('/bookingDetail/admin')),
                 array('label' => 'booking', 'url' => array('/booking/admin')),
                 array('label' => 'manageUser', 'url' => array('/user/admin')),
//              
//                  array('label' => 'Login', 'url' => array('/user/login'), 'visible' => Yii::app()->user->isGuest),
                array('url'=>Yii::app()->getModule('user')->registrationUrl, 'label'=>Yii::app()->getModule('user')->t("Register"), 'visible'=>Yii::app()->user->isGuest),
//array('url'=>Yii::app()->getModule('user')->profileUrl, 'label'=>Yii::app()->getModule('user')->t("Profile"), 'visible'=>  UserModule::isAdmin()),
array('url'=>Yii::app()->getModule('user')->logoutUrl, 'label'=>Yii::app()->getModule('user')->t("Logout").' ('.Yii::app()->user->name.')', 'visible'=>!Yii::app()->user->isGuest),
                array('url'=>Yii::app()->getModule('user')->loginUrl, 'label'=>Yii::app()->getModule('user')->t("Login"), 'visible'=>Yii::app()->user->isGuest),
//                array('label' => 'Exit (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
            ),
        ));
        ?>
    </div>
    <!-- mainmenu -->

    <?php
        $this->widget('zii.widgets.CBreadcrumbs', array(
            'links' => $this->breadcrumbs,
        ));
    ?><!-- breadcrumbs -->

    <?php echo $content; ?>

    <div id="footer">
        Copyright &copy; <?php echo date('Y'); ?> by <a href="http://thucphamchucnangusa.com">Vũ Tùng</a>.<br/>
        All Rights Reserved.<br/>
        <?php echo Yii::powered(); ?>
    </div>
    <!-- footer -->

</div>
<!-- page -->

</body>
</html>