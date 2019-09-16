<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-2007">
   <div class="container bg">
         <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
         <!-- Carousel indicators -->
         <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
         </ol>   
         <!-- Wrapper for carousel items -->
         <div class="carousel-inner">     
            <div class="item carousel-item active">
               <div class="img-box">
                     <img src="http://<?php echo $url_path ?>/images/customer-1.jpg" class="img-responsive" alt="">
               </div>
                <div class="star-rating">
                  <ul class="list-inline">
                     <li class="list-inline-item"><i class="fa fa-star"></i></li>
                     <li class="list-inline-item"><i class="fa fa-star"></i></li>
                     <li class="list-inline-item"><i class="fa fa-star"></i></li>
                     <li class="list-inline-item"><i class="fa fa-star"></i></li>
                     <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                  </ul>
               </div>
               <p class="testimonial">“Dessert pudding dessert jelly beans cupcake sweet caramels gingerbread. Fruitcake biscuit cheesecake. Cookie topping bear claw sugar plum croissant.”</p>
               <p class="overview">Logan May - <span>CEO & Founder Invision</span></p>
            </div>
            <div class="item carousel-item">
               <div class="img-box">
                  <img src="http://<?php echo $url_path ?>/images/customer-2.jpg" class="img-responsive" alt="">
               </div>
                <div class="star-rating">
                  <ul class="list-inline">
                     <li class="list-inline-item"><i class="fa fa-star"></i></li>
                     <li class="list-inline-item"><i class="fa fa-star"></i></li>
                     <li class="list-inline-item"><i class="fa fa-star"></i></li>
                     <li class="list-inline-item"><i class="fa fa-star"></i></li>
                     <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                  </ul>
               </div>
                  <p class="testimonial">“Dessert pudding dessert jelly beans cupcake sweet caramels gingerbread. Fruitcake biscuit cheesecake. Cookie  bear claw sugar plum croissant.”</p>
               <p class="overview">Logan May - <span>CEO & Founder Invision</span></p>
            </div>
            <div class="item carousel-item">
               <div class="img-box">
                  <img src="http://<?php echo $url_path ?>/images/customer-3.jpg" class="img-responsive" alt="">
               </div>
                <div class="star-rating">
                  <ul class="list-inline">
                     <li class="list-inline-item"><i class="fa fa-star"></i></li>
                     <li class="list-inline-item"><i class="fa fa-star"></i></li>
                     <li class="list-inline-item"><i class="fa fa-star"></i></li>
                     <li class="list-inline-item"><i class="fa fa-star"></i></li>
                     <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                  </ul>
               </div>
                   <p class="testimonial">“Dessert pudding dessert jelly beans cupcake sweet caramels gingerbread. Fruitcake biscuit cheesecake. Cookie bear claw sugar plum croissant.”</p>
               <p class="overview">Logan May - <span>CEO & Founder Invision</span></p>
            </div>      
         </div>
      </div>
   </div>
</div>
