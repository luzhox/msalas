<div class="book" >
  <div class="book__img" data-aos="fade-right">
    <?php if (get_sub_field('img')): ?>
      <img src="<?php the_sub_field('img')?>" alt="Mis Libros - Jose Martin Salas">
    <?php endif; ?>
  </div>
  <div class="container">
      <div class="book__text" data-aos="fade-left">
        <h4>Mis Libros</h4>
        <h3><?php the_sub_field('title')?></h3>
        <?php the_sub_field('text')?>
        <div class="buttons">
          <?php
            $link = get_sub_field('link');
            if( $link ):
                $link_url = $link['url'];
                $link_title = $link['title'];
                $link_target = $link['target'] ? $link['target'] : '_self';
                ?>
                <a class="btn__primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
            <?php endif; ?>
            <?php
            $link2 = get_sub_field('linkTwo');
            if( $link2 ):
                $link2_url = $link2['url'];
                $link2_title = $link2['title'];
                $link2_target = $link2['target'] ? $link2['target'] : '_self';
                ?>
                <a class="btn__primary videoActive" href="<?php echo esc_url( $link2_url ); ?>" target="<?php echo esc_attr( $link2_target ); ?>"><?php echo esc_html( $link2_title ); ?></a>
            <?php endif; ?>
        </div>
      </div>
  </div>
</div>