<?php get_header(); ?>
<div class="contenu">
    <main>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <section <?php post_class("section"); ?>>
                    <?php the_title('<h2 class="title">', '</h2>'); ?>
                    <?php
                    if (has_post_thumbnail()) :
                        the_post_thumbnail("fullscreen");
                    endif;
                    ?>
                    <?php the_content(); ?>
                    <?php edit_post_link(__('Edit', 'mytheme'), "<hr>", "", '', "button is-danger"); ?>
                </section>
            <?php endwhile; ?>
        <?php endif; ?>
        <!-- <h2>Nos collaborateurs</h2>
        <ul class="collaborateurs">
            <?php while ($collabos->have_posts()) : $collabos->the_post(); ?>
                <li class="collaborateurs-item">

                    <a href="" class="collaborateur-item-link">
                        <h3>nom et prénom</h3>
                    </a>

                </li>
            <?php endwhile; ?>
        </ul> -->
    </main>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>