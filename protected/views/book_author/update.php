<?php
/* @var $this Book_authorController */
/* @var $model MBookAuthor */

$this->breadcrumbs=array(
	'Авторство'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Редактор',
);

$this->menu=array(
	array('label'=>'Авторство', 'url'=>array('index')),
	array('label'=>'Подписать', 'url'=>array('create')),
	array('label'=>'Автор', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Редактор</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>