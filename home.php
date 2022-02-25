<h1 class="site-heading text-center text-white d-none d-lg-block">
    
      <label style="color: black;">Listar</label>
  </h1>
<?php


  $sql = "SELECT * FROM produtos INNER JOIN preco ON preco.ID_PROD = produtos.ID_PROD";

  $res = $conn->query($sql) or die($conn->error);

  $qtd = $res->num_rows;

  if($qtd > 0){
    print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
    print "<table class='table table-bordered table-striped table-dark table-hover'>";
    print "<tr>";
    print "<th>#</th>"; 
    print "<th>Produtos</th>";
    print "<th>Preços</th>";
    print "<th>Cor</th>";
    print "<th>Ações</th>";
    print "</tr>";
    while( $row = $res->fetch_object() ){
      print "<tr>";
      print "<td>".$row->ID_PROD."</td>";  
      print "<td>".$row->NOME."</td>";
      print "<td>"."$".$row->PRECO."</td>";
      print "<td class=''>".$row->COR."</td>";
      print "<td>
            <a href='?page=inserir-produto&ID_PROD=".$row->ID_PROD."' class='btn btn-success'>Inserir</a>
            <a href='?page=editar-produto&ID_PROD=".$row->ID_PROD."' class='btn btn-success'>Editar</a>

            <a href='#' onclick=\"
              if(confirm('Tem certeza que deseja excluir?')){
                location.href='?page=salvar-marca&acao=excluir&ID_PROD=".$row->ID_PROD."';
              }else{
                false;
              }\" class='btn btn-danger'>Excluir</a>

           </td>";  
      print "</tr>";
    }
    print "</table>";
  }else{
    print "Não encontrou resultados";
  }
?>