<?php
/* @var $this ReaderController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Читатели',
);

$this->menu=array(
	array('label'=>'Создать читателя', 'url'=>array('create')),
	array('label'=>'Управление читателями', 'url'=>array('admin')),
);
?>

<h1>Читатели</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
