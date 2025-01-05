<div class="principles">
  <div class="container">
    <div class="principles__title">
      <h2><?php the_sub_field('title')?></h2>
    </div>
    <div class="principles__content">
      <?php if (have_rows('principles')) {
            while (have_rows('principles')) {
                the_row(); ?>
      <div class="principles__content__item" data-aos="fade-up">
        <div class="text">
          <h3><?php the_sub_field('number')?></h3>
          <p><?php the_sub_field('text')?></p>
        </div>
      </div>
      <?php }
        } ?>
    </div>
  </div>
</div>