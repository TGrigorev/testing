<?php
/* @var $this Book_authorController */
/* @var $data MBookAuthor */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_book')); ?>:</b>
	<?php echo CHtml::encode($data->book->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_author')); ?>:</b>
	<?php echo CHtml::encode($data->author->name); ?>
	<br />


</div>