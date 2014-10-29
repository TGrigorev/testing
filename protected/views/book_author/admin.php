<?php
/* @var $this Book_authorController */
/* @var $model MBookAuthor */

$this->breadcrumbs=array(
	'Авторство'=>array('index'),
	'Управление',
);

$this->menu=array(
	array('label'=>'Авторство', 'url'=>array('index')),
	array('label'=>'Подписать', 'url'=>array('create')),
);
?>

<h1>Управление</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'mbook-author-grid',
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
            'name'=>'id_author',
            'type'=>'raw',
            'value'=>'$data->author->name'
        ),

		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
