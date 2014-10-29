<?php

/**
 * This is the model class for table "author".
 *
 * The followings are the available columns in table 'author':
 * @property integer $id
 * @property string $name
 * @property string $date_create
 * @property string $date_update
 *
 * The followings are the available model relations:
 * @property BookAuthor[] $bookAuthors
 */
class MAuthor extends ActiveRecord
{

    public $iBook;
    public $iBookAuthor;
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'author';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		return array(
			array('name', 'required'),
			array('name', 'length', 'max'=>50),
			// @todo Please remove those attributes that should not be searched.
			array('id, name, date_create, date_update', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		return array(
			'bookAuthors' => array(self::HAS_MANY, 'BookAuthor', 'id_author'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Имя',
			'date_create' => 'Дата создания',
			'date_update' => 'Дата обновления',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('date_create',$this->date_create,true);
		$criteria->compare('date_update',$this->date_update,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Author the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}


    public function beforeSave(){
        if(empty($this->id)) $this->date_create = date("Y-m-d H:i:s");
        $this->date_update = date("Y-m-d H:i:s");

        return parent::beforeSave();
    }


    public function strAuthors($data)
    {
        $authors = '';
        foreach($data->authors as $author){
            $authors .= $author->author->name . ' ';
        }

        return $authors;
    }
}
