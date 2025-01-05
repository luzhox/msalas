<section class="header-full">
    <div class="header-full-container">
        <?php if (have_rows('sliderhero')) {
            while (have_rows('sliderhero')) {
                the_row(); ?>
                <div class="header-full-item" data-aos="fade-in">
                    <div class="overlay" style="background-color:<?php the_sub_field('overlay') ?>"></div>
                    <?php
                    $image = get_sub_field('imagen_de_escritorio');
                    if (!empty($image)) : ?>
                        <img class="hide-on-small-only" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    <?php
                    $image = get_sub_field('imagen_de_mobile');
                    if (!empty($image)) : ?>
                        <img class="hide-tablet-on-up " src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                    <div class="header-full-item__content container"  data-aos="fade-right" data-aos-delay="100">
                        <div><?php the_sub_field("texto") ?></div>
                        <?php
                        $link = get_sub_field('boton');
                        $hayboton = get_sub_field('hay_boton');
                        if ($hayboton) :
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

</section>