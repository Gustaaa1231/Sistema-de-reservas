<?php require "ButtonComponent.php";
function description($description) {
  echo "$description";
}
?>

<div class="wrap">
  <div class="box">
    <div class="box-top">
      <img class="box-image" src="../../image/tenis.jpg" alt="Tênis">
      <div class="title-flex">
        <h3 class="box-title">Tênis</h3>
      </div>
      <p class="description"><?php description("A quadra de tênis é uma área retangular cruzada ao meio por uma rede baixa.
       Ela pode ser preparada e marcada para jogos de simples ou duplas. Existem diferentes tipos de quadras, como saibro, grama e piso duro.") ?></p>
    </div>
    <?php ButtonComponent("mostrarPopup()", "button" , "Reservar")?>
  </div>
  <div class="box">
    <div class="box-top">
      <img class="box-image" src="../../image/volei.jpg" alt="Girl Eating Pizza">
      <div class="title-flex">
        <h3 class="box-title">Vôlei</h3>
      </div>
      <p class="description"><?php description("A quadra de vôlei é retangular e está dividida por uma rede.
      Ela representa a área do jogo, que é disputado entre duas equipes composta por 6 jogadores cada.") ?></p>
    </div>
    <?php ButtonComponent("mostrarPopup()", "button", "Reservar")?>
  </div>
  <div class="box">
    <div class="box-top">
      <img class="box-image" src="../../image/futsal.jpg" alt="Girl Eating Pizza">
      <div class="title-flex">
        <h3 class="box-title">Futsal</h3>
      </div>
      <p class="description">Whipped steamed roast cream beans macchiato skinny grinder café. Iced grinder go mocha steamed grounds cultivar panna aroma.</p>
    </div>
    <?php ButtonComponent("mostrarPopup()", "button", "Reservar")?>
  </div>
  <div class="box">
    <div class="box-top">
      <img class="box-image" src="../../image/basquete.jpg" alt="Girl Eating Pizza">
      <div class="title-flex">
        <h3 class="box-title">Basquete</h3>
      </div>
      <p class="description">Whipped steamed roast cream beans macchiato skinny grinder café. Iced grinder go mocha steamed grounds cultivar panna aroma.</p>
    </div>
    <?php ButtonComponent("mostrarPopup()", "button", "Reservar")?>
  </div>
</div>

<style>
* {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
}

:root {
  --purple: hsl(240, 80%, 89%);
  --pink: hsl(0, 59%, 94%);
  --light-bg: hsl(204, 37%, 92%);
  --light-gray-bg: hsl(0, 0%, 94%);
  --white: hsl(0, 0%, 100%);
  --dark: hsl(0, 0%, 7%);
  --text-gray: hsl(0, 0%, 30%);
}

body {
  background: var(--light-bg);
  font-family: "Space Grotesk", sans-serif;
  color: var(--dark);
}

h3 {
  font-size: 1.5em;
  font-weight: 700;
}

p {
  font-size: 1em;
  line-height: 1.7;
  font-weight: 300;
  color: var(--text-gray);
}

.description {
  white-space: wrap;
}


.wrap {
  display: flex;
  justify-content: space-between;
  align-items: stretch;
  width: 100%;
  gap: 24px;
  padding: 24px;
  flex-wrap: wrap;
}

.box {
  display: flex;
  flex-direction: column;
  flex-basis: 100%;
  position: relative;
  padding: 24px;
  background: #fff;
}

.box-top {
  display: flex;
  flex-direction: column;
  position: relative;
  gap: 12px;
  margin-bottom: 36px;
}

.box-image {
  width: 100%;
  height: 360px;
  object-fit: cover;
  object-position: 50% 20%;
}

.title-flex {
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.box-title {
  border-bottom: 2px solid #2779B8;
  padding-left: 12px;
  display: flex;
  
  justify-content: center;
}

.user-follow-info {
  color: hsl(0, 0%, 60%);
}

/* .reserva-btn {
  text-decoration: none;
  color: inherit;
} */

/* .reserva-btn {
  display: block;
  justify-content: center;
  align-items: center;
  text-align: center;
  margin-top: auto;
  padding: 16px;
  color: #000;
  background: transparent;
  box-shadow: 0px 0px 0px 1px black inset;
  transition: background 0.4s ease;
} */

/* .reserva-btn:hover {
  background: var(--purple);
} */

.fill-one {
  background: var(--light-bg);
}

.fill-two {
  background: var(--pink);
}

/* RESPONSIVE QUERIES */

@media (min-width: 320px) {
  .title-flex {
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: start;
  }
  .user-follow-info {
    margin-top: 6px;
  }
}

@media (min-width: 460px) {
  .title-flex {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: start;
  }
  .user-follow-info {
    margin-top: 6px;
  }
}

@media (min-width: 640px) {
  .box {
    flex-basis: calc(50% - 12px);
  }
  .title-flex {
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: start;
  }
  .user-follow-info {
    margin-top: 6px;
  }
}

@media (min-width: 840px) {
  .title-flex {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: start;
  }
  .user-follow-info {
    margin-top: 6px;
  }
}

@media (min-width: 1024px) {
  .box {
    flex-basis: calc(33.3% - 16px);
  }
  .title-flex {
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    align-items: start;
  }
  .user-follow-info {
    margin-top: 6px;
  }
}

@media (min-width: 1100px) {
  .box {
    flex-basis: calc(25% - 18px);
  }
}


</style>