<?php get_header();?>

        <div class="row">
          <!--ENTRADAS-->
          <div class="col-lg-9">

            
            <?php 
              if ( have_posts() ) : 
                while ( have_posts() ) : the_post(); 
            ?>
              <!--ENTRADA-->
              <div class="card-body">
                <a href="<?php the_permalink();?>">
                  <h2><?php the_title();?></h2>
                </a>  
                <p class="small mb-0">Fecha: <?php the_time('F j, Y');?></p> 
                <p class="small mb-0">Author: <?php the_author();?></p>  
                <p class="small mb-0">Categorias: <a href=""><?php the_category('/');?></a></p> 
                <p class="small ">Etiquetas: <a href=""><?php the_tags('','/','');?></a></p>  
                
                <?php
                  if ( has_post_thumbnail() ) {
                    the_post_thumbnail('post-thumbnails',array('class' => 'img-fluid mb-3'));
                  }
                ?> 
                <?php the_excerpt();?>
                <a href="<?php the_permalink();?>" class="btn btn-primary">Mas Info</a>
              </div>
              <!--FIN ENTRADA-->
            <?php 
                endwhile; 
              endif;
            ?>
            
            

            <!--PAGINACION-->
            <div class="card-body">
              <?php get_template_part('template-parts/content', 'paginacion');?>
            </div>
            <!--FIN PAGINACION-->


          </div>
          <!--FIN ENTRADAS-->

          <!--ASIDE-->
          <?php get_sidebar();?>
          <!--FIN ASIDE-->
        </div>
      </div>

      <!--FIN BLOG-->


      <!--FOOTER-->
      <footer  class="container-fluid py-4 text-center text-light bg-dark">
        <h5>Lorem ipsum dolor sit amet.</h5>

      </footer>
      <!--FIN FOOTER-->

  <?php get_footer();?>