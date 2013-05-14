<?php

/**
 * This is the model class for table "pub_sequence".
 *
 * The followings are the available columns in table 'pub_sequence':
 * @property string $Id
 * @property string $FullName
 * @property string $Prefix
 * @property string $Format
 * @property integer $Step
 * @property integer $Year
 * @property integer $Sequence
 * @property string $CreateOn
 * @property string $CreateBy
 * @property string $CreateUserId
 * @property string $Description
 */
class PubSequence extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PubSequence the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pub_sequence';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Id, FullName, Prefix, Format, Step, CreateOn', 'required'),
			array('Step, Year, Sequence', 'numerical', 'integerOnly'=>true),
			array('Id, FullName, Prefix, Format, CreateBy, CreateUserId', 'length', 'max'=>40),
			array('Description', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id, FullName, Prefix, Format, Step, Year, Sequence, CreateOn, CreateBy, CreateUserId, Description', 'safe', 'on'=>'search'),
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
			'Id' => 'ID',
			'FullName' => 'Full Name',
			'Prefix' => 'Prefix',
			'Format' => 'Format',
			'Step' => 'Step',
			'Year' => 'Year',
			'Sequence' => 'Sequence',
			'CreateOn' => 'Create On',
			'CreateBy' => 'Create By',
			'CreateUserId' => 'Create User',
			'Description' => 'Description',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('Id',$this->Id,true);
		$criteria->compare('FullName',$this->FullName,true);
		$criteria->compare('Prefix',$this->Prefix,true);
		$criteria->compare('Format',$this->Format,true);
		$criteria->compare('Step',$this->Step);
		$criteria->compare('Year',$this->Year);
		$criteria->compare('Sequence',$this->Sequence);
		$criteria->compare('CreateOn',$this->CreateOn,true);
		$criteria->compare('CreateBy',$this->CreateBy,true);
		$criteria->compare('CreateUserId',$this->CreateUserId,true);
		$criteria->compare('Description',$this->Description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}