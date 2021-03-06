<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div id="main" class="grid-6 first clearfix" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
									<p class="byline vcard"><?php
										printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>.', 'basetheme' ), get_the_time( 'Y-m-j' ), get_the_time( __( 'F jS, Y', 'basetheme' ) ), base_get_the_author_posts_link());
									?></p>


								</header>

								<section class="entry-content clearfix" itemprop="articleBody">
									<?php the_excerpt(); ?>
							</section>

								<footer class="article-footer">
									<?php the_tags( '<span class="tags">' . __( 'Tags:', 'basetheme' ) . '</span> ', ', ', '' ); ?>

								</footer>

								<?php comments_template(); ?>

							</article>

							<?php endwhile; else : ?>

									<article id="post-not-found" class="hentry clearfix">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'basetheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'basetheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the page.php template.', 'basetheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</div>

				</div>

			</div>
		<form class="form-subscribe cf" action="#">
			<div class="wrap cf">
				<h6 class="h3">
					<small>subscribe to</small>
					mailing list
				</h6>
				<input type="text" name="name" placeholder="Your Name">
				<input type="email" name="email" placeholder="Your Email">
				<button type="submit" class="btn">Join</button>
			</div>
		</form>
<?php get_footer(); ?>
