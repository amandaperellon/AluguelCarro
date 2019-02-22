<?php
/* @var $this LocacaoController */
/* @var $model Locacao  document.getElementByName('valor_total').innerHTML */
/* @var $form CActiveForm */
?>

<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>

<script type="text/javascript">
$(document).ready(function() {
	$("#Locacao_data_final, #Locacao_data_inicial, #Locacao_carro_id").on("change", function() {
		console.log($("#Locacao_carro_id option:selected").data("valor"))
		
		var data_inicial = $("#Locacao_data_inicial").val();

		var dataInicialM = data_inicial.split('/');

		var dataInicialC = new Date(dataInicialM[1] + "/" + dataInicialM[0] + "/" + dataInicialM[2]).getTime();

		var data_final =  $("#Locacao_data_final").val();

		var dataFinalM = data_final.split('/');

		var dataFinalC = new Date(dataFinalM[1] + "/" + dataFinalM[0] + "/" + dataFinalM[2]).getTime();

		var timeDiff = Math.abs(dataFinalC) - Math.abs(dataInicialC);
		
		var diffDays = timeDiff / (1000 * 3600 * 24);

		var valorDiario = $("#Locacao_carro_id option:selected").data("valor");

		$("#Locacao_valor_total").val(diffDays * valorDiario); 
		
	})
})
</script>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'locacao-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'carro_id'); ?>
		<?php $carros = Carro::model()->with('fk_modelo')->findAll();
		$list =[];
		$listOptions = [];
		foreach ($carros as $carro) {
			$list[$carro->id] = $carro->fk_modelo->nome ." - ".$carro->descricao;
			$listOptions[$carro->id] = ['data-valor'=>$carro->valor_diario];
		}
		echo $form->dropDownList($model,'carro_id', $list, array(
			'empty'=>'Selecione',
			'options' => $listOptions
		)); ?>
		<?php echo $form->error($model,'carro_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_inicial'); ?>
		<?php echo $form->textField($model,'data_inicial'); ?>
		<?php echo $form->error($model,'data_inicial'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_final'); ?>
		<?php echo $form->textField($model,'data_final'); ?>
		<?php echo $form->error($model,'data_final'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valor_total'); ?>
		<?php echo $form->textField($model, 'valor_total'); ?>
		<?php echo $form->error($model,'valor_total'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cliente_id'); ?>
		<?php $clientes = Cliente::model()->findAll();
        $list = CHtml::listData($clientes, 'id', 'nome');
		echo $form->dropDownList($model,'cliente_id', $list, array(
			'empty'=>'Selecione'
		));?>
		<?php echo $form->error($model,'cliente_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->