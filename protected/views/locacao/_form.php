<?php
/* @var $this LocacaoController */
/* @var $model Locacao  document.getElementByName('valor_total').innerHTML */
/* @var $form CActiveForm */
$i = -1;
?>

<script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>

<script type="text/javascript">
$(document).ready(function() {
	
	var campo = $('.CarroClone:first');
	var botaoAdicionar = $('#adicionarCarro');
	var area = $('#Carros');
	var x = 0;
	var vlTotal = $('#Venda_venda_total');
	var countSelect = $('.CarroClone').length;

	$(botaoAdicionar).click(function(e){
			
			e.preventDefault();
			
			var newbloco = campo.clone();
			
			novoselect = newbloco.find("select");
			
			novoselect.attr('id', "LocacaoCarro_"+countSelect+"_carro_id");
			novoselect.attr('name', "LocacaoCarro["+countSelect+"][carro_id]");
			
			newbloco.appendTo(area);

		})
})

function calculaValorTotal(){

		var data_inicial = $("#Locacao_data_inicial").val();

		var dataInicialM = data_inicial.split('/');

		var dataInicialC = new Date(dataInicialM[1] + "/" + dataInicialM[0] + "/" + dataInicialM[2]).getTime();

		var data_final =  $("#Locacao_data_final").val();

		var dataFinalM = data_final.split('/');

		var dataFinalC = new Date(dataFinalM[1] + "/" + dataFinalM[0] + "/" + dataFinalM[2]).getTime();

		var timeDiff = Math.abs(dataFinalC) - Math.abs(dataInicialC);
			
		var diffDays = timeDiff / (1000 * 3600 * 24);

		var valorTotal = 0; 

		$(".CarroClone").each(function(){

		var valorDiario = $(this).find("select option:selected").data("valor");
		valorTotal += valorDiario * diffDays;

		})

		$("#Locacao_valor_total").val(valorTotal);
	}

$(document).on("change", ":input", function(){

	calculaValorTotal();
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

	<button type="button" class="row button" id="adicionarCarro">Adicionar Carro</button>

	<div class="row" id="Carros">
	<?php

		$carros = Carro::model()->with('fk_modelo')->findAll();
		$list =[];
		$listOptions = [];
		foreach ($carros as $carro) {
			$list[$carro->id] = $carro->fk_modelo->nome ." - ".$carro->descricao;
			$listOptions[$carro->id] = ['data-valor'=>$carro->valor_diario];
		}

		$carro = CHtml::listData($list, 'id', 'nome');

		if (isset($_POST['LocacaoCarro'])) {
			foreach ($_POST['LocacaoCarro'] as $i => $carroonpost) {
		 ?>

				<div class="CarroClone">

					<?php

					$modelcesta = new LocacaoCarro();

					$modelcesta->carro_id = $carroonpost['carro_id'];
					?>
						<?php 
						echo $form->dropDownList($modelcesta,'['.$i.']carro_id', $list, array(
							'options' => $listOptions
						)); 
						?>
						<?php echo $form->error($modelcesta,'carro_id');
						?>
				</div>
			<?php
			}

			$modelcesta = new LocacaoCarro();
		}else{

			foreach ($model->fk_locacaocarro as $i => $modelcesta) {
				?>

				<div class="CarroClone">
						<?php 
						echo $form->dropDownList($modelcesta,'['.$i.']carro_id', $list, array(
							'options' => $listOptions
						)); 

						echo $form->hiddenField($modelcesta, '['.$i.']id');

						?>
						<?php echo $form->error($modelcesta,'carro_id');?>
				</div>

			<?php

			}
		}

		?>

	<div class="CarroClone">
		
		<?php 

			$modelcesta = new LocacaoCarro();
			echo $form->dropDownList($modelcesta,'['.++$i.']carro_id', $list, array(
				'empty'=>'Selecione',
				'options' => $listOptions
			));

			echo $form->error($modelcesta,'carro_id');
		?>

	</div>

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
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save');?>
	</div>


<?php $this->endWidget(); ?>

</div><!-- form -->