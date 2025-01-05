<div class="services">
  <div class="services__bg">
    <?php if (get_sub_field('bgService')): ?>
      <img src="<?php the_sub_field('bgService')?>" alt="Servicios - JMartinSalas">
    <?php endif; ?>
  </div>
  <div class="container">
    <div class="services__menu">
      <?php if (have_rows('services')) {
        while (have_rows('services')) {the_row(); ?>
        <div class="services__menu__item">
          <button  data-number="<?php the_sub_field('order')?>" class="storyAction <?php $isactive = get_sub_field('isActive'); if( $isactive ):?>active<?php endif?>" data-idSection="<?php the_sub_field('idSection')?>"><?php the_sub_field('btnText')?></button>
        </div>
      <?}}?>
    </div>
    <div class="services__content">
    <div class="numberService">
      <h4>1</h4>
    </div>
      <?php if (have_rows('services')) {while (have_rows('services')) {the_row(); ?>
        <div class="services__content__item <?php $isactive = get_sub_field('isActive'); if( $isactive ):?>active<?php endif?>" id="<?php the_sub_field('idSection')?>">
          <div class="content">

          <h3><?php the_sub_field('title')?></h3>
          <?php the_sub_field('text')?>
          <div class="buttons" style="margin-bottom: 20px;">
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
                  <a class="btn__primary" href="<?php echo esc_url( $link2_url ); ?>" target="<?php echo esc_attr( $link2_target ); ?>"><?php echo esc_html( $link2_title ); ?></a>
              <?php endif; ?>
          </div>
          <?php if( get_sub_field('haveMetric') ): ?>
            <div class="services__metrics">

          <?php if (have_rows('metrics')) {
            while (have_rows('metrics')) {the_row(); ?>
            <div class="services__metrics__item">
            <h3><?php the_sub_field('prefix')?><span class="numberAnimated"><?php the_sub_field('number')?></span><span class="sufix"><?php the_sub_field('sufix')?></span></h3>
            <p><?php the_sub_field('description')?></p>

            </div>
          <?}}?>
          </div>
          <?php endif; ?>
        </div>
        </div>
      <?}}?>
    </div>


  </div>
  <div class="services__prof">
    <?php $image = get_sub_field('imgprof');if (!empty($image)) : ?>
      <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
    </div>

</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const storyActions = document.querySelectorAll('.storyAction');
    const storyContent = document.querySelectorAll('.services__content__item');
    storyActions.forEach((action) => {
      action.addEventListener('click', (e) => {
        const number = e.target.getAttribute('data-number');
        document.querySelector('.numberService h4').innerHTML = number;
        action.parentElement.parentElement.querySelectorAll('.storyAction').forEach((action) => {
          action.classList.remove('active');
        });
        action.classList.add('active');

        const idSection = action.getAttribute('data-idSection');
        storyContent.forEach((content) => {
          content.classList.remove('active');
          if (content.id === idSection) {
            content.classList.add('active');
          }
        });

      });
    });
  });
</script>