<?php




?>
<!doctype html>
<html>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <head>
  </head>
  
 <div class="bg-white rounded-3xl p-8 mb-5">
      <div class="flex items-center justify-between">
        <div class="flex items-stretch">
          <p id="titulo"class="text-gray-400 text-2xl"><br>Emprestimo de  Livro</p>
          <div class="flex flex-nowrap -space-x-3">
            <div class="h-9 w-9"></div>
          </div>
        </div>
        <div class="flex items-center gap-x-2">

        </div>
      </div>

    <hr class="my-10">

    <div class="grid grid-cols-2 gap-x-20">
      <div>
        <h2 class="text-2xl font-bold mb-4"></h2>
      
        <div class="grid grid-cols-2 gap-4">
         
          <div class="col-span-2">
            
            <div class="col-span-2">
              <div class="p-4 bg-purple-100 rounded-xl text-gray-800">
                <div  class=" text-x2 leading-none"> Livro
               
                  <input value="" onkeyup="buscalivro('livro')"  type="text" id="busca" placeholder="digite o nome do livro" name="busca" class="rounded-lg ring-2 ring-gray-300 p-2 w-full mt-2" />
                  <input type="hidden"  name="cod_livro" id="cod_livro" value="" />
                </div>
              </div> 
              <div id="resultado" ></div>
            </div>
            <div class="col-span-2 mt-4">
              <div class="p-4 bg-purple-100 rounded-xl text-gray-800">
                <div class=" text-x2 leading-none">Aluno</div>
                <div class="mt-2">
                  <input type="text" onkeyup="abrebusca('aluno')" name="aluno" id="aluno" value="" placeholder="digite o nome do aluno" class="rounded-lg ring-2 ring-gray-300 p-2 w-full" />
                  <input type="hidden"  name="cod_aluno" id="cod_aluno" value="" />
                </div>
              </div>
            </div>
            <div id="resultadoaluno" ></div>
          </div>
        </div>
      </div>
      <div>
        <div class="space-y-4">
        </div>
        <div class="col-span-2">
          <div class="mt-4 p-4 bg-purple-100 rounded-xl text-gray-800">
            <div class=" text-x2 leading-none">Data de Retirada</div>
            <div class="mt-2">
              <input name="data_ret" id="data_ret" value="" class="rounded-lg ring-2 ring-gray-300 p-2 w-full text-gray-800" type="date" value="" />
            </div>
          </div>
        </div>
        <div class="col-span-2">
          <div class="mt-4 p-4 bg-purple-100 rounded-xl text-gray-800">
            <div class=" text-x2 leading-none">Data de Entrega</div>
            <div class="mt-2">
              <input name="data_ent" id="data_ent" value="" class="rounded-lg ring-2 ring-gray-300 p-2 w-full" type="date" value="" />
            </div>
          </div>
        </div>
       <div id="nova_data" name="nova_data" class="col-span-2" >
          <div class="mt-4 p-4 bg-purple-100 rounded-xl text-gray-800">
            <div class=" text-x2 leading-none">Nova Data de Entrega</div>
            <div class="mt-2">
              <input name="nova_data_ent" id="nova_data_ent" value="" class="rounded-lg ring-2 ring-gray-300 p-2 w-full" type="date" value="" />
            </div>
          </div> 
         </div>
      </div>
      <div class="col-span-2">
        <div >
           <button id="salva_emp" type="submit" style="background-color:rgb(34 197 94)"class="salva_emp  ml-60 mt-20 rounded text-white h-10 w-40 font-bold text-center">Salvar</button>
        </div>
      </div>
 <input name="cod_emp" id="cod_emp"tipo="hidden" style="display:none">
  </div>
</div>

</html>
 <script>
  
//-------------ajax busca livro no banco-------------------------------------------------
      
function buscalivro(livro){
 var nome  = $("#busca").val();

    $.ajax({
        url: 'pesquisa_dinamica.php' ,
        method: "POST",
        data: {nome:nome , acao:'buscalivro'},
        method : 'POST',
        dataType: 'json' ,
        scriptCharset:"UTF-8",
          success: function(retorno){
            var conteudoHTML = "<ul role='list' class='p-6 divide-y divide-slate-200 border cursor-pointer'>";
             retorno.forEach(item => {
                 conteudoHTML += "<li value="+item.cod_livro +" class='flex py-4 first:pt-0 last:pb-0 ' onclick='getIdProduto(" +item.cod_livro + "," + JSON.stringify(item.nome_livro) + ")'>" + item.nome_livro + "</li>";
                 document.getElementById('resultado').innerHTML = conteudoHTML;
   
            });
				 
            conteudoHTML += "</ul>";
                
            }
    })
 }
    
function getIdProduto(id_produto, nome) {
  // Enviar o nome do produto para o campo produto o nome
  document.getElementById("cod_livro").value = id_produto;

  // Enviar o ID do produto para o campo oculto
  document.getElementById("busca").value = nome;

  // Fechar a lista de produtos ou o erro
  document.getElementById("resultado").innerHTML = "";
}
 
//-------------ajax busca aluno no banco-------------------------------------------------
      
function abrebusca(aluno){
 var nome  = $("#aluno").val();
 
    $.ajax({
        url: 'pesquisa_dinamica.php' ,
        method: "POST",
        data: {nome:nome , acao:'buscaaluno'},
        method : 'POST',
        dataType: 'json' ,
        scriptCharset:"UTF-8",
          success: function(retorno){
            console.log(retorno);
            var conteudoHTML = "<ul role='list' class='p-6 divide-y divide-slate-200 border cursor-pointer'>";
            retorno.forEach(item => {
                 conteudoHTML += "<li value="+item.cod_aluno +" class='flex py-4 first:pt-0 last:pb-0'  onclick='getIdaluno(" +item.cod_aluno + "," + JSON.stringify(item.nome_aluno) + ")'>" + item.nome_aluno + "</li>";
                 document.getElementById('resultadoaluno').innerHTML = conteudoHTML;
   
            });
				 
            conteudoHTML += "</ul>";
                
          }
    })
 }
    
function getIdaluno(id_produto, nome) {
  // Enviar o nome do produto para o campo produto o nome
  document.getElementById("aluno").value = id_produto;
  document.getElementById("cod_aluno").value = id_produto;
  // Enviar o ID do produto para o campo oculto
  document.getElementById("aluno").value = nome;

  // Fechar a lista de produtos ou o erro
  document.getElementById("resultadoaluno").innerHTML = "";
}

</script>
  

    