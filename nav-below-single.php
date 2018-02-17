<nav class="single-post-navigation nav-below" class="scroll-section dark-section">
  <div class="nav-previous">
    <?php
      if(get_previous_post()) {
        echo "<h6>Vorige</h6><h3>";
        previous_post_link( '%link', '%title' );
        echo "</h3>";
      }
    ?>
  </div>
  <div class="nav-next">
    <?php
      if(get_next_post()) {
        echo "<h6>Volgende</h6><h3>";
        next_post_link( '%link', '%title' );
        echo "</h3>";
      }
    ?>
  </div>
</nav>
