<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Ejercicio Bootstrap</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style/principal.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

<body>
<div class="container">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="#" class="logo"><img src="imagenes/logo.jpg" alt="Logo"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Portafolio</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Blog</a></li>
        <li class="buscar"><a href="#">Search</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  </div>
  
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="imagenes\paisaje0.jpg" alt="paisaje4">
      <div class="carousel-caption">
       <h1>Good Design Is Good Business</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ultricies sagittis magnaa commodo. 
          Ut eget eros mauris, ut cursus urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p>
        <div class="btn_learn"> <a class="more">LEARN MORE</a> </div>
      </div>
    </div>
    <div class="item">
      <img src="imagenes\paisaje0.jpg" alt="paisaje4">
      <div class="carousel-caption">
       <h1>Good Design Is Good Business</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ultricies sagittis magnaa commodo. 
          Ut eget eros mauris, ut cursus urna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p>
        <div class="btn_learn"> <a class="more">LEARN MORE</a> </div>
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



  <div class="container">
  <div class="row services">
      <div class="our_services">OUR SERVICES</div>
      <div class="content_services">
        <div class="col-md-3 service web">
          <div class="imagen"> <img src="imagenes/laptop.jpg" alt=""> </div>
          <div class="text_service">
            <h3>Web Design</h3>
            <p>Lorem ipsum dolor sit amet, 
              consectetur adipiscing elit. 
              Mauris nec ipsum at lacus 
              commodo suscipit. <a href="" class="details">Details...</a></p>
          </div>
        </div>
        <div class="col-md-3 service search">
          <div class="imagen"> <img src="imagenes/search.jpg" alt=""> </div>
          <div class="text_service">
            <h3>Search Optimization</h3>
            <p>Lorem ipsum dolor sit amet, 
              consectetur adipiscing elit. 
              Mauris nec ipsum at lacus 
              commodo suscipit. <a href="" class="details">Details...</a></p>
          </div>
        </div>
        <div class="col-md-3 service online">
          <div class="imagen"> <img src="imagenes/shop.jpg" alt=""> </div>
          <div class="text_service">
            <h3>Online Shop</h3>
            <p>Lorem ipsum dolor sit amet, 
              consectetur adipiscing elit. 
              Mauris nec ipsum at lacus 
              commodo suscipit. <a href="" class="details">Details...</a></p>
          </div>
        </div>
        <div class="col-md-3 service social">
          <div class="imagen"> <img src="imagenes/social.jpg" alt=""> </div>
          <div class="text_service">
            <h3>Social Media</h3>
            <p>Lorem ipsum dolor sit amet, 
              consectetur adipiscing elit. 
              Mauris nec ipsum at lacus 
              commodo suscipit. <a href="" class="details">Details...</a></p>
          </div>
        </div>
      </div>
      <div class="clr"></div>
  </div>
  </div>
  <div class="row portafolio">
