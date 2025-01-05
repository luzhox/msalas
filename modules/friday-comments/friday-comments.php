<div class="friday-comments">
  <div class="friday-comments__bg">
    <?php if (get_sub_field('imgposter')): ?>
      <img src="<?php the_sub_field('imgposter')?>" alt="Reflexiones de los viernes - Jose Martin Salas">
    <?php endif; ?>
  </div>
  <div class="container">
    <div class="friday-comments__title" data-aos="fade-right">
      <h3><?php the_sub_field('title')?></h3>
    </div>
    <div class="friday-comments__videos" data-aos="fade-left">
    <?php if (have_rows('reflextions')) {while (have_rows('reflextions')) {the_row(); ?>

      <div class="friday-comments__videos__item">
        <a href="<?php the_sub_field('video')?>" class="videoActive"></a>
        <div class="img">
          <img src="<?php the_sub_field('img')?>" alt="Recomendaciones - Jose Martin Salas">
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
        <div class="friday-comments__videos__item__content">
          <h3><?php the_sub_field('title')?></h3>
        </div>
      </div>
      <? }}?>

    </div>
  </div>
</div>