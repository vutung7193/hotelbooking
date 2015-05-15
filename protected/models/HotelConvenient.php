<?php

/**
 * This is the model class for table "{{hotel_convenient}}".
 *
 * The followings are the available columns in table '{{hotel_convenient}}':
 * @property integer $id
 * @property integer $hotel_id
 * @property integer $convenient_id
 *
 * The followings are the available model relations:
 * @property Convenient $convenient
 * @property Hotels $hotel
 */
class HotelConvenient extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{hotel_convenient}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('hotel_id, convenient_id', 'required'),
			array('hotel_id, convenient_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, hotel_id, convenient_id', 'safe', 'on'=>'search'),
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
			'convenient' => array(self::BELONGS_TO, 'Convenient', 'convenient_id'),
			'hotel' => array(self::BELONGS_TO, 'Hotels', 'hotel_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'hotel_id' => 'Hotel',
			'convenient_id' => 'Convenient',
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
		$criteria->compare('hotel_id',$this->hotel_id);
		$criteria->compare('convenient_id',$this->convenient_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return HotelConvenient the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
