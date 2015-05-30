<?php get_header(); ?>
	<header class="navbar-inverse">
		<div class="container">

			<nav class="navbar-static">
			  <div class="container-fluid">
			    <!-- Brand and toggle get grouped for better mobile display -->
			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			      <a class="navbar-brand" href="#">
			      	<img alt="Frontline Academy" src="images/logo.png" height="20px" width="140px">
			      </a>
			    </div>

			    <!-- Collect the nav links, forms, and other content for toggling -->
			    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
			      <ul class="nav navbar-nav">
			        <li class="active"><a href="#">Nyheter <span class="sr-only">(current)</span></a></li>
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Kampsportene <span class="caret"></span></a>
			          <ul class="dropdown-menu" role="menu">
			            <li><a href="#">Brasilians Jiu-jitsu (BJJ)</a></li>
			            <li><a href="#">Submission Wrestling (SW)</a></li>
			            <li><a href="#">Mixed Martial Arts (MMA)</a></li>
			            <li><a href="#">Thai Boksing (Muay Thai)</a></li>
			            <li><a href="#">YogaUnião</a></li>
			            <li class="divider"></li>
			            <li><a href="#">Brasilians Jiu-jitsu (10 til 17 år)</a></li>
			            <li><a href="#">Kickboksing (10 til 17 år)</a></li>
			            <li><a href="#">YogaNinjas (5 til 9 år)</a></li>
			          </ul>
			        </li>
			        <li><a href="#">Treningstider</a></li>
			        <li><a href="#">Nettbutikk</a></li>
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Om oss <span class="caret"></span></a>
			          <ul class="dropdown-menu" role="menu">
			            <li><a href="#">Om klubben</a></li>
			            <li><a href="#">Våre fasiliteter</a></li>
			            <li><a href="#">Priser</a></li>
			            <li class="divider"></li>
			            <li><a href="#">Kontakt oss</a></li>
			          </ul>
			        </li>
			      </ul>
			    </div><!-- /.navbar-collapse -->
			  </div><!-- /.container-fluid -->
			</nav>
		</div>
	</header>

	<div class="container">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
		    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
		  </ol>

		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="http://placehold.it/1920x600" alt="Laget">
		    </div>
		    <div class="item">
		      <img src="http://placehold.it/1920x600" alt="Jiu Jitsu">
		    </div>
		    <div class="item">
		      <img src="http://placehold.it/1920x600" alt="PLACEHOLDER">
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
                            <div <?php post_class(); ?>>
                                <h2><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>

                                <?php if (has_post_thumbnail()) : ?>
                                <div class="post-thumb">
                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                                </div>
                                <?php endif ?>

                                <?php the_content(''); ?>
                                <ul class="meta">
                                    <li><?php the_time('F jS, Y') ?></li>
                                </ul>
                            </div>
                        <?php endwhile ?>

                        <div class="pagination">
                            <ul>
                                <li class="older"><?php next_posts_link('Older') ?></li>
                                <li class="newer"><?php previous_posts_link('Newer') ?></li>
                            </ul>
                        </div>

                        <?php else : ?>

                            <h2>Ingen nyheter</h2>

                        <?php endif ?>

				  </div>
				</div>
			</div>
			<div class="col-sm-3 col-xs-12" >
				<div class="panel panel-default">
				  <div class="panel-body">
				  	    <h3>Prøvetime</h3>
				  	    <p>Velkommen til oss for å bli kjent med trenerne og for å få en enkel innføring i kursene vi tilbyr. Vi gleder oss til å få deg på besøk!</p>
				  		<p><a href="#" class="btn btn-primary" role="button">Bestill</a></p>
				  </div>
				</div>
			</div>
		</div>
	</div>
	<?php get_footer(); ?>