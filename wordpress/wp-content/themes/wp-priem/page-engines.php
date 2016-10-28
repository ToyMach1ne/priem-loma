<?php /* Template Name: Станки и двигатели */ get_header(); ?>
<div class="b-tabs">
  <div class="box visible fp-pad">
<!-- Заголовок страницы -->
<h1 data-page="16"><?php the_title(); ?></h1>

<?php easy_breadcrumbs(); ?>
<br>

<table>
  <tbody>
    <tr>
      <th scope="col">Наименование лома</th>
      <th width="130" scope="col">Цена, руб./кг<br>0 кг – 100 кг</th>
      <th width="130" scope="col">Цена, руб./кг<br>100 кг – 1 тонна</th>
      <th width="130" scope="col">Цена, руб./кг<br>от 1 тонны</th>
    </tr>
    <?php if( have_rows('engines_rep') ): while ( have_rows('engines_rep') ) : the_row(); ?>
    <tr>
      <td><?php the_sub_field('name'); ?></td>
      <td><?php the_sub_field('1st_price'); ?></td>
      <td><?php the_sub_field('2nd_price'); ?></td>
      <td><?php the_sub_field('3rd_price'); ?></td>
    </tr>
    <?php endwhile; ?>
    <?php endif; ?>
  </tbody>
</table>

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
