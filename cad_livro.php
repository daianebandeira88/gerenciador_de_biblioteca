<?php

?>
<!doctype html>
<html>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <head>
  </head>
  
 

  <div onClick="fecha_mod_livro();" id="fecha" class="cursor-pointer -mt-8 -mr-6 float-right rounded-full shadow-xl text-red-600 pl-3 pr-3 pt-1 pb-1  border-gray-400 border-solid border-2 mb-4">X</div>
    <div class="bg-white border-none p-8 ">
          <div class="">
            <div class="flex items-stretch">
              <div id="titulo" name="titulo"class="text-gray-400 text-2xl ">Cadastrar livro</div>
            <div class="flex flex-nowrap -space-x-3">
                <div class="h-9 w-9"></div>
            </div>
          </div>
          <div class="flex items-center gap-x-2"></div>
        </div>
        <hr class="my-10">

        <div class="grid grid-cols-2 gap-x-20"><div>
            <h2 class="text-2xl font-bold mb-4"></h2>
        <div class="grid grid-cols-2 gap-4">
          <div class="col-span-2">
            <div class="col-span-2">
              <div class="p-4 bg-purple-100 rounded-xl text-gray-800">
              <div id="campo1"class="font-bold text-x2 leading-none">Nome do Livro</div>
                <div class="mt-2">
                  <input type="text" id="nome" name="nome" value=""placeholder="digite aqui " class="rounded-lg ring-2 ring-gray-300 p-2 w-full" />
                </div>
              </div>
            </div>
            <div class="col-span-2 mt-4">
              <div class="p-4 bg-purple-100 rounded-xl text-gray-800">
                <div id="campo2" class="font-bold text-x2 leading-none">Genero do Livro</div>
                <div class="mt-2">
                  <input type="text" name="genero" id="genero" value="" placeholder="digite aqui "class="al rounded-lg ring-2 ring-gray-300 p-2 w-full" />
                </div>
              </div>
            </div>
          </div>
          <div class="col-span-2">
            <div class="p-4 bg-purple-100 rounded-xl text-gray-800">
              <div id="campo3"class="font-bold text-x2 leading-none">Editora</div>
              <div class="mt-2">
                <input type="text" name="editora" id="editora" value=""placeholder="digite aqui " class="al rounded-lg ring-2 ring-gray-300 p-2 w-full" />
              </div>
            </div>
          </div>
          <div class="col-span-2">
            <div class="p-4 bg-purple-100 rounded-xl text-gray-800">
              <div id="campo4" class="font-bold text-x2 leading-none">Autor</div>
              <div class="mt-2">
                <input type="text" name="autor" id="autor" value="" class="al rounded-lg ring-2 ring-gray-300 p-2 w-full" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div>  
        <div class="col-span-2 mt-4">
          <div id="campo6" class="p-4 bg-purple-100 rounded-xl text-gray-800">
            <div id="" class="font-bold text-x2 leading-none">Classificação</div>
              <div class="mt-2">
                <input type="text" name="faixa" id="faixa" value=""placeholder="digite aqui " class="liv rounded-lg ring-2 ring-gray-300 p-2 w-full" />
              </div>
            </div>
          </div>
      
        <div class="space-y-4">
          <div class="col-span-2 mt-4"></div>
        </div>
        <div id="campo_data" class="col-span-2">
          <div class="mt-4 p-4 bg-purple-100 rounded-xl text-gray-800">
            <div class="font-bold text-x2 leading-none">Data do cadastro</div>
            <div class="mt-2">
              <input name="data_cad" id="data_cad" value="" class="rounded-lg ring-2 ring-gray-300 p-2 w-full" type="date" value="" />
            </div>
          </div>
        </div>
        <div class="col-span-2">
          <div class="mt-4 p-4 bg-purple-100 rounded-xl text-gray-800">
            <div  class="font-bold text-x2 leading-none">Observações</div>
            <div class="mt-2">
              <textarea type="text" name="observacao" id="observacao" value=""placeholder="digite aqui " class="rounded-lg ring-2 ring-gray-300 p-2 w-full"></textarea>
            </div>
          </div>
        </div>
      </div>
        <div class="col-span-2">
          <button id="salval" name="salval"style="background-color:rgb(34 197 94)"class="salval ml-60 mt-20 rounded text-white h-10 w-40 font-bold text-center ">salvar</button>
        </div>
      </div>
      </div> 
    </div>
                
          
             
        
  </div>
</html>


  

    