
    <div class="wrapper">
      <input type="radio" name="slide" id="one" checked>
      <input type="radio" name="slide" id="two">
      <input type="radio" name="slide" id="three">
      <input type="radio" name="slide" id="four">
      <input type="radio" name="slide" id="five">
      <div class="img img-1">
         <img src="../../image/image1.jpeg" alt="">
      </div>
      <div class="img img-2">
        <img src="../../image/image2.jpeg" alt="">
      </div>
      <div class="img img-3">
      <img src="../../image/image3.jpeg" alt="">
      </div>
      <div class="img img-4">
      <img src="../../image/image4.jpeg" alt="">
      </div>
      
      <div class="sliders">
        <label for="one" class="one"></label>
        <label for="two" class="two"></label>
        <label for="three" class="three"></label>
        <label for="four" class="four"></label>
      </div>
    </div>

<style>

  
  *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

.wrapper{
  position: relative;
  width:800px;
  height: 300px;
  border-radius: 20px;  /* Borda mais suave */
  box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1); /* Sombra */
  overflow: hidden;
  margin-top: 20px;
  
}
.wrapper .img {
  position: absolute;
  width: 100%;
  height: 100%;
  border-radius: 20px;  /* Mantém a borda */
}
.wrapper .img img {
  height: 100%;
  width: 100%;
  object-fit: cover;
  clip-path: circle(0% at 0% 100%);
  transition: all 0.7s;
}
#one:checked ~ .img-1 img{
  clip-path: circle(150% at 0% 100%);
}
#two:checked ~ .img-1 img,
#two:checked ~ .img-2 img{
  clip-path: circle(150% at 0% 100%);
}
#three:checked ~ .img-1 img,
#three:checked ~ .img-2 img,
#three:checked ~ .img-3 img{
  clip-path: circle(150% at 0% 100%);
}
#four:checked ~ .img-1 img,
#four:checked ~ .img-2 img,
#four:checked ~ .img-3 img,
#four:checked ~ .img-4 img{
  clip-path: circle(150% at 0% 100%);
}

.wrapper .sliders{
  position: absolute;
  bottom: 20px;
  left: 50%;
  transform: translateX(-50%);
  z-index: 99;
  display: flex;
}
.wrapper .sliders label{
  border: 2px solid #2779B8;
  width: 13px;
  height: 13px;
  margin: 0 3px;
  border-radius: 50%;
  cursor: pointer;
  transition: all 0.3s ease;
}
#one:checked ~ .sliders label.one,
#two:checked ~ .sliders label.two,
#three:checked ~ .sliders label.three,
#four:checked ~ .sliders label.four,
#five:checked ~ .sliders label.five{
  width: 35px;
  border-radius: 14px;
  background: #2779B8 ;
}
.sliders label:hover{
  background: rgb(142,197,252);
}
input[type="radio"]{
  display: none;
}

/* Responsividade para tablets */
@media (max-width: 768px) {
    .wrapper {
      width: 100%;
      height: auto;
    }

    .wrapper .img img {
      height: auto;
      width: 100%;
    }
  }

  /* Responsividade para smartphones */
  @media (max-width: 480px) {
    .wrapper {
      width: 100%;
      height: auto;
    }

    .wrapper .img img {
      height: auto;
      width: 100%;
    }
  }


</style>
