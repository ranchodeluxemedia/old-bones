<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap clearfix">

						<div class="subsection cf">
							<div class="grid-2">
								<h3>Site Test</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio incidunt aut eveniet, non officiis, quas laudantium minus voluptas vel veniam corporis cupiditate, doloremque atque assumenda.</p>
								<a href="#" class="btn">Test Link</a>
							</div>
							<div class="grid-2">
								<h3>Site Test</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio incidunt aut eveniet, non officiis, quas laudantium minus voluptas vel veniam corporis cupiditate, doloremque atque assumenda.</p>
								<a href="#" class="btn">Test Link</a>
							</div>
							<div class="grid-2">
								<h3>Site Test</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio incidunt aut eveniet, non officiis, quas laudantium minus voluptas vel veniam corporis cupiditate, doloremque atque assumenda.</p>
								<a href="#" class="btn">Test Link</a>
							</div>
						</div>

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

<?php get_footer(); ?>