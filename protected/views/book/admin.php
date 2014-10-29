<?php
/* @var $this BookController */
/* @var $model MBook */

$this->breadcrumbs=array(
	'Книги'=>array('index'),
	'Управление',
);

$this->menu=array(
	array('label'=>'Книги', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
);
?>

<h1>Управление</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'mbook-grid',
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
