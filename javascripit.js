 <script>
function abre_modal(cad_livro){
    if(cad_livro =='cad_livro'){
      document.getElementById('ExemploModalCentralizado').style.display = 'block';
      document.getElementById('forlivro').style.display = 'block';
      document.getElementById('forgenero').style.display = 'block';
      document.getElementById('forfaixa').style.display = 'block';
      document.getElementById('foraluno').style.display = 'none'; 
      document.getElementById('forturma').style.display = 'none';
      document.getElementById('forfone').style.display = 'none';
    }if(cad_livro =='cad_aluno'){
      $("#salva").removeClass("salva").addClass("cad");
      document.getElementById('ExemploModalCentralizado').style.display = 'block';
      document.getElementById('foraluno').style.display = 'none';
      document.getElementById('forgenero').style.display = 'none';
      document.getElementById('forfaixa').style.display = 'none';
      document.getElementById('foraluno').style.display = 'block'; 
      document.getElementById('forturma').style.display = 'block';
      document.getElementById('forfone').style.display = 'block';
      document.getElementById('forlivro').style.display = 'none';

    }

  
}
function fecha_modal(){
  document.getElementById('ExemploModalCentralizado').style.display = 'none';
};
//-------------ajax salva no banco-------------------------------------------------    
$(document).on('click','.salva', function(e,i){

var nome = $('#nome').val();
var genero = $('#genero').val();
var faixa = $('#faixa').val();
console.log(nome,genero);
   $.ajax({
           url: 'controller.php',
           type: 'POST',
           data:$('#form1').serialize()+'&acao='+'cadastrar' ,
       
           method : 'POST',
           dataType : 'html',
                scriptCharset:"UTF-8",
           
               
            
   }).done(function(result){
             console.log(result);
            })
});
//-----------------------------------------------------------
function excluir(reg) {
$(document).on('click','.excluir', function(e,i){

var nome = $('#nome').val();
var genero = $('#genero').val();
var cod_livro = $('#cod_livro').val();

   $.ajax({
           url: 'controller.php',
           type: 'POST',
           data:{cod_livro: reg, acao:'excluir'} ,
       
           method : 'POST',
           dataType : 'html',
                scriptCharset:"UTF-8",
           
               
            
   }).done(function(result){
             console.log(result);
            })
});
}

//-------------ajax salva no banco-------------------------------------------------    
$(document).on('click','.cad', function(e,i){
console.log('oi..........................................................');
var aluno = $('#aluno').val();
var fone = $('#fone').val();
var dnasc = $('#dnasc').val();
console.log(aluno , fone, dnasc);
   $.ajax({
           url: 'controller.php',
           type: 'POST',
           data:$('#form1').serialize()+'&acao='+'cadastra_aluno' ,
       
           method : 'POST',
           dataType : 'html',
                scriptCharset:"UTF-8",
           
               
            
   }).done(function(result){
             console.log(result);
            })
});
//-------------ajax salva emprestimo no banco-------------------------------------------------    
$(document).on('click','.emp', function(e,i){



   $.ajax({
           url: 'controller.php',
           type: 'POST',
           data:$('#form2').serialize()+'&acao='+'emprestimo' ,
       
           method : 'POST',
           dataType : 'html',
                scriptCharset:"UTF-8",
           
               
            
   }).done(function(result){
             console.log(result);
            })
});margin-rigth
function cria_rel(){
  window.location.href ='relatorio_conf_livros.php';
}
</script>