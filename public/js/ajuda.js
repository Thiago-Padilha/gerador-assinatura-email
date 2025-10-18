// Home Blade Php
    document.getElementById('btn-ajuda-home').addEventListener('click', function() {
    document.getElementById('caixa-ajuda-home').style.display = 'block';
   });
   
   document.getElementById('btn-fechar-home').addEventListener('click', function() {
    document.getElementById('caixa-ajuda-home').style.display = 'none';
   });
   
// Assinatura Blade Php
    document.getElementById('btn-ajuda2-assinatura').addEventListener('click', function() {
    document.getElementById('caixa-ajuda2-assinatura').style.display = 'block';
   });
   
   document.getElementById('btn-fechar2-assinatura').addEventListener('click', function(event) {
    event.preventDefault();
    document.getElementById('caixa-ajuda2-assinatura').style.display = 'none';
   });
   
   