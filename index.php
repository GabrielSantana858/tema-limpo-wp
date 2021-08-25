<?php get_header(); ?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <h1>

   <a href="<?php the_permalink() ?>">

    <?php the_title() ?>

   </a>

  </h1>

  <?php the_content() ?>

 </article>

<?php endwhile; ?>

<?php else : ?>

 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <h1>Ops!</h1>

  Não existem posts.

 </article>

<?php endif ?>

<?php get_footer(); ?>