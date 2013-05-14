<?php

/**
 * This is the model class for table "sys_exception".
 *
 * The followings are the available columns in table 'sys_exception':
 * @property string $Id
 * @property string $Category
 * @property string $Title
 * @property string $Message
 * @property string $IP
 * @property string $ScriptFileName
 * @property integer $ScriptLine
 * @property string $ProcessName
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
class SysException extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SysException the static model class
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
		return 'sys_exception';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Id, IP, CreateOn', 'required'),
			array('ScriptLine, AllowEdit, AllowDel, SortCode, DeletionFlag, EnabledFlag', 'numerical', 'integerOnly'=>true),
			array('Id, Title, IP, CreateBy, CreateUserId', 'length', 'max'=>40),
			array('Category', 'length', 'max'=>80),
			array('Message, ScriptFileName, ProcessName, Description', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id, Category, Title, Message, IP, ScriptFileName, ScriptLine, ProcessName, AllowEdit, AllowDel, SortCode, DeletionFlag, EnabledFlag, CreateOn, CreateBy, CreateUserId, Description', 'safe', 'on'=>'search'),
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
			'Category' => 'Category',
			'Title' => 'Title',
			'Message' => 'Message',
			'IP' => 'Ip',
			'ScriptFileName' => 'Script File Name',
			'ScriptLine' => 'Script Line',
			'ProcessName' => 'Process Name',
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

		$criteria->compare('Id',$this->Id,true);
		$criteria->compare('Category',$this->Category,true);
		$criteria->compare('Title',$this->Title,true);
		$criteria->compare('Message',$this->Message,true);
		$criteria->compare('IP',$this->IP,true);
		$criteria->compare('ScriptFileName',$this->ScriptFileName,true);
		$criteria->compare('ScriptLine',$this->ScriptLine);
		$criteria->compare('ProcessName',$this->ProcessName,true);
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