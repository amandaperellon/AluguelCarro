<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Bem vindo a <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Uma locadora completa, com uma enorme variedade de carros como:</p>

<img class="img-responsive" alt="Responsive image" src="<?php echo Yii::app()->request->baseUrl; ?>/images/x1.jpg">

