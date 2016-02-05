<?php

/**
 * This is the model class for table "table_listing".
 *
 * The followings are the available columns in table 'table_listing':
 * @property integer $listing_id
 * @property integer $listing_owner_user_id
 * @property string $listing_name
 * @property string $listing_address
 * @property integer $listing_price
 *
 * The followings are the available model relations:
 * @property Booking[] $bookings
 * @property User $listingOwnerUser
 */
class Listing extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'table_listing';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('listing_id, listing_owner_user_id, listing_name, listing_address, listing_price', 'required'),
			array('listing_id, listing_owner_user_id, listing_price', 'numerical', 'integerOnly'=>true),
			array('listing_name, listing_address', 'length', 'max'=>200),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('listing_id, listing_owner_user_id, listing_name, listing_address, listing_price', 'safe', 'on'=>'search'),
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
			'bookings' => array(self::HAS_MANY, 'Booking', 'booking_listing_id'),
			'listingOwnerUser' => array(self::BELONGS_TO, 'User', 'listing_owner_user_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'listing_id' => 'Listing',
			'listing_owner_user_id' => 'Listing Owner User',
			'listing_name' => 'Listing Name',
			'listing_address' => 'Listing Address',
			'listing_price' => 'Listing Price',
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

		$criteria->compare('listing_id',$this->listing_id);
		$criteria->compare('listing_owner_user_id',$this->listing_owner_user_id);
		$criteria->compare('listing_name',$this->listing_name,true);
		$criteria->compare('listing_address',$this->listing_address,true);
		$criteria->compare('listing_price',$this->listing_price);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Listing the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
