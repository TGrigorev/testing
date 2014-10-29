<?php
/* @var $this Book_readerController */
/* @var $model MBookReader */

$this->breadcrumbs=array(
	'Библиотека'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Библиотека', 'url'=>array('index')),
	array('label'=>'Выдача', 'url'=>array('create')),
	array('label'=>'Редактор', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Выданная книга </h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
        array(
            'name'=>'id_book',
            'type'=>'raw',
            'value'=>$model->book->name,
        ),
        array(
            'name'=>'id_reader',
            'type'=>'raw',
            'value'=>$model->reader->name,
        ),
		'date_start',
		'date_end',
	),
)); ?>
