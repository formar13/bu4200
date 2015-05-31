<?php get_header(); ?>

	<div class="container">
		<div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="http://placehold.it/1920x700" alt="Laget">
		    </div>
		    <div class="item">
		      <img src="http://placehold.it/1920x700" alt="Jiu Jitsu">
		    </div>
		    <div class="item">
		      <img src="http://placehold.it/1920x700" alt="PLACEHOLDER">
		    </div>
		  </div>

		  <!-- Controls -->
		  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>

		<div class="row">
			<div class="col-sm-9 col-xs-12">
				<div class="panel panel-default">
				    <div class="panel-body">

                        <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <article <?php post_class('postArticle'); ?>>
                                <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>

                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="post-thumb">
                                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                                    </div>
                                <?php endif ?>

                                <?php the_content(''); ?>

                                <p id="postmeta">Postet: <?php the_date(); ?></p>
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

		</div>
	</div>
	<?php get_footer(); ?>