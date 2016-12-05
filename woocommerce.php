<?php get_header(); ?>

  <section id="main">
    <div class="row full page">
      <div class="large-8 columns pagina panelsuave">
          <?php woocommerce_content(); ?>
      </div>
      <!-- /Noticias -->
      <div class="large-4 columns sidebar">
		        <?php get_sidebar(); ?>
      </div>
      <!-- /SIDEBAR -->
    </div>
  </section>

<?php get_footer(); ?>
