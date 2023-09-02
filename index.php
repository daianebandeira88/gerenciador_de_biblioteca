<?php
//include_once("controller.php");
//header("Access-Control-Allow-Origin: controller.php");

//error_reporting(0);
    // ini_set("display_errors", 0);
define('SERVER','localhost');
define('BANCO','store_book');
define('SENHA','');
define('USER','root');

//cria a conexao
$pdo = new PDO('mysql:host='.SERVER.';dbname='.BANCO ,USER , SENHA);
$hoje = date('d/m/Y'); 
 $data = implode('-', array_reverse(explode('/', $hoje)));

$arrdados=[];
$consulta ="select * from livro ";
$mostra = $pdo->query($consulta);
//$mostra->execute();
$rs = $mostra->fetchAll(PDO::FETCH_ASSOC);
$totrows = count($rs);//var_dump($rs);
//echo($totrows);

$consulta_emp ="SELECT emprestimo.cod_emp,emprestimo.data_devolucao,emprestimo.data_retirada, emprestimo.cod_livro, emprestimo.nome_aluno ,aluno.nome_aluno ,livro.nome_livro
from emprestimo, aluno ,livro
where emprestimo.nome_aluno = aluno.cod_aluno and livro.cod_livro = emprestimo.cod_livro ";
$mostra = $pdo->query($consulta_emp);
//$mostra->execute();
$list = $mostra->fetchAll(PDO::FETCH_ASSOC);
$totr = count($list);//var_dump($rs);


$consulta ="select * from aluno ";
$mostra_aluno = $pdo->query($consulta);
//$mostra->execute();
$res = $mostra_aluno->fetchAll(PDO::FETCH_ASSOC);
$tot_alunos = count($res);//var_dump($rs);
//echo($totrows);

$consulta_livros_disponiveis= "
   
   select * from livro
   where  status_livro = 'D'
 ";
 

$stmt = $pdo->prepare($consulta_livros_disponiveis);
$stmt->execute();
$liv_disp = $stmt->fetchAll(PDO::FETCH_ASSOC);
//print_r($liv_disp);
$tot_li_disp = count($liv_disp);


$sql5= "
SELECT emprestimo.cod_emp,emprestimo.data_devolucao, emprestimo.cod_livro, 
emprestimo.nome_aluno ,aluno.nome_aluno ,livro.nome_livro,livro.nome_genero 
from emprestimo, aluno ,livro
where emprestimo.nome_aluno = aluno.cod_aluno and livro.cod_livro = emprestimo.cod_livro and  data_devolucao <   '$data';
 ";
	 
	//echo "<pre>" . $sql . "</pre>";
	 $stmt = $pdo->prepare($sql5);
	 $stmt->execute();
	 $atr = $stmt->fetchAll(PDO::FETCH_ASSOC);
	//print_r($atr);
  $tot_li_atr = count($atr);
?>
<!doctype html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
<script src="https://cdn.tailwindcss.com"></script>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<style>::-webkit-scrollbar {
    width: .5rem;
    height: .5rem;
}
::-webkit-scrollbar-thumb {
    background: rgba(0,0,0,.15);
}
::-webkit-scrollbar-thumb:hover {
    background: rgba(0,0,0,.3);
}</style>
</head>

