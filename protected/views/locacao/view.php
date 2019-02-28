<?php
/* @var $this LocacaoController */
/* @var $model Locacao */

$this->breadcrumbs=array(
	'Locacaos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Locacao', 'url'=>array('index')),
	array('label'=>'Create Locacao', 'url'=>array('create')),
	array('label'=>'Update Locacao', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Locacao', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Locacao', 'url'=>array('admin')),
);
?>

<h1>Locacao da Cliente <?php echo $model->fk_cliente->nome; ?></h1>

<?php

$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'data_inicial',
		'data_final',
		array(
			'label'=>"Valor Total",
			'value'=>LocacaoController::formatPrice($model->valor_total)
		),
		array(
			'label'=>'Carro',
			'value'=>function($model){
				$resultado = "";
				
				foreach ($model->fk_locacaocarro as $locacaoCarro) {
					$resultado = $resultado.$locacaoCarro->fk_carro->fk_modelo->nome.", ";
				}

				return $resultado;
			}
		),
		array(
			'label'=>'Cliente',
			'value'=>$model->fk_cliente->nome
		)
	),
)); ?>
