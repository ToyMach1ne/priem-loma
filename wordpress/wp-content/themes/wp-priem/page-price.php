<?php /* Template Name: Price */ get_header(); ?>
<div class="b-tabs">
  <div class="box visible fp-pad">

<!-- Заголовок страницы -->
<h1 data-page="17"><?php the_title(); ?></h1>

<?php easy_breadcrumbs(); ?>
<br>

<!-- Тело страницы -->
<h2><font color="#BD0926">СТОИМОСТЬ ЧЕРНОГО МЕТАЛЛОЛОМА (за тонну и за кг)</font></h2>

<table class="tbl2">
  <tbody>
    <tr>
      <th scope="col">Тип металла</th>
      <th scope="col">Наименование лома</th>
      <th width="110" scope="col">Цена, руб./кг<br>0 кг – 100 кг</th>
      <th width="110" scope="col">Цена, руб./кг<br>100 кг – 1 тонна</th>
      <th width="110" scope="col">Цена, руб./кг<br>от 1 тонны</th>
    </tr>
    <?php if( have_rows('first_row') ): while ( have_rows('first_row') ) : the_row();
    // vars
    $image = get_sub_field('steel_img');?>
    <tr class="first-row">
      <td class="tbl-name" rowspan="7"><p><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /></p>ЖЕЛЕЗО</td>
      <td class="td-left"><?php the_sub_field('first_name'); ?></td>
      <td id="247"><?php the_sub_field('1st_price'); ?></td>
      <td id="248"><?php the_sub_field('2nd_price'); ?></td>
      <td id="249"><?php the_sub_field('3rd_price'); ?>,6</td>
    </tr>
    <?php endwhile; ?>
    <?php endif; ?>

    <?php if( have_rows('black') ): while ( have_rows('black') ) : the_row(); ?>
    <tr class="second-row">
      <td><?php the_sub_field('name'); ?></td>
      <td id="252"><?php the_sub_field('1kg'); ?></td>
      <td id="253"><?php the_sub_field('1t'); ?></td>
      <td id="254"><?php the_sub_field('more1t'); ?>,5</td>
    </tr>
    <?php endwhile; ?>
    <?php endif; ?>
  </tbody>
</table>

<hr>

<h2><font color="#BD0926">СТОИМОСТЬ ЦВЕТНОГО МЕТАЛЛОЛОМА (за тонну и за кг)</font></h2>

<table class="tbl2">
  <tbody>
    <tr>
      <th scope="col">Тип металла</th>
      <th scope="col">Наименование лома</th>
      <th width="110" scope="col">Цена, руб./кг<br>0 кг – 100 кг</th>
      <th width="110" scope="col">Цена, руб./кг<br>100 кг – 1 тонна</th>
      <th width="110" scope="col">Цена, руб./кг<br>от 1 тонны</th>
    </tr>
    <?php if( have_rows('row2') ): while ( have_rows('row2') ) : the_row();
    // vars
    $image = get_sub_field('akb_img');?>
    <tr>
      <td class="tbl-name" rowspan="5"><p><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /></p>АКБ</td>
      <td class="td-left"><font color="#BD0926"><?php the_sub_field('name'); ?></font></td>
      <td id="217"><?php the_sub_field('1kg'); ?></td>
      <td id="218"><?php the_sub_field('1t'); ?></td>
      <td id="219"><?php the_sub_field('more_1t'); ?></td>
    </tr>
    <?php endwhile; ?>
    <?php endif; ?>

<?php if( have_rows('akb_items') ): while ( have_rows('akb_items') ) : the_row(); ?>
    <tr>
      <td><?php the_sub_field('name'); ?></td>
      <td id="222"><?php the_sub_field('1kg'); ?></td>
      <td id="223"><?php the_sub_field('1t'); ?></td>
      <td id="224"><?php the_sub_field('more_1t'); ?></td>
    </tr>
    <?php endwhile; ?>
    <?php endif; ?>

    <?php if( have_rows('row3') ): while ( have_rows('row3') ) : the_row();
    // vars
    $image = get_sub_field('med_img');?>
    <tr>
      <td class="tbl-name" rowspan="8"><p><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /></p>МЕДЬ</td>
      <td class="td-left"><font color="#BD0926"><?php the_sub_field('name'); ?></font></td>
      <td id="12"><?php the_sub_field('1kg'); ?></td>
      <td id="13"><?php the_sub_field('1t'); ?></td>
      <td id="14"><?php the_sub_field('more1t'); ?></td>
    </tr>
    <?php endwhile; ?>
    <?php endif; ?>

    <?php if( have_rows('med_items') ): while ( have_rows('med_items') ) : the_row(); ?>
    <tr><td><?php the_sub_field('name'); ?></td>
      <td id="17"><?php the_sub_field('1kg'); ?></td>
      <td id="18"><?php the_sub_field('1t'); ?></td>
      <td id="19"><?php the_sub_field('more1t'); ?></td>
    </tr>
    <?php endwhile; ?>
    <?php endif; ?>

