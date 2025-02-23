<div class="publications">
  <div class="container">
    <div class="publications__title">
      <h3><?php the_sub_field('title')?></h3>
      <div class="publications__title__menu">
        <button class="activepub active" data-filter="all">Todos</button>
         <?php if (have_rows('menu')) {
            while (have_rows('menu')) {
                the_row(); ?>
            <button class="activepub" data-filter="<?php the_sub_field('cat')?>"><?php the_sub_field('name')?></button>
          <?}}?>
      </div>
    </div>
    <div class="publications__articles">
    <?php $args2 = array(
								'posts_per_page'=> 3,
								'orderby'=> 'date',
                'post_type' => 'post',
								'order'=>'DESC');

								?>
						<?php $family2 = new WP_Query($args2);?>
							<?php while($family2->have_posts()): $family2->the_post();?>
							<?php $url2 = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>
							<div class="single-content__others-articles__item" data-aos="fade-up" data-aos-offset="100">
								<a href="<?php the_permalink()?>" class="linkArea"></a>
							<div class="img">

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