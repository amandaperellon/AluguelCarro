<?php
/* @var $this MarcaController */
/* @var $model Marca */

$this->breadcrumbs=array(
	'Marcas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$url = $this->createUrl('/marca/view', array('id'=>$model->id));
?>


<h1>Edicao de Marca <?php echo $model->id; ?></h1>
<div class="row">
	<div class="col-md-8">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>
	</div>
	<div class="col-md-4">
		<div class="list-group" >
			<a href="/aluguelCarro/index.php?r=marca/index" class="list-group-item ">Lista</a>
			<a href="/aluguelCarro/index.php?r=marca/create" class="list-group-item">Criar</a>
			<a href="<?=$url?>" class="list-group-item">Detalhes da Marca</a>
			<a href="/aluguelCarro/index.php?r=marca/admin" class="list-group-item">Gerenciamento</a>
		</div>
	</div>
</div>