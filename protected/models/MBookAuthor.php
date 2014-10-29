<?php

/**
 * This is the model class for table "book_author".
 *
 * The followings are the available columns in table 'book_author':
 * @property integer $id
 * @property integer $id_book
 * @property integer $id_author
 *
 * The followings are the available model relations:
 * @property Author $author
 * @property Book $book
 */
class MBookAuthor extends CActiveRecord
{
    public $counts;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'book_author';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('id_book, id_author', 'required'),
			array('id_book, id_author', 'numerical', 'integerOnly'=>true),
			// @todo Please remove those attributes that should not be searched.
			array('id, id_book, id_author', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'author' => array(self::BELONGS_TO, 'MAuthor', 'id_author'),
			'book' => array(self::BELONGS_TO, 'MBook', 'id_book'),
			'reading' => array(self::HAS_ONE, 'MBookReader', array('id_book'=>'id_book'),
                'joinType'=>'INNER JOIN',
                /*'group'=>'reading.id_book',*/
                'condition' => 'reading.date_end IS NULL'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'id_book' => 'Книга',
			'id_author' => 'Автор',
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
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('id_book',MBook::model()->getId($this->id_book));
		$criteria->compare('id_author',MAuthor::model()->getId($this->id_author));

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

    public function searchBooksRead()
    {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria=new CDbCriteria;
        //$criteria->with = array('reading');
        $criteria->group = 't.id_book';
        $criteria->having = 'COUNT(t.id_author)>2';


        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria
        ));
    }

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MBookAuthor the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
