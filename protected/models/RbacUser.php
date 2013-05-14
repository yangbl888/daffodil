<?php

/**
 * This is the model class for table "rbac_user".
 *
 * The followings are the available columns in table 'rbac_user':
 * @property string $Id
 * @property string $UserId
 * @property string $Alias
 * @property string $Name
 * @property string $Password
 * @property string $CreateOn
 * @property string $Description
 */
class RbacUser extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return RbacUser the static model class
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
		return 'rbac_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Id, UserId, Alias, Name, CreateOn', 'required'),
			array('Id, UserId, Alias, Name, Password', 'length', 'max'=>40),
			array('Description', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('Id, UserId, Alias, Name, Password, CreateOn, Description', 'safe', 'on'=>'search'),
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
			'UserId' => 'User',
			'Alias' => 'Alias',
			'Name' => 'Name',
			'Password' => 'Password',
			'CreateOn' => 'Create On',
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
		$criteria->compare('UserId',$this->UserId,true);
		$criteria->compare('Alias',$this->Alias,true);
		$criteria->compare('Name',$this->Name,true);
		$criteria->compare('Password',$this->Password,true);
		$criteria->compare('CreateOn',$this->CreateOn,true);
		$criteria->compare('Description',$this->Description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        //添加的校验密码方法
        public function validatePassword($password){
               return $this->encypt($password)===$this->Password;
         }
         public function encypt($pass){
               return md5($pass);
         }
}