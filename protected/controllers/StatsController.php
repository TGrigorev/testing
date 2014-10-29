<?php
class StatsController extends Controller{

    public $layout='//layouts/column2';

    public function filters(){
        return array(
            'accessControl'
        );
    }

    public function accessRules(){
        return array(
            array('allow',
                'users'=>array('@')
            ),array('deny',
                'users'=>array('*')
            )
        );
    }

    public function actionBooks(){
        $odpReading = MBookAuthor::model()->searchBooksRead();

        $this->render('books',array('odpReading' => $odpReading));
    }

    public function actionUsers(){
        $odpBooks = MBookReader::model()->searchBooks();

        $this->render('users',array('odpBooks' => $odpBooks));
    }

    public function actionRand(){
        $odpRand = MBook::model()->searchRandBook();

        $this->render('rand',array('odpRand' => $odpRand));
    }

}