<div class="container">
      <div class="port_title">
        <div class="port_text">
          <h2>Our Portfolio Awesome</h2>
        </div>
        <div class="port_more"><a href="#">More Works</a></div>
        <div class="clr"></div>
      </div>
      <div class="content_port">
        <div class="col-md-4 port port_f"> <img src="imagenes/port_f.jpg" alt="">
          <div class="port_text">
            <h3>Lorem Ipsum Dolar Sit Amet</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nec ipsum at lacus commodo suscipit.</p>
          </div>
        </div>
        <div class="col-md-4 port port_s"> <img src="imagenes/port_s.jpg" alt="">
          <div class="port_text">
            <h3>Lorem Ipsum</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscinglit.</p>
          </div>
        </div>
        <div class="col-md-4 port port_t"> <img src="imagenes/port_t.jpg" alt="">
          <div class="port_text">
            <h3>Ipsum Amet Dolar Sit </h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elitmauris nec ipsum at lacus commodo suscipit.</p>
          </div>
        </div>
      </div>
      </div>
  </div>
  <div class="offer">
    <div class="center">
      <div class="offer_intro">
        <h2>WHAT WE OFFER</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ultricies sagittis magnaa commodo. Ut eget eros mauris, ut cursus urna. 
          Vestibulum ante ipsum primis in faucibus orci luctus et ultrices.</p>
      </div>
      <div class="content_offer">
        <div class="off web">
          <h3>Web Design</h3>
          <p>Lorem ipsum dolor sit amet, consect etur adipiscing elit. Ut ultricies sagit tism agnaa commodo. Ut eget eros mauris, ut cursus urna vestibuluman ipsum primis in faucibus orci luctuset.</p>
          <a href="">Details</a> </div>
        <div class="off search">
          <h3>Search Optimization</h3>
          <p>Lorem ipsum dolor sit amet, consect  etur adipiscing elit. Ut ultricies sagit tism agnaa commodo. Ut eget eros mauris, ut cursus urna vestibuluman ipsum primis in faucibus <a href="">Details...</a></p>
        </div>
        <div class="off shop">
          <h3>Online Shop</h3>
          <p>Lorem ipsum dolor sit amet, consect etur adipiscing elit. Ut ultricies sagittism agnaa commodo. Ut eget eros mauris, ut cursus urna vestibuluman ipsum primis in faucibus orci luctuset.</p>
          <a href="">Details</a> </div>
        <div class="off social">
          <h3>Social Media</h3>
          <p>Lorem ipsum dolor sit amet, consect etur adipiscing elit. Ut ultricies sagit tism agnaa commodo. Ut eget eros mauris, ut cursus urna vestibuluman ipsum primis in faucibus orci luctuset. <a href="#"> >>>> </a></p>
        </div>
        <div class="clr"></div>
      </div>
    </div>
  </div>
  <div class="testimonial">
    <div class="center">
      <div class="test_intro">
        <h2>TESTIMONIALS</h2>
        <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit mauris necip at lacus commodo suscipit praesent sollicitudin enim vel mirhon”</p>
      </div>
      <div class="test_persons">
        <p>Jon Doe / CEO of LoremIpsum</p>
        <ul>
          <li> <img src="imagenes/persona1.jpg" alt=""> </li>
          <li class="active"> <img src="imagenes/persona2.jpg" alt=""> </li>
          <li><img src="imagenes/persona3.jpg" alt=""> </li>
        </ul>
        <div class="clr"></div>
      </div>
    </div>
  </div>
  <div class="foot">
    <div class="center">
    	<div class="foo tw">
      <h2>TWITTER FEEDS</h2>
      <ul>
        <li>
          <p>Check out this great theme item</p>
          <a href="">http://tadjalskfj.com</a>
          <p>2 weeks ago</p>
        </li>
        <li>
          <p>Check out this great theme item for</p>
          <a href="">http://tadjalskfj.com</a>
          <p>2 weeks ago</p>
        </li>
        <li>
          <p>Check out this great theme item for you</p>
          <a href="">http://tadjalskfj.com</a>
          <p>2 weeks ago</p>
        </li>
      </ul>
    </div>
    <div class="foo nw">
      <div class="nw_text">
        <h2>NEWSLETTER</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ultricies sagittis magna a comm. Ut eget eros mauris, ut cursus urna.</p>
      </div>
      <form>
        <div class="inputs">
          <label>Your Email Address</label>
          <input type="text" name="email">
        </div>
        <div class="submit">
          <input type="submit" name="submit" value="Sign Up">
        </div>
      </form>
    </div>
    <div class="foo pro">
      <h2>RECENT PROJECTS</h2>
      <ul>
        <li>
          <div class="image"> <img src="imagenes/pro1.jpg" alt=""> </div>
          <div class="pro_text">
            <p>Sketchy Business Card</p>
            <a href="">http://tadjalskfj.com</a>
            <p>2 weeks ago</p>
          </div>
          <div class="clr"></div>
        </li>
        <li>
          <div class="image"> <img src="imagenes/pro2.jpg" alt=""> </div>
          <div class="pro_text">
            <p>Message Boards in Nature</p>
            <a href="">http://tadjalskfj.com</a>
            <p>2 weeks ago</p>
          </div>
          <div class="clr"></div>
        </li>
        <li>
          <div class="image"> <img src="imagenes/pro3.jpg" alt=""> </div>
          <div class="pro_text">
            <p>Website Design Kit</p>
            <a href="">http://tadjalskfj.com</a>
            <p>2 weeks ago</p>
          </div>
          <div class="clr"></div>
        </li>
      </ul>
    </div>
    <div class="foo con">
      <h2>CONTACT</h2>
      <ul>
        <li>
          <div class="image"> <img src="imagenes/phone.jpg" alt=""> </div>
          <div class="con_text">
            <p> 1 - 000 - 000-0000 <br>
              1 - 000 - 000-0000 </p>
          </div>
          <div class="clr"></div>
        </li>
        <li>
          <div class="image"> <img src="imagenes/chat.jpg" alt=""> </div>
          <div class="con_text">
            <p> 1 - 000 - 000-0000 <br>
              1 - 000 - 000-0000 </p>
          </div>
          <div class="clr"></div>
        </li>
        <li>
          <div class="image"> <img src="imagenes/mail.jpg" alt=""> </div>
          <div class="con_text">
            <p> abcdefg@hijs.dfh<br>
              fjashfaf@jkfs.ckd </p>
          </div>
          <div class="clr"></div>
        </li>
      </ul>
    </div>
    <div class="clr"></div>
    </div>
  </div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>
