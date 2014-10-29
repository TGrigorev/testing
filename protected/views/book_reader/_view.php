<?php
/* @var $this Book_readerController */
/* @var $data MBookReader */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_book')); ?>:</b>
	<?php echo CHtml::encode($data->book->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_reader')); ?>:</b>
	<?php echo CHtml::encode($data->reader->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_start')); ?>:</b>
	<?php echo CHtml::encode($data->date_start); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_end')); ?>:</b>
	<?php echo CHtml::encode($data->date_end); ?>
	<br />


</div>