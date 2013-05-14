<?php

/**
 * This is the model class for table "pub_person".
 *
 * The followings are the available columns in table 'pub_person':
 * @property integer $Id
 * @property string $lD_Number
 * @property string $Name
 * @property string $Sex
 * @property string $Nation
 * @property string $Address
 * @property string $Country
 * @property integer $AllowEdit
 * @property integer $AllowDel
 * @property integer $SortCode
 * @property integer $DeletionFlag
 * @property integer $EnabledFlag
 * @property string $CreateOn
 * @property string $CreateBy
 * @property string $CreateUserId
 * @property string $Description
 */
class PubPerson extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PubPerson the static model class
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
		return 'pub_person';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CreateOn', 'required'),
			array('Id, AllowEdit, AllowDel, SortCode, DeletionFlag, EnabledFlag', 'numerical', 'integerOnly'=>true),
			array('lD_Number, Sex, Nation, Country, CreateBy, CreateUserId', 'length', 'max'=>40),
			array('Name', 'length', 'max'=>120),
			array('Address', 'length', 'max'=>80),
			array('Description', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id, lD_Number, Name, Sex, Nation, Address, Country, AllowEdit, AllowDel, SortCode, DeletionFlag, EnabledFlag, CreateOn, CreateBy, CreateUserId, Description', 'safe', 'on'=>'search'),
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
			'lD_Number' => 'L D Number',
			'Name' => 'Name',
			'Sex' => 'Sex',
			'Nation' => 'Nation',
			'Address' => 'Address',
			'Country' => 'Country',
			'AllowEdit' => 'Allow Edit',
			'AllowDel' => 'Allow Del',
			'SortCode' => 'Sort Code',
			'DeletionFlag' => 'Deletion Flag',
			'EnabledFlag' => 'Enabled Flag',
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

		$criteria->compare('Id',$this->Id);
		$criteria->compare('lD_Number',$this->lD_Number,true);
		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('Sex',$this->Sex,true);
		$criteria->compare('Nation',$this->Nation,true);
		$criteria->compare('Address',$this->Address,true);
		$criteria->compare('Country',$this->Country,true);
		$criteria->compare('AllowEdit',$this->AllowEdit);
		$criteria->compare('AllowDel',$this->AllowDel);
		$criteria->compare('SortCode',$this->SortCode);
		$criteria->compare('DeletionFlag',$this->DeletionFlag);
		$criteria->compare('EnabledFlag',$this->EnabledFlag);
		$criteria->compare('CreateOn',$this->CreateOn,true);
		$criteria->compare('CreateBy',$this->CreateBy,true);
		$criteria->compare('CreateUserId',$this->CreateUserId,true);
		$criteria->compare('Description',$this->Description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}