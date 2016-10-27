<?php  get_header(); ?>
<div class="b-tabs">
  <div class="box visible fp-pad">
<!-- Заголовок страницы -->
<h1 data-page="80"><?php the_title(); ?> (цена за кг)</h1>

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
<?php
$queried_object = get_queried_object();
$term_id = $queried_object->term_id;
$term = get_term( $term_id); ?>
<?php if( get_field('first_row') ) { ?>
      <?php
      // check if the repeater field has rows of data
      if( have_rows('first_row_container', $term ) ):
        // loop through the rows of data
          while ( have_rows('first_row_container', $term ) ) : the_row();
              // display a sub field value
        ?>
    <tr>
      <td><?php the_sub_field('name'); ?></td>
      <td id="122"><?php the_sub_field('price_by_kg'); ?></td>
      <td id="123"><?php the_sub_field('price_by_t'); ?></td>
      <td id="124"><?php the_sub_field('price_more_t'); ?></td>
    </tr>
<?php endwhile; endif; ?>
<?php } ?>


<?php if( get_field('repeater_price') ) { ?>

<?php
// check if the repeater field has rows of data
if( have_rows('productsby', $term ) ):
  // loop through the rows of data
    while ( have_rows('productsby', $term ) ) : the_row(); ?>
      <tr>
      <td><?php the_sub_field('name'); ?></td>
      <td id="122"><?php the_sub_field('price_by_kg'); ?></td>
      <td id="123"><?php the_sub_field('price_by_t'); ?></td>
      <td id="124"><?php the_sub_field('price_more_t'); ?></td>
    </tr>

    <?php endwhile; endif; ?>
<? } else { ?>


<?php
  $args = array(
  'post_type' => 'product',
  'tax_query' => array(
      array(
      'taxonomy' => 'categories',
      'field' => 'id',
      'terms' => $term_id
       )
    )
  );
?>

<?php query_posts(  $args  ); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <tr>
      <td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
      <td id="122"><?php the_field('price_by_rg'); ?></td>
      <td id="123"><?php the_field('price_by_tonna'); ?></td>
      <td id="124"><?php the_field('price_more_tonna'); ?></td>
    </tr>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
<?  } ?>

  </tbody>
</table>

<h2>Прием лома <?php the_title(); ?> (стоимость)</h2>

<?php the_field('descr', $term); ?>


          </div><!--end box-->
     </div>
    </div>
   </section>
  </div>
 </div><!-- all -->
</div><!-- over -->
<?php get_footer(); ?>
