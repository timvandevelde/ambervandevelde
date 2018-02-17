<?php get_header(); ?>
<section id="content" role="main">
  <div class="vertical-name">Amber van de Velde</div>
  <header class="header category-header scroll-section dark-section">
    <div class="page-width">
      <h1 class="entry-title"><?php single_cat_title(); ?></h1>
      <?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?>
    </div>
  </header>
  <section class="articles">
    <div class="page-width masonry-articles scroll-section">
      <div class="gutter-sizer"></div>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('masonry-article'); ?>>
          <figure>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
              <?php if ( has_post_thumbnail() ) { the_post_thumbnail(large); } ?>
            </a>
          </figure>
          <div class="description">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
              <h4 class="entry-title">
                <?php the_title(); ?>
              </h4>
              <p>
                <?php the_excerpt(); ?>
              </p>
            </a>
          </div>
        </article>
      <?php endwhile; endif; ?>
    </div>
  </section>
  <section class="services-cta scroll-section">
    <h4>Wat ik voor je kan betekenen</h4>

    <?php
    $services =  get_page_by_title( 'Services' );
    $services_children = new WP_Query( array(
        'post_type' => 'page',
        'post_parent' => $services->ID,
        'orderby'   => 'meta_value',
        'order' => 'ASC',
    ));

    while($services_children->have_posts()) : $services_children->the_post(); ?>

    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
      <a href="<?php the_permalink(); ?>">
        <figure style="background-image: url(<?php the_post_thumbnail_url(medium);?>)">
          <h4><?php the_title(); ?></h4>
        </figure>
      </a>
    </article>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); // reset the query ?>

  </section>
  <?php get_template_part( 'nav', 'below' ); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>