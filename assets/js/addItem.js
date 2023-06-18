let botoes = $('.botao');
let inputs = $('.campo');
let listas = $('.lista');
var capturado = "";

$(inputs[1]).keypress(function (e) { 
  if (e.which == 13) {
    doSomething(e, 1);
  }
});

$.each(botoes, (key,value) =>{
  $(value).click(function (e) { 
    doSomething(e, key);
  });
});

function doSomething(e, key){
  /* Retira o padrão do botão */
  e.preventDefault();

  const input = inputs[key];
  const lista = listas[key];

  /* Responsável por capturar o dado */
  envioDeDados(input, lista);

  const btnExclui = $('.btnExclui');

  /* Responsável por excluir o item */
  exclusaoItens(btnExclui);

}

function envioDeDados(input, lista) { 
  capturado = input.value;

  /* Verifica se dados podem ser adicionados */
  if(!capturado || capturado === "Selecione membros para assinatura!"){
    $(input).addClass("is-invalid").focus();
  }else{
    // Cria a div com os itens como inputs
    var arrayItems = ['div'];
    arrayLenght = arrayItems.length;

    if(input == inputs[0]){
      for(i = 0; i < arrayLenght; i++){
        let count = lista.childElementCount;
        $('<div class="input-group mb-2">'
            +'<input type="text" class="form-control" name="input[]" value="'+capturado+'" required>'
            +'<button class="btn btn-outline-danger btnExclui" type="button">Excluir</button>'
        +'</div>'
        ).appendTo(lista);
      }

      input.value = "";
    }else if(input == inputs[1]){
      let count = lista.childElementCount;
      for(i = 0; i < arrayLenght; i++){
        $('<div class="input-group mb-2">'
            +'<input type="text" class="form-control" name="ass[]" value="'+capturado+'" required>'
            +'<button class="btn btn-outline-danger btnExclui" type="button">Excluir</button>'
        +'</div>'
        ).appendTo(lista);
      }
    }

    input.focus();
  }
}

function exclusaoItens(btnExclui) {
  $.each(btnExclui, function (k,v) { 
    $(v).click((e) =>{
      botaoAtual = e.currentTarget;
      divBotao = botaoAtual.parentNode;
      divBotao.remove();
    });
  });
}

$('.botaoContinuar').click(function (e) { 
  e.preventDefault();
  
  if(listas[0].childElementCount > 0){
    $(".botaoContinuar").unbind('click').click();
  }else if(listas[0].childElementCount == 0){
    alert("Insira itens na pauta!");
  }
});

$('#visualizar').click(function (e) { 
  e.preventDefault();
  
  if(listas[1].childElementCount > 0){
    $("#visualizar").unbind('click').click();
  }else if(listas[1].childElementCount == 0){
    alert("Insira membros para assinar!");
    $(inputs[1]).focus();
  }
});

$.each(inputs, function (i, v) { 
  $(v).click(function () { 
    if($(v).hasClass("is-invalid")){
      $(v).removeClass("is-invalid");
    }
  });
  $(v).keyup(function (e) { 
    const campoInput = e.currentTarget;
    var wordsV = campoInput.value;
    if(wordsV.length > 1 && $(campoInput).hasClass("is-invalid")){
      $(campoInput).removeClass("is-invalid");
    }
  }); 
});
