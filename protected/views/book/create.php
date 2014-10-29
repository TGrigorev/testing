<?php
/* @var $this BookController */
/* @var $model MBook */

$this->breadcrumbs=array(
	'Книги'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Книги', 'url'=>array('index')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Создать</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>