<?php
/* @var $this LocacaoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Locacaos',
);

$this->menu=array(
	array('label'=>'Create Locacao', 'url'=>array('create')),
	array('label'=>'Manage Locacao', 'url'=>array('admin')),
);
?>

<h1>Lista de Locacoes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
