<?php

/**
 * This is the model class for table "customer".
 *
 * The followings are the available columns in table 'customer':
 * @property integer $id
 * @property integer $cuit
 * @property integer $api_code
 * @property string $init_date
 * @property string $name
 * @property string $last_name
 * @property string $phone
 * @property string $cellphone
 * @property string $address
 * @property string $city
 * @property string $email
 * @property string $responsible_type
 * @property integer $cpa
 * @property integer $reseller_id
 */
class customer extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'customer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cuit, api_code, init_date, name, last_name, address, city, responsible_type, reseller_id', 'required'),
			array('cuit, api_code, cpa, reseller_id', 'numerical', 'integerOnly'=>true),
			array('init_date, name, last_name, phone, cellphone, address, city, email, responsible_type', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, cuit, api_code, init_date, name, last_name, phone, cellphone, address, city, email, responsible_type, cpa, reseller_id', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'cuit' => 'Cuit',
			'api_code' => 'Api Code',
			'init_date' => 'Init Date',
			'name' => 'Name',
			'last_name' => 'Last Name',
			'phone' => 'Phone',
			'cellphone' => 'Cellphone',
			'address' => 'Address',
			'city' => 'City',
			'email' => 'Email',
			'responsible_type' => 'Responsible Type',
			'cpa' => 'Cpa',
			'reseller_id' => 'Reseller',
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
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);

		$criteria->compare('cuit',$this->cuit);

		$criteria->compare('api_code',$this->api_code);

		$criteria->compare('init_date',$this->init_date,true);

		$criteria->compare('name',$this->name,true);

		$criteria->compare('last_name',$this->last_name,true);

		$criteria->compare('phone',$this->phone,true);

		$criteria->compare('cellphone',$this->cellphone,true);

		$criteria->compare('address',$this->address,true);

		$criteria->compare('city',$this->city,true);

		$criteria->compare('email',$this->email,true);

		$criteria->compare('responsible_type',$this->responsible_type,true);

		$criteria->compare('cpa',$this->cpa);

		$criteria->compare('reseller_id',$this->reseller_id);

		return new CActiveDataProvider('customer', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return customer the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}