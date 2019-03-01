<?php
/* @var $this ClienteController */
/* @var $model Cliente */

$this->breadcrumbs=array(
	'Clientes'=>array('index'),
	'Create',
);

$url = $this->createUrl('/cliente/view', array('id'=>$model->id));
?>

<h1>Cadastro de Cliente</h1>
<div class="row">
	<div class="col-md-8">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>
	</div>
	<div class="col-md-4">
		<div class="list-group" >
			<a href="/aluguelCarro/index.php?r=cliente/index" class="list-group-item ">Lista</a>
			<a href="/aluguelCarro/index.php?r=cliente/admin" class="list-group-item">Gerenciamento</a>
		</div>
	</div>
</div>