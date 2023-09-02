function chama_ini(){
    
    document.getElementById('mod_aluno').style.display = 'none';
    document.getElementById('mod_retirada').style.display = 'none';
    document.getElementById('mod_livro').style.display = 'none';
    document.getElementById('tag_livro').style.display = 'block';
    document.getElementById('tag_aluno').style.display = 'block';
    document.getElementById('tag_emp').style.display = 'block';
    document.getElementById('tag_liv_disp').style.display = 'block';
    document.getElementById('tag_liv_atra').style.display = 'block'; 
    document.getElementById('exibe_livros').style.display = 'none';
    document.getElementById('exibe_alunos').style.display = 'none';
    document.getElementById('exibe_emp').style.display = 'none';
    document.getElementById('exibe_liv_atrasado').style.display = 'none';
    document.getElementById('fecha_liv_atr').style.display = 'none';
    document.getElementById('exibe_liv_disp').style.display = 'none';
    
  }


//------------ exibe os livros -----------------------------------------------------------------
  function mostra_livros(){
    document.getElementById('exibe_livros').style.display = 'block';
    document.getElementById('tag_livro').style.display = 'none';
    document.getElementById('tag_aluno').style.display = 'none';
    document.getElementById('tag_emp').style.display = 'none';
    document.getElementById('tag_liv_disp').style.display = 'none';
    document.getElementById('tag_liv_atra').style.display = 'none';
    document.getElementById('exibe_liv_atrasado').style.display = 'none';
  }
//------------ fecha exibe livros --------------------------------------------------------------
  function fecha_exibe_livros(){
    document.getElementById('exibe_livros').style.display = 'none';
    document.getElementById('tag_livro').style.display = 'block';
    document.getElementById('tag_aluno').style.display = 'block';
    document.getElementById('tag_emp').style.display = 'block'; 
    document.getElementById('tag_liv_disp').style.display = 'block';
    document.getElementById('tag_liv_atra').style.display = 'block'; 
  }
//------------  exibe alunos --------------------------------------------------------------
function mostra_alunos(){
    document.getElementById('exibe_alunos').style.display = 'block';
    document.getElementById('tag_livro').style.display = 'none';
    document.getElementById('tag_aluno').style.display = 'none';
    document.getElementById('tag_emp').style.display = 'none';
    document.getElementById('tag_liv_disp').style.display = 'none'; 
    document.getElementById('tag_liv_atra').style.display = 'none'; 
    document.getElementById('exibe_liv_atrasado').style.display = 'none';
  }
//------------ fecha exibe alunos --------------------------------------------------------------
function fecha_exibe_aluno(){
    document.getElementById('exibe_alunos').style.display = 'none';
    document.getElementById('tag_livro').style.display = 'block';
    document.getElementById('tag_aluno').style.display = 'block';
    document.getElementById('tag_emp').style.display = 'block'; 
    document.getElementById('tag_liv_disp').style.display = 'block';
    document.getElementById('tag_liv_atra').style.display = 'block'; 

  }
//------------  exibe emprestimos --------------------------------------------------------------
function mostra_emp(){
    document.getElementById('exibe_emp').style.display = 'block';
    document.getElementById('tag_livro').style.display = 'none';
    document.getElementById('tag_aluno').style.display = 'none';
    document.getElementById('tag_emp').style.display = 'none'; 
    document.getElementById('tag_liv_disp').style.display = 'none'; 
    document.getElementById('tag_liv_atra').style.display = 'none';
  }  
//------------ fecha exibe emprestimos --------------------------------------------------------------
function fecha_exibe_emp(){
    document.getElementById('exibe_emp').style.display = 'none';
    document.getElementById('tag_livro').style.display = 'block';
    document.getElementById('tag_aluno').style.display = 'block';
    document.getElementById('tag_emp').style.display = 'block';
    document.getElementById('tag_liv_disp').style.display = 'block';
    document.getElementById('tag_liv_atra').style.display = 'block'; 

  } 

  
