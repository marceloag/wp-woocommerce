<?php get_header(); ?>

<div class="row">
	<div class="large-8 columns panel">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>
		<?php endwhile; endif; ?>
	</div>
<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>