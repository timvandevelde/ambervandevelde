<?php get_header(); ?>
<section id="content" role="main">
  <div class="vertical-name">Amber van de Velde</div>
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'entry' ); ?>
  <?php endwhile; endif; ?>
  <footer class="footer">
    <?php get_template_part( 'nav', 'below-single' ); ?>
  </footer>
</section>
<?php get_footer(); ?>
