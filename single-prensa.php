<style>
		.site-header{
			background: linear-gradient(0deg, rgba(0, 0, 0, 0.2) 0%, rgba(0, 0, 0, 0.2) 100%), radial-gradient(50% 50% at 50% 50%, #1A1936 0%, #0E0D24 100%)!important;
		}

</style>

<?php get_header(); ?>

<?php include('menu.php') ?>

<div class="single single-custom">
	<?php while (have_posts()) : the_post(); ?>
		<?php
		global $post;
		$thumbID = get_post_thumbnail_id($post->ID);
		$imgDestacada = wp_get_attachment_url($thumbID);
		$category = get_the_category();
		$category = $category[0]->cat_name;
		?>
		<div class="container">
			<div class="post">
				<div class="single-content">
					<div class="single-content__title">
						<a class="single-back" href="/prensa">
							<svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M24.606 32.6518L24.0836 32.1137L24.606 32.6518C25.2936 31.9844 25.3099 30.886 24.6425 30.1984L20.1506 25.571L31.9896 25.7469C32.9478 25.7612 33.736 24.996 33.7503 24.0379C33.7645 23.0798 32.9993 22.2915 32.0412 22.2773L20.2021 22.1013L24.8296 17.6094C25.5171 16.942 25.5334 15.8436 24.866 15.156C24.1986 14.4684 23.1002 14.4521 22.4126 15.1196L14.7796 22.529C14.0921 23.1964 14.0757 24.2949 14.7432 24.9824L22.1526 32.6154C22.82 33.3029 23.9185 33.3193 24.606 32.6518ZM2.7524 23.6843C2.92677 11.9496 12.581 2.57802 24.3158 2.7524C36.0505 2.92677 45.4221 12.581 45.2477 24.3158C45.0733 36.0505 35.4191 45.4221 23.6843 45.2477C11.9496 45.0733 2.57802 35.4191 2.7524 23.6843Z" fill="black" stroke="black" stroke-width="1.5" />
							</svg>
						</a>
						<div class="category">
							<?php echo $category; ?>
						</div>
						<h1 data-aos="fade-up" data-aos-offset="100"><?php the_field('titleBlog'); ?></h1>
						<p class="post-date" data-aos="fade-up" data-aos-offset="100">
							<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M17 3H21C21.2652 3 21.5196 3.10536 21.7071 3.29289C21.8946 3.48043 22 3.73478 22 4V20C22 20.2652 21.8946 20.5196 21.7071 20.7071C21.5196 20.8946 21.2652 21 21 21H3C2.73478 21 2.48043 20.8946 2.29289 20.7071C2.10536 20.5196 2 20.2652 2 20V4C2 3.73478 2.10536 3.48043 2.29289 3.29289C2.48043 3.10536 2.73478 3 3 3H7V1H9V3H15V1H17V3ZM4 9V19H20V9H4ZM6 11H8V13H6V11ZM11 11H13V13H11V11ZM16 11H18V13H16V11Z" fill="black" />
							</svg><?php echo get_the_date(); ?>
						</p>
					</div>
					<div class="single-content__img" data-aos="fade-up" data-aos-offset="100">

						<img class="poster" src="<?php the_field('imgBlog'); ?>" alt="">

					</div>
					<div class="single-content__text" data-aos="fade-up" data-aos-offset="100">
						<?php the_content(); ?>
						<?php if (get_field('resumeblog')) : ?>
							<div class="single-content__resume">
								<h5>
									<svg width="12" height="25" viewBox="0 0 12 25" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M0 24.2423C6.64984 24.1134 12.0005 18.7359 12.0005 12.1211C12.0005 5.50634 6.64984 0.128874 0 -1.01136e-09L0 24.2423Z" fill="#F9E80E" />
									</svg>
									Conclusión:
								</h5>
								<p><?php the_field('resumeblog') ?></p>
							</div>
						<?php endif; ?>
					</div>
					<div class="single-content__others-articles">
						<h2>Ver más artículos <strong>relacionados</strong></h2>
						<div class="single-content__others-articles__content">
						<?php $args2 = array(
								'posts_per_page'=> 2,
								'orderby'=> 'date',
								'post_type'=>'prensa',
								'order'=>'DESC'
							);

								$category = get_the_category();
								$category = $category[0]->cat_name;
								?>
						<?php $family2 = new WP_Query($args2);?>
							<?php while($family2->have_posts()): $family2->the_post();?>
							<?php $url2 = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
							<div class="single-content__others-articles__item" data-aos="fade-up" data-aos-offset="100">
								<a href="<?php the_permalink()?>" class="linkArea"></a>
							<div class="img">
									<div class="category">
										<?php echo $category; ?>
									</div>
									<div class="icon">
                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.2154 7.35591C13.2544 7.26434 13.2765 7.16381 13.2777 7.05819C13.2777 7.05662 13.2778 7.05505 13.2778 7.05348C13.279 6.85327 13.2042 6.65255 13.0528 6.4984L7.55025 0.894386C7.24636 0.584885 6.7491 0.580342 6.4396 0.884239C6.1301 1.18814 6.12555 1.68539 6.42945 1.9949L10.6036 6.24598L1.39301 6.16183C0.959272 6.15787 0.604445 6.50627 0.600483 6.94001C0.59652 7.37375 0.944922 7.72858 1.37866 7.73254L10.5892 7.81669L6.33813 11.9908C6.02862 12.2947 6.02408 12.792 6.32798 13.1015C6.63188 13.411 7.12913 13.4155 7.43864 13.1116L13.0423 7.60944C13.0428 7.60889 13.0438 7.60796 13.0443 7.60741C13.1195 7.53318 13.1765 7.44751 13.2154 7.35591Z" fill="black"/>
                </svg>
              </div>
									<img src="<?php echo $url2?>" alt="<?php the_title()?>">
								</div>
								<div class="text">
									<h5><?php the_title();?></h5>
									<a href="<?php the_permalink()?>">Leer artículo</a>
								</div>
							</div>
						<?php endwhile; wp_reset_postdata(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
<?php endwhile; ?>

<?php get_footer(); ?>