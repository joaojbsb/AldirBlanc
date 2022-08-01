<?php get_header(); ?>



    <div class="text-portal">
      <h1 class= "text-center ">Lei de Auxílio a Cultura - Aldir Blanc</h1>

    </div>

    <div class="container container-img">

      <img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="Imagem da barragem de Águas Lindas" />

    </div>   <!--Fim do Container-->

    <section class="container formulario-template">

		  <div class="row">


        <?php

            if (have_posts(  )):
            while(have_posts()):the_post();

        ?>

        <div class="col-sm-12 col-md-12 col-lg-12 my-5">

          <div class="card border-0">
            <div class="card-body text-justifyr formulario">
                <?php the_content( ); ?>
            </div>
          </div>

			  </div>

        <?php endwhile; else: ?>

          <p>There is nothing yet to be displayed...</p>

        <?php endif; ?>  
			 
      </div>

    </section> 

  </div> <!--Fim da div wraper-->

  <?php get_template_part( 'template-parts/acesso-rapidocert' ); ?>

<?php get_footer(); ?>

