<div class="recomendations" data-aos="fade-up">
  <div class="container">
    <div class="recomendations__title">
      <h3><?php the_sub_field('title')?></h3>
      <?php the_sub_field('description')?>
    </div>
    <div class="recomendations__content">
      <?php if (have_rows('recomendations')) {while (have_rows('recomendations')) {the_row(); ?>
        <div class="recomendations__content__item">
          <div class="content">
            <div class="img">
            <?php
                    $image = get_sub_field('poster');
                    if (!empty($image)) : ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
            </div>
            <h3><?php the_sub_field('nombre_del_libro')?></h3>

          </div>
        </div>
      <?}}?>
    </div>
  </div>
</div>