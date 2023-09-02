<?php
//include("retirada.php");
define('SERVER','localhost');
define('BANCO','store_book');
define('SENHA','');
define('USER','root');
$pdo = new PDO('mysql:host='.SERVER.';dbname='.BANCO ,USER , SENHA);
//print_r($_POST);
$pesq   = $_POST['nome'];
$acao   = $_POST['acao'];
//-------------- pesquisa livro ----------------


if($acao == 'buscalivro'){   
  $sql="
   SELECT cod_livro, nome_livro
   FROM livro
   WHERE nome_livro LIKE '%$pesq%';
       
  ";
  // echo "<pre>" . $sql . "</pre>";
   $stmt = $pdo->prepare($sql);
   $stmt->execute();
   $rs = $stmt->fetchAll(PDO::FETCH_ASSOC);
   $tot = count($rs);//var_dump($rs);
   $pos = 0;
  if ($tot > 0) {
    $arr_dados = array();
	
     echo json_encode($rs);
  }else {
	$data = "Nenhum registro localizado.";
  }
}

  if($acao == 'buscaaluno'){   
    $sql="
     SELECT cod_aluno, nome_aluno
     FROM aluno
     WHERE nome_aluno LIKE '%$pesq%';
         
    ";
    //echo "<pre>" . $sql . "</pre>";
     $stmt = $pdo->prepare($sql);
     $stmt->execute();
     $rs = $stmt->fetchAll(PDO::FETCH_ASSOC);
     $tot = count($rs);//var_dump($rs);
     $pos = 0;
    if ($tot > 0) {
      $arr_alunos = array();
     
       echo json_encode($rs);
    }else {
     $data = "Nenhum registro localizado.";
    }
  
  }
    

   




  
 

?>