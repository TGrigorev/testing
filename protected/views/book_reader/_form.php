<?php
/* @var $this Book_readerController */
/* @var $model MBookReader */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mbook-reader-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Обязательные поля <span class="required">*</span></p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_book'); ?>
		<?php echo $form->dropDownList($model,'id_book',CHtml::listData(MBook::model()->findAll(),'id','name')); ?>
		<?php echo $form->error($model,'id_book'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'id_reader'); ?>
		<?php echo $form->dropDownList($model,'id_reader',CHtml::listData(MReader::model()->findAll(),'id','name')); ?>
		<?php echo $form->error($model,'id_reader'); ?>
	</div>

    <?php if(!$model->isNewRecord):?>
        <div class="row">
            Возвращена: <?php echo CHtml::checkBox('back', $model->date_end); ?>
        </div>
    <?php endif; ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Выдать' : 'Изменить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->