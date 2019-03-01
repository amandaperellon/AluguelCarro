<?php
/* @var $this LocacaoController */
/* @var $model Locacao */

$this->breadcrumbs=array(
	'Locacaos'=>array('index'),
	'Create',
);
?>

<h1>Cadastro de Locacao</h1>

<div class="row">
	<div class="col-md-8">
		<?php $this->renderPartial('_form', array('model'=>$model, 'modelcesta'=>$modelcesta)); ?>
	</div>
	<div class="col-md-4">
	<?php
		$url = $this->createUrl('/locacao/view', array('id'=>$model->id));
	?>
<div class="list-group" >
<a href="/aluguelCarro/index.php?r=locacao/index" class="list-group-item ">Lista</a>
<a href="/aluguelCarro/index.php?r=locacao/admin" class="list-group-item">Gerenciamento</a>
</div>
</div>