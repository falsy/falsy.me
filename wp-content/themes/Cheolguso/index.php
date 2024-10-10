<?php
/* Template Name: cheoguso home page */
?>
<?php get_header(); ?>
<section id="page_content">
  <div class="container">
    <div class="col_box_full">
      <?php
        $args = array(
          'post_type' => 'post',
          'post_status' => 'publish'
        );
        $lab_query = new WP_Query($args);

        if($lab_query->have_posts()) :
        while($lab_query->have_posts()) :
          $lab_query->the_post();
          get_template_part( 'content' );
        endwhile;
        else: 
        ?>
        <article class="col">
          <div>
            <p>글이 없습니다.</p>
          </div>
        </article>
      <?php endif; ?>
      <?php wp_reset_query(); ?>
     </div>
  </div>
</section>
<?php get_footer(); ?>