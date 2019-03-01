<?php
/* @var $this ModeloController */
/* @var $model Modelo */

$this->breadcrumbs=array(
	'Modelos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);
$url = $this->createUrl('/modelo/view', array('id'=>$model->id));
?>
<h1>Edicao de Modelo <?php echo $model->id; ?></h1>
<div class="row">
	<div class="col-md-8">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>
	</div>
	<div class="col-md-4">
		<div class="list-group" >
			<a href="/aluguelCarro/index.php?r=modelo/index" class="list-group-item ">Lista</a>
			<a href="/aluguelCarro/index.php?r=modelo/create" class="list-group-item">Criar</a>
			<a href="<?=$url?>" class="list-group-item">Detalhes</a>
			<a href="/aluguelCarro/index.php?r=modelo/admin" class="list-group-item">Gerenciamento</a>
		</div>
	</div>
</div>