<?php
/* @var $this LocacaoController */
/* @var $model Locacao */

$this->breadcrumbs=array(
	'Locacaos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$url = $this->createUrl('/locacao/view', array('id'=>$model->id));
?>
<h1>Edicao Locacao <?php echo $model->id; ?></h1>

<div class="row">
	<div class="col-md-8">
		<?php $this->renderPartial('_form', array('model'=>$model)); ?>
	</div>
	<div class="col-md-4">
		<div class="list-group" >
			<a href="/aluguelCarro/index.php?r=locacao/index" class="list-group-item ">Lista</a>
			<a href="/aluguelCarro/index.php?r=locacao/create" class="list-group-item">Criar</a>
			<a href="<?=$url?>" class="list-group-item">Detalhes</a>
			<a href="/aluguelCarro/index.php?r=locacao/admin" class="list-group-item">Gerenciamento</a>
		</div>
	</div>
</div>