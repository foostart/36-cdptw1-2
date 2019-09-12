<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
    <div class="mod_cus_24_w4">
        <div class="container">
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <a href="#">
                    <strong style="color: red">&laquo; Previous Demo: Rotating Words with CSS Animations</strong>
                </a>
                <span class="right">
                    <a href="#" style="color: red">Images: Library of Congress</a>
                    <a href="#" style="color: red">Audio: Freeway by Kurt Veil</a>
                    <a href="#">
                        <strong style="color: red">Back to the Codrops Article</strong>
                    </a>
                </span>
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1 style="color: #1117e6">Audio Slideshow <span>with jPlayer</span></h1>
            </header>
            <section>
                <div id="audio-slideshow" class="audio-slideshow" data-audio="Kurt_Vile_-_01_-_Freeway.mp3" data-audio-duration="161">
                    <div class="audio-slides">
                        <img src="http://farm2.staticflickr.com/1145/3175012896_02056f183d_z.jpg?zz=1" alt="[Near Hjelmso, Fuglebjerget, Norway] (LOC)" data-thumbnail="http://farm2.staticflickr.com/1145/3175012896_02056f183d_t.jpg" data-slide-time="10">
                        <img src="http://farm4.staticflickr.com/3108/3175013342_54f5b20138_z.jpg?zz=1" alt="[The Seven Sisters, Geiranger Fjord, Norway] (LOC)" data-thumbnail="http://farm4.staticflickr.com/3108/3175013342_54f5b20138_t.jpg" data-slide-time="30">
                        <img src="http://farm2.staticflickr.com/1192/3175013574_0f485bdb7f_z.jpg?zz=1" alt="[Praekestolen, Geiranger Fjord, Norway] (LOC)" data-thumbnail="http://farm2.staticflickr.com/1192/3175013574_0f485bdb7f_t.jpg" data-slide-time="45">
                        <img src="http://farm2.staticflickr.com/1019/3174174579_0c6a63ca70_z.jpg?zz=1" alt="[Kongen og Dronningen, Bispen, Norway] (LOC)" data-thumbnail="http://farm2.staticflickr.com/1019/3174174579_0c6a63ca70_t.jpg?" data-slide-time="70">
                        <img src="http://farm4.staticflickr.com/3117/3175014052_7484da1205_z.jpg?zz=1" alt="[Merok, Geiranger Fjord, Norway] (LOC)" data-thumbnail="http://farm4.staticflickr.com/3117/3175014052_7484da1205_t.jpg" data-slide-time="90">
                        <img src="http://farm2.staticflickr.com/1078/3175018738_03f949816c_z.jpg?zz=1" alt="[Buerbrae Glacier, Odde, Hardanger Fjord, Norway] (LOC)" data-thumbnail="http://farm2.staticflickr.com/1078/3175018738_03f949816c_t.jpg" data-slide-time="110">
                        <img src="http://farm2.staticflickr.com/1139/3174180591_a5e318c84b_z.jpg?zz=1" alt="[Folgefond Glacier, Hardanger Fjord, Norway] (LOC)" data-thumbnail="http://farm2.staticflickr.com/1139/3174180591_a5e318c84b_t.jpg" data-slide-time="130">
                        <img src="http://farm2.staticflickr.com/1091/3174186405_4654a14ae4_z.jpg?zz=1" alt="[Naerodalen, Hardanger Fjord, Norway] (LOC)" data-thumbnail="http://farm2.staticflickr.com/1091/3174186405_4654a14ae4_t.jpg" data-slide-time="150">
                    </div>
                    <div class="audio-control-interface">
                        <div class="play-pause-container">
                            <a href="javascript:;" class="audio-play" tabindex="1">Play</a>
                            <a href="javascript:;" class="audio-pause" tabindex="1">Pause</a>
                        </div>
                        <div class="time-container">
                            <span class="play-time"></span> / <span class="total-time"></span>
                        </div>
                        <div class="timeline">
                            <div class="timeline-controls"></div>
                            <div class="playhead"></div>
                        </div>
                        <div class="jplayer"></div>
                    </div>
                </div>
            </section>
        </div>
    </div>