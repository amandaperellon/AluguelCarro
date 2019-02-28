<?php
/* @var $this MarcaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Marcas',
);

$this->menu=array(
	array('label'=>'Create Marca', 'url'=>array('create')),
	array('label'=>'Manage Marca', 'url'=>array('admin')),
);
?>

<h1>Lista de Marcas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
