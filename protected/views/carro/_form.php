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

	<p class="note">Campos com <span class="required">*</span> sao obrigatorios.</p>

	<?php echo $form->errorSummary($model); ?>
	<div style="text-align: center;">

	<div class="row">
		<?php echo $form->labelEx($model,'valor_diario', array(
			'class'=>'col-sm-2 control-label'
		)); ?>
		<div class="col-sm-8">
		<?php echo $form->textField($model,'valor_diario',array('size'=>10,'maxlength'=>10, 'class'=>'form-control')); ?>
		</div>
		<?php echo $form->error($model,'valor_diario'); ?>
	</div>

	<div class="row">
		<br>
		<?php echo $form->labelEx($model,'modelo_id', array(
			'class'=>'col-sm-2 control-label'
		)); ?>
		<?php $modelos = Modelo::model()->findAll();
        $list = CHtml::listData($modelos, 'id', 'nome');?>
        <div class="col-sm-8">
        <?php echo $form->dropDownList($model,'modelo_id', $list, array(
			'empty'=>'Selecione',
			'class'=>'form-control'
		));?>
		</div>
		<?php echo $form->error($model,'modelo_id'); ?>
	</div>
	<div class="row">
		<br>
		<?php echo $form->labelEx($model,'descricao', array(
			'class'=>'col-sm-2 control-label'
		)); ?>
		<div class="col-sm-8">
		<?php echo $form->textField($model,'descricao',array('size'=>60,'maxlength'=>255,'class'=>'form-control')); ?>
		</div>
		<?php echo $form->error($model,'descricao'); ?>
	</div>

	<div class="row buttons">
		<br>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array(
			'class'=>"btn btn-default"
		)); ?>
	</div>

<?php $this->endWidget(); ?>
</div>

</div><!-- form -->