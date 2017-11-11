<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>An Anonymous Pen on CodePen</title>


  <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>

      <link rel="stylesheet" href="css/style.css">
<style>
.menu {
  position: fixed;
  top: 0;
  background: white;
  z-index: 1000;
}
.heading{
  font-size:40px;
}
.main{
  background:url('https://www.ilovepdf.com/images/06.jpg');
  height:100vh;
}
.centered{
  display:flex;
  justify-content:center;
  align-items:center;
  text-align:center;
  flex-direction:column;
}
.about{
  background:#0cf4ca;
  heght:100vh;
}
.strong-sides{
  height:50vh;
  padding:45px;
}
.glyphicon{
  font-size:50px;
}
.pics{
  height:100vh;
}
.contacts{
  height:100vh;
  background:#1ff40c;
}
</style>

</head>

<body>
  <div class="centered">
  <ul class="nav nav-pills menu">
  <li><a href="#">Home</a></li>
  <li><a href="#about">About me</a></li>
  <li><a href="#strong-sides">My strong sides</a></li>
  <li><a href="#pics">Pics</a></li>
  <li><a href="#contacts">Contacts</a></li>
  <li><?php echo date("l")?></li>
</ul>
</div>
<div id="main" class="centered main">
  <h1 class="heading">
    Welcome to my webpage!
  </h1>
</div>
<div id="about"class="centered about">
  <h2 class="about-heading">about me
  </h2>
  <iframe width="560" height="315" src="https://www.youtube.com/embed/dVXcQc8E3fw" frameborder="0" allowfullscreen></iframe>
</div>
<div id="strong-sides" class="container strong-sides">
  <div class="row">
  <div class="centered col-sm-4">
    <span class="glyphicon glyphicon-music" aria-hidden="true"></span>
  <h3 class="side-heading">I do music</h3>
    <p class="description">I love music and i play guitar</p>
  </div>
  <div class="centered col-sm-4">
    <span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
  <h3 class="side-heading">I love teaching</h3>
    <p class="description">I love to learn something new</p>
  </div>
  <div class="centered col-sm-4">
     <span class="glyphicon glyphicon-camera" aria-hidden="true"></span>
  <h3 class="side-heading">I enjoy travel</h3>
    <p class="description">I love travel and visit many different places</p>
  </div>
</div>
</div>
<div id="pics" class="pics">
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="http://blog.bestbuy.ca/wp-content/uploads/2016/12/Travel.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="http://cdn-image.travelandleisure.com/sites/default/files/styles/1600x1000/public/1500660066/travel-hacks-opener-TRAVELHACK0717.jpg?itok=HgP9J2B_" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<div id="contacts" class="centered contacts">
  <h3>
    Here you can find me!
  </h3>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d143173.89062993828!2d26.397133785348206!3d55.895762997381986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46c29430ff01c9db%3A0x400cfcd68f307f0!2z0JTQsNGD0LPQsNCy0L_QuNC70YE!5e0!3m2!1sru!2slv!4v1510406201627" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>


</body>
</html>
