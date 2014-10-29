<?php
/* @var $this Book_readerController */
/* @var $model MBookReader */

$this->breadcrumbs=array(
	'Библиотека'=>array('index'),
	'Управление',
);

$this->menu=array(
	array('label'=>'Библиотека', 'url'=>array('index')),
	array('label'=>'Выдать книгу', 'url'=>array('create')),
);

?>

<h1>Управление библиотекой</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'mbook-reader-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
        array(
            'name'=>'id_book',
            'type'=>'raw',
            'value'=>'$data->book->name'
        ),
        array(
            'name'=>'id_reader',
            'type'=>'raw',
            'value'=>'$data->reader->name'
        ),
		'date_start',
		'date_end',
		array(
			'class'=>'CButtonColumn',
            'template'=>'{update}'
		),
	),
)); ?>
