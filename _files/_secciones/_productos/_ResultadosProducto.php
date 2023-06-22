<?php 

		
		 $QuewryProductos=mysqli_query($mysqli,"SELECT * FROM  web_productos WHERE estado=1 AND id ORDER BY titulo ASC LIMIT 44") or die (mysqli_error($mysqli));

							  
		while ($rowProducto=mysqli_fetch_array($QuewryProductos))
{
	 ?>
                              <div class="products-list__item">
                                    <div class="product-card">
                                       <button class="product-card__quickview" type="button">
                                          <svg width="16px" height="16px">
                                             <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#quickview-16"></use>
                                          </svg>
                                          <span class="fake-svg-icon"></span>
                                       </button>
                                       <div class="product-card__badges-list">
                                          <!--<div class="product-card__badge product-card__badge--sale">Sale</div>-->
                                       </div>
                                       <div class="product-card__image"><a href="<?php echo Idirectorio("productos"); ?>"><img src="<?php echo Idirectorio("home"); ?>_files/<?php echo $rowProducto["imagen"]; ?>" alt=""></a></div>
                                       <div class="product-card__info">
                                          <div class="product-card__name"><a href="product.html"><?php echo $rowProducto["titulo"]; ?></a></div>
                                          <!--<div class="product-card__rating">
                                             <div class="rating">
                                                <div class="rating__body">
                                                   <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                      <g class="rating__fill">
                                                         <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#star-normal"></use>
                                                      </g>
                                                      <g class="rating__stroke">
                                                         <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#star-normal-stroke"></use>
                                                      </g>
                                                   </svg>
                                                   <div class="rating__star rating__star--only-edge rating__star--active">
                                                      <div class="rating__fill">
                                                         <div class="fake-svg-icon"></div>
                                                      </div>
                                                      <div class="rating__stroke">
                                                         <div class="fake-svg-icon"></div>
                                                      </div>
                                                   </div>
                                                   <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                      <g class="rating__fill">
                                                         <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#star-normal"></use>
                                                      </g>
                                                      <g class="rating__stroke">
                                                         <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#star-normal-stroke"></use>
                                                      </g>
                                                   </svg>
                                                   <div class="rating__star rating__star--only-edge rating__star--active">
                                                      <div class="rating__fill">
                                                         <div class="fake-svg-icon"></div>
                                                      </div>
                                                      <div class="rating__stroke">
                                                         <div class="fake-svg-icon"></div>
                                                      </div>
                                                   </div>
                                                   <svg class="rating__star rating__star--active" width="13px" height="12px">
                                                      <g class="rating__fill">
                                                         <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#star-normal"></use>
                                                      </g>
                                                      <g class="rating__stroke">
                                                         <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#star-normal-stroke"></use>
                                                      </g>
                                                   </svg>
                                                   <div class="rating__star rating__star--only-edge rating__star--active">
                                                      <div class="rating__fill">
                                                         <div class="fake-svg-icon"></div>
                                                      </div>
                                                      <div class="rating__stroke">
                                                         <div class="fake-svg-icon"></div>
                                                      </div>
                                                   </div>
                                                   <svg class="rating__star" width="13px" height="12px">
                                                      <g class="rating__fill">
                                                         <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#star-normal"></use>
                                                      </g>
                                                      <g class="rating__stroke">
                                                         <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#star-normal-stroke"></use>
                                                      </g>
                                                   </svg>
                                                   <div class="rating__star rating__star--only-edge">
                                                      <div class="rating__fill">
                                                         <div class="fake-svg-icon"></div>
                                                      </div>
                                                      <div class="rating__stroke">
                                                         <div class="fake-svg-icon"></div>
                                                      </div>
                                                   </div>
                                                   <svg class="rating__star" width="13px" height="12px">
                                                      <g class="rating__fill">
                                                         <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#star-normal"></use>
                                                      </g>
                                                      <g class="rating__stroke">
                                                         <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#star-normal-stroke"></use>
                                                      </g>
                                                   </svg>
                                                   <div class="rating__star rating__star--only-edge">
                                                      <div class="rating__fill">
                                                         <div class="fake-svg-icon"></div>
                                                      </div>
                                                      <div class="rating__stroke">
                                                         <div class="fake-svg-icon"></div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="product-card__rating-legend">7 Reviews</div>
                                          </div>-->
                                          <span class="product-card__features-list">
                                              <?php echo nl2br($rowProducto["descripcion"]); ?>
                                          </span>
                                       </div>
                                       <div class="product-card__actions">
                                          <div class="product-card__availability">Availability: <span class="text-success">In Stock</span></div>
                                          <div class="product-card__prices"><span class="product-card__new-price">$949.00</span> <span class="product-card__old-price">$1189.00</span></div>
                                          <div class="product-card__buttons">
                                             <button class="btn btn-primary product-card__addtocart" type="button">Añadir <svg width="15px" height="15px">
                                                        <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#cart-20"></use>
                                                    </svg></button> <button class="btn btn-secondary product-card__addtocart product-card__addtocart--list" type="button">Añadir <svg width="15px" height="15px">
                                                        <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#cart-20"></use>
                                                    </svg></button> 
                                             <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__wishlist" type="button">
                                                <svg width="16px" height="16px">
                                                   <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#wishlist-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--wishlist-16"></span>
                                             </button>
                                             <button class="btn btn-light btn-svg-icon btn-svg-icon--fake-svg product-card__compare" type="button">
                                                <svg width="16px" height="16px">
                                                   <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#compare-16"></use>
                                                </svg>
                                                <span class="fake-svg-icon fake-svg-icon--compare-16"></span>
                                             </button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <?php } ?>