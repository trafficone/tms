<?php

/**
 * This is the model class for table "comment".
 *
 * The followings are the available columns in table 'comment':
 * @property integer $comment_id
 * @property integer $comment_article_id
 * @property string $comment_name
 * @property string $comment_email
 * @property string $comment_content
 * @property integer $comment_verified
 * @property string $comment_timestamp
 *
 * The followings are the available model relations:
 */
class Comment extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Comment the static model class
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
		return 'comment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('comment_article_id, comment_name, comment_email, comment_content, comment_verified, comment_timestamp', 'required'),
			array('comment_article_id, comment_verified', 'numerical', 'integerOnly'=>true),
			array('comment_name, comment_email', 'length', 'max'=>255),
			array('comment_content', 'length', 'max'=>1024),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('comment_id, comment_article_id, comment_name, comment_email, comment_content, comment_verified, comment_timestamp', 'safe', 'on'=>'search'),
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
			'comment_id' => 'Comment',
			'comment_article_id' => 'Comment Article',
			'comment_name' => 'Comment Name',
			'comment_email' => 'Comment Email',
			'comment_content' => 'Comment Content',
			'comment_verified' => 'Comment Verified',
			'comment_timestamp' => 'Comment Timestamp',
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

		$criteria->compare('comment_id',$this->comment_id);
		$criteria->compare('comment_article_id',$this->comment_article_id);
		$criteria->compare('comment_name',$this->comment_name,true);
		$criteria->compare('comment_email',$this->comment_email,true);
		$criteria->compare('comment_content',$this->comment_content,true);
		$criteria->compare('comment_verified',$this->comment_verified);
		$criteria->compare('comment_timestamp',$this->comment_timestamp,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}