<body style="border:solid 1px black ; ">
    <body class="relative  overflow-hidden max-h-screen">
        <header class="fixed right-0 top-0 left-60 bg-yellow-50 py-3 px-4 h-16">
          <div  class="max-w-4xl mx-auto">
            <div class="flex items-center justify-between">
              <div>
                
              </div>
              
            </div>
          </div>
        </header>
      
        <aside class="fixed inset-y-0 left-0 bg-purple-200 shadow-md max-h-screen w-60">
          <div class="flex flex-col justify-between h-full ">
            <div class="flex-grow">
              <div class="px-4 py-6 text-center border-b">
                <h1 class="text-xl font-bold leading-none"><span class="text-yellow-700">Gerenciador de Biblioteca</span></h1>
              </div>

              <div  class="p-4">
                <ul class="space-y-1">
                  <li>
                    <div onclick="chama_ini()" class="cursor-pointer flex bg-white hover:bg-yellow-50 rounded-xl font-bold text-sm text-gray-900 py-3 px-4">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" width="1em" height="1em" fill="currentColor" class="text-lg mr-4">
                    <path d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                    <path d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
                    </svg>&nbsp;Início
                    </div>
                  </li>
                  <li>
                    <div onclick="mod_cad_livro()" class="cursor-pointer flex bg-white hover:bg-yellow-50 rounded-xl font-bold text-sm text-gray-900 py-3 px-4">
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-lg mr-4" viewBox="0 0 16 16">
                        <path d="M4 .5a.5.5 0 0 0-1 0V1H2a2 2 0 0 0-2 2v1h16V3a2 2 0 0 0-2-2h-1V.5a.5.5 0 0 0-1 0V1H4V.5zM16 14V5H0v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zm-3.5-7h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5z"/>
                      </svg>Cadastrar Livro
                    </div>
                  </li>
                  <li>
                    <div onclick="cadas_aluno()" class="cursor-pointer flex bg-white hover:bg-yellow-50 rounded-xl font-bold text-sm text-gray-900 py-3 px-4">
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-lg mr-4" viewBox="0 0 16 16">
                        <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
                      </svg>Cadastrar Aluno
                    </div>
                  </li>
                  
                  <li>
                    <div onclick="retirada()" class="cursor-pointer flex bg-white hover:bg-yellow-50 rounded-xl font-bold text-sm text-gray-900 py-3 px-4">
                      <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="text-lg mr-4" viewBox="0 0 16 16">
                        <path d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.825a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                      </svg>Retirada de Livro
                    </div>
                  </li>
                  
                </ul>
              </div>
            </div>
          <div class="p-4">
              <button type="button" class="inline-flex items-center justify-center h-9 px-4 rounded-xl bg-gray-900 text-gray-300 hover:text-white text-sm font-semibold transition">
                <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="" viewBox="0 0 16 16">
                  <path d="M12 1a1 1 0 0 1 1 1v13h1.5a.5.5 0 0 1 0 1h-13a.5.5 0 0 1 0-1H3V2a1 1 0 0 1 1-1h8zm-2 9a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                </svg>
              </button> <span class="font-bold text-sm ml-2">Logout</span>
            </div>
          </div>
        </aside>
      
