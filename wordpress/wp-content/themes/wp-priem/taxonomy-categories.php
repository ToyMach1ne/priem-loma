<?php  get_header(); ?>
<div class="b-tabs">
  <div class="box visible">
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

<?php

          endwhile;
      endif;
      ?>
<?php } ?>





<?php if( get_field('repeater_price') ) { ?>



<?php
// check if the repeater field has rows of data
if( have_rows('productsby', $term ) ):
  // loop through the rows of data
    while ( have_rows('productsby', $term ) ) : the_row();
        // display a sub field value
        the_sub_field('name');
    endwhile;
endif;
?>








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






  <?  }
?>







  </tbody>
</table>

<h2>Прием лома алюминия (стоимость)</h2>

<p>Перед тем как сдать лом алюминия в СПб следует узнать несколько важных моментов о самом этом материале. Он является наиболее распространенным цветным металлом. Поэтому в современном мире очень сложно найти какую-либо сферу в промышленном производстве без наличия алюминиевых изделий и деталей. Основной причиной его распространенности является уникальное сочетание электропроводности, легкости, а также пластичности.</p>

<p>Не удивительно, что прием лома алюминия осуществляется абсолютно каждым пунктом сбора металлолома. Он всегда актуален для покупки, так как очень многие предприятия Санкт-Петербурга требуют этот материал для производства целого ряда продуктов. И поэтому продавать его весьма выгодно. Наша организация «Приём Лома» установила одну из наиболее высоких цен во всем регионе и проводит покупку в соответствии с законодательством РФ.</p>

<p class="fancy-gall">
<a href="/images/skupka-alyuminiya-1.jpg" class="fancybox" rel="gallery1"><span></span><img alt="цена на алюминий" src="/images/skupka-alyuminiya-1s.jpg"></a>
<a href="/images/skupka-alyuminiya-2.jpg" class="fancybox" rel="gallery1"><span></span><img alt="лом алюминия" title="лом алюминия" src="/images/skupka-alyuminiya-2s.jpg"></a>
<a href="/images/skupka-alyuminiya-3.jpg" class="fancybox" rel="gallery1"><span></span><img alt="прием алюминия" src="/images/skupka-alyuminiya-3s.jpg"></a>
</p>

<h2>Сдать алюминий (покупка)</h2>

<p>Если Вы хотите сдать алюминий, то в начале нужно узнать о расценках в СПб, которые распространяются на данный тип металла. Стоит отметить, что его стоимость зависит от ряда факторов, наиболее важным из которых является его «чистота». Очень часто для улучшения свойств в него добавляют различные присадки. И это может снизить конечную стоимость. Также, на цену влияет и объем сдаваемой партии. Тем не менее, при продаже частными лицами, сделка будет выгодной. Мы готовы принять практически любое количество металла.</p>

<p>Сегодня сдать лом алюминия предлагает целый ряд компаний. Для совершения выгодной сделки следует изучить ценовую политику каждой фирмы и узнать о ее преимуществах. Наша компания ориентируемся на покупку материала с наибольшей выгодой для обеих сторон. Поэтому, обратившись к нам, Вы одновременно сможете дать новую жизнь старой технике и получить за это деньги. А при необходимости мы готовы предоставить оборудование для разборки, а также транспорт для вывоза лома с Вашей территории.</p>


          </div><!--end box-->
        </div>
<?php get_footer(); ?>
