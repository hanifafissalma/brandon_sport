<div class="breadcrumbs" itemscope itemtype="https://schema.org/BreadcrumbList">
    <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a itemprop="item" href="<?php echo home_url(); ?>">
           <span itemprop="name"><?php bloginfo('name'); ?></span>
        </a>
        <meta itemprop="position" content="1" />
    </span>
    <span class="breadcrumbs__separator"> › </span>
    <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
        <a itemprop="item" href="<?php echo home_url() . '/' . get_post_type( get_the_ID()->name ); ?>">
            <span itemprop="name"><?php echo ucfirst(get_post_type( get_the_ID()->name )); ?></span>
        </a>
        <meta itemprop="position" content="2" />
    </span>
    <span class="breadcrumbs__separator"> › </span>
    <?php 
        if ( is_singular('produk') ) {
            $terms = get_the_category($post->ID, '');
            foreach ($terms as $term) {
                $term_link = get_category_link($term, '');
                if (is_wp_error($term_link))
                    continue;
                ?>
                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a itemprop="item" href="<?php echo $term_link; ?>">
                        <span itemprop="name"><?php echo $term->name; ?></span>
                    </a>
                </span>

                <span class="breadcrumbs__separator"> › </span>
                <?php
            }

            $terms_of_post = get_the_term_list( $post->ID, 'kategori_produk', '<span>','</span> <span class="breadcrumbs__separator"> › </span> <span>', '<!-- span class="breadcrumbs__separator"> › </span -->', '</span>' );
            echo $terms_of_post;
        }
    ?>
    <!-- <span class="current">
        <?php the_title(); ?>
    </span> -->
</div>