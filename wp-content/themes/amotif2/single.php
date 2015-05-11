			<?php get_header(2); ?>
			<div id="wrapper">
				<div id="main_center">
					<section id="news" class="whiteBox">
						<?php while ( have_posts() ) : the_post() ?>
							<div id="post">
								<h3><?php the_title(); ?></h3>
								
								<div id="entry">
									<?php the_post_thumbnail(); ?>
									<?php the_content(); ?>
									
									<p class="postmetadata">
									<span id="underInfo">
					                <?php _e('Skrevet av&#58 '); ?><?php  the_author(); ?><?php edit_post_link('[Endre]', ' '); ?><br />
					                </span></p>
								</div>
							</div>
						<?php endwhile; ?>
					</section>
					<?php get_sidebar(sponsors); ?>
					<div style="clear:both"></div>
				</div> <!-- main_center -->
			</div> <!-- wrapper -->

<?php get_footer(); ?>