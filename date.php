<?php get_header(); ?>

<section class="sub-fv">
    <div class="sub-fv-wrapper">
        <div class="sub-fv-bg">
            <img src="<?php echo get_template_directory_uri(); ?>/images/assets/sub-fv.jpg" alt="FV画像">
        </div>
        <div class="sub-fv-title contents-wrapper">
            <h1 class="sub-fv-title-en">
                topics
                <span class="sub-fv-title-ja"><?php the_archive_title(); ?></span>
            </h1>
        </div>
    </div>
</section>

<section class="topics">
    <div class="topics-wrapper contents-wrapper fade-in">
        <div class="topics-header-content">
            <ul class="topics-tab-lists">
                <?php
                $categories = get_categories();
                foreach ($categories as $category) :
                    $cat_name = esc_html($category->name);
                    $cat_slug = esc_attr($category->slug);
                    $cat_link = esc_url(get_category_link($category->term_id));
                ?>
                    <li class="topics-tab-list topics-item-meta">
                        <a href="<?php echo $cat_link; ?>" class="topics-item-category <?php echo $cat_slug; ?>">
                            <?php echo $cat_name; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <div class="archive-select">
                <select class="archive-dropdown" name="archive-dropdown" onChange='document.location.href=this.options[this.selectedIndex].value;'>
                    <option value="<?php echo esc_url(home_url('/topics/')); ?>">アーカイブ ALL</option>
                    <?php
                    wp_get_archives(array(
                        'type' => 'monthly',
                        'format' => 'option',
                    ));
                    ?>
                </select>
            </div>
        </div>

        <?php if (have_posts()) : ?>
            <div class="topics-body">
                <ul class="topics-body-lists">
                    <?php while (have_posts()) : the_post(); ?>
                        <li class="topics-body-list">
                            <a href="<?php the_permalink(); ?>">
                                <div class="topics-body-img">
                                    <?php if (get_the_post_thumbnail()) : ?>
                                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title_attribute(); ?>">
                                    <?php else : ?>
                                        <img class="noimage" src="<?php echo esc_url(get_theme_file_uri('/images/assets/noimage.jpg')); ?>" alt="noimage">
                                    <?php endif; ?>
                                </div>
                                <div class="topics-body-item topics-item">
                                    <div class="topics-item-meta">
                                        <p class="topics-item-date"><?php the_time('Y.m.d'); ?></p>
                                        <?php
                                        $cat = get_the_category();
                                        if (!empty($cat)) {
                                            $cat_name  = $cat[0]->cat_name;
                                            $cat_color = $cat[0]->slug;
                                            echo '<p class="topics-item-category ' . esc_attr($cat_color) . '">' . esc_html($cat_name) . '</p>';
                                        }
                                        ?>
                                    </div>
                                    <p class="topics-item-title"><?php the_title(); ?></p>
                                </div>
                            </a>
                        </li>
                    <?php endwhile; ?>
                </ul>

                <div class="pagenavi">
                    <div class="pagenavi__inner">
                        <?php wp_pagenavi(); ?>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <p>記事が見つかりませんでした。</p>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>