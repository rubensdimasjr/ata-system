
$('#form1').on( "submit", function( event ) {
  event.preventDefault();

  $(inputs[1]).prop("disabled", false);
  $(botoes[1]).prop("disabled", false);
  $(visualizar).prop("disabled", false);

  $(inputs[1]).focus();

  $(visualizar).click(function (e) { 
    if(!listas[1].childElementCount <= 0){
      $('#form1').unbind("submit").submit();
    }
  });

});

/* $("#form2").on("submit", (e) => {

  e.preventDefault();

  let getForm1 = $("#form1").serialize();
  let getForm2 = $("#form2").serialize();
  let data = getForm1+ '&' +getForm2;

  const myArray = data.split("&");

  const objectificar = (string) => string.split(' ').reduce((obj, str) => {
    const [key, value] = str.split('=');
    return {
      ...obj,
      [key]: value
    }
  }, {});

  const dataComObjetos = myArray.map(objectificar);

  dataComObjetos.forEach((objeto) => {
    for(var chave in objeto){
      console.log("Chave: " + chave + "; Valor: " + objeto[chave]);
    }
  });

  var itens = JSON.stringify(dataComObjetos);
  var parsed = JSON.parse(itens);

/*   console.log(parsed); */

 /*  if(localStorage.token !== null) {
    localStorage.clear();
  }

  parsed.forEach((objeto) => {
    for(var chave in objeto){
      console.log("Chave: " + chave + "; Valor: " + objeto[chave]);
      localStorage.setItem(chave, objeto[chave]);
    }
  });
  
  window.location.href = "./viewAta.php"; 
})
*/