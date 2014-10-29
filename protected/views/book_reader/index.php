<?php
/* @var $this Book_readerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Библиотека',
);

$this->menu=array(
	array('label'=>'Выдача', 'url'=>array('create')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Редактор</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
