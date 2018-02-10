<?php get_header(); ?>
<section id="content" role="main">
  <header class="header category-header">
    <div class="page-width">
      <h1 class="entry-title"><?php single_cat_title(); ?></h1>
      <?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?>
    </div>
  </header>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="page-width">
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <figure>
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
            <?php if ( has_post_thumbnail() ) { the_post_thumbnail(medium); } ?>
          </a>
        </figure>
        <div class="description">
          <h3 class="entry-title">
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
          </h3>
          <div class="introduction">
            <?php the_excerpt(); ?>
          </div>
        </div>
      </article>
    </div>
  <?php endwhile; endif; ?>
  <?php get_template_part( 'nav', 'below' ); ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
