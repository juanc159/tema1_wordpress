<?php get_header();?> 

        <div class="row">
          <!--ENTRADAS-->
          <div class="col-lg-12">
            <?php 
              if ( have_posts() ) : 
                while ( have_posts() ) : the_post(); 
            ?>
              <!--ENTRADA-->
              <div class="card-body"> 
                    <h2><?php the_title();?></h2> 
                  <p class="small mb-0">Fecha: <?php the_time('F j, Y');?></p> 
                  <p class="small mb-0">Author: <?php the_author();?></p>  
                  <p class="small mb-0">Categorias: <a href=""><?php the_category('/');?></a></p> 
                  <p class="small ">Etiquetas: <a href=""><?php the_tags('','/','');?></a></p>  
                  <?php
                    if ( has_post_thumbnail() ) {
                      the_post_thumbnail('post-thumbnails',array('class' => 'img-fluid mb-3'));
                    }
                  ?>
                  <?php the_content();?>
                </div>
                <!--FIN ENTRADA-->
              <?php 
                endwhile; 
              endif;
              ?>

          </div>
          <!--FIN ENTRADAS-->
        </div>
      </div>

      <!--FIN BLOG-->


      <!--FOOTER-->
      <footer  class="container-fluid py-4 text-center text-light bg-dark">
        <h5>Lorem ipsum dolor sit amet.</h5>

      </footer>
      <!--FIN FOOTER-->





      <?php get_footer();?>