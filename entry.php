<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="scroll-section">
    <div class="page-width">
      <?php if ( is_singular() ) { echo '<h1 class="entry-title">'; } else { echo '<h2 class="entry-title">'; } ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
      <?php if ( is_singular() ) { echo '</h1>'; } else { echo '</h2>'; } ?>

      <div class="introduction">
        <?php echo the_excerpt(); ?>
      </div>
      <div class="tags">
        <h6>Missie</h6>
        <ul>
          <?php
          $posttags = get_the_tags();
          if ($posttags) {
            foreach($posttags as $tag) {
              echo '<li>';
              echo $tag->name . ' ';
              echo '</li>';
            }
          }
          ?>
        </ul>
      </div>
    </div>
  </header>
  <?php get_template_part( 'entry', ( is_archive() || is_search() ? 'summary' : 'content' ) ); ?>
</article>