//------------  exibe livros disponiveis --------------------------------------------------------------
function mostra_livros_disp(){
    document.getElementById('exibe_emp').style.display = 'none';
    document.getElementById('tag_livro').style.display = 'none';
    document.getElementById('tag_aluno').style.display = 'none';
    document.getElementById('tag_emp').style.display = 'none'; 
    document.getElementById('tag_liv_disp').style.display = 'none';
    document.getElementById('tag_liv_atra').style.display = 'none';
    document.getElementById('exibe_liv_disp').style.display = 'block';

  }
//------------ fecha exibe emprestimos --------------------------------------------------------------
function fecha_exibe_liv_disp(){
    document.getElementById('exibe_liv_disp').style.display = 'none';
    document.getElementById('tag_livro').style.display = 'block';
    document.getElementById('tag_aluno').style.display = 'block';
    document.getElementById('tag_emp').style.display = 'block';
    document.getElementById('tag_liv_disp').style.display = 'block';
    document.getElementById('tag_liv_atra').style.display = 'block'; 

  } 

//------------  exibe livros em atraso --------------------------------------------------------------
function mostra_livros_atra(){
    document.getElementById('exibe_liv_atrasado').style.display = 'block';
    document.getElementById('tag_livro').style.display = 'none';
    document.getElementById('tag_aluno').style.display = 'none';
    document.getElementById('tag_emp').style.display = 'none';
    document.getElementById('tag_liv_atra').style.display = 'none';
    document.getElementById('tag_liv_disp').style.display = 'none';
    document.getElementById('tag_liv_atra').style.display = 'none'; 
    document.getElementById('fecha_liv_atr').style.display = 'block';
     
  } 
//------------fecha  exibe livros em atraso --------------------------------------------------------------
function fecha_exibe_liv_atra(){
    document.getElementById('exibe_liv_atrasado').style.display = 'none';
    document.getElementById('tag_livro').style.display = 'block';
    document.getElementById('tag_aluno').style.display = 'block';
    document.getElementById('tag_emp').style.display = 'block';
    document.getElementById('tag_liv_disp').style.display = 'block';
    document.getElementById('tag_liv_atra').style.display = 'block'; 
    document.getElementById('fecha_liv_atr').style.display = 'none';
  } 
    
//--------------------- abre modal pra registro de emprestimos ---------------------------------------------
function retirada(){
    
    $("input[name='data_ret']").val('');$("input[name='data_ent']").val('');
    $("input[name='livro']").val('');$("input[name='busca']").val('');
    $("input[name='aluno']").val('');$("input[name='acao']").val('');
    $("input[name='cod_livro']").val('');
    document.getElementById('mod_retirada').style.display = 'block';
    document.getElementById('nova_data').style.display = 'none';
    document.getElementById('exibe_emp').style.display = 'none';
    document.getElementById('tag_livro').style.display = 'none';
    document.getElementById('tag_aluno').style.display = 'none';
    document.getElementById('tag_emp').style.display = 'none'; 
    document.getElementById('tag_liv_disp').style.display = 'none';
    document.getElementById('tag_liv_atra').style.display = 'none'; 
    document.getElementById('exibe_liv_atrasado').style.display = 'none';
    document.getElementById('fecha_liv_atr').style.display = 'none';
    document.getElementById('exibe_alunos').style.display = 'none';
    document.getElementById('exibe_livros').style.display = 'none';
    document.getElementById('exibe_liv_disp').style.display = 'none';
    document.getElementById('mod_livro').style.display = 'none';
    document.getElementById('mod_aluno').style.display = 'none';
    

  }
//--------------------- fecha modal pra registro de emprestimos ---------------------------------------------
function fecha_retirada(){
   
    document.getElementById('mod_retirada').style.display = 'none';
    document.getElementById('tag_livro').style.display = 'block';
    document.getElementById('tag_aluno').style.display = 'block';
    document.getElementById('tag_emp').style.display = 'block'; 
    document.getElementById('tag_liv_disp').style.display = 'block';
    document.getElementById('tag_liv_atra').style.display = 'block'; 

}

