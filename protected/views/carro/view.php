<?php
/* @var $this CarroController */
/* @var $model Carro */

$this->breadcrumbs=array(
	'Carros'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Carro', 'url'=>array('index')),
	array('label'=>'Create Carro', 'url'=>array('create')),
	array('label'=>'Update Carro', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Carro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Carro', 'url'=>array('admin')),
);
?>

<h1>Carro: <?php echo $model->fk_modelo->nome; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'valor_diario',
		array(
			'label'=>'Modelo',
			'value'=>$model->fk_modelo->nome . " - " . $model->fk_modelo->fk_marca->nome
		),
		'descricao',
	),
)); ?>
