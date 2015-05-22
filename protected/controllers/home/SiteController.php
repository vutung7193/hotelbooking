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
        
         public function actionSuccess($bookingdetail_id)
        {
            
          
             $bookingdetail = BookingDetail::model()->findByPk($bookingdetail_id);
             $booking = Booking::model()->findByPk($bookingdetail->booking_id);
             
                $room = Rooms::model()->findByPk($booking->room_id);
                 $hotel = Hotels::model()->findByPk($room->hotel_id);
             
    $this->pageTitle = 'Booking rooms';
//    $model = Hotels::model()->findAll();
    
       $this->render('success',array('hotel'=>$hotel,
           'room'=>$room,
           'bookingdetail'=>$bookingdetail,));
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
                              $img = Rooms::model()->findAll("hotel_id = {$model->id}");
//                            $roomAvai1 = Rooms::model()->findAll("hotel_id = {$model->id}");
                            
                      $checkin ='2015-05-21';
                        $checkout = '2015-05-24';
                      
                   if(isset($_POST['submit'])){
                  $checkin1 = $_POST['datepicker-detail-chkin'];
                  $checkin = date("Y-m-d", strtotime($checkin1) );
                  
                 $checkout1 = $_POST['datepicker-detail-chkout'];
                 $checkout = date("Y-m-d", strtotime($checkout1) );
                   }
                   
                      $query = "(SELECT distinct t1.room_id as r1 FROM `tbl_booking` as t1 "
                        . "WHERE  t1.room_id not in (Select t2.room_id as r2 From `tbl_booking` as t2 "
                        . "Where t1.room_id = t2.room_id and ( '$checkin' >= t2.date_from and '$checkin' < t2.date_to ) or ('$checkout' > t2.date_from and '$checkout' <= t2.date_to ) )"
                        . "And t1.room_id IN ( Select t3.id from tbl_rooms as t3 where t3.hotel_id = $model->id) ) "
                        . "UNION "
                        . "( select r3.id from tbl_rooms as r3 "
                        . "where r3.hotel_id = $model->id "
                        . "and r3.id not IN ( SELECT distinct t4.room_id FROM `tbl_booking` as t4 ) ) ";
//                  $query = "(SELECT distinct t1.room_id as r1 FROM `tbl_booking` as t1 WHERE ( t1.room_id not in (Select t2.room_id as r2 From `tbl_booking` as t2 Where t1.room_id = t2.room_id and t1.id != t2.id and ( '$checkin' >= t2.date_from and '$checkin' < t2.date_to ) or ('$checkout' > t2.date_from and '$checkout' <= t2.date_to ) ) ) And t1.room_id IN ( Select t3.id from tbl_rooms as t3 where t3.hotel_id = $model->id) )UNION ( select r3.id from tbl_rooms as r3 where r3.id not IN ( SELECT distinct t4.room_id FROM `tbl_booking` as t4 ) ) ";
                    $roomAvail = Yii::app()->db->createCommand($query)->queryAll();
                
                              $roomAvai = Rooms::model()->findAll("hotel_id = {$model->id}");
                              $hotelCon = HotelConvenient::model()->findAll("hotel_id = {$model->id}");
                              $com = Comments::model()->findAll("hotel_id = {$model->id}");
                              $total = count($com);
                              
                              
                  $this->render('hotelDetail', array('model'=>$model,
                      'minprice'=>$minprice,
                      'img'=>$img,
                      'hotelCon' =>$hotelCon,
                      'com'=>$com,
                      'total'=>$total,
                        'roomAvail'=>$roomAvail,
                      'checkin'=>$checkin,
                      'checkout'=>$checkout,
//                   'roomAvai'=>$roomAvai,
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
                throw new CHttpException(400, 'YOU MUST ENTER SEARCHING KEYWORD');
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