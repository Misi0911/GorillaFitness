<?php get_header(); ?> 
<div class="center-box">
	<main> 
		<?php if(!is_front_page()) { ?>
			<h1>
				<?php the_title(); ?>
			</h1> 
		<?php }?>
				
		<?php if(have_posts()) : ?> 
		<?php while(have_posts()) : the_post(); ?> 
		<?php the_post_thumbnail(); ?> 
		<?php the_content(); ?> 
		<?php endwhile; ?> 
		<?php endif; ?> 
	</main> 
</div>

 <?php get_footer(); ?>