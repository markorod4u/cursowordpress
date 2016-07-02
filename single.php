<?php get_header(); ?>

	<?php rewind_posts(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<?php endwhile; ?>
		<article class="articulo">
			<header>
				<h1><?php the_title(); ?></h1>
			</header>

			<?php the_excerpt(); ?>

			<footer>
				<p>Autor: <?php the_author(); ?></p>
				<p>Categoria: <?php the_category(); ?></p>

			</footer>
			
		</article>
	<?php else: ?>
	  <p>No se encontro el articulo</p>
	<?php endif; ?>

<?php get_footer(); ?>