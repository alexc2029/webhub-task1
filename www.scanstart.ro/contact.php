<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>Contact</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Links --> 
    <link rel="stylesheet" href="css/google-map.css">
    <link rel="stylesheet" href="css/contact-form.css">

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

    <script src='https://www.google.com/recaptcha/api.js'></script>

  </head>
  <body>
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
            <div class="col-md-4 col-sm-12">
               <h4 class="text-left">
                Adresa
              </h4>
				<p class="lead1">SC ScanStart Hardware & Software SRL</p>
				<p>
        Sos. Alba Iulia nr. 41<br />
        550018 Sibiu<br/>
				    Sibiu, Romania<br/><br/>
				</p>
				<p>
				  CUI 35223854<br/>
				  RC J32/1099/2015
				</p>
                <p>Telefon: <a href='callto:#'>+40 766 676 784</a></p>
                <p>E-mail: <a href="mailto:#">suport (@) scanstart.ro</a></p>
            </div>
            <div class="col-md-8 col-sm-12">
              <h4 class="text-left">
                Formular de contact
              </h4>
              <form id="contact-form" class='contact-form offs3' method="post" action="http://www.scanstart.ro/email_.php">
                <div class="contact-form-loader"></div>
                <fieldset>
                  <label class="name">
                    <input type="text" name="name" placeholder="Nume*:" value="" data-constraints="@Required @JustLetters"/>
                    <span class="empty-message">*Acest camp este obligatoriu.</span>
                    <span class="error-message">*Campul nu este valid.</span>
                  </label>
              
                  <label class="email">
                    <input type="text" name="email" placeholder="E-mail:" value="" data-constraints="@Required @Email"/>
                    
                    <span class="empty-message">*Acest camp este obligatoriu.</span>
                    <span class="error-message">*Campul nu este valid.</span>
                  </label>
              
                  <label class="phone">
                    <input type="text" name="phone" placeholder="Telefon:" value="" data-constraints="@JustNumbers"/>
              
                    <span class="empty-message">*Acest camp este obligatoriu.</span>
                    <span class="error-message">*Campul nu este valid.</span>
                  </label>
              
                  <label class="message">
                    <textarea name="message" placeholder="Mesaj*:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
              
                    <span class="empty-message">*Acest camp este obligatoriu.</span>
                    <span class="error-message">*Mesajul este prea scurt.</span>
                  </label>
     
                   <div class="g-recaptcha" data-sitekey="6LcBqLgZAAAAAOxs_6R3rVCDsdWu-r9v6TOt3dSp"> </div>
                   
                  <div class="btn-wr">
                    <span>* campuri obligatorii</span>
                    <input name="post_date" type="hidden" id="post_date" value="2025-10-29 14:52:50">
					<input name="IP" type="hidden" id="post_date" value="86.123.229.77">
                    <a class="btn btn-primary" href="http://www.scanstart.ro/index-4.html#" data-type="submit">Trimite</a>
                  </div>
                </fieldset>
                <div class="modal fade response-message">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                          &times;
                        </button>
                        <h4 class="modal-title">Mesaj</h4>
                      </div>
                      <div class="modal-body">
                        Mesajul a fost trimis cu succes!
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              
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


  </body>
</html>
