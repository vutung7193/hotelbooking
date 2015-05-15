<?php

/**
 * This is the model class for table "{{hotels}}".
 *
 * The followings are the available columns in table '{{hotels}}':
 * @property integer $id
 * @property string $name
 * @property string $City
 * @property string $address
 * @property string $description
 * @property integer $rank
 * @property integer $total_cmt
 * @property integer $total_point
 * @property double $aver_point
 *
 * The followings are the available model relations:
 * @property Comments[] $comments
 * @property HotelConvenient[] $hotelConvenients
 * @property Image[] $images
 * @property Rooms[] $rooms
 * @property Rooms2[] $rooms2s
 */
class Hotels extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{hotels}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, City, address, description, rank', 'required'),
			array('rank, total_cmt, total_point', 'numerical', 'integerOnly'=>true),
			array('aver_point', 'numerical'),
			array('name, City, address', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, City, address, description, rank, total_cmt, total_point, aver_point', 'safe', 'on'=>'search'),
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
			'comments' => array(self::HAS_MANY, 'Comments', 'hotel_id'),
			'hotelConvenients' => array(self::HAS_MANY, 'HotelConvenient', 'hotel_id'),
			'images' => array(self::HAS_MANY, 'Image', 'hotel_id'),
			'rooms' => array(self::HAS_MANY, 'Rooms', 'hotel_id'),
			'rooms2s' => array(self::HAS_MANY, 'Rooms2', 'hotel_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'City' => 'City',
			'address' => 'Address',
			'description' => 'Description',
			'rank' => 'Rank',
			'total_cmt' => 'Total Cmt',
			'total_point' => 'Total Point',
			'aver_point' => 'Aver Point',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('City',$this->City,true);
		$criteria->compare('address',$this->address,true);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('rank',$this->rank);
		$criteria->compare('total_cmt',$this->total_cmt);
		$criteria->compare('total_point',$this->total_point);
		$criteria->compare('aver_point',$this->aver_point);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Hotels the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
