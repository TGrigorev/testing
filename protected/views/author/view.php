<?php
/* @var $this AuthorController */
/* @var $model MAuthor */

$this->breadcrumbs=array(
	'Авторы'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Авторы', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Редактор', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Вы уверены что хотите удалить?')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Автор <?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'date_create',
		'date_update',
	),
)); ?>
