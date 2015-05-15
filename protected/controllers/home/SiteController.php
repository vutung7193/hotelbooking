<?php

    class SiteController extends HomeController
    {
//       
   public function actionIndex()
        {
    $this->pageTitle = 'HBS homepage';
    $model = Hotels::model()->findAll();
    
       $this->render('index',array(
           'model'=>$model,
           
       ));
        }
        
         public function actionSuccess()
        {
    $this->pageTitle = 'Booking rooms';
//    $model = Hotels::model()->findAll();
    
       $this->render('success');
//       $this->redirect('index');
        }
        
      public function actionHotel($id)   
      {
          $this->pageTitle = 'Hotel';
          $model = Rooms::model()->findAll(
                  "hotel_id = {$id}"
                  
                  );
                  $this->render('hotel'
                      
                  );
                          
      }
        public function actionSearch()   
      {
          $this->pageTitle = 'Hotel';
//          $model = Rooms::model()->findAll(
//                  "hotel_id = {$id}"
//                  
//                  );
                  $this->render('search'
                      
                  );
                          
      }
//        
        public function actionPage()
        {
            if (empty($_GET['view']))
                $this->actionIndex();
            $model = Page::model()->findByUrl($_GET['view']);
// if page is not found, then run a controller with that name
            if ($model === NULL)
                throw new CHttpException(400, 'Khong tim thay trang');
            else {
                $this->pageTitle = $model->title;
                $this->render('page', array('model' => $model));
            }
        }

        /**
         * This is the action to handle external exceptions.
         */
        public function actionError()
        {
            if ($error = Yii::app()->errorHandler->error) {
                if (Yii::app()->request->isAjaxRequest)
                    echo $error['message'];
                else
                    $this->render('error', $error);
            }
        }

    }