<?php  get_header(); ?>
<div class="b-tabs">
<div class="box visible">

<!-- Заголовок страницы -->
<h1 data-page="30"><?php the_title(); ?> (цена за кг)</h1>

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
      <td>Утилизация аккумуляторов</td>
      <td id="217">41</td>
      <td id="218">45</td>
      <td id="219">48</td>
    </tr>
    <tr>
      <td>АКБ отработанные</td>
      <td id="222">41</td>
      <td id="223">45</td>
      <td id="224">48</td>
    </tr>
    <tr>
      <td>АКБ полипропиленовые</td>
      <td id="227">41</td>
      <td id="228">45</td>
      <td id="229">48</td>
    </tr>
    <tr>
      <td>АКБ щелочные</td>
      <td id="232">25</td>
      <td id="233">30</td>
      <td id="234">31</td>
    </tr>
    <tr>
      <td>АКБ эбонитовые</td>
      <td id="237">41</td>
      <td id="238">45</td>
      <td id="239">48</td>
    </tr>
  </tbody>
</table>


<?php the_field('descr'); ?>


          </div>
        </div>

<?php get_footer(); ?>
