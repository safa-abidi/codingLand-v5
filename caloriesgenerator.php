<?php
$k="";
$nbrcal="";
if ($_SERVER['REQUEST_METHOD']=='POST')
{
    $k=$_POST['calcul'];
    $nbrcal=0;
    for ($i=0;$i<strlen($k);$i++)
    {
        $s=0;

        if ($k[$i] == ' ')  
        {
           $char="";
            for ($b=$s;$b<$i;$b++)
                $char.=$k[$b];
            $s=$i+1;
            if ($char == "burger")
                $nbrcal+=295 ;
            else if ($char == "sandwich")
                $nbrcal+=233;
            else if ($char == "frites")
                $nbrcal+=312;
            else if ($char == "soda")
                $nbrcal+=41;
            else if ($char == "meat")
                $nbrcal+=143 ;
        }
            
            
    }
    $char="";
     for ($b=$s;$b<strlen($k);$b++)
                $char.=$k[$b];
            $s=$i+1;
            if ($char == "burger")
                $nbrcal=$nbrcal+295 ;
            else if ($char == "sandwich")
                $nbrcal+=233;
            else if ($char == "frites")
                $nbrcal+=312;
            else if ($char == "soda")
                $nbrcal+=41;
            else if ($char == "meat")
                $nbrcal+=143 ;
        }
    


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Medilab Free Bootstrap HTML5 Template</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <!--banner-->
  
   
      <nav class="navbar navbar-default navbar-fixed-top bg-color2 ">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
              <a class="navbar-brand" href="#"><img src="img/logo.png" class="img-responsive" style="width: 140px; margin-top: -16px;"></a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
             <ul class="nav navbar-nav">
                  <li><a href="sign%20in.html" class="btn">Sign in</a></li>
                <li><a href="event.html">Events</a></li>
                <li class=""><a href="fun.html">Fun Section</a></li>
                <li class=""><a href="premium.html">Plans</a></li>
                <li class="active"><a href="caloriesgenerator.php">Calories Calculator</a></li>
                <li class=""><a href="contact.html">Contact Us</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      
  <!--/ banner-->
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" style="margin: 300px">   
  <div class="form-group" >
    <label for="calculator">Calories Calculator :</label>
        <textarea type="text" required name="calcul" class="form-control br-radius-zero" id="calculator" placeholder="Enter your informations"  ></textarea>
      <div class="form-action pagination-centered" style="margin: 10px">
                <button  type="submit" class="btn  pull-center btn-form ">Send Message</button>
      </div>
      <?php echo $nbrcal;?>
  </div>
</form>
  <!--footer-->
  <footer id="footer">
    <div class="top-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">About Us</h4>
            </div>
            <div class="info-sec">
              <p>Praesent convallis tortor et enim laoreet, vel consectetur purus latoque penatibus et dis parturient.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Quick Links</h4>
            </div>
            <div class="info-sec">
              <ul class="quick-info">
                <li><a href="index.html"><i class="fa fa-circle"></i>Home</a></li>
                <li><a href="#service"><i class="fa fa-circle"></i>Service</a></li>
                <li><a href="#contact"><i class="fa fa-circle"></i>Appointment</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding">Follow us</h4>
            </div>
            <div class="info-sec">
              <ul class="social-icon">
                <li class="bglight-blue"><i class="fa fa-facebook"></i></li>
                <li class="bgred"><i class="fa fa-google-plus"></i></li>
                <li class="bgdark-blue"><i class="fa fa-linkedin"></i></li>
                <li class="bglight-blue"><i class="fa fa-twitter"></i></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-line">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <div class="credits">

              Designed by <a href="https://bootstrapmade.com/">BootstrapMade.com</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ footer-->

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>
