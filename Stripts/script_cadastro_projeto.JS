function moedaFormat() {
    let valorMoeda = document.getElementById('valor');

    let valor = valorMoeda.value;

    valor = valor.replace(/\D/g, "");

    if (valor === "") {
        valorMoeda.value = "";
        return;
    }

    valor = Number(valor).toLocaleString("pt-BR");

     valorMoeda.value = valor;
}

function moedaFormat2() {
  let valorMoeda2 = document.getElementById('doacao');

  let valor2 = valorMoeda2.value;

  valor2 = valor2.replace(/\D/g, "");

  if (valor2 === "") {
      valorMoeda2.value = "";
      return;
  }

  valor2 = Number(valor2).toLocaleString("pt-BR");

   valorMoeda2.value = valor2;
}

const steps = document.querySelectorAll('.step');

/*function Progresso(step) {
  steps.forEach((stepElement, index) => {
    if (index < step) {
      stepElement.classList.add('active');
    } else {
      stepElement.classList.remove('active');
    }
  });
}

updateProgress(2); */