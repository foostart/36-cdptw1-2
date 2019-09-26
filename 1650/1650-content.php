<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="modun-1650">
  <div class="container">
    <div class="row header-top">
        <div class="col-md-6">
          <div class="title">
           <a href="#">Welcome to Martfury Online Store !</a>
          </div>
        </div>
        <div class="col-md-6 col-xs-12">
          <div class="header-top-right"> 
            <div class="topnav" id="myTopnav">
              <a href="#home" class="active">Store Location</a>
              <a href="#news">Track Your Oder</a>
              <div class="dropdown type-1688-border-type show-down-info"> 
                <a href="#contact" class="type-1688-link-menu">USD</a>
                <i class="fa fa-angle-down" aria-hidden="true"></i>
                  <ul class="dropdown-content type-1688-coins">
                    <li><a href="#" class="type-1688-coins-national">UER</a></li>
                  </ul>
              </div>
              <a href="#about">English</a>
              <div>
                <span><img src="http://<?php echo $url_path ?>/images/en.png">
                        <a href="#" class="type-1688-link-menu">English</a></span>
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                        <ul class="dropdown-content">
                          <span>
                            <li><img src="https://martfury02.magebig.com/media/wysiwyg/magebig/languages/du.png" alt="du" width="18" height="12"><a href="#">Dutch</a></li></span>
                            <li><img src="https://martfury02.magebig.com/media/wysiwyg/magebig/languages/ar2.png" alt="ar2" width="18" height="12"><a href="#">Arabic</a></li>
                        </ul>
              </div>
              <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars"></i>
              </a>
            </div>
              <!--  <ul class="nav navbar-nav">
                    <li class="dropdown type-1688-respon-main">
                        <a href="#" class="type-1688-link-menu ">Store Location</a>
                    </li>
                    <li class="type-1688-border-type type-1688-respon">
                      <a href="#" class="type-1688-link-menu">Track Your Oder</a>
                    </li>
                    <li class="dropdown type-1688-border-type show-down-info">
                        <a href="#" class="type-1688-link-menu">USD</a>
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                        <ul class="dropdown-content type-1688-coins">
                            <li><a href="#" class="type-1688-coins-national">UER</a></li>
                        </ul>
                    </li>
                    <li class="dropdown type-1688-border-type ">
                        <span><img src="http://<?php echo $url_path ?>/images/en.png">
                        <a href="#" class="type-1688-link-menu">English</a></span>
                        <i class="fa fa-angle-down" aria-hidden="true"></i>
                        <ul class="dropdown-content">
                          <span>
                            <li><img src="https://martfury02.magebig.com/media/wysiwyg/magebig/languages/du.png" alt="du" width="18" height="12"><a href="#">Dutch</a></li></span>
                            <li><img src="https://martfury02.magebig.com/media/wysiwyg/magebig/languages/ar2.png" alt="ar2" width="18" height="12"><a href="#">Arabic</a></li>
                        </ul>
                    </li>
                </ul> -->
            </div>
          </div>
        </div>
     </div>
  </div>
</div>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>