function fecha_mod_livro(){
    document.getElementById('mod_livro').style.display = 'none';
    document.getElementById('fecha').style.display = 'none';
    document.getElementById('inicio').style.display = 'block';
    document.getElementById('tag_livro').style.display = 'block';
    document.getElementById('tag_aluno').style.display = 'block';
    document.getElementById('tag_emp').style.display = 'block';
    document.getElementById('tag_liv_disp').style.display = 'block'; 
    document.getElementById('tag_liv_atra').style.display = 'block'; 

} 
//------------------ fecha modal de cadastro/edita aluno -----------------------------
function fecha_mod_aluno(){
    document.getElementById('mod_aluno').style.display = 'none';
    document.getElementById('inicio').style.display = 'block';
    document.getElementById('tag_livro').style.display = 'block';
    document.getElementById('tag_aluno').style.display = 'block';
    document.getElementById('tag_emp').style.display = 'block';
    document.getElementById('tag_liv_disp').style.display = 'block';
    document.getElementById('tag_liv_atra').style.display = 'block'; 

}     
//----------------------- modal de edicao de livro --------------------------------------
function mod_edt_livro(cod,nome,genero,faixa,editora,autor,observacao){
    $("input[name='nome']").val('');$("input[name='genero']").val('');
    $("input[name='autor']").val('');$("input[name='editora']").val('');
    $("input[name='faixa']").val('');$("input[name='acao']").val('');
    $("input[name='cod_livro']").val('');
    document.getElementById('exibe_liv_atrasado').style.display = 'none';
    document.getElementById('titulo').innerHTML = 'Editar Livro';
    document.getElementById('exibe_livros').style.display = 'none';
    document.getElementById('campo_data').style.display = 'none';
    document.getElementById('mod_livro').style.display = 'block';
    document.getElementById('cod_livro').value = cod;
    document.getElementById('nome').value = nome;
    document.getElementById('genero').value = genero;
    document.getElementById('faixa').value = faixa; 
    document.getElementById('editora').value = editora;
    document.getElementById('autor').value = autor;
    document.getElementById('observacao').value = observacao;
    $("#salval").removeClass("salval").addClass("edita_livro");
    document.getElementById('mod_retirada').style.display = 'none';
    document.getElementById('inicio').style.display = 'block';
    document.getElementById('tag_livro').style.display = 'none';
    document.getElementById('tag_aluno').style.display = 'none';
    document.getElementById('tag_emp').style.display = 'none';
    document.getElementById('tag_liv_disp').style.display = 'none';
    document.getElementById('tag_liv_atra').style.display = 'none'; 
    document.getElementById('fecha_liv_atr').style.display = 'none';
    document.getElementById('fecha').style.display = 'block';
    document.getElementById('exibe_alunos').style.display = 'none';
    
    
}
//--------------------------------ação que edita o livro no banco -------------------------------------------------------------------------      
    
$(document).on('click', '.edita_livro', function (e, i) {
   document.getElementById('acao').value = 'edita_livro'; 
   
     $.ajax({
        url: 'controller.php',
        type: 'POST',
        data: $('#form').serialize() ,
        method: 'POST',
        dataType: 'html',
        scriptCharset: "UTF-8",
        success: function (retorno){
          //alert(retorno)
          if (retorno == 0){
            //alert('erro');
            return false;
          }
          if (retorno == 1){
            alert('Atualizado com sucesso!');
            window.location.href = 'index.php';
          }
        }
    })
});
//-----------------exclui livro------------------------------------------

function excluir_livro(reg) {
   document.getElementById('cod_livro').value = reg;
   if (confirm('Você tem certeza desta ação?')){
        $(document).on('click','.excluir', function(e,i){
            $.ajax({
            url: 'controller.php',
            type: 'POST',
            data: $('#form').serialize() + '&acao=' + 'excluir_livro',
            method : 'POST',
            dataType : 'html',
            scriptCharset:"UTF-8",
                success: function (retorno) {
                //alert(retorno)
                    if (retorno == 0) {
                      alert('erro');
                    return false;
                    }
                    if (retorno == 1) {
                      alert('Excluido com sucesso!');
                      window.location.href = 'index.php';
                    }
                }
            })
        
       });
    }else{
        document.getElementById('mod_livro').style.display = 'none';
    }

}

//-----------------exclui aluno ------------------------------------------

