<?php
/* @var $this CarroController */
/* @var $data Carro */
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
			</div>
		</div>
	</div>
</div>