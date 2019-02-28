<?php
/* @var $this LocacaoController */
/* @var $model Locacao */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_inicial'); ?>
		<?php echo $form->textField($model,'data_inicial'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_final'); ?>
		<?php echo $form->textField($model,'data_final'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_total'); ?>
		<?php echo $form->textField($model,'valor_total',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'cliente_id'); ?>
		<?php echo $form->textField($model,'cliente_id')?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->