<main  class="ml-60 pt-16 max-h-screen overflow-auto">
    <div class="max-w-4xl mx-auto border-solid border-2 border-gray-100 shadow-xl rounded-md p-2 m-4">
        <form id="form" name="form" method="post"action="">
            
            <div id="inicio" style="display:block" class="bg-white rounded-3xl p-8 mb-5">
                <div class="grid grid-rows-1 grid-cols-3 grid-flow-col gap-3">
                    
                    <div id="tag_livro" onclick="mostra_livros()"class="cursor-pointer col-span-1 border-solid border-2 border-gray-100 rounded-md p-4  font-bold text-gray-600"><img src="imagens/book.png" alt="Descrição da imagem" width="50" height="25">Todos Livros 
                      <p class=" text-sm text-gray-600 hover:text-gray-400 transition-all">Total  : <?php echo$totrows ?></p>
                    </div>
    
                    <div id="tag_aluno" onclick="mostra_alunos()" class="cursor-pointer col-span-1 border-solid border-2 border-gray-100 rounded-md p-4  font-bold text-gray-600"><img src="imagens/aluno.png.png" alt="Descrição da imagem" width="50" height="25"> Alunos 
                      <p class=" text-sm text-gray-600 hover:text-gray-400 transition-all">Total  : <?php echo$tot_alunos ?></p>
                    </div>
                    
                    <div id="tag_emp" onclick="mostra_emp()" class="cursor-pointer col-span-1 border-solid border-2 border-gray-100 rounded-md p-4  font-bold text-gray-600"><img src="imagens/livro.png" alt="Descrição da imagem" width="50" height="25">livros em emprestimo 
                    <p class=" text-sm text-gray-600 hover:text-gray-400 transition-all">Total  : <?php echo $totr ?></p>
                    </div>

                    
                </div>
                <div class="grid grid-rows-1 grid-cols-3 grid-flow-col gap-3 mt-2">
                    
                   <div id="tag_liv_disp" onclick="mostra_livros_disp()" class="cursor-pointer col-span-1 border-solid border-2 border-gray-100 rounded-md p-4  font-bold text-gray-600"><img src="imagens/estante.png" alt="Descrição da imagem" width="50" height="25">livros disponiveis
                      <p class=" text-sm text-gray-600 hover:text-gray-400 transition-all">Total  : <?php echo$tot_li_disp   ?></p>
                   </div>

                   <div id="tag_liv_atra" onclick="mostra_livros_atra()" class="cursor-pointer col-span-1 border-solid border-2 border-gray-100 rounded-md p-4  font-bold text-gray-600"><img src="imagens/instructions.png" alt="Descrição da imagem" width="50" height="25">livros em atraso 
                      <p class=" text-sm text-gray-600 hover:text-gray-400 transition-all">Total  : <?php echo$tot_li_atr   ?></p>
                   </div>
                </div>

                <!--====================== div que exibe os livros ========================================= -->
                <div class="max-w-4xl mx-auto rounded-md">
                        <div id="exibe_livros" name="exibe_livros" style="display:none" class="w-full bg-white">
                            <div onClick="fecha_exibe_livros();" class="cursor-pointer -mt-8 -mr-6  float-right rounded-full shadow-xl text-red-600 pl-3 pr-3 pt-1 pb-1  border-gray-400 border-solid border-2 mb-4">X</div>                    
                            <h2 class="text-gray-600 text-2xl pl-80 items-center ">Todos Livros </h2>
                            <div class="w-full overflow-hidden bg-white">

                          <ul role="list" class="divide-y divide-gray-200">
                            <?php $pos=0;
                            foreach($rs as $rs){?>
                            <li>
                               <a target="_blank" href="<?php echo $rs['nome_livro']?>" class="block hover:bg-gray-50">
                              <div class="px-4 py-4 sm:px-6">
                                <div class="flex items-center justify-between">
                                  <p class=" text-base text-gray-600 hover:text-gray-800 transition-all"><?php echo $rs['nome_livro']?></p>
                                <div class="ml-2 flex flex-shrink-0">
                                    <a><button onClick="mod_edt_livro('<?= $rs['cod_livro']?>','<?= $rs['nome_livro']?>','<?= $rs['nome_genero']?>','<?= $rs['faixa_ind']?>','<?= $rs['editora']?>','<?= $rs['autor']?>','<?= $rs['observacao']?>')"value="" type="button" class="cursor-pointer inline-flex rounded bg-yellow-400 px-2 text-xs font-bold leading-5 text-white m-2 p-1">Editar</button></a>
                                    <a><button onClick="excluir_livro('<?= $rs['cod_livro']?>')" id="excluir" name="excluir" class="excluir cursor-pointer inline-flex rounded bg-red-600 px-2 text-xs font-bold leading-5 text-white m-2 p-1">Excluir</button></a>
                                </div>
                              </div>
                              <div class=" sm:flex sm:justify-between">
                                  <div class="flex flex-wrap">
                                    <p class="text-gray-400 text-sm">Autor: <?php echo $rs['autor']?></p>
                                  </div>
                                </div>
                                <div class=" sm:flex sm:justify-between">
                                  <div class="flex flex-wrap">
                                    <p class="text-gray-400 text-sm">Editora: <?php echo $rs['editora']?></p>
                                  </div>
                                </div>
                                <div class=" sm:flex sm:justify-between">
                                  <div class="flex flex-wrap">
                                    <p class="text-gray-400 text-sm">Genero: <?php echo $rs['nome_genero']?></p>
                                  </div>
                                </div>
                              </a>
                            </li>
                            <?php $pos++; } ?>
                          </ul>
                        </div>
                    </div>
                    <!--====================== div que exibe os alunos ========================================= -->
                    <div class="max-w-4xl mx-auto rounded-md">
                        <div id="exibe_alunos" name="exibe_alunos" style="display:none" class="w-full bg-white">
                        <h2 class="text-gray-600 text-2xl pl-80 items-center ">Alunos</h2>
                            <div onClick="fecha_exibe_aluno();" class="cursor-pointer -mt-14 -mr-6 float-right rounded-full shadow-xl text-red-600 pl-3 pr-3 pt-1 pb-1  border-gray-400 border-solid border-2 mb-4">X</div>                    
                            <div class="w-full overflow-hidden bg-white">

                            <ul role="list" class="divide-y divide-gray-200">
                            <?php $pos=0;
                            foreach($res as $res){?>
                            <li>
                                <a target="_blank" href="<?php echo $res['nome_aluno']?>" class="block hover:bg-gray-50">
                                <div class="px-4 py-2 sm:px-6">
                                <div class="flex items-center justify-between">
                                <p class="xl:truncate  text-gray-600 hover:text-gray-800 transition-all"><?php echo $res['nome_aluno']?></p>
                                <div class="ml-2 flex flex-shrink-0">
                                    <a><button onClick="mod_edt_aluno('<?= $res['cod_aluno']?>','<?= $res['nome_aluno']?>','<?= $res['telefone']?>','<?= $res['turno']?>','<?= $res['endereco']?>','<?= $res['serie']?>','<?= $res['observacao']?>')"value="" type="button" class="cursor-pointer inline-flex rounded bg-yellow-400 px-2 text-xs font-bold leading-5 text-white m-2 p-1">Editar</button></a>
                                    <a><button onClick="excluir_aluno('<?= $res['cod_aluno']?>')" id="exclui_aluno" name="exclui_aluno" class="excluir_alu cursor-pointer inline-flex rounded bg-red-600 px-2 text-xs font-bold leading-5 text-white m-2 p-1">Excluir</button></a>
                                    </div>
                                    </div>
                                    <div class="mt-2 sm:flex sm:justify-between">
                                    <div class="flex flex-wrap">
                                    <p class="flex items-center text-sm text-gray-500">
                                    Serie: <?php echo $res['serie']?>
                                    </p>
                                    </div>
                            
                                    </div>
                                </a>
                                </li>
                            <?php $pos++; } ?>
                            </ul>
                        </div>
                    </div>
                    <!--====================== div que exibe os livros em emprestimo ========================================= -->
                    <div class="max-w-4xl mx-auto rounded-md">
                        <div id="exibe_emp" name="exibe_emp" style="display:none" class="w-full bg-white">
                        <h2 class="text-gray-600 text-2xl pl-60 items-center ">Livros em Emprestimo</h2>
                            <div onClick="fecha_exibe_emp();" class="cursor-pointer -mt-14 -mr-6 float-right rounded-full shadow-xl text-red-600 pl-3 pr-3 pt-1 pb-1  border-gray-400 border-solid border-2 mb-4">X</div>                    
                            <div class="w-full overflow-hidden bg-white">

                            <ul role="list" class="divide-y divide-gray-200">
                            <?php $pos=0;
                            foreach($list as $list){
                            
                              $dev =  $list['data_devolucao'];
                              ?>

                           
                            <li>
                              <?php if($data > $dev){ ?>
                              <div class="xl:truncate text-xs  text-red-600 transition-all">Livro em atraso</div>  
                              <?php } ?>
                                <a target="_blank" href="<?php echo $list['cod_emp']?>" class="block hover:bg-gray-50">
                                <div class="px-4 py-4 sm:px-6">
                                <div class="flex items-center justify-between">
                                  <p class="xl:truncate text-1x1 text-gray-600 hover:text-gray-800 transition-all"><?php echo $list['nome_livro']?></p>
                                  <p class="xl:truncate text-gray-400 hover:text-gray-800 text-sm transition-all">Retirado por: <?php echo $list['nome_aluno']?></p>
                                  <div class="ml-2 flex flex-shrink-0">
                                    <a><button onClick="edita_data_ent('<?php echo $list['cod_emp']?>','<?php echo $list['nome_aluno']?>','<?php echo $list['nome_livro']?>','<?php echo $list['data_devolucao']?>','<?php echo $list['data_retirada']?>')"value="" type="button" class="cursor-pointer inline-flex rounded bg-yellow-400 px-2 text-xs font-bold leading-5 text-white m-2 p-1">Editar</button></a>
                                    <a><button onClick="devolve_livro('<?php echo $list['cod_emp']?>','<?= $list['cod_livro']?>')" id="exclui_emp" name="exclui_emp" class="excluir cursor-pointer inline-flex rounded bg-green-600 px-2 text-xs font-bold leading-5 text-white m-2 p-1">Entrega</button></a>
                                  </div>
                                </div>
                                <div class="mt-2 sm:flex sm:justify-between">
                                <div class="flex flex-wrap">
                                    <p class="flex items-center text-sm text-gray-400">data prevista de entrega: <?php echo date('d/m/Y',strtotime($list['data_devolucao']));?></p>
                                 </div>
                              </div>
                              </a>
                            </li>
                            <?php $dev =''; $pos++; } ?>
                            </ul>
                        </div>
                    </div>
                     <!--====================== div que exibe os livros disponiveis ========================================= -->
                     <div class="max-w-4xl mx-auto rounded-md">
                        <div id="exibe_liv_disp" name="exibe_liv_disp" style="display:none" class="w-full bg-white">
                            <h2 class="text-gray-600 text-2xl pl-60 items-center  ">Livros Disponiveis para Locação</h2>
                            <div onClick="fecha_exibe_liv_disp();" class="cursor-pointer -mr-6 float-right rounded-full shadow-xl text-red-600 pl-3 pr-3 pt-1 pb-1  border-gray-400 border-solid border-2 -mt-14 ">X</div>                    
                            <div class="w-full overflow-hidden bg-white">

                          <ul role="list" class="divide-y divide-gray-200">
                            <?php $pos=0;
                            foreach($liv_disp as $liv_disp){?>
                            <li>
                              <a target="_blank" href="" class="block hover:bg-gray-50">
                                <div class="px-4 py-4 sm:px-6 ml-4">
                                <div class="flex items-center justify-between">
                                  <p class="xl:truncate   text-gray-600 hover:text-gray-800 transition-all"><?php echo $liv_disp['nome_livro']?></p>
                                <div class="ml-2 flex flex-shrink-0">
                                </div>
                                </div>
                                <div class=" sm:flex sm:justify-between">
                                  <div class="flex flex-wrap">
                                    <p class="text-gray-400 text-sm">Autor: <?php echo $liv_disp['autor']?></p>
                                  </div>
                                </div>
                                <div class=" sm:flex sm:justify-between">
                                  <div class="flex flex-wrap">
                                    <p class="text-gray-400 text-sm">Editora: <?php echo $liv_disp['editora']?></p>
                                  </div>
                                </div>
                                <div class=" sm:flex sm:justify-between">
                                  <div class="flex flex-wrap">
                                    <p class="text-gray-400 text-sm">Genero: <?php echo $liv_disp['nome_genero']?></p>
                                  </div>
                                </div>
                              </a>
                            </li>
                            <?php $pos++; } ?>
                           </ul>
                        </div>
                    </div>
                     <!--====================== div que exibe os livros em atraso ========================================= -->
                     <div class="max-w-4xl mx-auto rounded-md">
                        <div onClick="fecha_exibe_liv_atra();"style="display:none" id="fecha_liv_atr" class="cursor-pointer -mt-8 -mr-6 float-right rounded-full shadow-xl text-red-600 pl-3 pr-3 pt-1 pb-1  border-gray-400 border-solid border-2 mb-4">X</div>                    
                        <div id="exibe_liv_atrasado" name="exibe_liv_atrasado" style="display:none" class="w-full bg-white">
                            <h2 class="text-gray-600 text-2xl pl-80 items-center ">Livros em Atraso</h2>
                            
                            <div class="w-full overflow-hidden bg-white">
                            <div onClick="envia_sms_todos()" id="" name="" class="cursor-pointer inline-flex rounded bg-green-600 px-2 text-xs ml-6 font-bold leading-5 text-white pt-2 pb-2 p-4">Enviar mensagem a todos</div>
                            <ul role="list" class="divide-y divide-gray-200">
                            <?php $pos=0;
                            foreach($atr as $atr){?>
                            <li>
                            <a target="" href="<?php echo $atr['nome_aluno']?>" class="block hover:bg-gray-50">
                                <div class="px-4 py-4 sm:px-6">
                                <div class="flex items-center justify-between">
                                <p class="xl:truncate  text-gray-600 hover:text-gray-800 transition-all"><?php echo $atr['nome_livro']?></p>
                                <p class="  text-sm text-gray-400 hover:text-gray-600 transition-all">Retirado por: <?php echo $atr['nome_aluno']?></p>
                                <div class="ml-2 flex flex-shrink-0">
                                    
                                    <a><div onClick="envia_sms('<?php echo $atr['cod_emp']?>')" id="" name="" class="cursor-pointer inline-flex rounded bg-green-600 px-2 text-xs font-bold leading-5 text-white m-2 p-1">Enviar mensagem</div></a>
                                    </div>
                                    </div>
                                    <div class="mt-2 sm:flex sm:justify-between">
                                    <div class="flex flex-wrap">
                                    

                                    <p class="flex items-center text-sm text-gray-400">data prevista de entrega: <?php echo date('d/m/Y',strtotime($atr['data_devolucao']));?></p>
                                    </div>
                                    
                            
                            
                                    </div>
                                </a>
                                </li>
                            <?php $pos++; } ?>

                            </ul>
                        </div>
                    </div>








            </div>
            <div id="mod_livro" style="display:none"class="bg-white rounded-3xl p-8 mb-5">
               
               <?php include 'cad_livro.php';?> 
            </div>
            <div id="mod_retirada" style="display:none"class="bg-white rounded-3xl p-8 mb-5">
                     <div onClick="fecha_retirada();" class="cursor-pointer -mt-8 -mr-6 float-right rounded-full shadow-xl text-red-600 pl-3 pr-3 pt-1 pb-1  border-gray-400 border-solid border-2 mb-4">X</div>
                     <?php include 'retirada.php';?> 
            </div>
            <div id="mod_aluno" style="display:none"class="bg-white rounded-3xl p-8 mb-5">
                  
                   <?php include 'cad_aluno.php';?> 
            </div>

            <input name="acao" id="acao" type="hidden" >

        
        </form>
    </div>

</main>
      
</body>
</html>
<script type="text/javascript" src="bibli.js"></script>