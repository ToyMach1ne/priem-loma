<?php  get_header(); ?>

<div class="b-tabs">
  <div class="box visible fp-pad">

<!-- Заголовок страницы -->
<h1 data-page="41"><?php the_title(); ?></h1>

<?php easy_breadcrumbs(); ?>
<br>

<!-- Тело страницы -->
<table>
  <tbody>
    <tr>
      <th scope="col">Наименование лома</th>
      <th width="130" scope="col">Цена, руб./кг<br>0 кг – 100 кг</th>
      <th width="130" scope="col">Цена, руб./кг<br>100 кг – 1 тонна</th>
      <th width="130" scope="col">Цена, руб./кг<br>от 1 тонны</th>
    </tr>
    <tr>
      <td><?php the_title(); ?></td>
      <td id="12"><?php the_field('price_by_rg'); ?></td>
      <td id="13"><?php the_field('price_by_tonna'); ?></td>
      <td id="14"><?php the_field('price_more_tonna'); ?></td>
    </tr>
  </tbody>
</table>

<h2>Лом <?php the_title(); ?></h2>

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
