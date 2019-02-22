<?php
/* @var $this CarroController */
/* @var $data Carro */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_diario')); ?>:</b>
	<?php echo CHtml::encode($data->valor_diario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modelo_id')); ?>:</b>
	<?php echo CHtml::encode($data->fk_modelo->nome . " - " . $data->fk_modelo->fk_marca->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />


</div>