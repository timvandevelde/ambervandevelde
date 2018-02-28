<?php get_header(); ?>
<div class="vertical-name">Amber van de Velde</div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <article id="<?php $slug = $post->post_name; echo $slug?>" <?php post_class(); ?>>
    <section class="entry-content">
      <?php the_content(); ?>
      <div class="entry-links"><?php wp_link_pages(); ?></div>
    </section>

    <?php
    $services =  get_page_by_title( 'Services' );
    if ($post->post_parent == $services->ID) {

      echo "<section class='services-cta'><h4>Andere services</h4>";
      $services_children = new WP_Query( array(
        'post_type' => 'page',
        'post_parent' => $services->ID,
        'post__not_in' => array($post->ID),
        'orderby'   => 'menu_order',
        'order' => 'ASC',
      ));

      while($services_children->have_posts()) : $services_children->the_post();

        ?>

        <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
          <a href="<?php the_permalink(); ?>">
            <figure style="background-image: url(<?php the_post_thumbnail_url(medium);?>)">
              <h4><?php the_title(); ?></h4>
            </figure>
          </a>
        </article>

        <?php
      endwhile;
      echo "</section>";
    }
    ?>
    <?php wp_reset_postdata(); // reset the query ?>
  </section>
</article>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
