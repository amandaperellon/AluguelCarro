<?php
/* @var $this LocacaoController */
/* @var $model Locacao */

$this->breadcrumbs=array(
	'Locacaos'=>array('index'),
	'Manage',
);

$url = $this->createUrl('/locacao/view', array('id'=>$model->id));
?>

<div class="col-sm-2" style="float: right;">
<div class="list-group" >
<a href="/aluguelCarro/index.php?r=locacao/index" class="list-group-item ">Lista de Locacoes</a>
<a href="/aluguelCarro/index.php?r=locacao/create" class="list-group-item">Criar Locacao</a>
</div>
</div>

<?php

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#locacao-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Pesquisa de Locacoes</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php
?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'locacao-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'data_inicial',
		'data_final',
		'valor_total',
		array(
			'header'=>"Carro",
			'value'=>function($model){
				$resultado = "";
				
				foreach ($model->fk_locacaocarro as $locacaoCarro) {
					$resultado = $resultado . $locacaoCarro->fk_carro->fk_modelo->nome. ", ";
				}

				return $resultado;
			}
		),
		array(
			'header'=>'Cliente',
			'value'=>'$data->fk_cliente->nome'
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
