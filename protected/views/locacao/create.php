<?php
/* @var $this LocacaoController */
/* @var $model Locacao */

$this->breadcrumbs=array(
	'Locacaos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Locacao', 'url'=>array('index')),
	array('label'=>'Manage Locacao', 'url'=>array('admin')),
);
?>

<h1>Create Locacao</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>