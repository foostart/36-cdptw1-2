<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-989">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div id="owl-demo" class="owl-carousel">
                    <div class="item">
                           <img src="<?php echo $url_path ?>/images/mf02-slider-01.jpg" alt=""/>
                    </div>
                    <div class="item">
                             <img src="<?php echo $url_path ?>/images/mf02-slider-02.jpg" alt=""/>
                    </div>
                    <div class="item">
                             <img src="<?php echo $url_path ?>/images/mf02-slider-03.jpg" alt=""/>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row banner-slide">
                        <div class="col-md-12 col-xl-12 col-6">
                            <img src="<?php echo $url_path ?>/images/mf02-blocktop-01.jpg" alt=""/>
                        </div>
                        <div class="col-md-12 col-xl-12 col-6">
                            <div class="blocktop">
                                <img src="<?php echo $url_path?>/images/mf02-blocktop-02.jpg" alt=""/>
                            </div>
                        </div>
                </div>
            </div> 
        </div>
    </div>
</div>