<?php
/* @var $this LocacaoController */
/* @var $data Locacao */
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
					<b><?php echo CHtml::encode($data->getAttributeLabel('data_inicial')); ?>:</b>
					<?php echo CHtml::encode($data->data_inicial); ?>
					<br />

					<b><?php echo CHtml::encode($data->getAttributeLabel('data_final')); ?>:</b>
					<?php echo CHtml::encode($data->data_final); ?>
					<br />

					<b><?php echo CHtml::encode($data->getAttributeLabel('valor_total')); ?>:</b>
					<?php echo CHtml::encode(LocacaoController::formatPrice($data->valor_total)); ?>
					<br />

					<b><?php echo CHtml::encode($data->getAttributeLabel('Carro(s)')); ?>:</b>
					<?php

					foreach ($data->fk_locacaocarro as $locacaoCarro) {
						echo CHtml::encode($locacaoCarro->fk_carro->fk_modelo->nome . ", ");
					}
					 ?>
					<br />

					<b><?php echo CHtml::encode($data->getAttributeLabel('cliente_id')); ?>:</b>
					<?php echo CHtml::encode($data->fk_cliente->nome); ?>
					<br />

					<br>
				</div>
			</div>
		</div>
	</div>
</div>