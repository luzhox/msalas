<div class="video-reflection__header">
<img src="<?php the_sub_field('bgheader')?>" alt="<?php the_sub_field('titlereflexion')?>">

  <div class="container">

      <div class="videos-reflections__title">
        <h2><?php the_sub_field('titlereflexion')?></h2>
      </div>
      </div>
</div>

<div class="videos-reflections" style="background-image: url('<?php the_sub_field('bg')?>');">
  <div class="container">
    <div class="videos-reflections__reflections">

      <div class="videos-reflections__content">
        <?php
        $args = array(
          'post_type' => 'reflexiones', // Reemplaza con el nombre de tu custom post type
          'posts_per_page' => -1 // Número de posts a mostrar, -1 para mostrar todos
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) :
          while ($query->have_posts()) : $query->the_post();
        ?>
            <div class="video-reflection" style="background-image: url('<?php echo get_the_post_thumbnail_url(); ?>');">
            <a href="<?php the_field('linkInsta')?>" target="_blank" ></a>

              <div class="img">
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php get_the_title()?>">
                <svg width="62" height="68" viewBox="0 0 62 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_3892_784)">
                <path d="M22.585 22V45L39.585 33.5L22.585 22Z" fill="white"/>
                </g>
                <path d="M30.6829 0C13.7644 0 0 15.2524 0 34C0 52.7476 13.7644 68 30.6829 68C47.6015 68 61.3659 52.7476 61.3659 34C61.3659 15.2524 47.6015 0 30.6829 0ZM30.6829 65.7333C14.8925 65.7333 2.04553 51.4975 2.04553 34C2.04553 16.5025 14.8925 2.26667 30.6829 2.26667C46.4734 2.26667 59.3203 16.5025 59.3203 34C59.3203 51.4975 46.4734 65.7333 30.6829 65.7333Z" fill="white"/>
                <defs>
                <clipPath id="clip0_3892_784">
                <rect width="17" height="23" fill="white" transform="translate(22.585 22)"/>
                </clipPath>
                </defs>
                </svg>
              </div>
              <div class="video-reflection__text">
                <?php the_title()?>
              </div>
            </div>
          <?php
            endwhile;
            wp_reset_postdata();
          else :
          ?>
          <p><?php _e('No hay reflexiones disponibles.'); ?></p>
        <?php endif; ?>
      </div>
    </div>

  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    $(".videoActive").colorbox({iframe:true, innerWidth:'80%', innerHeight:'80%'});

  });
</script>