<?php get_header(); ?>
<div id="wrapper">
	<div id="main_center">
		<div id="news" class="whiteBox">
			
			<?php if (have_posts()) : while (have_posts()) : the_post();?>
	       		<h2><?php the_title();?></h2>
		   		<div class="entrytext">
	            <?php the_content('<p class="serif">Read the rest of this page »</p>'); ?>
				</div>
			<?php endwhile; endif; ?>
			<div id="editSite">
				<?php edit_post_link('[Endre innholdet]', '<p>', '</p>'); ?>
			</div>
		</div> <!-- news -->
		<?php get_sidebar(sponsors); ?>
		<div style="clear:both"></div>
	</div> <!-- main_center -->
</div> <!-- wrapper -->

<?php get_footer(); ?>