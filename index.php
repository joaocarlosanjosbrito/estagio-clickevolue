<!doctype html>
<html lang="pt-BR">
  <head>
 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="icon" href="imagens/icone.png">

    <title>ClickEvolue-CRUD</title>
  </head>
  <body>
   <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
  <div class="container-fluid">
  
    <img src="imagens/logo-click.png">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=novo"><b>Criar Usuário<b></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="?page=listar"><b>Listar Usuários<b></a>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
	<div class="row">
		<div class="col mt-5">
			<?php 
          include("config.php");
          switch (@$_REQUEST["page"]){
	          case "novo":
		          include("novo-usuario.php");
	          break;
	          case "listar":
		          include("listar-usuario.php");
	          break;
            case "salvar":
              include("salvar-usuario.php");
            break;
            case "editar":
              include("editar-usuario.php");
            break;
	          default:
		          print "<h1><b>Olá, sejam bem vindos ao meu primeiro CRUD. Desenvolvido com PHP,Mysql e XAMPP como servidor, usei bootstrap para parte de front-end e responsividade. Um CRUD até que simples... mas feito com estudos e dedicação.<b></h1>";
          }
?>
 	
		</div>


	</div>


</div>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>