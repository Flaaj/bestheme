<?php get_header(); ?>
<div class="content-area">
    <main>
        <div class="container">
            <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
            ?>
                    <article >
                        <h2>
                            <?php echo the_title(); ?>
                        </h2>
                        <p>
                            <?php echo the_content(); ?>
                        </p>
                    </article>
                <?php
                endwhile;
            else :
                ?>
                <p>Nothing to display</p>
            <?php
            endif;
            ?>
        </div>
    </main>
</div>
<?php get_footer(); ?>