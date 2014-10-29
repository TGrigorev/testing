<?php
/* @var $this ReaderController */
/* @var $model MReader */

$this->breadcrumbs=array(
	'Читатели'=>array('index'),
	'Создать',
);

$this->menu=array(
	array('label'=>'Читатели', 'url'=>array('index')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Создать читателя</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>