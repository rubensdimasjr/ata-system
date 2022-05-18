const inputs = retornaDados([], "input");
const assinaturas = retornaDados([], "ass");
const detalhes = localStorage.getItem("detalhes").split(" ");

function retornaDados([], tipoKey){
  var arr = [];
  var dataFilter;
  for(let i = 0; i < localStorage.length; i++){
    arr.push(localStorage.getItem(tipoKey+i));
    dataFilter = arr.filter((el) => {
      return el != null;
    });
  }
  return dataFilter; 
}

iteraItens(inputs, "input");

iteraItens(detalhes, "detalhes");

iteraItens(assinaturas, "assinatura");

function iteraItens(campos, name){
  $.each(campos, function (index, value) { 
    $('<input type="hidden" name="'+name+'[]" value="'+value+'">').appendTo($('form'));
  });
}

