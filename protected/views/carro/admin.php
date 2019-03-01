<?php
/* @var $this CarroController */
/* @var $model Carro */

$this->breadcrumbs=array(
	'Carros'=>array('index'),
	'Manage',
);


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#carro-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Pesquisa de Carros</h1>
<div class="row">
	<div class="col-md-8">
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

		<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'carro-grid',
			'htmlOptions'=> array(
			'id'=>'tbl_busca',
			'class'=>'div',
			),
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
				'id',
				'valor_diario',
				'modelo_id',
				'descricao',
				array(
					'class'=>'CButtonColumn',
				),
			),
		)); ?>
	</div>
	<div class="col-md-4">
			<div class="list-group" >
				<a href="/aluguelCarro/index.php?r=carro/index" class="list-group-item ">Lista</a>
				<a href="/aluguelCarro/index.php?r=carro/create" class="list-group-item">Criar</a>
			</div>
		</div>
	</div>
