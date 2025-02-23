<div class="banner-newspaper">
  <div class="banner-newspaper__img">
    <?php if ($image = get_sub_field('imgbg')) : ?>
      <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
  </div>
  <div class="container">
    <div class="banner-newspaper__text">
      <h3><?php the_sub_field('title'); ?></h3>
      <?php if ($link = get_sub_field('button')) : ?>
        <a class="btn__primary" href="<?php echo esc_url($link['url']); ?>" target="<?php echo esc_attr($link['target'] ?: '_self'); ?>">
          <?php echo esc_html($link['title']); ?>
        </a>
      <?php endif; ?>
    </div>
  </div>
</div>
