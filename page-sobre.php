<?php
// Template Name: Sobre
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section class="container sobre">
			<h2 class="subtitulo"><?php the_title(); ?></h2>

			<div class="grid-8">
				<img src="<?php the_field('about_image'); ?>" alt="<?php the_field('about_image_description'); ?>">
			</div>

			<div class="grid-8">
                <?php if(have_rows('about_content_repeater')): while (have_rows('about_content_repeater')) : the_row() ?>
                    <h2><?php the_sub_field('titulo_sobre'); ?></h2>
                    <p><?php the_sub_field('texto_sobre'); ?></p>
                <?php endwhile; else: endif; ?>
			</div>
		</section>
<?php endwhile; else: endif; ?>
<?php get_footer(); ?>