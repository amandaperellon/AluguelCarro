<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-theme.min.css">
	<script
	  src="https://code.jquery.com/jquery-2.2.4.min.js"
	  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
	  crossorigin="anonymous">
	</script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
	<!-- <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js"></script> -->
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/npm.js"></script>
	
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<div class="container" id="page">

	<div id="mainmenu">
		<nav class="navbar navbar-inverse" style="width: 100%; margin: 0px; padding: 0px">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://127.0.0.1/aluguelCarro/index.php">Aluguel de Carros</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Locacoes <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://127.0.0.1/aluguelCarro/index.php?r=locacao/create">Cadastrar</a></li>
            <li><a href="http://127.0.0.1/aluguelCarro/index.php?r=locacao/index">Listar </a></li>
            <li><a href="http://127.0.0.1/aluguelCarro/index.php?r=locacao/admin">Gerenciamento</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Carros <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://127.0.0.1/aluguelCarro/index.php?r=carro/create">Cadastrar</a></li>
            <li><a href="http://127.0.0.1/aluguelCarro/index.php?r=carro/index">Listar </a></li>
            <li><a href="http://127.0.0.1/aluguelCarro/index.php?r=carro/admin">Gerenciamento</a></li>
          </ul>
        </li><li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Modelos <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://127.0.0.1/aluguelCarro/index.php?r=modelo/create">Cadastrar</a></li>
            <li><a href="http://127.0.0.1/aluguelCarro/index.php?r=modelo/index">Listar </a></li>
            <li><a href="http://127.0.0.1/aluguelCarro/index.php?r=modelo/admin">Gerenciamento</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Marcas <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://127.0.0.1/aluguelCarro/index.php?r=marca/create">Cadastrar</a></li>
            <li><a href="http://127.0.0.1/aluguelCarro/index.php?r=marca/index">Listar </a></li>
            <li><a href="http://127.0.0.1/aluguelCarro/index.php?r=marca/admin">Gerenciamento</a></li>
          </ul>
        </li><li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Cliente <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="http://127.0.0.1/aluguelCarro/index.php?r=cliente/create">Cadastrar</a></li>
            <li><a href="http://127.0.0.1/aluguelCarro/index.php?r=cliente/index">Listar </a></li>
            <li><a href="http://127.0.0.1/aluguelCarro/index.php?r=cliente/admin">Gerenciamento</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
