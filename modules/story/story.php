<div class="story">
  <div class="story__bg">
    <?php if (get_sub_field('bg')): ?>
      <img src="<?php the_sub_field('bg')?>" alt="Mi historia - JMartinSalas">
    <?php endif; ?>
  </div>
  <div class="container">
    <div class="story__menu">
    <?php if (have_rows('story')) {
      while (have_rows('story')) {the_row(); ?>
      <div class="story__menu__item">
        <button  data-number="<?php the_sub_field('number')?>" class="storyAction <?php $isactive = get_sub_field('isActive'); if( $isactive ):?>active<?php endif?>" data-idSection="<?php the_sub_field('idSection')?>"><?php the_sub_field('btnText')?></button>
      </div>
    <?}}?>

    </div>
    <div class="story__content">
    <?php if (have_rows('story')) {while (have_rows('story')) {the_row(); ?>
      <div class="story__content__item <?php $isactive = get_sub_field('isActive'); if( $isactive ):?>active<?php endif?>" id="<?php the_sub_field('idSection')?>">
        <div class="content">
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
                  <a class="btn__primary" href="<?php echo esc_url( $link2_url ); ?>" target="<?php echo esc_attr( $link2_target ); ?>"><?php echo esc_html( $link2_title ); ?></a>
              <?php endif; ?>
          </div>
        </div>

      </div>
      <?}}?>

    </div>
    <div class="numberStory">
      <h4>1</h4>
    </div>
  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const storyActions = document.querySelectorAll('.storyAction');
    const storyContent = document.querySelectorAll('.story__content__item');
    storyActions.forEach((action) => {

      action.addEventListener('click', (e) => {
        const number = e.target.getAttribute('data-number');
        document.querySelector('.numberStory h4').innerHTML = number;
        const idSection = e.target.getAttribute('data-idSection');
        storyActions.forEach((action) => {
          action.classList.remove('active');
        });
        storyContent.forEach((content) => {
          content.classList.remove('active');
        });
        e.target.classList.add('active');
        document.getElementById(idSection).classList.add('active');
      });
    });
  });
</script>