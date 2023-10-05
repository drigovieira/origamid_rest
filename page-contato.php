<?php
// Template Name: Contato
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section class="container contato">
			<h2 class="subtitulo"><?php the_title(); ?></h2>

			<div class="grid-16">
				<?php the_field('mapa'); ?>
			</div>

            <?php if (have_rows('contato')) : while (have_rows('contato')) : the_row(); ?>
            <div class="grid-1-3 contato-item">
				<h2><?php the_sub_field('titulo'); ?></h2>
				<p><?php the_sub_field('dado1'); ?></p>
				<p><?php the_sub_field('dado2'); ?></p>
				<p><?php the_sub_field('dado3'); ?></p>
			</div>
            <?php endwhile; else: endif; ?>
		</section>
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>