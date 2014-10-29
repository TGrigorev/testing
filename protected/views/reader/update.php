<?php
/* @var $this ReaderController */
/* @var $model MReader */

$this->breadcrumbs=array(
	'Читатели'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Редактор',
);

$this->menu=array(
	array('label'=>'Читатели', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Читатель', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Редактор читателя <?php echo $model->name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>