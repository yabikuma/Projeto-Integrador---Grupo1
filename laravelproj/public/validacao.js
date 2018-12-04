let telefone1 = document.getElementById('telefone1');


telefone1.onchange = function (){
  this.value = this.value.replace(/\D/g,"");
};
