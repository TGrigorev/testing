<?php
/* @var $this Book_authorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Авторство',
);

$this->menu=array(
	array('label'=>'Авторство', 'url'=>array('create')),
	array('label'=>'Управление', 'url'=>array('admin')),
);
?>

<h1>Авторство</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
