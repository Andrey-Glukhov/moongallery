<!doctype html>
<html>
<head>
  <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1" >
  <meta name="keywords" content="moon, art, space, european space agency, mars, open call, submit, moon vilage, workshop, lecture, public putrich, lander, rover, moon gallery, art moon mars, evro moon mars, earth moon mars, grid, ilewg" />
  <meta name="description" content="Moon Gallery" />
  <title>Moon Gallery </title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
  <script src= "https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
 <!--<script src="../wordpress/wp-content/themes/MOON/js/OrbitControls.js" crossorigin="anonymous"></script>
  <script src="../wp-content/themes/MOON/js/Detector.js"></script>
  <script src="../wp-content/themes/MOON/js/TerrainGeneration.js"></script>
  <script src="../wp-content/themes/MOON/js/noiselib.js"></script>
  <script src="../wp-content/themes/MOON/js/OBJLoader.js"></script>-->
	<script src="../wp-content/themes/MOON/js/three.js" crossorigin="anonymous"></script>
  <script src="../wp-content/themes/MOON/js/ColladaLoader.js"></script>
	<script src="../wp-content/themes/MOON/js/WebGL.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-156915458-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-156915458-2');
</script>
		
  <?php wp_head(); ?>
</head>

<?php
if(is_front_page()):
  $moon_classes = array('moon_front_class', 'front_class');
else:
  $moon_classes = array('no_moon_front_class');
endif;
?>
<body <?php body_class($moon_classes); ?>>