<?php if( have_rows('row4') ): while ( have_rows('row4') ) : the_row();
    // vars
    $image = get_sub_field('bronza_img');?>
    <tr>
      <td class="tbl-name" rowspan="3"><p><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /></p>БРОНЗА</td>
      <td class="td-left"><font color="#BD0926"><?php the_sub_field('name'); ?></font></td>
      <td id="57"><?php the_sub_field('1kg'); ?><</td>
      <td id="58"><?php the_sub_field('1t'); ?></td>
      <td id="59"><?php the_sub_field('more1t'); ?></td>
    </tr>
    <?php endwhile; ?>
    <?php endif; ?>

    <?php if( have_rows('bronza_items') ): while ( have_rows('bronza_items') ) : the_row(); ?>
    <tr>
      <td><?php the_sub_field('name'); ?></td>
      <td id="62"><?php the_sub_field('1kg'); ?></td>
      <td id="63"><?php the_sub_field('1t'); ?></td>
      <td id="64"><?php the_sub_field('more1t'); ?></td>
    </tr>
    <?php endwhile; ?>
    <?php endif; ?>

  <?php if( have_rows('row5') ): while ( have_rows('row5') ) : the_row();
    // vars
    $image = get_sub_field('svinetc_img');?>
    <tr>
      <td class="tbl-name" rowspan="3"><p><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /></p>СВИНЕЦ</td>
      <td class="td-left"><font color="#BD0926"><?php the_sub_field('name'); ?></font></td>
      <td id="77"><?php the_sub_field('1kg'); ?></td>
      <td id="78"><?php the_sub_field('1t'); ?></td>
      <td id="79"><?php the_sub_field('more1t'); ?></td>
    </tr>
    <?php endwhile; ?>
    <?php endif; ?>

    <?php if( have_rows('svinetc_items') ): while ( have_rows('svinetc_items') ) : the_row(); ?>
    <tr>
      <td><?php the_sub_field('name'); ?></td>
      <td id="82"><?php the_sub_field('1kg'); ?></td>
      <td id="83"><?php the_sub_field('1t'); ?></td>
      <td id="84"><?php the_sub_field('more1t'); ?></td>
    </tr>
    <?php endwhile; ?>
    <?php endif; ?>

<?php if( have_rows('row6') ): while ( have_rows('row6') ) : the_row();
    // vars
    $image = get_sub_field('titan_img');?>
    <tr>
      <td class="tbl-name" rowspan="3"><p><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /></p>ТИТАН</td>
      <td class="td-left"><font color="#BD0926"><?php the_sub_field('name'); ?></font></td>
      <td id="97"><?php the_sub_field('1kg'); ?></td>
      <td id="98"><?php the_sub_field('1t'); ?></td>
      <td id="99"><?php the_sub_field('more1t'); ?></td>
    </tr>
    <?php endwhile; ?>
    <?php endif; ?>

    <?php if( have_rows('titan_items') ): while ( have_rows('titan_items') ) : the_row(); ?>
    <tr>
      <td><?php the_sub_field('name'); ?></td>
      <td id="102"><?php the_sub_field('1kg'); ?></td>
      <td id="103"><?php the_sub_field('1t'); ?></td>
      <td id="104"><?php the_sub_field('more1t'); ?></td>
    </tr>
    <?php endwhile; ?>
    <?php endif; ?>

<?php if( have_rows('row7') ): while ( have_rows('row7') ) : the_row();
    // vars
    $image = get_sub_field('alimg');?>
    <tr>
      <td class="tbl-name" rowspan="9"><p><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /></p>АЛЮМИНИЙ</td>
      <td class="td-left"><font color="#BD0926"><?php the_sub_field('name'); ?></font></td>
      <td id="117"><?php the_sub_field('1kg'); ?></td>
      <td id="118"><?php the_sub_field('1t'); ?></td>
      <td id="119"><?php the_sub_field('more1t'); ?></td>
    </tr>
    <?php endwhile; ?>
    <?php endif; ?>

    <?php if( have_rows('alitems') ): while ( have_rows('alitems') ) : the_row(); ?>
    <tr>
      <td><?php the_sub_field('name'); ?></td>
      <td id="122"><?php the_sub_field('1kg'); ?></td>
      <td id="123"><?php the_sub_field('1t'); ?></td>
      <td id="124"><?php the_sub_field('more1t'); ?></td>
    </tr>
    <?php endwhile; ?>
    <?php endif; ?>

    <?php if( have_rows('row8') ): while ( have_rows('row8') ) : the_row();
    // vars
    $image = get_sub_field('latimg');?>
    <tr>
      <td class="tbl-name" rowspan="3"><p><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /></p>ЛАТУНЬ</td>
      <td class="td-left"><font color="#BD0926"><?php the_sub_field('name'); ?></font></td>
      <td id="167"><?php the_sub_field('1kg'); ?></td>
      <td id="168"><?php the_sub_field('1t'); ?></td>
      <td id="169"><?php the_sub_field('more1t'); ?></td>
    </tr>
    <?php endwhile; ?>
    <?php endif; ?>

    <?php if( have_rows('latitems') ): while ( have_rows('latitems') ) : the_row(); ?>
    <tr>
      <td><?php the_sub_field('name'); ?></td>
      <td id="172"><?php the_sub_field('1kg'); ?></td>
      <td id="173"><?php the_sub_field('1t'); ?></td>
      <td id="174"><?php the_sub_field('more1t'); ?></td>
    </tr>
    <?php endwhile; ?>
    <?php endif; ?>

