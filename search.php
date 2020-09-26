<?php get_header();?>

        <div class="row">
          <!--ENTRADAS-->
          <div class="col-lg-9">

            <h3 class="bg-primary text-center text-white py-3 mb-5">
                Resultados de Busqueda
            </h3>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <!--ENTRADA-->
              <div class="card-body">
                <a href="<?php the_permalink();?>">
                  <h2><?php the_title();?></h2>
                </a>  
              </div>
              <!--FIN ENTRADA-->
            <?php endwhile; ?>

            <?php else: ?>
            <h5>No se encontro el termino <?php printf(esc_html('%s'),get_search_query()) ?></h5>
            <?php get_search_form() ?>


            <?php endif; ?>
            
            

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