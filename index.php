<?php get_header(); ?>
<section id="categorias">
  <div class="row full">
      <div class="large-8 columns">
          <ul class="large-block-grid-4 xlarge-block-grid-5 small-block-grid-2 lascategorias">
            <?php 
            $args = array(
            'number'     => $number,
            'orderby'    => $orderby,
            'order'      => $order,
            'hide_empty' => $hide_empty,
            'include'    => $ids,
            'exclude'    => 13
        );

        $product_categories = get_terms( 'product_cat', $args );
        foreach( $product_categories as $cat ) { 
          ?>
            <li>
              <div class="cathome">
                  <?php echo $cat->name; ?>
              </div>
          <?php
              $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true );
              $image = wp_get_attachment_url( $thumbnail_id );
              if ( $image ) {
                $link=get_term_link( $cat );
                echo '<a href="'.$link.'"><img src="' . $image . '" alt="" /></a>';
              }
          ?>
            </li>
          <?php
        }
          ?>
          </ul>
      </div>
      <div class="large-4 columns">
          <h2>Redes Sociales</h2>
          <!--  -->
          <div id="fblb">
                <!-- <?php echo do_shortcode('[custom-facebook-feed]'); ?> -->
          </div>

          <!--  -->
      </div>
  </div>
</section>

<section id="destacados">
    <div class="row full">
        <div class="large-12 columns">
            <h2>Más Vendidos</h2>
            <ul class="large-block-grid-5 small-block-grid-2">

              <!-- Destacados -->

<?php  

$args = array(  
    'post_type' => 'product',  
    'meta_key' => '_featured',  
    'meta_value' => 'yes',  
    'posts_per_page' => 5  
);  
  
$featured_query = new WP_Query( $args );  
      
if ($featured_query->have_posts()) :   
    while ($featured_query->have_posts()) :   
        $featured_query->the_post();    
        $product = get_product( $featured_query->post->ID );  
?>
            <li>
                    <div class="productocategoria">
                        <?php the_post_thumbnail('slide'); ?>
                        <?php if ( $price_html = $product->get_price_html() ) : ?>
                          <span class="price">
                              <span class="amount">
                                <?php 

                                      echo $price_html; 
                                        echo apply_filters( 'woocommerce_loop_add_to_cart_link',
                                          sprintf( '<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" data-quantity="%s" class="button tiny alert %s product_type_%s">%s</a>',
                                            esc_url( $product->add_to_cart_url() ),
                                            esc_attr( $product->id ),
                                            esc_attr( $product->get_sku() ),
                                            esc_attr( isset( $quantity ) ? $quantity : 1 ),
                                            $product->is_purchasable() && $product->is_in_stock() ? 'add_to_cart_button' : '',
                                            esc_attr( $product->product_type ),
                                            esc_html( $product->add_to_cart_text() )
                                          ),
                                        $product );
                                ?>

                              </span>
                          </span>
                        <?php endif; ?>
                    </div>
            </li>
<?php    
    endwhile;   
endif;  
  
wp_reset_query(); // Remember to reset  

?>
            </ul>
        </div>
    </div>
</section>

<?php get_footer(); ?>