<?php if( have_rows('row9') ): while ( have_rows('row9') ) : the_row();
    // vars
    $image = get_sub_field('nerjimg');?>
    <tr>
      <td class="tbl-name" rowspan="5"><p><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /></p>НЕРЖАВЕЙКА</td>
      <td class="td-left"><font color="#BD0926"><?php the_sub_field('name'); ?></font></td>
      <td id="187"><?php the_sub_field('1kg'); ?></td>
      <td id="188"><?php the_sub_field('1t'); ?></td>
      <td id="189"><?php the_sub_field('more1t'); ?></td>
    </tr>
    <?php endwhile; ?>
    <?php endif; ?>

    <?php if( have_rows('nerjitems') ): while ( have_rows('nerjitems') ) : the_row(); ?>
    <tr>
      <td><?php the_sub_field('name'); ?></td>
      <td id="192"><?php the_sub_field('1kg'); ?></td>
      <td id="193"><?php the_sub_field('1t'); ?></td>
      <td id="194"><?php the_sub_field('more1t'); ?></td>
    </tr>
    <?php endwhile; ?>
    <?php endif; ?>

<?php if( have_rows('row10') ): while ( have_rows('row10') ) : the_row();
    // vars
    $image = get_sub_field('strimg');?>
    <tr>
      <td class="tbl-name" rowspan="6"><p><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /></p>СТРУЖКА</td>
      <td class="td-left"><?php the_sub_field('name'); ?></td>
      <td id="287"><?php the_sub_field('1kg'); ?></td>
      <td id="288"><?php the_sub_field('1t'); ?></td>
      <td id="289"><?php the_sub_field('more1t'); ?></td>
    </tr>
    <?php endwhile; ?>
    <?php endif; ?>

    <?php if( have_rows('stritems') ): while ( have_rows('stritems') ) : the_row(); ?>
    <tr>
      <td><?php the_sub_field('name'); ?></td>
      <td id="292"><?php the_sub_field('1kg'); ?></td>
      <td id="293"><?php the_sub_field('1t'); ?></td>
      <td id="294"><?php the_sub_field('more1t'); ?></td>
    </tr>
    <?php endwhile; ?>
    <?php endif; ?>

<?php if( have_rows('row11') ): while ( have_rows('row11') ) : the_row();
    // vars
    $image = get_sub_field('kblimg');?>
    <tr>
      <td class="tbl-name" rowspan="3"><p><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" /></p>КАБЕЛЬ</td>
      <td class="td-left"><?php the_sub_field('name'); ?></td>
      <td id="322"><?php the_sub_field('1kg'); ?></td>
      <td id="323"><?php the_sub_field('1t'); ?></td>
      <td id="324"><?php the_sub_field('more1t'); ?></td>
    </tr>
    <?php endwhile; ?>
    <?php endif; ?>

    <?php if( have_rows('kblitems') ): while ( have_rows('kblitems') ) : the_row(); ?>
    <tr>
      <td><?php the_sub_field('name'); ?></td>
      <td id="327"><?php the_sub_field('1kg'); ?></td>
      <td id="328"><?php the_sub_field('1t'); ?></td>
      <td id="329"><?php the_sub_field('more1t'); ?></td>
    </tr>
    <?php endwhile; ?>
    <?php endif; ?>
  </tbody>
</table>

<hr>

<h2><font color="#BD0926">СТОИМОСТЬ ОБОРУДОВАНИЯ (за тонну и за кг)</font></h2>

<table class="tbl2">
  <tbody>
    <tr>
      <th scope="col">Тип металла</th>
      <th scope="col">Наименование лома</th>
      <th width="110" scope="col">Цена, руб./кг<br>0 кг – 100 кг</th>
      <th width="110" scope="col">Цена, руб./кг<br>100 кг – 1 тонна</th>
      <th width="110" scope="col">Цена, руб./кг<br>от 1 тонны</th>
    </tr>
    <tr>
      <td class="tbl-name" rowspan="2"><p><?php $image = get_field('equipmentimg'); if( !empty($image) ): ?>
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /> <?php endif; ?></p>ОБОРУДОВАНИЕ</td>
      <td class="td-left"><?php the_field('eqname'); ?></td>
      <td><?php the_field('price1'); ?></td>
      <td><?php the_field('price2'); ?></td>
      <td><?php the_field('price3'); ?></td>
    </tr>
    <tr class="tr-bottom">
      <td><?php the_field('name2'); ?></td>
      <td id="347"><?php the_field('priceengine'); ?></td>
      <td id="348"><?php the_field('2ndpriceengine'); ?></td>
      <td id="349"><?php the_field('3rdpriceengine'); ?></td>
    </tr>
  </tbody>
</table>



          </div><!--end box-->
        </div>
      </div>
   </section>
  </div>
 </div><!-- all -->
</div><!-- over -->

<?php get_footer(); ?>
