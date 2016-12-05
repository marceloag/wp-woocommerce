<?php get_header(); ?>

  <section id="main">
    <div class="row full page">
      <div class="large-8 columns pagina panelsuave">

        <div class="ftimg">
          <div class="captionpage">
          		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            	<h1><?php the_title(); ?></h1>
          </div>
        </div>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
      </div>
      <!-- /Noticias -->
      <div class="large-4 columns sidebar">
            <?php get_sidebar(); ?>
      </div>
      <!-- /SIDEBAR -->
    </div>
  </section>

<?php get_footer(); ?>
