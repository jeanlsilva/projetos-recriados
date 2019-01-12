<?php get_header(); ?>

<section>

	<div class="container">
		<div class="row">
			<div class="col-sm-8 maincontent">
				<?php if(have_posts()): ?>
					<div class="postscontent">
					<?php while(have_posts()): ?>
						<?php the_post(); ?>
						<?php get_template_part('template_parts/post'); ?>
					<?php endwhile; ?>
					</div>
					<div class="page">
					<?php 
					/*
						global $wp_query;
						echo paginate_links(array(
							'current' => max(1, get_query_var('paged')),
							'total' => $wp_query->max_num_pages,
							'show_all' => false,
							'end_size' => 1,
							'mid_size' => 1,
							'prev_next' => true,
							'prev_text' => '<',
							'next_text' => '>',
							'before_page_number' => '[',
							'after_page_number' => ']'
						)); 
					*/
					?>
					
					<!--
						<div class="previous_page">
							<?php previous_posts_link('Página Anterior'); ?>
						</div>
						<div class="next_page">
							<?php next_posts_link('Próxima Página'); ?>
						</div>
					-->
					
					<div class="loadmoreButton">Carregar Mais </div>
						<div style="clear:both"></div>
					</div>
				<?php endif; ?>
			</div>			
			<?php get_sidebar(); ?>			
		</div>
	</div>
</section>

<?php get_footer(); ?>