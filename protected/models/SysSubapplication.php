<?php

/**
 * This is the model class for table "sys_subapplication".
 *
 * The followings are the available columns in table 'sys_subapplication':
 * @property integer $Id
 * @property integer $ParentId
 * @property string $Name
 * @property string $ImageName
 * @property string $NavigateUrl
 * @property string $Target
 * @property integer $Visible
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
class SysSubapplication extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SysSubapplication the static model class
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
		return 'sys_subapplication';
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
			array('Id, ParentId, Visible, AllowEdit, AllowDel, SortCode, DeletionFlag, EnabledFlag', 'numerical', 'integerOnly'=>true),
			array('Name, Target, CreateBy, CreateUserId', 'length', 'max'=>40),
			array('ImageName, NavigateUrl', 'length', 'max'=>120),
			array('Description', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id, ParentId, Name, ImageName, NavigateUrl, Target, Visible, AllowEdit, AllowDel, SortCode, DeletionFlag, EnabledFlag, CreateOn, CreateBy, CreateUserId, Description', 'safe', 'on'=>'search'),
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
			'ParentId' => 'Parent',
			'Name' => 'Name',
			'ImageName' => 'Image Name',
			'NavigateUrl' => 'Navigate Url',
			'Target' => 'Target',
			'Visible' => 'Visible',
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
		$criteria->compare('ParentId',$this->ParentId);
		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('ImageName',$this->ImageName,true);
		$criteria->compare('NavigateUrl',$this->NavigateUrl,true);
		$criteria->compare('Target',$this->Target,true);
		$criteria->compare('Visible',$this->Visible);
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