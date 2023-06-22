<div class="block-sidebar__item d-none d-lg-block">
                           <div class="widget-products widget">
                              <h4 class="widget__title">Ultimos Productos</h4>
                              <div class="widget-products__list">
                                 <?php $ContP1=1;
								 while($ContP1<=5) { ?>
                                 <div class="widget-products__item">
                                    <div class="widget-products__image"><a href="product.html"><img src="<?php echo Idirectorio("home"); ?>_files/images/products/product-1.jpg" alt=""></a></div>
                                    <div class="widget-products__info">
                                       <div class="widget-products__name"><a href="product.html">Electric Planer Brandix KL370090G 300 Watts</a></div>
                                       <div class="widget-products__prices">$749.00</div>
                                    </div>
                                 </div>
                                 <?php $ContP1++; } ?>
                              </div>
                           </div>
                        </div>