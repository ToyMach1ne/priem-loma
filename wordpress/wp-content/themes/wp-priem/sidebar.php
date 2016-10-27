<aside>
                    <div class="b-priem-metall">
                        <div class="title">Прием металлолома</div>
                        <table>
                            <tbody>
                            <?php $terms = get_field('taxonomy_list', 5); if( $terms ): ?>
                            <?php foreach( $terms as $term_id ): ?>
                              <?php $term = get_term( $term_id ); ?>
                                <tr>
                                    <td><a href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?></a></td>
                                    <td><span><?php the_field('taxonomy_price', $term); ?></span></td>
                                </tr>
                                <?php endforeach; ?>
                                <?php endif; ?>

                            </tbody>
                        </table>
                    </div>
                    <!--end b-priem-metal-->
                    <div class="b-contact">
                        <div class="title">Пункт приема лома</div>
                        <p><strong>г. Санкт-Петербург, улица Калинина, дом 39</strong></p>
                        <div id="right-map">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/saved.png" alt="">
                        </div>
                        <!--end right-map-->
                    </div>
                </aside>
