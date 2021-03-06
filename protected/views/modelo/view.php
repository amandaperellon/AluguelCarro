<?php
/* @var $this ModeloController */
/* @var $model Modelo */

$this->breadcrumbs=array(
	'Modelos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Modelo', 'url'=>array('index')),
	array('label'=>'Create Modelo', 'url'=>array('create')),
	array('label'=>'Update Modelo', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Modelo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Modelo', 'url'=>array('admin')),
);
?>

<h1>Modelo: <?php echo $model->nome; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=> array('class'=>'table table-hover'),
	'attributes'=>array(
		'id',
		'nome',
		array(
			'label'=>'Marca',
			'value'=>$model->fk_marca->nome
		),
	),
)); ?>
