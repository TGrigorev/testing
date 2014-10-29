<?php
/* @var $this ReaderController */
/* @var $model MReader */

$this->breadcrumbs=array(
	'Читатели'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Читатели', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Редактир', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы уверены что хотите удалить?')),
	array('label'=>'Упрвление', 'url'=>array('admin')),
);
?>

<h1>Читатель <?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'date_create',
		'date_update',
	),
)); ?>
