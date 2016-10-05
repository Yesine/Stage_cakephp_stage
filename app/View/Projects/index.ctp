<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>| Postuler</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-select.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--//fonts-->  
<!-- js -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- js -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-select.js"></script>
<script>
  $(document).ready(function () {
    var mySelect = $('#first-disabled2');

    $('#special').on('click', function () {
      mySelect.find('option:selected').prop('disabled', true);
      mySelect.selectpicker('refresh');
    });

    $('#special2').on('click', function () {
      mySelect.find('option:disabled').prop('disabled', false);
      mySelect.selectpicker('refresh');
    });

    $('#basic2').selectpicker({
      liveSearch: true,
      maxOptions: 1
    });
  });
</script>
<script type="text/javascript" src="js/jquery.leanModal.min.js"></script>
<link href="css/jquery.uls.css" rel="stylesheet"/>
<link href="css/jquery.uls.grid.css" rel="stylesheet"/>
<link href="css/jquery.uls.lcd.css" rel="stylesheet"/>
<!-- Source -->
<script src="js/jquery.uls.data.js"></script>
<script src="js/jquery.uls.data.utils.js"></script>
<script src="js/jquery.uls.lcd.js"></script>
<script src="js/jquery.uls.languagefilter.js"></script>
<script src="js/jquery.uls.regionfilter.js"></script>
<script src="js/jquery.uls.core.js"></script>
<script>
      $( document ).ready( function() {
        $( '.uls-trigger' ).uls( {
          onSelect : function( language ) {
            var languageName = $.uls.data.getAutonym( language );
            $( '.uls-trigger' ).text( languageName );
          },
          quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
        } );
      } );
    </script>
    <link rel="stylesheet" href="css/flexslider.css" media="screen" />
</head>
<body>
  <div class="header">
    <div class="container">
      <div class="logo">
        <a href="index.html"><img src="img/logo.png"></a>
      </div>
      
      <div class="header-right">
    
      <a class="account" href="apropos.html">A propos</a>
      <a class="account" href="projets.html">Projet</a>
      <a class="moncompte" href="login.html">Mon Compte</a>
      
      </div>
    </div>
    </div>
