<?php

/**
 * This is the model class for table "table_booking".
 *
 * The followings are the available columns in table 'table_booking':
 * @property integer $booking_id
 * @property integer $booking_listing_id
 * @property integer $booking_user_id
 * @property integer $booking_amount
 *
 * The followings are the available model relations:
 * @property User $bookingUser
 * @property Listing $bookingListing
 */
class Booking extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'table_booking';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('booking_listing_id, booking_user_id, booking_amount', 'required'),
			array('booking_listing_id, booking_user_id, booking_amount', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('booking_id, booking_listing_id, booking_user_id, booking_amount', 'safe', 'on'=>'search'),
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
			'bookingUser' => array(self::BELONGS_TO, 'User', 'booking_user_id'),
			'bookingListing' => array(self::BELONGS_TO, 'Listing', 'booking_listing_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'booking_id' => 'Booking',
			'booking_listing_id' => 'Booking Listing',
			'booking_user_id' => 'Booking User',
			'booking_amount' => 'Booking Amount',
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

		$criteria->compare('booking_id',$this->booking_id);
		$criteria->compare('booking_listing_id',$this->booking_listing_id);
		$criteria->compare('booking_user_id',$this->booking_user_id);
		$criteria->compare('booking_amount',$this->booking_amount);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Booking the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
