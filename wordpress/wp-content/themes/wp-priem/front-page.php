<?php /* Template Name: Home Page */ get_header(); ?>
        <div class="box visible fp-pad">
          <h1><?php the_title(); ?></h1>
           <?php if (have_posts()): while (have_posts()) : the_post(); ?>
           <p><?php the_content(); ?></p>
           <?php endwhile; endif; ?>
        </div>
    <!--end box-->
      </div>
    <!--end b-tabs-->
    </section>
   </div>
 <!--end container-->
  </div>
<!--end all-->
</div>
<!--end over-->

<?php get_footer(); ?>
