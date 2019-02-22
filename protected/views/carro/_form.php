<?php
/* @var $this CarroController */
/* @var $model Carro */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'carro-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'valor_diario'); ?>
		<?php echo $form->textField($model,'valor_diario',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'valor_diario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modelo_id'); ?>
		<?php $modelos = Modelo::model()->findAll();
        $list = CHtml::listData($modelos, 'id', 'nome');
		echo $form->dropDownList($model,'modelo_id', $list, array(
			'empty'=>'Selecione',
		));?>
		<?php echo $form->error($model,'modelo_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descricao'); ?>
		<?php echo $form->textField($model,'descricao',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'descricao'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->