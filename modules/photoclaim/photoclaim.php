<section class="photoclaim">
  <div class="photoclaim__photo">
  <?php $image = get_sub_field('img');
          if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
    <?php endif; ?>
  </div>
  <div class="container">
    <div class="photoclaim__claim">
      <h3><?php the_sub_field('claim')?></h3>
      <h4><?php the_sub_field('author')?></h4>
    </div>
  </div>
</section>