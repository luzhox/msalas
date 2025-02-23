<div class="prensa-list">
  <div class="prensa-list__img">
    <?php if ($image = get_sub_field('img')) : ?>
      <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
  </div>
  <div class="container">
    <div class="prensa-list__title">
      <h2><?php the_sub_field('title'); ?></h2>
      <div class="prensa-list__filters">
      <div class="content-buttons-filters">
      <button class="content-buttons-filters__item" data-filter="all">Todos</button>
      <?php
        $parent_category_id = get_cat_ID('Prensa Escrita');
        $subcategories = get_terms(array(
            'taxonomy' => 'category',
            'child_of' => $parent_category_id,
            'hide_empty' => false,
        ));

        if (!empty($subcategories) && !is_wp_error($subcategories)) {
            echo '<div class="input-field active">';
            echo '<label for="tipo">Filtrar por tema</label>';
            echo '<select name="tipo" id="" class="content-buttons-filters select-filter" placeholder="Filtrar por tipo">';
            echo '<option class="content-buttons-filters__item" value="all">Todos los temas</option>';
            foreach ($subcategories as $subcategory) {
                echo '<option class="content-buttons-filters__item" value=".' . esc_attr($subcategory->slug) . '">' . esc_html($subcategory->name) . '</option>';
            }
            echo '</select>';
            echo '</div>';
        }
      ?>
        <?php
        $parent_category_id = get_cat_ID('Diarios');
        $subcategories = get_terms(array(
            'taxonomy' => 'category',
            'child_of' => $parent_category_id,
            'hide_empty' => false,
        ));

        if (!empty($subcategories) && !is_wp_error($subcategories)) {
            echo '<div class="input-field active">';
            echo '<label for="tipo">Filtrar por medio</label>';
            echo '<select name="tipo" id="" class="content-buttons-filters select-filter-two" placeholder="Filtrar por tipo">';
            echo '<option class="content-buttons-filters__item" value="all">Todos los temas</option>';
            foreach ($subcategories as $subcategory) {
                echo '<option class="content-buttons-filters__item" value=".' . esc_attr($subcategory->slug) . '">' . esc_html($subcategory->name) . '</option>';
            }
            echo '</select>';
            echo '</div>';
        }
      ?>
      </div>
      </div>
    </div>
    <div class="prensa-list__content" id="ListPrensa">
    <?php
      $args = array(
        'post_type' => 'prensa',
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'DESC'
      );
      $prensa_query = new WP_Query($args);
      if ($prensa_query->have_posts()) :
        while ($prensa_query->have_posts()) : $prensa_query->the_post();
          $categories = get_the_category();
          $category_classes = '';
          if (!empty($categories)) {
              foreach ($categories as $category) {
                  $category_classes .= strtolower(esc_html($category->slug)) . ' ';
              }
          }
          $tags = get_the_tags();
          $tag_classes = '';
          if ($tags) {
              foreach ($tags as $tag) {
                  $tag_name_without_spaces = str_replace(
                      array('ó', '5', '4', '3', '2', '1', 'ñ', ' '),
                      array('o', 'cinco', 'cuatro', 'tres', 'dos', 'una', 'n', ''),
                      $tag->name
                  );
                  $tag_classes .= strtolower($tag_name_without_spaces) . ' ';
              }
          }
      ?>
          <div class="prensa-item mix <?php echo $category_classes . strtolower(get_field('typeSale')) . ' ' . $tag_classes; ?>">
            <div class="prensa-item__img">
              <a href="<?php the_permalink(); ?>"></a>
              <?php if (has_post_thumbnail()) : ?>
                <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
              <?php endif; ?>
            </div>
            <div class="prensa-item__text">
              <?php $obtainCategory = get_the_category(); ?>
              <div class="category">
                <div class="category__brand">
                  <?php
                    $category_images = array(
                      'Somos' => 'comercio.png',
                      'Diario Gestión' => 'gestion.png',
                      'Diario Correo' => 'correo.png',
                      'El Tiempo' => 'eltiempo.png',
                      'El Espectador' => 'el-espectador.png',
                      'Semana Económica' => 'se.png',
                      'LinkedIn' => 'linkedin.png',
                      'El Comercio' => 'comercio.png'
                    );
                    foreach ($obtainCategory as $category) {
                      if (array_key_exists($category->name, $category_images)) {
                        $image = $category_images[$category->name];
                        $alt = $category->name;
                        echo '<img height="30px" width="30px" src="' . get_template_directory_uri() . '/images/' . $image . '" alt="' . $alt . '" />';
                      }
                    }
                  ?>
                </div>
                <p><?php echo $obtainCategory[0]->name; ?></p>
              </div>
              <h3><?php the_title(); ?></h3>
              <a class="btn__primary--border" href="<?php the_permalink(); ?>">Ver artículo completo</a>
            </div>
          </div>
      <?php
        endwhile;
        wp_reset_postdata();
      else :
      ?>
        <p><?php _e('No hay artículos de prensa disponibles.'); ?></p>
      <?php endif; ?>
    </div>
  </div>
</div>

<script src="<?php echo get_stylesheet_directory_uri();?>/vendors/mixitup.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/vendors/mixitup-pagination.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri();?>/vendors/mixitup-multifilter.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    $('.header-filters').on('click', function() {
      $('.list-properties__content__filters__mobile').toggleClass('active');
    });
    $('.closeFilter').on('click', function() {
      $('.list-properties__content__filters__mobile').removeClass('active');
    });
    const selectFilter = $('.select-filter');
    const selectFilterTwo = $('.select-filter-two');

    const containerEl = document.querySelector('#ListPrensa');
    const currentLimit = window.matchMedia("(min-width: 450px)").matches ? 99 : 99;
    const targetSelector = '.mix';

    function setHash(state) {
      const selector = state.activeFilter.selector;
      const newHash = '#' + selector.replace(/^\./g, '');

      if (selector === targetSelector && window.location.hash) {
        history.pushState(null, document.title, window.location.pathname);
      } else if (newHash !== window.location.hash && selector !== targetSelector) {
        history.pushState(null, document.title, window.location.pathname + newHash);
      }
    }

    function getSelectorFromHash() {
      const hash = window.location.hash.replace(/^#/g, '');
      return hash ? '.' + hash : targetSelector;
    }

    const mixer = mixitup(containerEl, {
      multifilter: {
        enable: true,
      },
      animation: {
        effects: 'fade translateZ(-100px)'
      },
      load: {
        filter: getSelectorFromHash()
      },
      callbacks: {
        onMixEnd: setHash,
        onMixStart: function(state, futureState) {
          console.log(futureState.activeFilter.selector);
        }
      },
      pagination: {
        limit: currentLimit
      },
      controls: {
        toggleLogic: 'and'
      }
    });
    selectFilter.on('change', function() {
                const selector = selectFilter.val();

                mixer.filter(selector);
            });
    selectFilterTwo.on('change', function() {
                const selector = selectFilterTwo.val();
                mixer.filter(selector);
            });
  });
</script>