function excluir_aluno(reg) {
    document.getElementById('cod_aluno').value = reg;
    if (confirm('Você tem certeza?')){
        $(document).on('click','.excluir_alu', function(e,i){
            $.ajax({
                    url: 'controller.php',
                    type: 'POST',
                    data: $('#form').serialize() + '&acao=' + 'excluir_aluno',
                    method : 'POST',
                    dataType : 'html',
                    scriptCharset:"UTF-8",
                    success: function (retorno) {
                        //alert(retorno)
                        if (retorno == 0) {
                            alert('erro');
                            return false;
                        }
                        if (retorno == 1) {
                            alert('Excluido com sucesso!');
                            window.location.href = 'index.php';
                        }
                    }
            })
                    
        });
      }else{
        document.getElementById('mod_livro').style.display = 'none';
      }
}
//------------------------ abre modal que cadastra livro ------------------------------------------------    
function mod_cad_livro(){
    $("#edita").removeClass("salva").addClass("salval");
    $("input[name='nome']").val('');$("input[name='genero']").val('');
    $("input[name='autor']").val('');$("input[name='editora']").val('');
    $("input[name='faixa']").val('');$("input[name='acao']").val('');
    $("input[name='cod_livro']").val('');
    document.getElementById('mod_retirada').style.display = 'none';
    document.getElementById('mod_livro').style.display = 'block';
    document.getElementById('mod_aluno').style.display = 'none';
    document.getElementById('titulo').innerHTML = 'Cadastrar Livro';
    document.getElementById('titulo').style.display = 'block';
    document.getElementById('tag_livro').style.display = 'none';
    document.getElementById('tag_aluno').style.display = 'none';
    document.getElementById('tag_emp').style.display = 'none';
    document.getElementById('tag_liv_disp').style.display = 'none';
    document.getElementById('tag_liv_atra').style.display = 'none'; 
    document.getElementById('exibe_liv_atrasado').style.display = 'none';
    document.getElementById('fecha').style.display = 'block';
    document.getElementById('fecha_liv_atr').style.display = 'none';
    document.getElementById('exibe_alunos').style.display = 'none';
    document.getElementById('exibe_emp').style.display = 'none';
    document.getElementById('exibe_alunos').style.display = 'none';
    document.getElementById('exibe_livros').style.display = 'none';
    document.getElementById('exibe_liv_disp').style.display = 'none';
  
    
  }
//-------------ajax salva livro no banco-------------------------------------------------    
$(document).on('click','.salval', function(e,i){
 
    $.ajax({
            url: 'controller.php',
            type: 'POST',
            data: $('#form').serialize()+ '&acao=' + 'cadastrar' ,
            method : 'POST',
            dataType : 'html',
            scriptCharset:"UTF-8",
            success: function (retorno) {
                //alert(retorno)
                if (retorno == 0) {
                    //alert('erro');
                    return false;
                }
                if (retorno == 1) {
                    alert('Cadastrado com sucesso!');
                    window.location.href = 'index.php';
                }
            }
    })
 });
//------------------------------ abre modal que cadastra aluno -------------------------------------------------------  
function cadas_aluno(){
    $("input[name='nome_aluno']").val('');$("input[name='fone']").val('');
    $("input[name='endereco']").val('');$("input[name='turno']").val('');
    $("input[name='turma']").val('');$("input[name='acao']").val('');
    $("input[name='serie']").val('');
    $("#salva_alu").removeClass('salva_alu').addClass("salva_aluno");
    document.getElementById('titulo2').innerHTML = 'Cadastrar Aluno';
    document.getElementById('titulo2').style.display = "block";
    document.getElementById('mod_retirada').style.display = 'none';
    document.getElementById('mod_aluno').style.display = 'block';
    document.getElementById('inicio').style.display = 'block';
    document.getElementById('tag_livro').style.display = 'none';
    document.getElementById('tag_aluno').style.display = 'none';
    document.getElementById('tag_emp').style.display = 'none';
    document.getElementById('tag_liv_disp').style.display = 'none';
    document.getElementById('tag_liv_atra').style.display = 'none'; 
    document.getElementById('fechar').style.display = 'block'; 
    document.getElementById('exibe_liv_atrasado').style.display = 'none';
    document.getElementById('fecha_liv_atr').style.display = 'none';
    document.getElementById('mod_livro').style.display = 'none';
    document.getElementById('exibe_emp').style.display = 'none';
    document.getElementById('exibe_alunos').style.display = 'none';
    document.getElementById('exibe_livros').style.display = 'none';
    document.getElementById('exibe_liv_disp').style.display = 'none';
  
} 
//-------------ajax salva aluno no banco-------------------------------------------------    
$(document).on('click','.salva_aluno', function(e,i){
 document.getElementById('acao').value = 'cadastra_aluno'; 
    $.ajax({
            url: 'controller.php',
            type: 'POST',
            data: $('#form').serialize()+ '&acao=' + 'cadastra_aluno' ,
        
            method : 'POST',
            dataType : 'html',
            scriptCharset:"UTF-8",
            success: function (retorno) {
                //alert(retorno)
                if (retorno == 0) {
                    alert('erro');
                    return false;
                }
                if (retorno == 1) {
                    alert('Cadastrado com sucesso!');
                    window.location.href = 'index.php';
                }
            }
    })
});

