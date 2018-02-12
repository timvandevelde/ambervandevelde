<?php get_header(); ?>
<section id="content" role="main">
  <div class="vertical-name">Amber van de Velde</div>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <article id="<?php $slug = $post->post_name; echo $slug?>" <?php post_class(); ?>>
      <section class="entry-content">
        <!-- <?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?> -->
        <?php the_content(); ?>

        <div class="entry-links"><?php wp_link_pages(); ?></div>
      </section>
    </article>
  <?php endwhile; endif; ?>
</section>
<?php get_footer(); ?>
