<?php
    $url_host = 'http://' . $_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
        require_once($dir_block . '/libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/992.less', 'css/992.css');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/992.less', '992.css');
    ?>
    <meta charset="UTF-8" />
    <title>Audio Slideshow with jPlayer</title>
    <link rel="shortcut icon" href="../favicon.ico"> 

    <link rel="stylesheet" type="text/css" href="css/demo.css" />
    <link rel="stylesheet" type="text/css" href="css/992.css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300,300italic' rel='stylesheet' type='text/css' />


    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script>window.jQuery || document.write < script src = "/lib/js/jquery-1.7.1.min.js" ></script></script>
    <script src="jplayer/jquery.jplayer.js"></script>
    <script src="js/jquery.audioslideshow.js"></script>
    <script>
        $(document).ready(function () {
            $('#audio-slideshow').audioSlideshow();
        });


    </script>


</head>
<body>
  <?php include './992-content.php'; ?>
</body>
</html>