<?php
// Array de carros
$carros = ["Audi", "BMW", "Citroen", "Ford", "Honda", "Jaguar", "Land Rover", "Mercedes", "Mini", "Nissan", "Toyota", "Volvo"];
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@0;1&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Varela+Round&display=swap" rel="stylesheet">
<style>
/* O container deve ser posicionado como relativo: */
.custom-select {
  position: relative;
  font-family: "ABeeZee", serif;
}

.custom-select select {
  display: none; /* Esconder o elemento SELECT original */
}

.select-selected {
  background-color: white;
  border: 1px solid black;
}

/* Estilo da seta dentro do elemento select: */
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px  solid  transparent;
  border-color: black transparent transparent transparent;
}

/* Apontar a seta para cima quando a caixa select estiver aberta (ativa): */
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/* Estilo dos itens (opções), incluindo o item selecionado: */
.select-items div, .select-selected {
  color: black;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}

/* Estilo dos itens (opções): */
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/* Esconder os itens quando a caixa select estiver fechada: */
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
</style>
</head>     

<body>

<h2>Custom Select</h2>

<!-- Envolva a caixa select com um elemento DIV com a classe "custom-select". Lembre-se de definir a largura: -->
<div class="custom-select" style="width:200px;">
  <select>
    <option value="0">Select car:</option>
    <?php
    // Gerar opções dinamicamente a partir do array de carros
    foreach ($carros as $index => $carro) {
        echo "<option value=\"$index\">$carro</option>";
    }
    ?>
  </select>
</div>

<script>
var x, i, j, l, ll, selElmnt, a, b, c;
/* Procurar qualquer elemento com a classe "custom-select": */
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /* Para cada elemento, criar um novo DIV que atuará como o item selecionado: */
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /* Para cada elemento, criar um novo DIV que conterá a lista de opções: */
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /* Para cada opção no elemento select original,
    criar um novo DIV que atuará como um item da opção: */
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /* Quando um item é clicado, atualiza a caixa select original,
        e o item selecionado: */
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /* Quando a caixa select é clicada, fecha qualquer outra caixa select,
      e abre/fecha a caixa select atual: */
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /* Uma função que fechará todas as caixas select no documento,
  exceto a caixa select atual: */
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i);
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/* Se o usuário clicar em qualquer lugar fora da caixa select,
então fechará todas as caixas select: */
document.addEventListener("click", closeAllSelect);
</script>

</body>
</html>
