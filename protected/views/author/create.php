<?php
/* @var $this AuthorController */
/* @var $model MAuthor */

$this->breadcrumbs=array(
	'Авторы'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Авторы', 'url'=>array('index')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Создать</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>