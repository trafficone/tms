<?php

/**
 * This is the model class for table "article".
 *
 * The followings are the available columns in table 'article':
 * @property integer $article_id
 * @property string $article_timestamp
 * @property string $article_edited_timestamp
 * @property integer $article_user_id
 * @property string $article_content
 * @property string $article_links
 * @property string $article_tags
 *
 * The followings are the available model relations:
 */
class Article extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Article the static model class
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
		return 'article';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('article_timestamp, article_user_id', 'required'),
			array('article_user_id', 'numerical', 'integerOnly'=>true),
			array('article_content', 'length', 'max'=>10000),
			array('article_links, article_tags', 'length', 'max'=>1000),
			array('article_edited_timestamp', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('article_id, article_timestamp, article_edited_timestamp, article_user_id, article_content, article_links, article_tags', 'safe', 'on'=>'search'),
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
			'article_id' => 'Article',
			'article_timestamp' => 'Article Timestamp',
			'article_edited_timestamp' => 'Article Edited Timestamp',
			'article_user_id' => 'Article User',
			'article_content' => 'Article Content',
			'article_links' => 'Article Links',
			'article_tags' => 'Article Tags',
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

		$criteria->compare('article_id',$this->article_id);
		$criteria->compare('article_timestamp',$this->article_timestamp,true);
		$criteria->compare('article_edited_timestamp',$this->article_edited_timestamp,true);
		$criteria->compare('article_user_id',$this->article_user_id);
		$criteria->compare('article_content',$this->article_content,true);
		$criteria->compare('article_links',$this->article_links,true);
		$criteria->compare('article_tags',$this->article_tags,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}