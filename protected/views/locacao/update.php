<?php
/* @var $this LocacaoController */
/* @var $model Locacao */

$this->breadcrumbs=array(
	'Locacaos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Locacao', 'url'=>array('index')),
	array('label'=>'Create Locacao', 'url'=>array('create')),
	array('label'=>'View Locacao', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Locacao', 'url'=>array('admin')),
);
?>

<h1>Update Locacao <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>