<?php

    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
        require_once($dir_block.'/libs/lessc.inc.php');
    }
    
    $less = new lessc;
  $less->compileFile('less//914.less', 'css/914.css');   
?>
<!DOCTYPE html>

<html lang="en-US">


    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Infor - Tennis club</title>
        <meta name="description" content="My Store" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" type="images/x-icon" href="images/favicon.ico" />
        <script src="<?php echo $url_path ?>/js/jquery-2.1.1.min.js" type="text/javascript"></script>
        <link href="<?php echo $url_path ?>/framework/bootstrap/css/bootstrap.css" rel="stylesheet" media="screen" />
        <script src="<?php echo $url_path ?>/framework/bootstrap/js/bootstrap.min.js"></script>
        <link href="<?php echo $url_path ?>/framework/font-awesome/css/font-awesome.min.css" rel="stylesheet"/>
        <link href="<?php echo $url_path ?>/framework/fontello/css/fontello.css" rel="stylesheet"/>
        <link href="<?php echo $url_path ?>/framework/swiper/swiper.css" rel="stylesheet"/>
        <link href="<?php echo $url_path ?>/framework/shortcodes/theme.shortcodes.css" rel="stylesheet"/>
        <link href="<?php echo $url_path ?>/framework/owl.carousel.2.0.0-beta.2.4/assets/owl.carousel.css" rel="stylesheet"/>
        <script type="text/javascript" src="framework/owl.carousel.2.0.0-beta.2.4/owl.carousel.js"></script>
        <script type="text/javascript" src="framework/swiper/swiper.js"></script>
        <script type="text/javascript" src="framework/shortcodes/theme.shortcodes.js"></script>
        <link href="<?php echo $url_path ?>/css/914.css" rel="stylesheet"/>
    </head>

    <body>
        <?php include $dir_block.'/914-content.php'; ?>

    </body>

</html>