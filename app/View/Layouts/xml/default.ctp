<!DOCTYPE html>
<html>
<head>
<title>| Accueil</title>

<?php echo $this->Html->css('bootstrap.min'); ?>
<?php echo $this->Html->css('bootstrap-select'); ?>
<?php echo $this->Html->css('style'); ?>
<?php echo $this->Html->css('flexslider'); ?>
<?php echo $this->Html->css('font-awesome.min'); ?>
<?php echo $this->Html->css('jquery.uls'); ?>
<?php echo $this->Html->css('jquery.uls.grid'); ?>
<?php echo $this->Html->css('jquery.uls.lcd'); ?>

<?php echo $this->Html->script('bootstrap.min'); ?>
<?php echo $this->Html->script('bootstrap-select.min'); ?>
<?php echo $this->Html->script('jquery.min'); ?>
<?php echo $this->Html->script('jquery.leanModal.min.min'); ?>
<?php echo $this->Html->script('jquery.uls.data.min'); ?>
<?php echo $this->Html->script('jquery.uls.data.utils.min'); ?>
<?php echo $this->Html->script('jquery.uls.lcd'); ?>
<?php echo $this->Html->script('jquery.uls.languagefilter'); ?>
<?php echo $this->Html->script('jquery.uls.regionfilter'); ?>
<?php echo $this->Html->script('jquery.uls.core'); ?>


<script type="application/x-javascript">
 addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>


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
<div class="main-banner banner text-center" >
    <div class="container" style="padding-top: 100px;"> 
      <h1>Trouver facilement<span class="segment-heading">    votre projet </span></h1>
      <p>Postuler et Deposer gratuitement</p>
      <a href="deposer.html" >Deposer</a> &nbsp;<a href="projets.html" >Postuler</a>
    </div>
</div>


				<?php echo $this->fetch('content'); ?>

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
