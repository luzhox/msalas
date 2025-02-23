<section class="photoclaim">

  <div class="photoclaim__photo">
  <?php $image = get_sub_field('img');
          if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
    <?php endif; ?>
  </div>
  <div class="container">
    <div class="photoclaim__claim">
      <h2>Transfórmate</h2>
      <h3><?php the_sub_field('claim')?></h3>
      <h4><?php the_sub_field('author')?></h4>
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
</section>