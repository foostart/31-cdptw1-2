<!DOCTYPE html>
<html>
    <head>
    <title>Module 1633</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
      <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/1633.less', 'css/1633.css');
        ?>
        <link href="css/1633.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-1.11.2.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>

    <body> 
        <?php include './1633-content.php'; ?>
        <script src="js/scripts.js" type="text/javascript"></script>
    </body>

</html>