<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $user_id
 * @property string $user_pass
 * @property string $user_created_timestamp
 * @property string $username
 * @property string $user_alias
 * @property integer $user_verified
 *
 * The followings are the available model relations:
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return User the static model class
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
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_pass, username, user_alias, user_email', 'required'),
			array('username', 'length', 'max'=>25),
			array('user_alias', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('user_id, user_pass, user_created_timestamp, username, user_alias, user_verified, user_email', 'safe', 'on'=>'search'),
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
			'user_id' => 'User',
			'user_pass' => 'User Pass',
			'user_created_timestamp' => 'User Created Timestamp',
			'username' => 'Username',
			'user_alias' => 'User Alias',
			'user_verified' => 'User Verified',
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

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('user_pass',$this->user_pass,true);
		$criteria->compare('user_created_timestamp',$this->user_created_timestamp,true);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('user_alias',$this->user_alias,true);
		$criteria->compare('user_verified',$this->user_verified);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}