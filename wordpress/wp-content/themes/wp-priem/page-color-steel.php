<?php /* Template Name: Color Steel */ get_header(); ?>

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
    <?php $terms = get_field('color_taxonomy', 7); if( $terms ): ?>
    <?php foreach( $terms as $term_id ): ?>
    <?php $term = get_term( $term_id ); ?>
    <tr>
      <td><a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?></a></td>
      <td id="217"><?php the_field('taxonomy_price', $term); ?></td>
      <td id="218"><?php the_field('price_by_kg', $term); ?></td>
      <td id="219"><?php the_field('price_for_1t', $term); ?></td>
    </tr>
    <?php endforeach; ?>
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
