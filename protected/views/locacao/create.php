<?php
/* @var $this LocacaoController */
/* @var $model Locacao */

$this->breadcrumbs=array(
	'Locacaos'=>array('index'),
	'Create',
);
$url = $this->createUrl('/locacao/view', array('id'=>$model->id));
?>

<div class="col-sm-2" style="float: right;">
<div class="list-group" >
<a href="/aluguelCarro/index.php?r=locacao/index" class="list-group-item ">Lista de Locacoes</a>
<a href="/aluguelCarro/index.php?r=locacao/admin" class="list-group-item">Gerenciamento de Vendas</a>
</div>
</div>

<h1>Cadastro de Locacao</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'modelcesta'=>$modelcesta)); ?>