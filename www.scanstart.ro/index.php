<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>Acasă</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Links -->
    <link rel="stylesheet" href="css/camera.css">
    <link rel="stylesheet" href="css/owl-carousel.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/pop-up.css">



    <!--JS-->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>


    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
    <script src='js/device.min.js'></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
      $(document).ready(function(){
           if((sessionStorage.getItem("AlreadyVisited")==null)||(sessionStorage.getItem("AlreadyVisited")==undefined)){
            $("#myModal").modal('show');
             sessionStorage.setItem("AlreadyVisited",true);
           } 
      });
    </script>
  </head>
  <body>

  <div id="myModal" class="modal fade" style="margin:5%; box-shadow: 10% 10p% 5% grey;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
               
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <a href="cum_functioneaza.php"><img src="images/logo.png" alt=""></a>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <p class="lead1" style="text-align:center;font-size:150%;font-weight:bold;"> 
                  ScanStart oferă:
                
                <p class="popUpParagraph" id="spaced"> 
                  <a href="support.php">Suport tehnic</a> 
                  <br><a href="appManagement.php">Management pentru aplicații</a> 
                </p></p>

              </div>    
              <div class="form-group" style="text-align:center;">
                <a class="btn btn-primary" href="servicii.php" data-type="submit">
                  Află mai multe despre serviciile ScanStart
                </a>
              </div>
            </div>
        </div>
    </div>
</div>

  <div class="page">
  ﻿
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71485015-1', 'auto');
  ga('send', 'pageview');

</script>

<!--========================================================
                            HEADER
  =========================================================-->
    <header>  
      <div id="stuck_container" class="stuck_container">
        
          <div class="container">             

			 <nav class="navbar navbar-default navbar-static-top ">

            <div class="navbar-left">  

              <ul class="nav navbar-nav sf-menu index-menu" data-type="navbar">
				<li>
					<img src="images/logo.png"/>
				</li>
                <li>
                  <a href="index.php">acasa</a>
                  
                </li>

                <li class="dropdown">
                  <a href="cum_functioneaza.php">ScanStart</a>
					<ul class="dropdown-menu">
                    <li>
                      <a href="cum_functioneaza.php">Cum functionează?</a>
                    </li>
                    <li>
                      <a href="functionalitati.php">Funcționalități</a>
                       
                    </li>
                    <li>
                      <a href="avantaje.php">Avantaje</a>
                    </li>
					<li>
						<a href="versiuni.php">Versiuni</a>
					</li>
					<li>
						<a href="faq.php">întrebări frecvente</a>
					</li>
                  </ul>				  
                </li>
                <li class="dropdown">
                  <a  href="servicii.php">Servicii</a>
                  <ul class="dropdown-menu-servicii">
                    <li >
                      <a href="servicii.php" >Servicii</a>
                    </li>
                    <li>
                      <a href="forHotels.php"> ScanStart for Hotels </a>
                    </li>
                    <li>
                      <a href="adBlocker.php">ScanStart AdBlocker</a>
                    </li>
                    <li>
                      <a href="support.php">Suport tehnic</a>
                    </li>
                    <li>
                      <a href="appManagement.php">App Management</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="tarife.php">Tarife</a>
                </li>
                
                <li>
                  <a href="contact.php">Contact</a>
                </li>
              </ul>                           
            </div>
          </div>
          </nav>
        
      </div>  
   
  </header>
  <!--========================================================
                            CONTENT
  =========================================================-->

    <main>        

      <section class="well well2">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-12">
              <h5>
                Ce este ScanStart?
              </h5>
              <p>
                ScanStart este o soluție software & hardware pentru optimizarea proceselor dintr-un birou notarial.
              </p>
			  <p>
			  Automatizarea începe cu citirea datelor de identificare ale clienților cu ajutorul unui scanner dedicat și excelează cu generarea automată a documentelor notariale.
			  </p>
              <a href="cum_functioneaza.php" class="btn-link-1">Află cum funcționează </a>
			  <br>sau vezi lista de
			  <a href="faq.php" class="btn-link-1">Întrebări frecvente</a>
            </div>
            <div class="col-md-6 col-sm-12 wow fadeInRight text-center" data-wow-duration='2s'>
              <img src="images/scanner.png" alt="" style="width:60%">
            </div>
		  </div>
		  <div class="row">
            <div class="col-md-6 col-sm-12">
              <h5>
                Ce oferă ScanStart?
              </h5>
              <p>
			  Viteză, Acuratețe, Gestiune, Plus-valoare, Flexibilitate
              </p>
              <a href="avantaje.php" class="btn-link-1">detalii</a>
            </div>
            <div class="col-md-6 col-sm-12 wow fadeInLeft text-center" data-wow-duration='2s'>
              <img src="images/app1.png" alt="">
            </div>

          </div>  
        </div>  
      </section>

 </main>


 

 ﻿    <!--========================================================
                            FOOTER
  =========================================================-->
  <footer>
    
    <section>
      <div class="container"> 
        <div class="row">
          <div class="col-sm-1 col-xs-12 center767">
		    <img class="footer_logo" src="images/onlylogo.png" alt=""/>
		  </div>
          <div class="col-sm-11 col-xs-12 center767">
            <p>
              &#169; <span id="copyright-year"></span>
			  SC ScanStart Hardware & Software SRL
              <!-- <a href="index-5.html"> <span class="rights">Privacy Policy</span></a> -->
              <!-- {%FOOTER_LINK} -->
            </p>      
          </div>
          <!--<div class="col-sm-4 col-xs-12 center767">
            <address>
              <p>
                SC ScanStart Hardware & Software SRL
              </p>
            </address>
          </div>
		  
          <div class="col-sm-4 col-xs-12">
             <ul class="inline-list text-right center767">      
              <li><a href="index.html#" class="fa fa-twitter">twitter</a></li>
              <li><a href="index.html#" class="fa fa-facebook">facebook</a></li>
              <li><a href="index.html#" class="fa  fa-google-plus">google-plus</a></li>
              <li><a href="index.html#" class="fa  fa-rss">rss</a></li>
              <li><a href="index.html#" class="fa fa-pinterest">pinterest</a></li>
            </ul> 
          </div>-->
        </div>                
      </div> 
    </section>    
  </footer>

<!-- Begin Cookie Consent script https://cookieconsent.insites.com/download/ -->
<link rel="stylesheet" type="text/css" href="css/cookieconsent.min.css" />
<script src="js/cookieconsent.min.js"></script>
<script>
window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#eaf7f7",
      "text": "#5c7291"
    },
    "button": {
      "background": "#56cbdb",
      "text": "#ffffff"
    }
  },
  "showLink": false,
  "content": {
    "message": "Acest site foloseste cookies pentru a furniza vizitatorilor o experienta mult mai buna de navigare.",
    "dismiss": "OK"
  }
})});
</script><!-- End Cookie Consent script -->

  </div>                     
                      

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->         
    <script src="js/bootstrap.min.js"></script>
    <script src="js/tm-scripts.js"></script>    
  <!-- </script> -->

<!--
<script type="text/javascript">
 var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-7078796-5']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();</script>
-->



  </body>
</html>
