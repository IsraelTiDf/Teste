<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">

    <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

     <link href="css/index.css" rel="stylesheet">
    <title>Produtos</title>
  </head>
  <body>


      


     
    <div class="container">
      <div class="row">
        <div class="col-lg-12">





          <?php
            //conectar ao banco de dados
            include("config.php");
           
            switch (@$_REQUEST["page"]) {
              case 'inserir-produto':
                include("inserir-produto.php");
                break;
              
              case 'editar-produto':
                include("editar-produto.php");
                break;
              case 'salvar-marca':
                include("salvar-marca.php");
                break;
                
              default:
                include("home.php");
            }
          ?>
        </div>
      </div>
    </div>
    
    <script src="js/jquery-3.4.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>