    <div class="services">
        <div class="services__prof">
          <?php $image = get_sub_field('imgprof');if (!empty($image)) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endif; ?>
        </div>
        <div class="services__bg">
          <?php if (get_sub_field('bgService')): ?>
            <img src="<?php the_sub_field('bgService')?>" alt="Servicios - JMartinSalas">
          <?php endif; ?>
        </div>
        <div class="container">
          <div class="services__introduction">
            <h3>Servicios</h3>
            <p>Mi vocación es servir a personas y empresas a ser cada vez mejores </p>
            <p>y ayudarlas a equiparse con el autoconocimiento y las herramientas emocionales </p>
            <p>y organizacionales que los </p>
            <p>lleve a alcanzar su potencial.</p>
            <p>Estoy convencido que las empresas, más allá de sus estructuras y jerarquías son </p>
            <p>un agregado de las personas </p>
            <p>que las componen. Mejora a una persona y mejorará la empresa. Me ilusiona ayudar de forma individual  y colectiva.</p>
          </div>
          <div class="services__content__options">
            <div class="brand-float">
              <svg width="107" height="59" viewBox="0 0 107 59" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g opacity="0.1">
              <path d="M69.0422 45.04C70.0135 46.0114 71.3331 46.4971 73.0193 46.4971V47.221H57.5782V46.4971C59.1269 46.4971 60.3091 46.0206 61.1246 45.0767C61.9402 44.1237 62.3526 42.3092 62.3526 39.6151V2.76743L47.1773 47.8167H46.5175L28.0342 6.87281V30.8545C28.0342 34.7857 28.2724 37.8648 28.7581 40.1007C29.2438 42.3275 30.0868 43.9587 31.2781 44.9667C32.4694 45.9839 34.1464 46.4879 36.3091 46.4879V47.2119H18.2197V46.4879C20.6481 46.4879 22.5175 45.9656 23.8188 44.9301C25.1201 43.8946 26.0273 42.2542 26.5313 40.0274C27.0353 37.8006 27.2919 34.7399 27.2919 30.8545V5.54406C26.5405 4.26113 25.7157 3.31726 24.8085 2.69412C23.9013 2.08014 23.104 1.70443 22.4259 1.56697C21.7386 1.43868 20.9322 1.34704 20.0067 1.30122V0.568115H31.4064L49.23 39.9908L62.3526 0.577279H72.6894V1.31038C71.104 1.31038 69.8486 1.73192 68.9505 2.56582C68.0433 3.40889 67.5943 4.93008 67.5943 7.13856V39.6059C67.5943 42.2542 68.08 44.0687 69.0513 45.04H69.0422Z" fill="white"/>
              <path d="M104.195 30.4971C105.496 32.6415 106.147 34.7949 106.147 36.9576C106.147 38.992 105.661 40.7972 104.69 42.3917C103.81 43.8946 102.289 45.1775 100.154 46.2314C98.0093 47.2944 95.2876 47.8259 91.9703 47.8259C88.653 47.8259 85.8764 47.4868 83.3563 46.7995C80.8363 46.1122 78.8294 45.2692 77.3266 44.252V31.5326H77.9864C78.1146 35.1523 78.5912 38.0848 79.4067 40.3116C80.2223 42.5384 81.6152 44.2337 83.5763 45.3791C85.5373 46.5246 88.314 47.1019 91.8878 47.1019C95.0677 47.1019 97.4961 46.2955 99.1731 44.6827C100.85 43.0699 101.693 41.0905 101.693 38.7537C101.693 37.0767 101.272 35.4364 100.438 33.8511C99.5946 32.2566 98.385 30.9095 96.7905 29.8098L85.3907 22.323C82.8707 20.5544 80.7813 18.7308 79.1318 16.8614C77.4732 14.9828 76.6484 12.8568 76.6484 10.4651C76.6484 8.74227 77.1799 6.97365 78.2429 5.16838C79.2601 3.71134 80.7813 2.48339 82.8157 1.4937C84.85 0.504009 87.2784 0 90.1009 0C92.9233 0 95.6542 0.302405 98.1467 0.898052C100.639 1.4937 102.71 2.20848 104.341 3.05155V14.1856H103.544C103.416 11.1798 102.994 8.7331 102.289 6.82703C101.583 4.93012 100.264 3.43642 98.3483 2.3551C96.4239 1.27377 93.6748 0.733104 90.1009 0.733104C88.598 0.733104 87.1776 1.10882 85.8306 1.86025C84.4835 2.61168 83.393 3.60137 82.5499 4.83849C81.7069 6.0756 81.2945 7.42268 81.2945 8.87972C81.2945 10.3368 81.7343 11.7022 82.6232 13.1226C83.503 14.5338 84.8959 15.8625 86.7928 17.0997L98.0551 24.5223C100.841 26.3734 102.884 28.3803 104.186 30.5155L104.195 30.4971Z" fill="white"/>
              <path d="M11.7499 5.56243C11.6216 3.83963 11.2459 2.6575 10.6227 2.01604C9.99958 1.37457 8.8816 1.05384 7.24128 1.05384V0.394043H22.2791V1.05384C20.7304 1.05384 19.5024 1.55785 18.6044 2.57503C17.6972 3.59221 17.2481 5.1134 17.2481 7.14776V34.9782C17.2481 42.3093 15.9102 47.7984 13.2344 51.4456C10.5586 55.0928 6.46235 57.3104 0.945744 58.1076L0.744141 57.4479C4.09809 56.2107 6.81058 54.0023 8.86327 50.8224C10.916 47.6426 11.9423 42.7858 11.9423 36.2428V15.2394C11.9423 10.5109 11.8782 7.28522 11.7407 5.56243H11.7499Z" fill="white"/>
              </g>
              </svg>
            </div>
            <div class="services__menu">
              <?php if (have_rows('services')) {
                while (have_rows('services')) {the_row(); ?>
                <div class="services__menu__item">
                  <button  data-number="<?php the_sub_field('order')?>" class="storyAction " data-idSection="<?php the_sub_field('idSection')?>"><?php the_sub_field('btnText')?></button>
                </div>
              <?}}?>
            </div>
          </div>
        </div>
    </div>

    <div class="services__content">
      <?php if (have_rows('services')) {while (have_rows('services')) {the_row(); ?>
        <div class="services__content__item " id="<?php the_sub_field('idSection')?>">
          <div class="numberService">
            <h4><?php the_sub_field('order')?></h4>
          </div>
          <div class="buttonCancel">
            <button class="buttonCloseAction" ><img src="<?php echo get_template_directory_uri()?>/images/cancel.png" alt=""></button>
          </div>
          <div class="content">
            <h3><?php the_sub_field('title')?></h3>
            <?php the_sub_field('text')?>
            <div class="buttons" style="margin-bottom: 20px;">
              <?php $link = get_sub_field('link');
                if( $link ):
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a class="btn__primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
              <?php endif; ?>
              <?php $link2 = get_sub_field('linkTwo');
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
                <?php if (have_rows('metrics')) { while (have_rows('metrics')) {the_row(); ?>
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

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const buttonCancel = document.querySelectorAll('.buttonCloseAction');
    const storyActions = document.querySelectorAll('.storyAction');
    const storyContent = document.querySelectorAll('.services__content__item');

    buttonCancel.forEach((button) => {
      button.addEventListener('click', () => {
        document.querySelector('.numberService h4').innerHTML = 1;
        storyContent.forEach((content) => {
          content.classList.remove('active');
        });
        storyActions.forEach((action) => {
          action.classList.remove('active');
        });
      });
    });
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