//--------------------modal de edicao de aluno -----------------------------------------------------
function mod_edt_aluno(cod_aluno,nome,telefone,turno,endereco,serie,observacao){
    document.getElementById('titulo2').innerHTML = 'Editar Aluno';
    document.getElementById('titulo2').style.display = "block";
    document.getElementById('mod_aluno').style.display = 'block';
    document.getElementById('campo_data_al').style.display = 'none';
    $("#salva_alu").removeClass("salva_alu").addClass("edita_aluno");
    document.getElementById('mod_retirada').style.display = 'none';
    document.getElementById('exibe_alunos').style.display = 'none';
    document.getElementById('inicio').style.display = 'block';
    document.getElementById('tag_livro').style.display = 'none';
    document.getElementById('tag_aluno').style.display = 'none';
    document.getElementById('tag_emp').style.display = 'none';
    document.getElementById('tag_liv_disp').style.display = 'none';
    document.getElementById('fechar').style.display = 'block'; 
    document.getElementById('cod_aluno').value = cod_aluno;
    document.getElementById('nome_aluno').value = nome;
    document.getElementById('fone').value = telefone;
    document.getElementById('turno').value = turno;
    document.getElementById('endereco').value = endereco;
    document.getElementById('serie').value = serie;
    document.getElementById('observacao').value = observacao;
    document.getElementById('exibe_liv_atrasado').style.display = 'none';
    document.getElementById('fecha_liv_atr').style.display = 'none';
    document.getElementById('exibe_alunos').style.display = 'none';
    

}   
//------------------ abre modal edita data de entrega do livro -----------------------------------------------------
function edita_data_ent(cod_emp,aluno,livro,data_dev,data_ret){
    
    $("#salva_emp").removeClass("salva_emp").addClass("modf_data");
    $("input[name='nome']").val('');$("input[name='autor']").val('');
    $("input[name='acao']").val('');$("input[name='cod_livro']").val('');
    document.getElementById('nova_data').style.display = 'block';
    document.getElementById('mod_retirada').style.display = 'block';
    document.getElementById('exibe_emp').style.display = 'none';
    document.getElementById('tag_livro').style.display = 'none';
    document.getElementById('tag_aluno').style.display = 'none';
    document.getElementById('tag_emp').style.display = 'none'; 
    document.getElementById('tag_liv_disp').style.display = 'none';
    document.getElementById('tag_liv_atra').style.display = 'none'; 
    document.getElementById('exibe_liv_atrasado').style.display = 'none';
    document.getElementById('fecha_liv_atr').style.display = 'none';
    document.getElementById('exibe_alunos').style.display = 'none';
    document.getElementById('exibe_livros').style.display = 'none';
    document.getElementById('exibe_liv_disp').style.display = 'none';
    document.getElementById('mod_livro').style.display = 'none';
    document.getElementById('mod_aluno').style.display = 'none';
    document.getElementById('busca').value = livro;
    document.getElementById('aluno').value = aluno;
    document.getElementById('data_ret').value = data_ret;
    document.getElementById('data_ent').value = data_dev;
    document.getElementById('cod_emp').value = cod_emp;
    
   


}


