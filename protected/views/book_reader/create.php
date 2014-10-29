<?php
/* @var $this Book_readerController */
/* @var $model MBookReader */

$this->breadcrumbs=array(
	'Библиотека'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Библиотека', 'url'=>array('index')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Выдача книг</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>