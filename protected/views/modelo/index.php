<?php
/* @var $this ModeloController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Modelos',
);

?>

<h1>Lista de Modelos</h1>
<div class="row">
	<div class="col-md-8">
		<?php $this->widget('zii.widgets.CListView', array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view'
		)); ?>
	</div>
	<div class="col-md-4">
		<div class="list-group" >
			<a href="/aluguelCarro/index.php?r=modelo/create" class="list-group-item">Criar</a>
			<a href="/aluguelCarro/index.php?r=modelo/admin" class="list-group-item">Gerenciamento</a>
		</div>
	</div>
</div>
