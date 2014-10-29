<?php
/* @var $this Book_authorController */
/* @var $model MBookAuthor */

$this->breadcrumbs=array(
	'Авторство'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Авторство', 'url'=>array('index')),
	array('label'=>'Подписать', 'url'=>array('create')),
	array('label'=>'Редактор', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Автор</h1>

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
            'name'=>'id_author',
            'type'=>'raw',
            'value'=>$model->author->name,
        ),
	),
)); ?>