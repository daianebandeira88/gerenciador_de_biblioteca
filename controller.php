<?php


error_reporting(0);
ini_set("display_errors", 0);
//cria a conexao
define('SERVER','localhost');
define('BANCO','store_book');
define('SENHA','');
define('USER','root');

$hoje = date('d/m/Y'); 
$data = implode('-', array_reverse(explode('/', $hoje)));

//print_r($_POST);
 $pdo = new PDO('mysql:host='.SERVER.';dbname='.BANCO ,USER , SENHA);
 $acao   = $_POST['acao'];
 $cod_livro        = $_POST['cod_livro'];
 $nome       = $_POST['nome'];
 $genero     = $_POST['genero'];
 $faixa      = $_POST['faixa'];
 $editora    = $_POST['editora'];
 $data_cad   = $_POST['data_cad'];
 $autor      = $_POST['autor'];
 $observacao = $_POST['observacao'];
 $serie      = $_POST['serie'];
 $telefone   = $_POST['fone'];    
 $aluno      = $_POST['nome'];   
 $endereco   = $_POST['endereco'];     
 $turno      = $_POST['turno'];    
 $cod_aluno   = $_POST['cod_aluno'];
 $nome_aluno   = $_POST['nome_aluno'];
 $nova_data_ent = $_POST['nova_data_ent'];
 $cod_emp     = $_POST['cod_emp']; 
 $data_ret     = $_POST['data_ret']; 
 $data_ent     = $_POST['data_ent']; 

if($acao == 'cadastrar'){
    
   $sql="insert into livro (
      nome_livro,
      nome_genero,
      faixa_ind,
      autor,
      editora,
      data_cadastro,
      observacao
   )values(
      '$nome',
      '$genero',
      '$faixa',
      '$autor',
      '$editora',
      '$data_cad',
      '$observacao'
   )";
   //echo "<pre>" . $sql . "</pre>";exit;
 
   $stmt = $pdo->prepare($sql);
   $stmt->execute();
   echo 1 ;


}



//------------------------------- exclui livro ---------------------------------------
if($acao == 'excluir_livro'){
   
   $sql="delete  from livro 
         where cod_livro ='$cod_livro'
   ";
   // echo "<pre>" . $sql . "</pre>";//exit;
   $stmt = $pdo->prepare($sql);
   $stmt->execute();
   
      echo 1;
   


}

//---------------------- cadastra aluno ------------------------------------------------
if($acao == 'cadastra_aluno'){
   $sql="insert into aluno (
      nome_aluno,
      data_cad,
      serie,
      telefone,
      turno,
      endereco,
      observacao
   )values(
      '$nome_aluno',
      '$data_cad',
      '$serie',
      '$telefone',
      '$turno',
      '$endereco',
      '$observacao'
   )";
   //echo "<pre>" . $sql . "</pre>";exit;
   $stmt = $pdo->prepare($sql);
   $stmt->execute();
   echo 1;
}
///----------------------emprestimo -----------------------------------------------------------
if($acao == 'emprestimo'){
   $sql="INSERT INTO emprestimo (
      nome_aluno,
      cod_livro,
      data_retirada,
      data_devolucao
   )values(
      '$cod_aluno',
      '$cod_livro',
      '$data_ret',
      '$data_ent'
   )";
   // echo "<pre>" . $sql . "</pre>";//exit;
   $sql2="UPDATE livro
   SET status_livro = 'I'
   WHERE cod_livro = '$cod_livro';
   )";

   //echo "<pre>" . $sql . "</pre>";
   $stmt = $pdo->prepare($sql);
   $stmt->execute();
   $stmt2 = $pdo->prepare($sql2);
   $stmt2->execute();
   //if($stmt->rowcount() > 1 ){
     // return json_encode("1");
   //}

   echo 1;
}
// --------------------------devoluçao -----------------------------------------------
if($acao == 'devolucao'){
   $sql=" DELETE FROM  EMPRESTIMO 
          WHERE cod_emp = '$cod_emp'
      ";
   //echo "<pre>" . $sql . "</pre>";exit;
   $sql2="UPDATE livro
          SET status_livro = 'D'
          WHERE cod_livro = '$cod_livro';
   ";

   //Echo "<pre>" . $sql . "</pre>";
   //echo "<pre>" . $sql2 . "</pre>";//exit;
   $stmt = $pdo->prepare($sql);
   $stmt->execute();
   $stmt2 = $pdo->prepare($sql2);
   $stmt2->execute();
   

  echo 1;
}
// -------------------- modifica data de entrega ----------------------------------------------

if($acao == 'edita_data_dev'){
   
   $sql2="UPDATE emprestimo
   SET data_devolucao = '$nova_data_ent'
   WHERE cod_emp = '$cod_emp';
   )";

   //echo "<pre>" . $sql2 . "</pre>";
   $stmt2 = $pdo->prepare($sql2);
   $stmt2->execute();
   

  echo 1;
}




