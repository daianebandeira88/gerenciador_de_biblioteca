<?php

?>
<!doctype html>
<html>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <head>
  </head>
  
 
 
 <div onClick="fecha_mod_aluno();" id="fechar" class="cursor-pointer -mt-8 -mr-6 float-right rounded-full shadow-xl text-red-600 pl-3 pr-3 pt-1 pb-1  border-gray-400 border-solid border-2 mb-4">X</div>
 
      <div class="bg-white border-none p-8 ">
        <div class="flex items-center justify-between">
          <div class="flex items-stretch">
             <div id="titulo2" name="titulo2"class="text-gray-400 text-2xl "style="display:none">Editar Aluno</div>
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
              <div id="campo1"class="font-bold text-x2 leading-none">Nome do Aluno</div>
              <div class="mt-2">
                <input type="text" id="nome_aluno" name="nome_aluno" value=""placeholder="digite aqui " class="rounded-lg ring-2 ring-gray-300 p-2 w-full" />
              </div>
            </div>
          </div>

          <div class="col-span-2 mt-4">
            <div class="p-4 bg-purple-100 rounded-xl text-gray-800">
              <div id="campo2" class="font-bold text-x2 leading-none">Telefone</div>
              <div class="mt-2">
                 <input type="text" name="fone" id="fone" value="" placeholder="digite aqui "class="al rounded-lg ring-2 ring-gray-300 p-2 w-full" />
              </div>
            </div>
          </div>
        </div>
        <div class="col-span-2">
          <div class="p-4 bg-purple-100 rounded-xl text-gray-800">
            <div id="campo3"class="font-bold text-x2 leading-none">Endereço</div>
            <div class="mt-2">
               <input type="text" name="endereco" id="endereco" value=""placeholder="digite aqui " class="al rounded-lg ring-2 ring-gray-300 p-2 w-full" />
            </div>
          </div>
        </div>
        <div class="col-span-2">
          <div class="p-4 bg-purple-100 rounded-xl text-gray-800">
            <div id="campo4" class="font-bold text-x2 leading-none">Serie</div>
            <div class="mt-2">
               <input type="text" name="serie" id="serie" value="" class="al rounded-lg ring-2 ring-gray-300 p-2 w-full" />
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>  
      <div class="col-span-2 mt-4">
        <div id="campo_turno" class="p-4 bg-purple-100 rounded-xl text-gray-800">
          <div class="font-bold text-x2 leading-none">Turno</div>
            <div class="mt-2">
              <select type="text" name="turno" id="turno" placeholder="selecione o turno" value="" class="al rounded-lg ring-2 ring-gray-300 p-2 w-full" >
              <option value="">selecione ...</option>
              <option value="1">manha</option>
              <option value="2">tarde</option>
              <option value="3">noite</option>
              </select>
            </div>
          </div>
        </div>
        <div class="space-y-4">
            <div class="col-span-2 mt-4">
        </div>
      </div>
      <div id="campo_data_al" class="col-span-2">
        <div class="mt-4 p-4 bg-purple-100 rounded-xl text-gray-800">
          <div class="font-bold text-x2 leading-none">data do cadastro</div>
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
      <button id="salva_alu" name="salva_alu"style="background-color:rgb(34 197 94)"class="ml-60 mt-20 rounded text-white h-10 w-40 font-bold text-center ">salvar</button>
    </div>
  </div>
  
</div>
</div> 
</html>

  

    