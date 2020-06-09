<?php get_header(); ?>

  <div id="banner">
    <h1>&lt;CBCoding/&gt;</h1>
    <h3>Coding from scratch</h3>
  </div>

  <main>

    <a href="<?php echo site_url('/blog'); ?>">
      <h2 class="section-heading">All Blogs</h2>
    </a>
      
      <section>

        <?php 
          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 2,
          );

          $blogposts = new WP_Query($args);

          while ($blogposts->have_posts()) {
            $blogposts->the_post();
        ?>

        <div class="card">
          <div class="card-image">
            <a href="<?php the_permalink(); ?>">
              <img src="<?php echo get_the_post_thumbnail_url(get_post()); ?>" alt="Card Image">
            </a>
          </div>
          <div class="card-description">
            <a href="blogpost.html">
              <h3><?php the_title(); ?></h3>
            </a>
            <p><?php echo wp_trim_words(get_the_excerpt(), 30); ?>
            </p>
            <a href="<?php the_permalink(); ?>" class="btn-readmore">Read more</a>
          </div>
        </div>

        <?php }
          wp_reset_query(); ?>

      </section>
      
    <a href="#">
      <h2 class="section-heading">All Projects</h2>
    </a>

      <section>

        <?php 
          $args = array(
            'post_type' => 'project',
            'posts_per_page' => 2,
          );

          $projects = new WP_Query($args);

          while ($projects->have_posts()) {
            $projects->the_post();
        ?>

        <div class="card">
          <div class="card-image">
            <a href="<?php the_permalink(); ?>">
              <img src="<?php echo get_the_post_thumbnail_url(get_post()); ?>" alt="Card Image">
            </a>
          </div>
          <div class="card-description">
            <a href="blogpost.html">
              <h3><?php the_title(); ?></h3>
            </a>
            <p><?php echo wp_trim_words(get_the_excerpt(), 30); ?>
            </p>
            <a href="<?php the_permalink(); ?>" class="btn-readmore">Read more</a>
          </div>
        </div>

        <?php }
          wp_reset_query(); ?>

      </section>

      <h2 class="section-heading">Source Code</h2>

      <section id="section-source">
        <p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus provident officia ipsam nobis molestiae vel eveniet maxime laborum laudantium dicta blanditiis recusandae, commodi, pariatur omnis debitis excepturi cum perferendis. Quisquam.
        </p>
        <a class="btn-readmore" href="#">Github Profile</a>
      </section>

<?php get_footer(); ?>