<div class="contact" data-aos="fade-in" style="background-color:<?php the_sub_field('background')?>;">
  <div class="container">
      <h2><?php the_sub_field('title')?></h2>
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