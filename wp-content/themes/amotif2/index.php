			<?php get_header(); ?>
			<div id="wrapper">
				<div id="main_center">
					<section id="largeBox" class="whiteBox">
						<div class="cycle-slideshow">
							<?php if ( function_exists( 'soliloquy' ) ) { soliloquy( 'forside', 'slug' ); } ?>
						</div> <!-- cycle-slideshow -->
					</section>
					<section id="news" class="whiteBox">
						<?php while ( have_posts() ) : the_post() ?>
							<div id="post">
								<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
								
								<div id="entry">
									<?php the_post_thumbnail(); ?>
									<?php the_content(); ?>
									
									<p class="postmetadata">
									<span id="underInfo">
					                <?php _e('Skrevet av&#58; '); ?><?php  the_author(); ?><?php edit_post_link('[Endre]', ' '); ?><br />
					                </span></p><br />
								</div> <!-- entry -->
							</div> <!-- post -->
						<?php endwhile; ?>
						<?php /* Bottom post navigation */ ?>
						<?php global $wp_query; $total_pages = $wp_query->max_num_pages; if ( $total_pages > 1 ) { ?>
		                <div id="nav-under" class="navigation">
		                    <div class="nav-previous"><?php next_posts_link(__( 'Eldre poster', 'your-theme' )) ?></div>
		                    <div class="nav-next"><?php previous_posts_link(__( 'Nyere poster', 'your-theme' )) ?></div>
		                </div><!-- nav-under -->
						<?php } ?>
					</section>
					<?php get_sidebar(calendar); ?>
					<?php get_sidebar(sponsors); ?>
					<div style="clear:both"></div>
				</div> <!-- main_center -->
			</div> <!-- wrapper -->
		
		<?php get_footer(); ?>