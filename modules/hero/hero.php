<section class="hero">
    <div class="hero-container owl-carousel owl-theme <?php the_sub_field('customClassSlide')?>">
        <?php if (have_rows('sliderhero')) {while (have_rows('sliderhero')) {the_row(); ?>
                <div class="hero-item <?php the_sub_field('customClass')?>" data-aos="fade-in">
                    <div class="overlay" style="background-color:<?php the_sub_field('overlay') ?>"></div>
                    <?php $image = get_sub_field('imagen_de_escritorio');if (!empty($image)) : ?>
                        <img class="hide-on-small-only" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    <?php $image = get_sub_field('imagen_de_mobile');if (!empty($image)) : ?>
                        <img class="hide-tablet-on-up " src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    <div class="hero-item__content container"  data-aos="fade-right" data-aos-delay="100">
                        <?php if (get_sub_field('customClass')==='specialmartin') : ?>
                            <div class="hero-composition">
                            <h2>Juntos podemos</h2>
                            <div class="hero-composition__group">
                                <h1 class="special">SER</h1>
                                <h5 class="first">Pensar</h5>
                                <h5 class="second">Sentir</h5>
                                <h5 class="third">Actuar</h5>
                                <h4>Mejor</h4>
                            </div>
                            </div>

                        <?php endif; ?>


                        <div><?php the_sub_field("texto") ?></div>
                        <?php $link = get_sub_field('boton'); $hayboton = get_sub_field('hay_boton');if ($hayboton) :
                            $link_url = $link['url'];
                            $link_title = $link['title'];
                            $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                            <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                        <?php endif; ?>

                    </div>
                </div>
        <?php }
        } ?>
    </div>
    <div class="vermas">
        <?php
        $link = get_sub_field('ver_mas');if ($link) :
            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
            <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
                <span></span>
                <?php echo esc_html($link_title); ?>
            </a>
        <?php endif; ?>
    </div>
</section>