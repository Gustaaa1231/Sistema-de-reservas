<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@0;1&family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Varela+Round&display=swap" rel="stylesheet">

  <title>Document</title>
</head>
<body>
  
  
  
  <div class="sidebar close">
    <div style="display: flex; align-items: center; justify-content: center;" class="logo-details">
      
    <span style="font-family: ABeeZee, serif;" class="logo_name">Playspace</span>
  </div>
  <ul class="nav-links">
    <li>
      <a href="#">
        <i class='bx bx-grid-alt' ></i>
        <span style="font-family: ABeeZee, serif;" class="link_name">Home</span>
      </a>
      <ul class="sub-menu blank">
        <li><a style="font-family: ABeeZee, serif;" class="link_name" href="#">Home</a></li>
      </ul>
    </li>
    <li>
      <div class="iocn-link">
        <a href="#">
          <i class='bx bx-collection' ></i>
          <span class="link_name">Reservas</span>
        </a>
        <i class='bx bxs-chevron-down arrow' ></i>
      </div>
      <ul class="sub-menu">
        <li><a class="link_name" href="../../pages/reserva/index.php">Reservas</a></li>
          <li><a href="#">Minhas Reservas</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-plug' ></i>
            <span class="link_name">Suporte</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Suporte</a></li>
          <li><a href="../../pages/Fale-Conosco/index.php">Fale Conosco</a></li>
          <li><a href="#">Central de Atendimento</a></li>
          <li><a href="#">Poítica de Privacidade</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-cog' ></i>
          <span class="link_name">Configurações</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Configurações</a></li>
        </ul>
      </li>
      <li>
    
  </li>
</ul>
</div>



  <section class="home-section">
    <div class="home-content">
      <i style="color:#2779B8;" class='bx bx-menu' ></i>
    </div>  
      <div style="display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        width: 100%; " class="sla">
  
        <div class="dentro" style="display: flex; align-items: center; ">
          <?php
            include "slider.php";
            ?>
        </div>
        <div style="display:flex; padding-left: 10px; padding-right: 10px; justify-content:center; align-items:center;">
          <?php
          include "cards.php"
          ?>
        </div>
      </div>
      <div style="display: flex; height: 100%;">
        <div style="height: 100%;">
          <?php
              include "sidebar2.php"
              ?>
        </div>
      </div>
  </section>
      
    </div>
    
      
    

</body>
</html>
  
  <script>
    let arrow = document.querySelectorAll(".arrow");
  for (var i = 0; i < arrow.length; i++) {
    arrow[i].addEventListener("click", (e)=>{
      let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
      arrowParent.classList.toggle("showMenu");
    });
  }
  let sidebar = document.querySelector(".sidebar");
  let sidebarBtn = document.querySelector(".bx-menu");
  console.log(sidebarBtn);
  sidebarBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("close");
  });
  </script>


<style>

  body{
    background-color: #E4E9F7;
  }
/* //div sla */
@media (max-width: 1024px) {
  .sla {
    padding: 15px;
  }
  .sla > div {
    width: 90%;
  }
}

/* Para smartphones em modo paisagem */
@media (max-width: 768px) {
  .sla {
    padding: 10px;
  }
  .sla > div {
    width: 100%;
  }
}

/* Para smartphones em modo retrato */
@media (max-width: 480px) {
  .sla {
    padding: 20px;
  }

  .dentro{
    padding: 20px;
  }
  .sla > div {
    flex-direction: column;
    width: 100%;
  }
  .sla div:last-child {
    margin-top: 20px;
  }
}



