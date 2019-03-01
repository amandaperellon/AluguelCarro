<?php
/* @var $this ClienteController */
/* @var $model Cliente */
/* @var $form CActiveForm */
?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cliente-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> sao obrigatorios.</p>

	<?php echo $form->errorSummary($model); ?>
<div style="text-align: center;">
<br>
	<div class="row">
		<?php echo $form->labelEx($model,'nome', array(
			'class'=>'col-sm-2 control-label'
		)); ?>
		<div class="col-sm-10">
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>100, 'class'=>'form-control')); ?>
		</div>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row buttons">
		<br>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array(
			'class'=>"btn btn-default"
		)); ?>
	</div>

	<br>

<?php $this->endWidget(); ?>
</div>
</div><!-- form -->