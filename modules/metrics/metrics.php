<section class="metrics" data-aos="fade-in">
  <div class="container">
    <div class="metrics__title">
      <h2><?php the_sub_field('title')?></h2>
    </div>
    <div class="metrics__content">
    <?php if (have_rows('metrics')) {
            while (have_rows('metrics')) {
                the_row(); ?>
      <div class="metrics__content__item">
        <h3><?php the_sub_field('prefix')?><span class="numberAnimated"><?php the_sub_field('number')?></span><span class="sufix"><?php the_sub_field('sufix')?></span></h3>
        <p><?php the_sub_field('text')?></p>
      </div>
      <?php }
        } ?>
    </div>

  </div>
  <div class="metrics__img">
    <?php $image = get_sub_field('imgdesktop');
          if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
    <?php endif; ?>
  </div>
</section>