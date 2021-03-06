<?php

/**
 * This is the model class for table "{{booking_detail}}".
 *
 * The followings are the available columns in table '{{booking_detail}}':
 * @property integer $id
 * @property integer $booking_id
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $address
 * @property integer $service_id
 *
 * The followings are the available model relations:
 * @property HotelServices $service
 * @property Booking $booking
 */
class BookingDetail extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{booking_detail}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('booking_id, name, phone, email, address', 'required'),
			array('booking_id, person_no', 'numerical', 'integerOnly'=>true),
			array('name, phone, email, address, hotel_service_id', 'length', 'max'=>50),
                    
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, booking_id, name, phone, email, address, service_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
//			'service' => array(self::BELONGS_TO, 'HotelServices', 'service_id'),
			'booking' => array(self::BELONGS_TO, 'Booking', 'booking_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'booking_id' => 'Booking',
			'name' => 'Name',
			'phone' => 'Phone',
			'email' => 'Email',
			'address' => 'Address',
                    'person_no' =>'Person_no',
			'hotel_service_id' => 'Service',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('booking_id',$this->booking_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('phone',$this->phone,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('address',$this->address,true);
//		$criteria->compare('hotel_service_id',$this->service_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return BookingDetail the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
