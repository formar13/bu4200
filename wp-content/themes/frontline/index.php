<?php get_header(); ?>

	<div class="container">

        <?php
        echo do_shortcode("[metaslider id=141]");
        ?>

		<div class="row">
			<div class="col-sm-9 col-xs-12">
				<div class="panel panel-default panel-frontsiden">
				    <div class="panel-body">

                        <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <article <?php post_class('postArticle'); ?>>
                                <h2 class="headerFront"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>

                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="post-thumb">
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                                    </div>
                                <?php endif ?>

                                <?php the_content(''); ?>

                                <p id="postmeta">Postet: <?php the_time('j/n Y'); ?></p>
                            </article>
                        <?php endwhile ?>

                        <div class="pagination">
                            <?php next_posts_link('Eldre poster'); ?>
                            <?php previous_posts_link('Nyere poster'); ?>
                        </div>

                        <?php else : ?>

                            <h2>Ingen nyheter</h2>

                        <?php endif ?>

				  </div>
				</div>
			</div>

            <?php if(dynamic_sidebar('forside_widgetarea')) : else : endif ?>
            <?php if(dynamic_sidebar('sosiale_medier_widgetarea')) : else : endif ?>

		</div>
	</div>
	<?php get_footer(); ?>