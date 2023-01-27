function incrementar(id){
    var input = document.getElementById(id);
    input.value = parseInt(input.value) + 1;
    calcularTotal();
  }
  function decrementar(id){
    var input = document.getElementById(id);
    if(input.value > 0){
      input.value = parseInt(input.value) - 1;
      calcularTotal();
    }
  }
  function calcularTotal(){
    var inputs = document.getElementsByTagName('input');
    var total = 0;
    for(var i = 0; i < inputs.length; i++){
      if(inputs[i].type === 'number'){
        total += inputs[i].value * inputs[i].dataset.precio;
      }
    }
    document.getElementById('total').innerHTML = 'Total: $' + total;
  }