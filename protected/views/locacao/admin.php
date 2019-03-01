<?php
/* @var $this LocacaoController */
/* @var $model Locacao */

$this->breadcrumbs=array(
	'Locacaos'=>array('index'),
	'Manage',
);

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

<div class="row">
	<div class="col-md-8">
		<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>
<br>
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
	'itemsCssClass' =>'table table-bordered',
	'htmlOptions'=> array(
	'id'=>'tbl_busca',
	'class'=>'div',
	),
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
</div>
	<div class="col-md-4">
		<?php
			$url = $this->createUrl('/locacao/view', array('id'=>$model->id));
		?>
	<div class="list-group" >
		<a href="/aluguelCarro/index.php?r=locacao/index" class="list-group-item ">Lista</a>
		<a href="/aluguelCarro/index.php?r=locacao/create" class="list-group-item">Criar</a>
	</div>
</div>
</div>