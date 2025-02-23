<div class="what-is" data-aos-offset="-400" data-aos="fade-in">
  <div class="container">
    <div class="what-is__content" data-aos-offset="-400" data-aos="fade-right" data-aos-delay="100">
      <?php the_sub_field('text')?>
    </div>
  </div>
  <div class="what-is__img">
    <?php $image = get_sub_field('imgdesktop');
          $imagemob = get_sub_field('imgmob');
          if( !empty( $image ) ): ?>
      <picture>
            <source media="(min-width: 768px)" srcset="<?php echo esc_url($image['url']); ?>">
            <img src="<?php echo esc_url($imagemob['url']); ?>" alt="<?php echo esc_attr($imagemob['alt']); ?>">
      </picture>
    <?php endif; ?>
  </div>
</div>