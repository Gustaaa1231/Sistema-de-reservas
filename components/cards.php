<?php require "ButtonComponent.php";
function description($description) {
  echo "$description";
}
?>


<div class="listaPrincipal">
    <div class="caixaInicial">
        <div class="informacoes">
          <img class="box-image" src="../../image/tenis.jpg" alt="Tênis">
          <div style="display: flex; margin-top: 8px; flex-direction: column; gap: 8px;">
            <h3 style="font-family: ABeeZee, serif;" class="">Tênis</h3>
            <p style="font-family: ABeeZee, serif;" class="">Uma quadra de Tênis é um espaço retangular com piso liso, demarcado por linhas específicas como a de três pontos.</p>
          </div>
        </div>
    </div>
    <div class="caixaInicial">
        <div class="informacoes">
          <img class="box-image" src="../../image/volei.jpg" alt="Tênis">
          <div style="display: flex; margin-top: 8px; flex-direction: column; gap: 8px;">
            <h3 style="font-family: ABeeZee, serif;" class="">Vôlei</h3>
            <p style="font-family: ABeeZee, serif;" class="">Uma quadra de Vôlei é um espaço retangular com piso liso, demarcado por linhas específicas como a de três pontos.</p>
          </div>
        </div>
    </div>
    <div class="caixaInicial">
        <div class="informacoes">
          <img class="box-image" src="../../image/basquete.jpg" alt="Tênis">
          <div style="display: flex; margin-top: 8px; flex-direction: column; gap: 8px;">
            <h3 style="font-family: ABeeZee, serif;" class="">Basquete</h3>
            <p style="font-family: ABeeZee, serif;" class="">Uma quadra de basquete é um espaço retangular com piso liso, demarcado por linhas específicas como a de três pontos.</p>
          </div>
        </div>
    </div>
    <div class="caixaInicial">
        <div class="informacoes">
          <img class="box-image" src="../../image/futsal.jpg" alt="Tênis">
          <div style="display: flex; margin-top: 8px; flex-direction: column; gap: 8px;">
            <h3 style="font-family: ABeeZee, serif;" class="">Futsal</h3>
            <p style="font-family: ABeeZee, serif;" class="">Uma quadra de Futsal é um espaço retangular com piso liso, demarcado por linhas específicas como a de três pontos.</p>
          </div>
        </div>
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

.listaPrincipal{
  display: flex;
  justify-content: space-between;
  gap: 16px;
  padding: 10px;
  
  
}

@media (max-width: 480px){

  .listaPrincipal{
  display: flex;
  justify-content: space-between;
  gap: 16px;
  padding: 10px;
  flex-wrap: wrap;
  
  
}
}

.botao{
  width: 100%;
}

.informacao{
  display: flex;
  flex-direction: column;
  gap: 10px
}



.caixaInicial{
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  height: 490px;
  background-color: #fff;
  padding: 16px;
  border-radius: 10px;
  flex-wrap: nowrap;
  overflow: hidden; 
  -webkit-box-shadow: -1px 19px 29px -16px rgba(66, 68, 90, 1);
-moz-box-shadow: -1px 19px 29px -16px rgba(66, 68, 90, 1);
box-shadow: -1px 19px 29px -16px rgba(66, 68, 90, 1);
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
  font-size: 14px;
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
  padding: 20px;
  background: #fff;
  border-radius: 10px;
}


.box-image {
  width: 100%;
  height: 280px;
  object-fit: cover;
  object-position: 50% 20%;
  border-radius: 10px;
}

.title-flex {
  display: flex;
  justify-content: space-between;
  align-items: center;
  gap: 12px;
}

.box-title {
  border-bottom: 2px solid #2779B8;
  
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