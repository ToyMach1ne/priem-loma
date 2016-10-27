<?php /* Template Name: Black Steel */ get_header(); ?>

<div class="b-tabs">
  <div class="box visible fp-pad">

<!-- Заголовок страницы -->
<h1 data-page="11"><?php the_title(); ?></h1>

<?php easy_breadcrumbs(); ?>
<br>

<!-- Тело страницы -->
<noindex>
<table>
  <tbody>
    <tr>
      <th scope="col">Наименование лома</th>
      <th width="130" scope="col">Цена, руб./кг<br>0 кг – 100 кг</th>
      <th width="130" scope="col">Цена, руб./кг<br>100 кг – 1 тонна</th>
      <th width="130" scope="col">Цена, руб./кг<br>от 1 тонны</th>
    </tr>
    <?php if( have_rows('black_taxonomy') ): while ( have_rows('black_taxonomy') ) : the_row(); ?>
    <tr>
      <td><?php the_sub_field('name'); ?></td>
      <td id="217"><?php the_sub_field('1kg'); ?></td>
      <td id="218"><?php the_sub_field('1tonna'); ?></td>
      <td id="219"><?php the_sub_field('more_tonna'); ?></td>
    </tr>
    <?php endwhile; ?>
    <?php endif; ?>
  </tbody>
</table>
</noindex>

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
