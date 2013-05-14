<?php

/**
 * This is the model class for table "pub_join_person_extend".
 *
 * The followings are the available columns in table 'pub_join_person_extend':
 * @property string $Id
 * @property string $PersonId
 * @property string $OrganizeId
 * @property string $UserId
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
class PubJoinPersonExtend extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PubJoinPersonExtend the static model class
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
		return 'pub_join_person_extend';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Id, CreateOn', 'required'),
			array('AllowEdit, AllowDel, SortCode, DeletionFlag, EnabledFlag', 'numerical', 'integerOnly'=>true),
			array('Id, PersonId, OrganizeId, UserId, CreateBy, CreateUserId', 'length', 'max'=>40),
			array('Description', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id, PersonId, OrganizeId, UserId, AllowEdit, AllowDel, SortCode, DeletionFlag, EnabledFlag, CreateOn, CreateBy, CreateUserId, Description', 'safe', 'on'=>'search'),
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
			'PersonId' => 'Person',
			'OrganizeId' => 'Organize',
			'UserId' => 'User',
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
		$criteria->compare('PersonId',$this->PersonId,true);
		$criteria->compare('OrganizeId',$this->OrganizeId,true);
		$criteria->compare('UserId',$this->UserId,true);
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