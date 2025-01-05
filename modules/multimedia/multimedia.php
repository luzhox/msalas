<div class="multimedia">
  <div class="container">
    <div class="multimedia__title">
      <h3><?php the_sub_field('title')?></h3>
    </div>
    <div class="multimedia__content">
      <?php if (have_rows('multimedia')) {while (have_rows('multimedia')) {the_row(); ?>
        <div class="multimedia__content__item">
          <div class="content">
            <?php if (get_sub_field('idpodcast')): ?>
              <a href="<?php the_sub_field('link')?>" target="_blank"></a>
            <?php endif; ?>
            <?php if (!get_sub_field('idpodcast')): ?>
              <a href="<?php the_sub_field('video')?>" class="videoActive"></a>
            <?php endif; ?>
          <div class="multimedia__img" data-aos="fade-right">
          <?php if (get_sub_field('idpodcast')): ?>
            <svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_3833_740)">
            <path d="M34 0C15.2524 0 0 15.2524 0 34C0 52.7476 15.2524 68 34 68C52.7476 68 68 52.7476 68 34C68 15.2524 52.7476 0 34 0ZM34 65.7333C16.5025 65.7333 2.26667 51.4975 2.26667 34C2.26667 16.5025 16.5025 2.26667 34 2.26667C51.4975 2.26667 65.7333 16.5025 65.7333 34C65.7333 51.4975 51.4975 65.7333 34 65.7333Z" fill="white"/>
            <path d="M34 16C35.4776 16 36.8947 16.5822 37.9396 17.6186C38.9844 18.655 39.5714 20.0606 39.5714 21.5263V32.5789C39.5714 34.0446 38.9844 35.4503 37.9396 36.4866C36.8947 37.523 35.4776 38.1053 34 38.1053C32.5224 38.1053 31.1052 37.523 30.0604 36.4866C29.0156 35.4503 28.4286 34.0446 28.4286 32.5789V21.5263C28.4286 20.0606 29.0156 18.655 30.0604 17.6186C31.1052 16.5822 32.5224 16 34 16ZM47 32.5789C47 39.0816 42.1529 44.4421 35.8571 45.3447V51H32.1429V45.3447C25.8471 44.4421 21 39.0816 21 32.5789H24.7143C24.7143 35.0217 25.6926 37.3645 27.434 39.0918C29.1754 40.8191 31.5373 41.7895 34 41.7895C36.4627 41.7895 38.8246 40.8191 40.566 39.0918C42.3074 37.3645 43.2857 35.0217 43.2857 32.5789H47Z" fill="white"/>
            </g>
            <defs>
            <clipPath id="clip0_3833_740">
            <rect width="68" height="68" fill="white"/>
            </clipPath>
            </defs>
            </svg>
            <?php endif; ?>
            <?php if (!get_sub_field('idpodcast')): ?>
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
            <?php endif; ?>

            <div class="tag"><?php the_sub_field('tag')?></div>
            <?php if (get_sub_field('img')): ?>
              <img src="<?php the_sub_field('img')?>" alt="Mis Videos - Jose Martin Salas">
            <?php endif; ?>
          </div>
            <h3><?php the_sub_field('title')?></h3>

          </div>

        </div>
      <?}}?>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    $(".videoActive").colorbox({iframe:true, innerWidth:640, innerHeight:390});

  });
</script>