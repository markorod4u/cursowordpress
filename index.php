<?php get_header(); ?>	
<!--
	<ul>
		<li><?php   bloginfo('name'); ?></li>
		<li><?php   bloginfo('description'); ?></li>
		<li><?php   bloginfo('wpurl'); ?></li>
		<li><?php   bloginfo('admin_email'); ?></li>
		<li><?php   bloginfo('charset'); ?></li>
		<li><?php   bloginfo('version'); ?></li>
		<li><?php   bloginfo('html_type'); ?></li>
		<li><?php   bloginfo('language'); ?></li>
		<li><?php   bloginfo('stylesheet_directory'); ?></li>
		<li><?php   bloginfo('stylesheet_url'); ?></li>
	</ul>
-->

<header>
	<?php include(TEMPLATEPATH.'/nav.php'); ?>
</header>

<?php
	dynamic_sidebar('sidebar-footer' );

?>

<section class="content">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article class="articulo">
			<header>
				<h3><a class="enlace" href="<?php the_permalink(); ?>"><?php the_title( ); ?></a></h3>
			</header>
			    <?php the_excerpt(); ?>

		</article>
	<?php endwhile; ?>
	<!-- post navigation -->
	<?php else: ?>
	  <p>No tengo entradas</p>
	<?php endif; ?>

</section>

<?php get_footer(); ?>
