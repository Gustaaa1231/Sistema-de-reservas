
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
        <label for="five" class="five"></label>
      </div>
    </div>

<style>
  *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body{
  min-height: 100vh;
  background: -webkit-linear-gradient(136deg, rgb(224,195,252) 0%, rgb(142,197,252) 100%);
}
.wrapper{
  position: relative;
  width: 900px;
  height: 500px;
  border-radius: 20px;  /* Borda mais suave */
  box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1); /* Sombra */
  overflow: hidden;
  margin: 100px;
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
#five:checked ~ .img-1 img,
#five:checked ~ .img-2 img,
#five:checked ~ .img-3 img,
#five:checked ~ .img-4 img,
#five:checked ~ .img-5 img{
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
  border: 2px solid rgb(142,197,252);
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
  background: rgb(142,197,252);
}
.sliders label:hover{
  background: rgb(142,197,252);
}
input[type="radio"]{
  display: none;
}
</style>
