<?php get_header(); ?>
<?php if (is_user_logged_in()) { ?>
<main class="container-fluid" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
    <div class="row">
        <section class="sdk-main-container col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="container">
                <div class="row">
                    <div class="sdk-main-nav col-3">
                        <div class="sku-main-nav-sticker">
                            <?php $array_topics = get_terms('topics', array('hide_empty' => 0, 'order' => 'ASC', 'orderby' => 'order')); ?>
                            <ul class="sdk-main-nav-container">
                                <?php $i = 1; ?>
                                <?php foreach ($array_topics as $topic) { ?>
                                <?php if ($i == 1) { ?>
                                <?php $current_cat = $topic->term_id;  ?>
                                <?php } ?>
                                <li>
                                    <a href="<?php echo get_term_link($topic, 'topics'); ?>"><?php echo $topic->name; ?></a>
                                </li>
                                <?php $i++; } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="sdk-main-content col-xl-7 col-lg-7 col-md-9 col-sm-9 col-9">
                        <?php $array_posts = new WP_Query(array('post_type' => 'articles', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'date', 'tax_query' => array(array('taxonomy' => 'topics', 'field' => 'term_id', 'terms' => $current_cat)))); ?>
                        <?php if ($array_posts->have_posts()) : ?>
                        <?php $defaultatts = array('class' => 'img-fluid', 'itemprop' => 'image'); ?>
                        <?php while ($array_posts->have_posts()) : $array_posts->the_post(); ?>
                        <article id="<?php echo strtolower(urlencode(get_the_title())); ?>" class="topics-article-item col-12 <?php echo join(' ', get_post_class()); ?>" role="article">
                            <h2 rel="bookmark" title="<?php the_title_attribute(); ?>"><a href="#<?php echo strtolower(urlencode(get_the_title())); ?>" title=""><i class="fa fa-chain"></i></a> <?php the_title(); ?></h2>
                            <p><?php the_content(); ?></p>
                        </article>
                        <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
                    </div>
                    <div class="sdk-affix-nav col-xl-2 col-lg-2 col-2 d-xl-flex d-lg-flex d-md-none d-sm-none d-none">
                        <div class="sku-affix-sticker">
                            <h4><i class="fa fa-bars"></i> <?php _e('Contents', 'streann_sdk'); ?></h4>
                            <ul>
                                <?php $array_posts = new WP_Query(array('post_type' => 'articles', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'date', 'tax_query' => array(array('taxonomy' => 'topics', 'field' => 'term_id', 'terms' => $current_cat)))); ?>
                                <?php if ($array_posts->have_posts()) : ?>
                                <?php $defaultatts = array('class' => 'img-fluid', 'itemprop' => 'image'); ?>
                                <?php while ($array_posts->have_posts()) : $array_posts->the_post(); ?>
                                <li>
                                    <a data-scroll href="#<?php echo strtolower(urlencode(get_the_title())); ?>" title=""><?php the_title(); ?></a>
                                </li>
                                <?php endwhile; ?>
                                <?php endif; ?>
                                <?php wp_reset_query(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php } ?>
<?php get_footer(); ?>
