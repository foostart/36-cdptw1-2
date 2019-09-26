<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1656">
    <div class="grey-section">
        <div class="main-section">
            <div class="section-container">
                <div class="container">
                    <div class="row">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-title-wrapper">
                                    <div class="section-title">
                                        <h5>they love us</h5>
                                        <h3>our clients</h3>
                                    </div>
                                    <div class="section-desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut at elementum, ornare dui a, gravida dolor. Ut dictum ex eu velit molestie dapibus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container">
                           <section class="customer-logos slider">
                              <div class="slide"><img src="images/client-1-logo.png" alt="Clients Logo"></div>
                              <div class="slide"><img src="images/client-2-logo.png" alt="Clients Logo"></div>
                              <div class="slide"><img src="images/client-3-logo.png" alt="Clients Logo"></div>
                              <div class="slide"><img src="images/client-4-logo.png" alt="Clients Logo"></div>
                              <div class="slide"><img src="images/client-5-logo.png" alt="Clients Logo"></div>
                           </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
    $('.customer-logos').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows: true,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 1
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 1
            }
        }]
    });
});
</script>