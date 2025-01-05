<section class="iniciatives">
  <div class="container">
    <div class="iniciatives__title">
      <h2><?php the_sub_field('title')?></h2>
    </div>
    <div class="iniciatives__content">
      <?php if (have_rows('iniciatives')) {
            while (have_rows('iniciatives')) {
                the_row(); ?>
      <div class="iniciatives__content__item">
        <div class="img">
          <?php $image = get_sub_field('img');
            if( !empty( $image ) ): ?>
              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
            <?php endif; ?>
        </div>
        <div class="text">
          <p><?php the_sub_field('text')?></p>
          <?php
              $link = get_sub_field('link');
              if( $link ):
                  $link_url = $link['url'];
                  $link_title = $link['title'];
                  $link_target = $link['target'] ? $link['target'] : '_self';
                  ?>
                  <a class="btn__primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
              <?php endif; ?>
        </div>
      </div>
      <?php }
        } ?>
    </div>
  </div>
</section>