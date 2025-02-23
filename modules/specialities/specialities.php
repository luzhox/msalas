<div class="specialities" style="background-image: url('<?php the_sub_field('bg') ?>');">
<div class="specialities__menu">
  <div class="specialities__menu__content">
  <?php if (have_rows('specialities')) {
                while (have_rows('specialities')) {the_row(); ?>
  <div class="specialities__menu__item">
    <a href="#<?php the_sub_field('id')?>"><?php the_sub_field('title')?></a>
  </div>
   <?}}?>
   </div>
</div>
  <div class="container">
    <div class="specialities__intro">
      <?php if (get_sub_field('textIntro')) { ?>
        <?php the_sub_field('textIntro') ?>
      <?php } ?>
    </div>
    <div class="specialities__content">
    <?php if (have_rows('specialities')) {
                while (have_rows('specialities')) {the_row(); ?>
    <div  class="specialities__content__section <?php the_sub_field('customClass')?>">
      <div id="<?php the_sub_field('id')?>" class="idPosition"></div>
      <div class="specialities__content__section__img">
      <?php if ($image = get_sub_field('img')) : ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
      <?php endif; ?>
      </div>
      <h3><?php the_sub_field('title')?></h3>
      <div class="text">
      <div class="number"><?php the_sub_field('number')?></div>
        <?php the_sub_field('text')?>
      </div>
    </div>
    <?}}?>

    </div>
  </div>
</div>