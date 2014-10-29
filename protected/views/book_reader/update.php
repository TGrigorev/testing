<?php
/* @var $this Book_readerController */
/* @var $model MBookReader */

$this->breadcrumbs=array(
	'Библиотека'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Редактор',
);

$this->menu=array(
	array('label'=>'Библиотека', 'url'=>array('index')),
	array('label'=>'Выдача', 'url'=>array('create')),
	array('label'=>'Выданая книга', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Редактирование</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>