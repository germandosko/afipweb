<?php

/**
 * This is the model class for table "invoice".
 *
 * The followings are the available columns in table 'invoice':
 * @property integer $id
 * @property string $type
 * @property integer $amount
 * @property integer $from_number
 * @property integer $to_number
 * @property integer $sale_point
 * @property integer $cai
 * @property string $last_valid_date
 * @property string $information
 * @property integer $customer_id
 */
class invoice extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'invoice';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('type, amount, from_number, to_number, sale_point, customer_id', 'required'),
			array('amount, from_number, to_number, sale_point, cai, customer_id', 'numerical', 'integerOnly'=>true),
			array('type, last_valid_date', 'length', 'max'=>50),
			array('information', 'length', 'max'=>250),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, type, amount, from_number, to_number, sale_point, cai, last_valid_date, information, customer_id', 'safe', 'on'=>'search'),
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
			'type' => 'Type',
			'amount' => 'Amount',
			'from_number' => 'From Number',
			'to_number' => 'To Number',
			'sale_point' => 'Sale Point',
			'cai' => 'Cai',
			'last_valid_date' => 'Last Valid Date',
			'information' => 'Information',
			'customer_id' => 'Customer',
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

		$criteria->compare('type',$this->type,true);

		$criteria->compare('amount',$this->amount);

		$criteria->compare('from_number',$this->from_number);

		$criteria->compare('to_number',$this->to_number);

		$criteria->compare('sale_point',$this->sale_point);

		$criteria->compare('cai',$this->cai);

		$criteria->compare('last_valid_date',$this->last_valid_date,true);

		$criteria->compare('information',$this->information,true);

		$criteria->compare('customer_id',$this->customer_id);

		return new CActiveDataProvider('invoice', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return invoice the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}