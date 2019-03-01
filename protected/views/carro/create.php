<?php
/* @var $this CarroController */
/* @var $model Carro */

$this->breadcrumbs=array(
	'Carros'=>array('index'),
	'Create',
);
?>
<h1>Cadastro de Carros</h1>
<div class="row">
	<div class="col-md-8">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>
	</div>
	<div class="col-md-4">
			<div class="list-group" >
				<a href="/aluguelCarro/index.php?r=carro/index" class="list-group-item ">Lista</a>
				<a href="/aluguelCarro/index.php?r=carro/admin" class="list-group-item">Gerenciamento</a>
			</div>
		</div>
	</div>
