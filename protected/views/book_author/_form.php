<?php
/* @var $this Book_authorController */
/* @var $model MBookAuthor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'mbook-author-form',
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
		<?php echo $form->labelEx($model,'id_author'); ?>
        <?php echo $form->dropDownList($model,'id_author',CHtml::listData(MAuthor::model()->findAll(),'id','name')); ?>
		<?php echo $form->error($model,'id_author'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Подписать' : 'Изменить'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->