<?php

    class SiteController extends HomeController
    {
//       
   public function actionIndex()
        {
    $this->pageTitle = 'HBS homepage';
    $model = Hotels::model()->findAll(
    array(
       
        'order' =>'aver_point DESC',
        'limit' => 10,
        
    )
            
            
            );
   
     
                           
        
                                
    
       $this->render('index',array(
           'model'=>$model,
//           'averPoint'=>$averPoint,
           
           
       ));
        }
        
         public function actionSuccess()
        {
    $this->pageTitle = 'Booking rooms';
//    $model = Hotels::model()->findAll();
    
       $this->render('success');
//       $this->redirect('index');
        }
          
      public function actionHotelDetail($id)   
      {
          $this->pageTitle = 'Hotel';
          $model = Hotels::model()->findByPk($id);
               $low = Rooms::model()->findAll("hotel_id = {$model->id}");
                              $arr = array("unknown");
                            
                              foreach ($low as $low){
                                  
                                  $arr[] = $low->price;
                              }
                              $minprice = min($arr);
                              
                  $this->render('hotelDetail', array('model'=>$model,
                      'minprice'=>$minprice,
                      )
                      
                  );
                          
      }
      public function actionHotel($id)  
      {
              $this->render('hotel');
      }
        public function actionSearch()   
      {
         
       $key             = isset($_REQUEST['q']) ? $_REQUEST['q'] : '';
//            $this->pageTitle = 'Tim kiem: ' . $key;
            if (!empty($key)) {
                $criteria            = new CDbCriteria();
//                $criteria->condition = 'name LIKE "' . $key . '"';
               $criteria->addCondition('name LIKE :name');
$criteria->params[':name']='%'.$key.'%';

              
                $items = Hotels::model()->findAll($criteria);
             
               
            } else {
                throw new CHttpException(400, 'Ban phai nhap tu khoa tim kiem');
            }
                          
          $this->render('search',array(
                  
              'items'=>$items,
          
              
              
          )
          )
                  ;
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