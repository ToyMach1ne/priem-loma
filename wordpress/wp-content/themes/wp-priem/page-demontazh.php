<?php /* Template Name: Demontazh */ get_header(); ?>
<div class="b-tabs">
  <div class="box visible fp-pad">
<!-- Заголовок страницы -->
<h1 data-page="16"><?php the_title(); ?></h1>

<?php easy_breadcrumbs(); ?>
<br>

<!-- Тело страницы -->
      <?php if (have_posts()): while (have_posts()) : the_post(); ?>
        <p><?php the_content(); ?></p>
      <?php endwhile; endif; ?>

          </div><!--end box-->
        </div>
      </div>
   </section>
  </div>
 </div><!-- all -->
</div><!-- over -->

<?php get_footer(); ?>