@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
.sidebar{
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 260px;
  background:white;
  border-right: 1px solid #2779B8;
  z-index: 100;
  transition: all 0.5s ease;
}
.sidebar.close{
  width: 78px;
}
.sidebar .logo-details{
  height: 60px;
  width: 100%;
  display: flex;
  align-items: center;
}
.sidebar .logo-details i{
  font-size: 30px;
  color: #2779B8;
  height: 50px;
  min-width: 78px;
  text-align: center;
  line-height: 50px;
}
.sidebar .logo-details .logo_name{
  font-size: 22px;
  font-family: "ABeeZee, serif";
  color: #2779B8;
  font-weight: 600;
  transition: 0.3s ease;
  transition-delay: 0.1s;
}
.sidebar.close .logo-details .logo_name{
  transition-delay: 0s;
  opacity: 0;
  pointer-events: none;
}
.sidebar .nav-links{
  height: 100%;
  padding: 30px 0 150px 0;
  overflow: auto;
}
.sidebar.close .nav-links{
  overflow: visible;
}
.sidebar .nav-links::-webkit-scrollbar{
  display: none;
}
.sidebar .nav-links li{
  position: relative;
  list-style: none;
  transition: all 0.4s ease;
}
.sidebar .nav-links li:hover{
  background: #BAD9FF;
}
.sidebar .nav-links li .iocn-link{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.sidebar.close .nav-links li .iocn-link{
  display: block
}
.sidebar .nav-links li i{
  height: 50px;
  min-width: 78px;
  text-align: center;
  line-height: 50px;
  color: #2779B8;
  font-size: 20px;
  cursor: pointer;
  transition: all 0.3s ease;
}
.sidebar .nav-links li.showMenu i.arrow{
  transform: rotate(-180deg);
}
.sidebar.close .nav-links i.arrow{
  display: none;
}
.sidebar .nav-links li a{
  display: flex;
  align-items: center;
  text-decoration: none;
}
.sidebar .nav-links li a .link_name{
  font-size: 18px;
  font-weight: 400;
  color: #2779B8;
  transition: all 0.4s ease;
}
.sidebar.close .nav-links li a .link_name{
  opacity: 0;
  pointer-events: none;
}
.sidebar .nav-links li .sub-menu{
  padding: 6px 6px 14px 80px;
  margin-top: -10px;
  background: white;
  display: none;
}
.sidebar .nav-links li.showMenu .sub-menu{
  display: block;
}
.sidebar .nav-links li .sub-menu a{
  color: #2779B8;
  font-size: 15px;
  padding: 5px 0;
  white-space: nowrap;
  opacity: 0.6;
  transition: all 0.3s ease;
}
.sidebar .nav-links li .sub-menu a:hover{
  opacity: 1;
}
.sidebar.close .nav-links li .sub-menu{
  position: absolute;
  left: 100%;
  top: -10px;
  margin-top: 0;
  padding: 10px 20px;
  border-radius: 0 6px 6px 0;
  opacity: 0;
  display: block;
  pointer-events: none;
  transition: 0s;
}
.sidebar.close .nav-links li:hover .sub-menu{
  top: 0;
  opacity: 1;
  pointer-events: auto;
  transition: all 0.4s ease;
}
.sidebar .nav-links li .sub-menu .link_name{
  display: none;
}
.sidebar.close .nav-links li .sub-menu .link_name{
  font-size: 18px;
  opacity: 1;
  display: block;
}
.sidebar .nav-links li .sub-menu.blank{
  opacity: 1;
  pointer-events: auto;
  padding: 3px 20px 6px 16px;
  opacity: 0;
  pointer-events: none;
}
.sidebar .nav-links li:hover .sub-menu.blank{
  top: 50%;
  transform: translateY(-50%);
}
.sidebar .profile-details{
  position: fixed;
  bottom: 0;
  width: 260px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  background: #1d1b31;
  padding: 12px 0;
  transition: all 0.5s ease;
}
.sidebar.close .profile-details{
  background: none;
}
.sidebar.close .profile-details{
  width: 78px;
}
.sidebar .profile-details .profile-content{
  display: flex;
  align-items: center;
}
.sidebar .profile-details img{
  height: 52px;
  width: 52px;
  object-fit: cover;
  border-radius: 16px;
  margin: 0 14px 0 12px;
  background: #1d1b31;
  transition: all 0.5s ease;
}
.sidebar.close .profile-details img{
  padding: 10px;
}
.sidebar .profile-details .profile_name,
.sidebar .profile-details .job{
  color: #2779B8;
  font-size: 18px;
  font-weight: 500;
  white-space: nowrap;
}
.sidebar.close .profile-details i,
.sidebar.close .profile-details .profile_name,
.sidebar.close .profile-details .job{
  display: none;
}
.sidebar .profile-details .job{
  font-size: 12px;
}
.home-section{
  display: flex;
  position: relative;
  height: 100%;
  left: 260px;
  width: calc(100% - 260px);
  transition: all 0.5s ease;
}
.sidebar.close ~ .home-section{
  left: 78px;
  width: calc(100% - 78px);
}
.home-section .home-content{
  height: 0.1px;
  display: flex;
  justify-content: center;
  position: fixed;
}
.home-section .home-content .bx-menu,
.home-section .home-content .text{
  color: #2779B8;
  font-size: 35px;
}
.home-section .home-content .bx-menu{
  margin: 0 15px;
  cursor: pointer;
}
.home-section .home-content .text{
  font-size: 26px;
  font-weight: 600;
}
@media (max-width: 400px) {
  .sidebar.close .nav-links li .sub-menu{
    display: none;
  }
  .sidebar{
    width: 78px;
  }
  .sidebar.close{
    width: 0;
  }
  .home-section{
    left: 78px;
    width: calc(100% - 78px);
    z-index: 100;
  }
  .sidebar.close ~ .home-section{
    width: 100%;
    left: 0;
  }
}


</style>