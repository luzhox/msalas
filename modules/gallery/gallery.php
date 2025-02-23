<div class="gallery">
  <div class="gallery__bg">
    <img src="<?php the_sub_field('background')?>" alt="<?php the_sub_field('title')?>" class="gallery__bg">
  </div>
  <div class="container">
    <div class="gallery__title">
      <h2><?php the_sub_field('title')?></h2>
    </div>
    <div class="gallery__content">
    <?php if (have_rows('gallery')) {
            while (have_rows('gallery')) {
                the_row(); ?>
                <div class="gallery__content__item">
                  <a rel="<?php the_sub_field('name')?>" class="<?php $isVideo=get_sub_field('isVideo');
                  if($isVideo){
                    echo 'gallery__content__item__link--video';
                  }else{
                    echo 'gallery__content__item__link';
                  }?> " href="<?php the_sub_field('file')?><?php the_sub_field('youtube')?>" class="gallery__content__item__link"></a>
                  <div class="gallery__content__item__img">
                    <img src="<?php the_sub_field('image')?>" alt="<?php the_sub_field('name')?>" title="<?php the_sub_field('name')?>" class="gallery__content__item__img">
                  </div>

                </div>

                <?php }}?>
    </div>

  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    $(".gallery__content__item__link--video").colorbox({iframe:true, innerWidth:640, innerHeight:390});
    $(".gallery__content__item__link").colorbox({rel:'gallery', maxWidth:'100%', maxHeight:'100%'});

  });
</script>