//-------------------- altera data de entrega do livro ---------------------------------------
$(document).on('click','.modf_data', function(e,i){
    document.getElementById('acao').value = 'edita_data_dev';
    $.ajax({
            url: 'controller.php',
            type: 'POST',
            data: $('#form').serialize()+ '&acao=' + 'edita_data_dev' ,
        
            method : 'POST',
            dataType : 'html',
            scriptCharset:"UTF-8",
            success: function (retorno) {
                    //alert(retorno)
                if (retorno == 0) {
                    alert('erro');
                    return false;
                }
                if (retorno == 1) {
                    alert('Alterado com sucesso!');
                    window.location.href = 'index.php';
                }
            }
    })
});


//--------------------------------ação que edita aluno no banco -------------------------------------------------------------------------      
    
$(document).on('click', '.edita_aluno', function (e, i) {
    document.getElementById('acao').value = 'edita_aluno';   
    var aluno = $('#nome').val(); 
    var telefone = $('#genero').val(); 
    $.ajax({
        url: 'controller.php',
        type: 'POST',
        data: $('#form').serialize() + '&acao=' + 'edita_aluno',
        method: 'POST',
        dataType: 'html',
        scriptCharset: "UTF-8",
        success: function (retorno) {
            //alert(retorno)
            if (retorno == 0) {
                //alert('erro');
                return false;
            }
            if (retorno == 1) {
                alert('Alterado com sucesso!');
                window.location.href = 'index.php';
            }
        }
    })
});
 
//-------------ajax salva retirada no banco-------------------------------------------------
$(document).on('click', '.salva_emp', function (e, i) {
   document.getElementById('acao').value = 'emprestimo';
   $.ajax({
     url: 'controller.php',
     type: 'POST',
     data: $('#form').serialize(),
     method: 'POST',
     dataType: 'html',
     scriptCharset: "UTF-8",
        success: function (retorno) {
             alert(retorno)
            if (retorno == 0) {
                alert('erro');
                return false;
            }
            if (retorno == 1) {
                alert('Cadastrado com sucesso!');
                window.location.href = 'index.php';
            }
        }
    })
});	 
    
//-------------------- devolve o livro ---------------------------------------------------------
function devolve_livro(cod ,cod_livro) {
    var cod_emp = cod;
    var cod_livro = cod_livro;
    document.getElementById('acao').value = 'devolucao';

    $.ajax({
        url: 'controller.php',
        type: 'POST',
        data: {cod_emp:cod_emp ,cod_livro:cod_livro, acao:'devolucao'},
        method : 'POST',
        dataType : 'html',
        scriptCharset:"UTF-8",
        success: function (retorno) {
                //alert(retorno)
            if (retorno == 0) {
                alert('erro');
                return false;
            }
            if (retorno == 1) {
                alert('Devolvido com sucesso!');
                window.location.href = 'index.php';
            }
        }
    })
} 
//-------------------- envia sms a todos---------------------------------------------------------
function envia_sms_todos() {
    document.getElementById('acao').value = 'enviar_msg_todos';
    $.ajax({
        url: 'controller.php',
        type: 'POST',
        data: { acao:'enviar_msg_todos'},
        method : 'POST',
        dataType : 'html',
        scriptCharset:"UTF-8",
            success: function (retorno) {
                alert(retorno)
                if (retorno == 0) {
                    alert('erro');
                    return false;
                }
                if (retorno == 1) {
                    alert('Mensagens enviadas com sucesso!');
                    window.location.href = 'index.php';
                }
            }
    })
}

//-------------------- envia sms a todos---------------------------------------------------------
function envia_sms(cod) {
    var cod_emp = cod;
    document.getElementById('acao').value = 'enviar_msg';
    $.ajax({
        url: 'controller.php',
        type: 'POST',
        data: {cod_emp:cod ,acao:'enviar_msg'},
        method : 'POST',
        dataType : 'html',
        scriptCharset:"UTF-8",
            success: function (retorno) {
                //alert(retorno)
                if (retorno == 'erro') {
                    alert('houve um erro , tente novamente em alguns instantes');
                    return false;
                }
                if (retorno == 'ok') {
                    alert('Mensagem enviada com sucesso!');
                    window.location.href = 'index.php';
                }
           }
    })
}     