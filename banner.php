<html>
<head>
<title></title>
</head>

<style>
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 60%;
	  height:30%;
      margin: auto;
  }
  </style>

<body>
	<div class="container">
  <br>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
 <!--   <li data-target="#myCarousel" data-slide-to="2"></li> -->
  </ol>

  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/poster/poster1.jpg" alt="Hunar Hai To Kadar Hai" width="600" height="300">
   <div class="carousel-caption">
       <h3>FUELING THE FUTURE</h3>
      <!--  <p>Everyone has a chance to learn, improve, and build up their skills. </p> -->
      </div> 
    </div>

    <div class="item">
      <img src="images/poster/poster2.jpg" alt="From expert" width="600" height="300">
  <!--  <div class="carousel-caption">
        <h3>	MR. S. RAMADORAI</h3>
        <p>	Empowering youth with the right skills can define the future of the country.</p>
      </div> -->
    </div>
<!--
    <div class="item">
      <img src="images/3.jpg" alt="Flower" width="600" height="300">
      <div class="carousel-caption">
        <h3>Smart City</h3>
        <p>100 New Smart Cities.</p>
      </div>
    </div>

 -->
  </div>

  
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>


<br>
</body>
</html>