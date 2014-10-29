<?php
/* @var $this BookController */
/* @var $model MBook */

$this->breadcrumbs=array(
	'Книги'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Редактор',
);

$this->menu=array(
	array('label'=>'Книги', 'url'=>array('index')),
	array('label'=>'Созадать', 'url'=>array('create')),
	array('label'=>'Книга', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Редактир книги <?php echo $model->name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>