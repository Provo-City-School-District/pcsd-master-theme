<?php get_header(); ?>
          <?php
            if(have_posts()) {
              while(have_posts()){
                the_post();
                ?>
                <article <?php post_class(); ?>>
                  <header class="article-header">
                     <h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
                    <ul>
                      <li><?php the_author(); ?></li>
                      <li><?php the_date(); ?></li>
                      <li><?php the_category(', ') . the_tags(', '); ?></li>
                    </ul>
                  </header><!-- .article-header -->
                  <?php the_content(); ?>
                </article>
                <?php
              } //end while on main loop
            } else {
              echo 'no content found';
            } //end if on main loop
          ?>
<?php get_footer(); ?>