<div class="main-banner banner text-center">
    <div class="container"> 
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>   
      <h1>Trouver facilement<span class="segment-heading">    votre projet </span></h1>
      <p>Postuler et Deposer gratuitement</p>
      <a href="deposer.html" >Deposer</a> &nbsp;<a href="projets.html" >Postuler</a>
    </div>
  </div>

  <!--single-page-->
  <div class="single-page main-grid-border">
    <div class="container">
      
      <div class="product-desc">
        <div class="col-md-7 product-view">
          <h2><?php foreach ($projects as $project) {echo $project['Project']['titre'];}?></h2>
          <p> <em class="glyphicon glyphicon-map-marker"></em><a href="#"> Tunis</a>, <a href="#"><?php foreach ($projects as $project) {echo $project['Project']['region'];}?></a>| Ajouter à <?php foreach ($projects as $project) {echo $project['Project']['hour'];}?>, ID:<?php foreach ($projects as $project) {echo $project['Project']['id'];}?></p>
          <!-- FlexSlider -->
            <script defer src="js/jquery.flexslider.js"></script>
          <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

            <script>
          // Can also be used with $(document).ready()
          $(window).load(function() {
            $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
            });
          });
          </script>
          <!-- //FlexSlider -->
          <div class="product-details">
            <h4>Societé &nbsp;: <a href="#"><?php foreach ($projects as $project) {echo $project['Project']['deposeur'];}?></a></h4>
            <h4>Vu : <strong><?php foreach ($projects as $project) {echo $project['Project']['vu'];}?></strong></h4>
            <p><strong>Information: </strong> <?php foreach ($projects as $project) {echo $project['Project']['information'];}?></p>
            <p><strong>Description de Projet:</strong>  <?php foreach ($projects as $project) {echo $project['Project']['description'];}?></p>
            <div class="center-block">  


              <h4>Google maps:</h4>
            <iframe src="<?php foreach ($projects as $project) {echo $project['Project']['maps'];}?>" width="630" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
              
            
            
              </div>
          
          </div>
        </div>
        <div class="col-md-5 product-details-grid">
          <div class="item-price text-center">
            <div class="product-price center-block">
              
              <h3 class="rate text-center"><?php foreach ($projects as $project) {echo $project['Project']['categories'];}?></h3>
              <div class="clearfix"></div>
            </div>
            <div class="condition">
              <p class="p-price">Date de publication </p>
              <h4><?php foreach ($projects as $project) {echo $project['Project']['datepub'];}?></h4>
              <div class="clearfix"></div>
            </div>
            <div class="itemtype">
              <p class="p-price">Date d'expiration</p>
              <h4><?php foreach ($projects as $project) {echo $project['Project']['dateexp'];}?></h4>
              <div class="clearfix"></div>
            </div>
          </div>
          
          <div class="interested text-center" style="text-align: center;">

        <div class="selectregion">
        <button class="btn btn-primary2" data-toggle="modal" data-target="#myModal">Postuler</button>
          <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
          aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;</button>
                  <h4 class="modal-title" id="myModalLabel">Postuler</h4>
                </div>
            <div class="modal-body">
              
              <div class="sign-u">
                <div class="sign-up1">
                  <form>
                    <h5>Lettre de motivation:</h5>
                  </form>
                  
                </div>
                <div class="sign-up2">
                <?php echo $this->Form->create('Project'); ?>
                <?php echo $this->Form->textarea('description',array('placeholder'=>"Adaptez votre lettre à l'emploi pour lequel vous postulez. Un recruteur reconnaît de loin une lettre standard. Avec une bonne lettre de motivation adaptée à la fonction et à l 'entreprise, vous sortirez du lot par rapport aux autres candidats.")); ?>
                
                </div>

              <div class="clearfix"> </div>
            </div>
              <div class="clearfix"> </div>
              
              <div class="sub_home_left">
                <form>
                  <?php $options = array('label' => 'Postuler','style'=>'font-size:20px; background-color: #ADD8E6;'); ?>
                  <?php echo $this->Form->end($options); ?>
                </form>
              </div>
              <div class="clearfix"> </div>
            </div>
          </div>
        </div>
      </div>
    </div>

          </div>
          
          
            
        </div>

    <div class="col-md-5 product-details-grid">
      <div class="item-price text-center">
        <br/>
        <h3>Fichier à télécharger</h3>
        <div class="clearfix"> </div>
        <a href="<?php foreach ($projects as $project) {echo $project['Project']['fichier'];}?>"><img style=" width= 25px; height= 40px;" src="img/download.png"></a>
        
      </div>
          
    </div>


      <div class="clearfix"></div>
      </div>
    </div>
  </div>
  <!--//single-page-->
  <!--footer section start-->   
        <footer>
      <div class="footer-top">
        <div class="container">
          <div class="foo-grids">
            <div class="col-md-3 footer-grid">
              <h4 class="footer-head">Nous-Somme</h4>
              <p>WinPFE est un réseau national des petites annonces des stage </p>
            </div>

            <div class="col-md-3 footer-grid">
              <h4 class="footer-head">Aide</h4>
              <ul>            
                <li><a href="sitemap.html">Maps de Site</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="faq.html">FAQ</a></li>
              </ul>
            </div>

            <div class="col-md-3 footer-grid">
              <h4 class="footer-head">Plan de site</h4>
              <ul>
                <li><a href="index.html">Accueil</a></li> 
                <li><a href="apropos.html">A Propos</a></li>
                <li><a href="projets.html">Projets</a></li> 
                <li><a href="login.html">Compte</a></li>  
              </ul>
            </div>

            <div class="col-md-3 footer-grid">
              <h4 class="footer-head">Contacter-Nous</h4>
              <address> 
                <ul class="location">
                  <li><span class="glyphicon glyphicon-earphone"></span></li>
                  <li>+21655929056</li>
                  <div class="clearfix"></div>
                </ul> 
                <ul class="location">
                  <li><span class="glyphicon glyphicon-earphone"></span></li>
                  <li>+21622638801</li>
                  <div class="clearfix"></div>
                </ul>
                <ul class="location">
                  <li><span class="glyphicon glyphicon-envelope"></span></li>
                  <li><a href="mailto:info@example.com">akram.nakti@gmail.com</a></li>
                  <div class="clearfix"></div>
                </ul>           
              </address>
            </div>
            <div class="clearfix"></div>
          </div>            
        </div>  
      </div>  
      <div class="footer-bottom text-center">
      <div class="container">
        <div class="footer-logo">
          <a href="index.html"><span>Win</span>PFE</a>
        </div>
        <div class="footer-social-icons">
          <ul>
            <li><a class="facebook" href="#"><span>Facebook</span></a></li>
            <li><a class="twitter" href="#"><span>Twitter</span></a></li>
            <li><a class="googleplus" href="#"><span>Google+</span></a></li>
            
          </ul>
        </div>
        <div class="copyrights">
          <p></p>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
    </footer>
        <!--footer section end-->
</body>
</html>