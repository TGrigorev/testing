<?php

/**
 * This is the model class for table "book_reader".
 *
 * The followings are the available columns in table 'book_reader':
 * @property integer $id
 * @property integer $id_book
 * @property integer $id_reader
 * @property string $date_start
 * @property string $date_end
 *
 * The followings are the available model relations:
 * @property Reader $reader
 * @property Book $book
 */
class MBookReader extends CActiveRecord
{

    public $back;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'book_reader';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_book, id_reader', 'required'),
			array('id_book, id_reader', 'numerical', 'integerOnly'=>true),
			array('date_end', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, id_book, id_reader, date_start, date_end', 'safe', 'on'=>'search'),
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
			'reader' => array(self::BELONGS_TO, 'MReader', 'id_reader'),
			'book' => array(self::BELONGS_TO, 'MBook', 'id_book'),
            'authors' => array(self::HAS_MANY, 'MBookAuthor', array('id_book'=>'id_book')),
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
			'id_reader' => 'Читатель',
			'date_start' => 'Взята',
			'date_end' => 'Возвращена',
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
		$criteria->compare('id_reader',MReader::model()->getId($this->id_reader));
		$criteria->compare('date_start',$this->date_start,true);
		$criteria->compare('date_end',$this->date_end,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function searchBooks()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;
        $criteria->condition = 'date_end IS NULL';
		$criteria->group = 'id_book';
        $criteria->having = 'COUNT(id_reader) >=2';

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
            'pagination'=> false
		));
	}

    public function searchBooksRead()
    {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria=new CDbCriteria;
        $criteria->with = array('reading');
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
	 * @return MBookReader the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

    public function beforeSave(){
        if(empty($this->id))
            $this->date_start = date("Y-m-d H:i:s");

        if(!empty($this->back))
            $this->date_end = date("Y-m-d H:i:s");
        else
            $this->date_end = NULL;

        return parent::beforeSave();
    }
}