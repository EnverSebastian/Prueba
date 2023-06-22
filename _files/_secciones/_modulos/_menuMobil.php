<div class="mobilemenu">
    <div class="mobilemenu__backdrop"></div>
    <div class="mobilemenu__body">
        <div class="mobilemenu__header">
            <div class="mobilemenu__title">Menu</div>
            <button type="button" class="mobilemenu__close">
                <svg width="20px" height="20px">
                    <use xlink:href="images/sprite.svg#cross-20"></use>
                </svg>
            </button>
        </div>
        <div class="mobilemenu__content">
            <ul class="mobile-links mobile-links--level--0" data-collapse data-collapse-opened-class="mobile-links__item--open">
                <?php
                /*CONSULTA LINEA DE PRODUCTO Y ENLISTA TODAS LAS LINEAS con Estado=Activo (1)*/
                $QueryLinea = mysqli_query($mysqli, "SELECT * FROM tienda_producto_linea WHERE estado=1") or die(mysqli_error($mysqli));

                while ($rowLinea = mysqli_fetch_array($QueryLinea)) { ?><li class="mobile-links__item" data-collapse-item>
                        <div class="mobile-links__item-title">
                            <a href="#" class="mobile-links__item-link"><?php print($rowLinea["linea"]); ?></a>
                            <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                    <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#arrow-rounded-down-12x7"></use>
                                </svg>
                            </button>
                        </div>
                        <div class="mobile-links__item-sub-links" data-collapse-content>
                            <ul class="mobile-links mobile-links--level--1">

                                <?php
                                /*Obtiene todas las marcas distintas de la base directa del sistema
									 verificando que pertenezcan a la linea que correponde.
									  que no sea creada por el vendedor (creado_vendedor=0) agrupano por marca*/
                                $QueryMarca = mysqli_query($mysqli, "SELECT DISTINCT(marca), creado_vendedor, id_linea, id_sublinea FROM ventas_producto WHERE id AND marca!='' AND creado_vendedor=0 AND id_linea='{$rowLinea["id"]}' GROUP BY marca") or die(mysqli_error($mysqli));

                                while ($rowMarca = mysqli_fetch_array($QueryMarca)) { ?>
                                    <li class="mobile-links__item" data-collapse-item>
                                        <div class="mobile-links__item-title">
                                            <a href="#" class="mobile-links__item-link"><?php print($rowMarca["marca"]); ?></a>
                                            <button class="mobile-links__item-toggle" type="button" data-collapse-trigger>
                                                <svg class="mobile-links__item-arrow" width="12px" height="7px">
                                                    <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#arrow-rounded-down-12x7"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <div class="mobile-links__item-sub-links" data-collapse-content>
                                            <ul class="mobile-links mobile-links--level--2">
                                                <?php
                                                /*Consulta todas las sublineas de la tabla que formen parte de la base ventas producto y tambien que sean parte de la linea conusltada AGRUPANDO POR sublinea de la tabla ventas_producto*/
                                                $QuerySubLinea = mysqli_query($mysqli, "SELECT TPS.id, TPS.sublinea, VP.id_sublinea, VP.id_linea, VP.marca  FROM ventas_producto AS VP, tienda_producto_sublinea AS TPS WHERE  VP.id_sublinea=TPS.id AND VP.id_linea='{$rowLinea["id"]}' AND VP.marca='{$rowMarca["marca"]}' GROUP BY TPS.sublinea") or die(mysqli_error($mysqli));

                                                while ($rowSubLinea = mysqli_fetch_array($QuerySubLinea)) { ?> <li class="mobile-links__item" data-collapse-item>
                                                        <div class="mobile-links__item-title"><a href="#" class="mobile-links__item-link"><?php print($rowSubLinea["sublinea"]); ?></a></div>
                                                    </li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </li>
                                <?php } ?>

                            </ul>
                        </div>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>