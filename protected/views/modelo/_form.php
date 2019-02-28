<?php
/* @var $this ModeloController */
/* @var $model Modelo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'modelo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos com <span class="required">*</span> sao obrigatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div style='text-align: center'>

	<div class="row">
		<?php echo $form->labelEx($model,'nome', array(
			'class'=>'col-sm-2 control-label'
		)); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>100,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'marca_id', array(
			'class'=>'col-sm-2 control-label'
		)); ?>
		<?php $marca = Marca::model()->findAll();
        $list = CHtml::listData($marca, 'id', 'nome');
		echo $form->dropDownList($model,'marca_id', $list, array(
			'empty'=>'Selecione',
			'class'=>'form-control'
		)); ?>
		<?php echo $form->error($model,'marca_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array(
			'class'=>"btn btn-default"
		)); ?>
	</div>

<?php $this->endWidget(); ?>

</div>

</div><!-- form -->