$(document).ready(function(){
  $('.data').mask('00/00/0000');
  $('.hora').mask('00:00:00');
  $('.dataHora').mask('00/00/0000 00:00:00');
  $('.cep').mask('00000-000');
  $('.telefone').mask('(00) 000.00.00.00');
  $('.cpf').mask('000.000.000-00', {reverse: false});
  $('.cnpj').mask('00.000.000/0000-00', {reverse: false});
 });