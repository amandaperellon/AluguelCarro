<?php
/* @var $this MarcaController */
/* @var $model Marca */

$this->breadcrumbs=array(
	'Marcas'=>array('index'),
	'Create',
);

//$url = $this->createUrl('/marca/view', array('id'=>$model->id));
?>

<h1>Cadastro de Marca</h1>
<div class="row">
	<div class="col-md-8">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>
	</div>
	<div class="col-md-4">
		<div class="list-group" >
			<a href="/aluguelCarro/index.php?r=marca/index" class="list-group-item ">Lista</a>
			<a href="/aluguelCarro/index.php?r=marca/admin" class="list-group-item">Gerenciamento</a>
		</div>
	</div>
</div>
