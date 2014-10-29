<?php
/* @var $this Book_authorController */
/* @var $model MBookAuthor */

$this->breadcrumbs=array(
	'Авторство'=>array('index'),
	'Подписать',
);

$this->menu=array(
	array('label'=>'Авторство', 'url'=>array('index')),
	array('label'=>'Упровление', 'url'=>array('admin')),
);
?>

<h1>Подписать</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>