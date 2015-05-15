<?php
class AdminController extends CController
{
    public $layout='column1';
    public $menu=array();
    public $breadcrumbs=array();
    public function filters()
    {
        return array(
            'accessControl',
        );
    }
    public function accessRules()
    {
        return array(
            array('allow',
                'users'=>array('*,@'),
                'actions'=>array('login'),
            ),
          array('allow',
                'users'=>array('admin'),
              'actions'=>array('admin'),
           ),
            array('deny',
                'users'=>array('*'),
            ),
        );
    }
}