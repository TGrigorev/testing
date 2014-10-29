<?php
/* @var $this AuthorController */
/* @var $model MAuthor */

$this->breadcrumbs=array(
	'Авторы'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Редактор',
);

$this->menu=array(
	array('label'=>'Авторы', 'url'=>array('index')),
	array('label'=>'Создать', 'url'=>array('create')),
	array('label'=>'Автор', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Упроавление', 'url'=>array('admin')),
);
?>

<h1>Редактор автора <?php echo $model->name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>