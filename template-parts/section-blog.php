<section class="section-white section-pad" id="noticias">
	<div class="container">
		<div class="row justify-content-between align-items-end mb-5">
			<div class="col-lg-7 animate-on-scroll">
				<span class="section-label">NOTÍCIAS</span>
				<h2 class="section-title mb-0">Últimas novidades do setor industrial</h2>
			</div>
			<div class="col-lg-auto mt-3 mt-lg-0 animate-on-scroll animate-delay-1">
				<a href="<?php echo esc_url( home_url( '/noticias/' ) ); ?>" class="btn-lwt-outline">
					Ver todas as notícias →
				</a>
			</div>
		</div>

		<?php
		$blog_query = new WP_Query( array(
			'post_type'      => 'post',
			'posts_per_page' => 3,
			'post_status'    => 'publish',
			'orderby'        => 'date',
			'order'          => 'DESC',
		) );
		?>

		<?php if ( $blog_query->have_posts() ) : ?>
			<div class="row g-4">
				<?php
				$delay = 0;
				while ( $blog_query->have_posts() ) :
					$blog_query->the_post();
					$categories = get_the_category();
					$cat_name   = ! empty( $categories ) ? $categories[0]->name : '';
					$delay_cls  = $delay > 0 ? ' animate-delay-' . $delay : '';
				?>
					<div class="col-lg-4 col-md-6 animate-on-scroll<?php echo esc_attr( $delay_cls ); ?>">
						<div class="blog-card">
							<div class="blog-img">
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail( 'medium_large', array( 'loading' => 'lazy' ) ); ?>
								<?php endif; ?>
							</div>
							<div class="blog-body">
								<div class="blog-meta">
									<?php if ( $cat_name ) : ?>
										<span class="blog-category"><?php echo esc_html( $cat_name ); ?></span>
									<?php endif; ?>
									<span><?php echo esc_html( get_the_date( 'd/m/Y' ) ); ?></span>
								</div>
								<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
								<p class="blog-excerpt"><?php echo wp_trim_words( get_the_excerpt(), 18, '...' ); ?></p>
								<a href="<?php the_permalink(); ?>" class="blog-link">Ler mais →</a>
							</div>
						</div>
					</div>
				<?php
					$delay++;
				endwhile;
				wp_reset_postdata();
				?>
			</div>
		<?php else : ?>
			<div class="text-center py-5">
				<p class="text-muted-lwt">Nenhuma notícia publicada ainda. Volte em breve.</p>
			</div>
		<?php endif; ?>

	</div>
</section>
