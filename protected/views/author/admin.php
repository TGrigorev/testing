<?php
/* @var $this AuthorController */
/* @var $model MAuthor */

$this->breadcrumbs=array(
	'Авторы'=>array('index'),
	'Управление',
);

$this->menu=array(
	array('label'=>'Авторы', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
);

?>

<h1>Управление авторами</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'mauthor-grid',
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
