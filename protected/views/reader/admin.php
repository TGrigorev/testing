<?php
/* @var $this ReaderController */
/* @var $model MReader */

$this->breadcrumbs=array(
	'Читатели'=>array('index'),
	'Управление',
);

$this->menu=array(
	array('label'=>'Читатели', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
);

?>

<h1>Управление Читателями</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'mreader-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'date_create',
		'date_update',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
