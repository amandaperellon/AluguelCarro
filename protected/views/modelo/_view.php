<?php
/* @var $this ModeloController */
/* @var $data Modelo */
?>

<div class="view">
	<div class="row">
		<div class="col-sm-10">
			<div class="panel panel-default">
				<div class="panel-heading">
					<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
					<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
					<br />
					</div>
					<div class="panel-body">
					<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
					<?php echo CHtml::encode($data->nome); ?>
					<br />

					<b><?php echo CHtml::encode($data->getAttributeLabel('marca_id')); ?>:</b>
					<?php echo CHtml::encode($data->fk_marca->nome); ?>
					<br />
					<br>
				</div>
			</div>
		</div>
	</div>
</div>