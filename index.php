<?php defined( '_JEXEC' ) or die; 

// variables
$app = JFactory::getApplication();
$doc = JFactory::getDocument(); 
$menu = $app->getMenu();
$active = $app->getMenu()->getActive();
$params = $app->getParams();
$pageclass = $params->get('pageclass_sfx');
$tpath = $this->baseurl.'/templates/'.$this->template;

// generator tag
$this->setGenerator(null);

// template css
$doc->addStyleSheet($tpath.'/css/template.css.php');

?><!doctype html>

<html lang="<?php echo $this->language; ?>">

<head>
    <jdoc:include type="head" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <link rel="apple-touch-icon-precomposed" href="<?php echo $tpath; ?>/images/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $tpath; ?>/images/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $tpath; ?>/images/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $tpath; ?>/images/apple-touch-icon-144x144-precomposed.png">
    <link rel="stylesheet" type="text/css" href="<?php echo $tpath; ?>/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $tpath; ?>/css/template.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $tpath; ?>/css/foundation.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $tpath; ?>/css/foundation.min.css">
    <script type="text/javascript" src="//use.typekit.net/ieb2igl.js"></script>
    <script type="text/javascript">try{Typekit.load();}catch(e){}></script>
    <script src="<?php echo $tpath; ?>/js/vendor/modernizr.js"></script>
</head>
  
<body class="<?php echo (($menu->getActive() == $menu->getDefault()) ? ('front') : ('site')).' '.$active->alias.' '.$pageclass; ?>">


<!-- Insert your BODY code here -->


<jdoc:include type="modules" name="debug" />
    
<!-- javascript and foundation -->
<script src="<?php echo $tpath; ?>/js/vendor/jquery.js"></script>
<script src="<?php echo $tpath; ?>/js/vendor/fastclick.js"></script>
<script src="<?php echo $tpath; ?>/js/foundation.min.js"></script>
<script>
  $(document).foundation();
</script>
    
</body>

</html>