//------------------- edita o livro no banco ----------------------------------------------------
if($acao == 'edita_livro'){
    
   $sql="UPDATE livro 
   set
      nome_livro = '$nome',
      nome_genero = '$genero',
      faixa_ind = '$faixa',
      autor = '$autor',
      editora = '$editora',
      observacao = '$observacao'
   where cod_livro ='$cod_livro'
   ";
   //echo "<pre>" . $sql . "</pre>";//exit;
   
   $stmt = $pdo->prepare($sql);
   $stmt->execute();
   echo 1 ;
  
  
}

//----------------------edita aluno -------------------------------------------------
  if($acao == 'edita_aluno'){
    
   $sql="update aluno 
   set

      nome_aluno = '$nome_aluno',
      serie = '$serie',
      telefone = '$telefone',
      turno = '$turno',
      endereco = '$endereco',
      observacao ='$observacao'
      
      
   
   where cod_aluno ='$cod_aluno'
   
   ";
   //echo "<pre>" . $sql . "</pre>";exit;
   
   $stmt = $pdo->prepare($sql);
   $stmt->execute();
   echo 1 ;
  
  
}
  //----------------------------------deleta aluno ------------------------------------------------------------------------------
  if($acao == 'excluir_aluno'){
   
   $sql="delete  from aluno 
         where cod_aluno ='$cod_aluno'
   ";
   //echo "<pre>" . $sql . "</pre>";exit;
   $stmt = $pdo->prepare($sql);
   $stmt->execute();
   
   
   echo(1);
}

//----------------------------------envia mensagem para aluno ------------------------------------------------------------------------------
if($acao == 'enviar_msg_todos'){
   
   $sql="SELECT 
            emprestimo.cod_emp,emprestimo.data_devolucao, emprestimo.cod_livro, 
            emprestimo.nome_aluno ,aluno.nome_aluno, aluno.telefone ,livro.nome_livro,livro.nome_genero 
         from emprestimo, aluno ,livro
         where emprestimo.nome_aluno = aluno.cod_aluno and livro.cod_livro = emprestimo.cod_livro and  data_devolucao < '$data';
   ";
  // echo "<pre>" . $sql . "</pre>";exit;
   $stmt = $pdo->prepare($sql);
   $stmt->execute();
   $msn_todos = $stmt->fetchAll(PDO::FETCH_ASSOC);
   $pos = 0;
   foreach($msn_todos as $msn_todos){
      $nome_alu =  $msn_todos['nome_aluno'];
      $nome_liv =  $msn_todos['nome_livro'];
      $fone_alu =  $msn_todos['telefone'];
   // echo  $nome_alu =  $msn_todos['nome_aluno'];
    $pos ++;
    echo $mensagem = urlencode("ola $nome_alu o livro $nome_liv esta em atrazo nao se esqueça de traze-lo");

   }

}
//----------------------------------envia mensagem somente para 1 aluno ------------------------------------------------------------------------------
if($acao == 'enviar_msg'){
   
  $sql="SELECT 
      emprestimo.cod_emp,emprestimo.data_devolucao, emprestimo.cod_livro, 
      emprestimo.nome_aluno ,aluno.nome_aluno , aluno.telefone ,livro.nome_livro
   from emprestimo, aluno ,livro
   where emprestimo.nome_aluno = aluno.cod_aluno and livro.cod_livro = emprestimo.cod_livro and emprestimo.cod_emp = '$cod_emp' ;
   ";
   //echo "<pre>" . $sql . "</pre>";exit;
   $stmt = $pdo->prepare($sql);
   $stmt->execute();
   $liv_disp = $stmt->fetchAll(PDO::FETCH_ASSOC);
   //print_r($liv_disp);
   $pos = 0;
   foreach($liv_disp as $liv_disp){
    $nome_alu =  $liv_disp['nome_aluno'];
    $nome_liv =  $liv_disp['nome_livro'];
    $fone_alu =  $liv_disp['telefone'];
    $pos ++;
  }
   //$mensagem = urlencode("ola $nome_alu o livro $nome_liv esta em atrazo nao se esqueca de traze-lo");
   // concatena a url da api com a variável carregando o conteúdo da mensagem
   //$url_api = "https://api.iagentesms.com.br/webservices/http.php?metodo=envio&usuario=daiane88bandeira@hotmail.com&senha=dai@022b&celular=$fone_alu&mensagem={$mensagem}";
   // realiza a requisição http passando os parâmetros informados
   //$api_http = file_get_contents($url_api);
   // imprime o resultado da requisição
   //echo $api_http;
   echo (ok);

}
  

?>