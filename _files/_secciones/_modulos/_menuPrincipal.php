   <!-- mobile site__header -->
            <header class="site__header d-lg-none">
                <div class="mobile-header mobile-header--sticky mobile-header--stuck">
                    <div class="mobile-header__panel">
                        <div class="container">
                            <div class="mobile-header__body">
                                <strong></strong><button class="mobile-header__menu-button">
                                    <svg width="18px" height="14px">
                                        <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#menu-18x14"></use>
                                    </svg>
                                </button>
                                <a class="mobile-header__logo" href="<?php echo Idirectorio("home"); ?>">
                                    <img src="<?php echo Idirectorio("home"); ?>_files/images/logo-mobil-hentel.png" style="width:27vh;" />
                                </a>
                                <div class="mobile-header__search">
                                    <form class="mobile-header__search-form" action="#">
                                        <input class="mobile-header__search-input" name="search" placeholder="Productos" aria-label="Site search" type="text" autocomplete="off"> 
                                        <button class="mobile-header__search-button mobile-header__search-button--submit" type="submit">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#search-20"></use>
                                            </svg>
                                        </button>
                                        <button class="mobile-header__search-button mobile-header__search-button--close" type="button">
                                            <svg width="20px" height="20px">
                                                <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#cross-20"></use>
                                            </svg>
                                        </button>
                                        <div class="mobile-header__search-body"></div>
                                    </form>
                                </div>
                                <div class="mobile-header__indicators">
                                    <div class="indicator indicator--mobile-search indicator--mobile d-sm-none">
                                        <button class="indicator__button">
                                            <span class="indicator__area">
                                                <svg width="20px" height="20px">
                                                    <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#search-20"></use>
                                                </svg>
                                            </span>
                                        </button>
                                    </div>
                                    <div class="indicator indicator--mobile d-sm-flex d-none">
                                        <a href="wishlist.html" class="indicator__button">
                                            <span class="indicator__area">
                                                <svg width="20px" height="20px">
                                                    <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#heart-20"></use>
                                                </svg>
                                                <span class="indicator__value">0</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="indicator indicator--mobile">
                                        <a href="<?php echo Idirectorio("carrito"); ?>" class="indicator__button">
                                            <span class="indicator__area">
                                                <svg width="20px" height="20px">
                                                    <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#cart-20"></use>
                                                </svg>
                                                <span class="indicator__value">3</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- mobile site__header / end --><!-- desktop site__header -->
            <header class="site__header d-lg-block d-none">
                <div class="site-header">
                    <!-- .topbar -->
                    <div class="site-header__topbar topbar">
                        <div class="topbar__container container">
                            <div class="topbar__row">
                                <div class="topbar__item topbar__item--link"><a class="topbar-link" href="about-us.html">About Us</a></div>
                                <div class="topbar__item topbar__item--link"><a class="topbar-link" href="contact-us.html">Contacts</a></div>
                                <div class="topbar__item topbar__item--link"><a class="topbar-link" href="#">Store Location</a></div>
                                <div class="topbar__item topbar__item--link"><a class="topbar-link" href="track-order.html">Track Order</a></div>
                                <div class="topbar__item topbar__item--link"><a class="topbar-link" href="blog-classic.html">Blog</a></div>
                                <div class="topbar__spring"></div>
                                <div class="topbar__item">
                                    <div class="topbar-dropdown">
                                        <button class="topbar-dropdown__btn" type="button">
                                            My Account 
                                            <svg width="7px" height="5px">
                                                <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#arrow-rounded-down-7x5"></use>
                                            </svg>
                                        </button>
                                        <div class="topbar-dropdown__body">
                                            <!-- .menu -->
                                            <ul class="menu menu--layout--topbar">
                                                <li><a href="account.html">Login</a></li>
                                                <li><a href="account.html">Register</a></li>
                                                <li><a href="#">Orders</a></li>
                                                <li><a href="#">Addresses</a></li>
                                            </ul>
                                            <!-- .menu / end -->
                                        </div>
                                    </div>
                                </div>
                                <div class="topbar__item">
                                    <div class="topbar-dropdown">
                                        <button class="topbar-dropdown__btn" type="button">
                                            Currency: <span class="topbar__item-value">USD</span> 
                                            <svg width="7px" height="5px">
                                                <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#arrow-rounded-down-7x5"></use>
                                            </svg>
                                        </button>
                                        <div class="topbar-dropdown__body">
                                            <!-- .menu -->
                                            <ul class="menu menu--layout--topbar">
                                                <li><a href="#">€ Euro</a></li>
                                                <li><a href="#">£ Pound Sterling</a></li>
                                                <li><a href="#">$ US Dollar</a></li>
                                                <li><a href="#">₽ Russian Ruble</a></li>
                                            </ul>
                                            <!-- .menu / end -->
                                        </div>
                                    </div>
                                </div>
                                <div class="topbar__item">
                                    <div class="topbar-dropdown">
                                        <button class="topbar-dropdown__btn" type="button">
                                            Language: <span class="topbar__item-value">EN</span> 
                                            <svg width="7px" height="5px">
                                                <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#arrow-rounded-down-7x5"></use>
                                            </svg>
                                        </button>
                                        <div class="topbar-dropdown__body">
                                            <!-- .menu -->
                                            <ul class="menu menu--layout--topbar menu--with-icons">
                                                <li>
                                                    <a href="#">
                                                        <div class="menu__icon"><img srcset="<?php echo Idirectorio("home"); ?>_files/images/languages/language-1.png, images/languages/language-1@2x.png 2x" src="<?php echo Idirectorio("home"); ?>_files/images/languages/language-1.png" alt=""></div>
                                                        English
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="menu__icon"><img srcset="<?php echo Idirectorio("home"); ?>_files/images/languages/language-2.png, images/languages/language-2@2x.png 2x" src="<?php echo Idirectorio("home"); ?>_files/images/languages/language-2.png" alt=""></div>
                                                        French
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="menu__icon"><img srcset="<?php echo Idirectorio("home"); ?>_files/images/languages/language-3.png, images/languages/language-3@2x.png 2x" src="<?php echo Idirectorio("home"); ?>_files/images/languages/language-3.png" alt=""></div>
                                                        German
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="menu__icon"><img srcset="<?php echo Idirectorio("home"); ?>_files/images/languages/language-4.png, images/languages/language-4@2x.png 2x" src="<?php echo Idirectorio("home"); ?>_files/images/languages/language-4.png" alt=""></div>
                                                        Russian
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <div class="menu__icon"><img srcset="<?php echo Idirectorio("home"); ?>_files/images/languages/language-5.png, images/languages/language-5@2x.png 2x" src="<?php echo Idirectorio("home"); ?>_files/images/languages/language-5.png" alt=""></div>
                                                        Italian
                                                    </a>
                                                </li>
                                            </ul>
                                            <!-- .menu / end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- .topbar / end -->
                    <div class="site-header__middle container">
                        <div class="site-header__logo">
                            <a href="/tiendaonline/"><img src="<?php echo Idirectorio("home"); ?>_files/images/logo-hentel.png" style="height:6vw;" /></a>
                        </div>
                        <div class="site-header__search">
                            <div class="search">
                                <form class="search__form" action="#">
                                    <input class="search__input" name="search" placeholder="Productos" aria-label="Site search" type="text" autocomplete="off"> 
                                    <button class="search__button" type="submit">
                                        <svg width="20px" height="20px">
                                            <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#search-20"></use>
                                        </svg>
                                    </button>
                                    <div class="search__border"></div>
                                </form>
                            </div>
                        </div>
                        <div class="site-header__phone">
                            <div class="site-header__phone-title">Call Center</div>
                            <div class="site-header__phone-number">(02) 6 036 124</div>
                            <div class="site-header__mail">info@hentel.com.ec</div>
                        </div>
                    </div>
                    <div class="site-header__nav-panel">
                        <div class="nav-panel">
                            <div class="nav-panel__container container">
                                <div class="nav-panel__row">
                                    <div class="nav-panel__departments">
                                        <!-- .departments -->
                                        <div class="departments <?php if ($Desplegado==1) { ?>departments--opened departments--fixed<?php } ?>" data-departments-fixed-by=".block-slideshow">
                                            <div class="departments__body">
                                                <div class="departments__links-wrapper">
                                                    <ul class="departments__links">
<?php
/*CONSULTA LINEA DE PRODUCTO Y ENLISTA TODAS LAS LINEAS con Estado=Activo (1)*/
$QueryLinea=mysqli_query($mysqli,"SELECT * FROM tienda_producto_linea WHERE estado=1") or die (mysqli_error($mysqli));

while ($rowLinea=mysqli_fetch_array($QueryLinea))
{ ?>                                                        <li class="departments__item">
                                                            <a href="<?php echo Idirectorio("home"); ?><?php print  ($rowLinea["url_linea"]); ?>/">
                                                                <?php print($rowLinea["linea"]); ?>
                                                                <svg class="departments__link-arrow" width="6px" height="9px">
                                                                    <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#arrow-rounded-right-6x9"></use>
                                                                </svg>
                                                            </a>
                                                            <div class="departments__megamenu departments__megamenu--xl">
                                                                <!-- .megamenu -->
                                                                <div class="megamenu megamenu--departments" style="background-image: url('<?php echo Idirectorio("home"); ?>_files/images/megamenu/megamenu-1.jpg');">
                                                                    <div class="row">
                      
                      <?php 
 /*Obtiene todas las marcas distintas de la base directa del sistema
									 verificando que pertenezcan a la linea que correponde.
									  que no sea creada por el vendedor (creado_vendedor=0) agrupano por marca*/
									  $QueryMarca=mysqli_query($mysqli,"SELECT DISTINCT(marca), creado_vendedor, id_linea, id_sublinea FROM ventas_producto WHERE id AND marca!='' AND creado_vendedor=0 AND id_linea='{$rowLinea["id"]}' GROUP BY marca") or die (mysqli_error($mysqli));

while ($rowMarca=mysqli_fetch_array($QueryMarca))
{ ?>
                                                  <div class="col-4">
                                                                            <ul class="megamenu__links megamenu__links--level--0">
                                                                                <li class="megamenu__item megamenu__item--with-submenu">
                                                                                    <a href="<?php echo Idirectorio("home"); ?><?php print  ($rowLinea["url_linea"]); ?>/<?php print LimpiarURL($rowMarca["marca"]); ?>/"><?php print($rowMarca["marca"]); ?></a>
                                                                                    <ul class="megamenu__links megamenu__links--level--1">

                                                                                         <?php 
/*Consulta todas las sublineas de la tabla que formen parte de la base ventas producto y tambien que sean parte de la linea conusltada AGRUPANDO POR sublinea de la tabla ventas_producto*/
$QuerySubLinea=mysqli_query($mysqli,"SELECT TPS.id, TPS.sublinea, VP.id_sublinea, VP.id_linea, VP.marca, TPS.url_sublinea  FROM ventas_producto AS VP, tienda_producto_sublinea AS TPS WHERE  VP.id_sublinea=TPS.id AND VP.id_linea='{$rowLinea["id"]}' AND VP.marca='{$rowMarca["marca"]}' GROUP BY TPS.sublinea") or die (mysqli_error($mysqli));

while ($rowSubLinea=mysqli_fetch_array($QuerySubLinea))
{ ?> <li class="megamenu__item"><a href="<?php echo Idirectorio("home"); ?><?php print  ($rowLinea["url_linea"]); ?>/<?php print LimpiarURL($rowMarca["marca"]); ?>/<?php print($rowSubLinea["url_sublinea"]); ?>/"><?php print($rowSubLinea["sublinea"]); ?></a></li><?php }  ?>
                                                                                      
                                                                                       
                                                                                    </ul>
                                                                                </li>
                                                                               <!-- 
                 ITEMS SIN SUBITEMS de ejmeplo
                      
                                                                               <li class="megamenu__item"><a href="#">Workbenches</a></li>
                                                                                <li class="megamenu__item"><a href="#">Presses</a></li>
                                                                                <li class="megamenu__item"><a href="#">Spray Guns</a></li>
                                                                                <li class="megamenu__item"><a href="#">Riveters</a></li>-->
                                                                            </ul>
                                                                        </div>
                                                                        <?php } ?>
                                                                    <!--
                                                                    
                                                                    
           BORRAR TODA ESTA SECCION
                                                                        <div class="col-3">
                                                                            <ul class="megamenu__links megamenu__links--level--0">
                                                                                <li class="megamenu__item megamenu__item--with-submenu">
                                                                                    <a href="#">Hand Tools</a>
                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                                        <li class="megamenu__item"><a href="#">Screwdrivers</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Handsaws</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Knives</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Axes</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Multitools</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Paint Tools</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li class="megamenu__item megamenu__item--with-submenu">
                                                                                    <a href="#">Garden Equipment</a>
                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                                        <li class="megamenu__item"><a href="#">Motor Pumps</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Chainsaws</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Electric Saws</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Brush Cutters</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-3">
                                                                            <ul class="megamenu__links megamenu__links--level--0">
                                                                                <li class="megamenu__item megamenu__item--with-submenu">
                                                                                    <a href="#">Machine Tools</a>
                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                                        <li class="megamenu__item"><a href="#">Thread Cutting</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Chip Blowers</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Sharpening Machines</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Pipe Cutters</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Slotting machines</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Lathes</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-3">
                                                                            <ul class="megamenu__links megamenu__links--level--0">
                                                                                <li class="megamenu__item megamenu__item--with-submenu">
                                                                                    <a href="#">Instruments</a>
                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                                        <li class="megamenu__item"><a href="#">Welding Equipment</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Power Tools</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Hand Tools</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Measuring Tool</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        
   BORRAR HASTA AQUI                                                         
   -->
                                                                        
                                                                    </div>
                                                                </div>
                                                                <!-- .megamenu / end -->
                                                            </div>
                                                        </li>
                                                        <?php } ?>
   
     
<!--<li class="departments__item">
                                                            <a href="#">
                                                                Networking 
                                                                <svg class="departments__link-arrow" width="6px" height="9px">
                                                                    <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#arrow-rounded-right-6x9"></use>
                                                                </svg>
                                                            </a>
                                                            <div class="departments__megamenu departments__megamenu--lg">
                                                                 .megamenu 
                                                                <div class="megamenu megamenu--departments" style="background-image: url('<?php echo Idirectorio("home"); ?>_files/images/megamenu/megamenu-2.jpg');">
                                                                    <div class="row">
                                                                        <div class="col-4">
                                                                            <ul class="megamenu__links megamenu__links--level--0">
                                                                                <li class="megamenu__item megamenu__item--with-submenu">
                                                                                    <a href="#">Hand Tools</a>
                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                                        <li class="megamenu__item"><a href="#">Screwdrivers</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Handsaws</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Knives</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Axes</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Multitools</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Paint Tools</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li class="megamenu__item megamenu__item--with-submenu">
                                                                                    <a href="#">Garden Equipment</a>
                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                                        <li class="megamenu__item"><a href="#">Motor Pumps</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Chainsaws</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Electric Saws</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Brush Cutters</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <ul class="megamenu__links megamenu__links--level--0">
                                                                                <li class="megamenu__item megamenu__item--with-submenu">
                                                                                    <a href="#">Machine Tools</a>
                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                                        <li class="megamenu__item"><a href="#">Thread Cutting</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Chip Blowers</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Sharpening Machines</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Pipe Cutters</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Slotting machines</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Lathes</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-4">
                                                                            <ul class="megamenu__links megamenu__links--level--0">
                                                                                <li class="megamenu__item megamenu__item--with-submenu">
                                                                                    <a href="#">Instruments</a>
                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                                        <li class="megamenu__item"><a href="#">Welding Equipment</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Power Tools</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Hand Tools</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Measuring Tool</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                 .megamenu / end 
                                                            </div>
                                                        </li>
                                                        <li class="departments__item">
                                                            <a href="#">
                                                                Gabinetes y Racks 
                                                                <svg class="departments__link-arrow" width="6px" height="9px">
                                                                    <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#arrow-rounded-right-6x9"></use>
                                                                </svg>
                                                            </a>
                                                            <div class="departments__megamenu departments__megamenu--nl">
                                                                 .megamenu 
                                                                <div class="megamenu megamenu--departments" style="background-image: url('<?php echo Idirectorio("home"); ?>_files/images/megamenu/megamenu-3.jpg');">
                                                                    <div class="row">
                                                                        <div class="col-6">
                                                                            <ul class="megamenu__links megamenu__links--level--0">
                                                                                <li class="megamenu__item megamenu__item--with-submenu">
                                                                                    <a href="#">Hand Tools</a>
                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                                        <li class="megamenu__item"><a href="#">Screwdrivers</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Handsaws</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Knives</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Axes</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Multitools</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Paint Tools</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li class="megamenu__item megamenu__item--with-submenu">
                                                                                    <a href="#">Garden Equipment</a>
                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                                        <li class="megamenu__item"><a href="#">Motor Pumps</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Chainsaws</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Electric Saws</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Brush Cutters</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                        <div class="col-6">
                                                                            <ul class="megamenu__links megamenu__links--level--0">
                                                                                <li class="megamenu__item megamenu__item--with-submenu">
                                                                                    <a href="#">Instruments</a>
                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                                        <li class="megamenu__item"><a href="#">Welding Equipment</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Power Tools</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Hand Tools</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Measuring Tool</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                 .megamenu / end 
                                                            </div>
                                                        </li>
                                                        <li class="departments__item">
                                                            <a href="#">
                                                                Routing & Switching 
                                                                <svg class="departments__link-arrow" width="6px" height="9px">
                                                                    <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#arrow-rounded-right-6x9"></use>
                                                                </svg>
                                                            </a>
                                                            <div class="departments__megamenu departments__megamenu--sm">
                                                                 .megamenu 
                                                                <div class="megamenu megamenu--departments">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <ul class="megamenu__links megamenu__links--level--0">
                                                                                <li class="megamenu__item megamenu__item--with-submenu">
                                                                                    <a href="#">Hand Tools</a>
                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                                        <li class="megamenu__item"><a href="#">Screwdrivers</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Handsaws</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Knives</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Axes</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Multitools</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Paint Tools</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                                <li class="megamenu__item megamenu__item--with-submenu">
                                                                                    <a href="#">Garden Equipment</a>
                                                                                    <ul class="megamenu__links megamenu__links--level--1">
                                                                                        <li class="megamenu__item"><a href="#">Motor Pumps</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Chainsaws</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Electric Saws</a></li>
                                                                                        <li class="megamenu__item"><a href="#">Brush Cutters</a></li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                 .megamenu / end 
                                                            </div>
                                                        </li>
                                                        <li class="departments__item departments__item--menu">
                                                            <a href="#">
                                                                Wire & Cable 
                                                                <svg class="departments__link-arrow" width="6px" height="9px">
                                                                    <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#arrow-rounded-right-6x9"></use>
                                                                </svg>
                                                            </a>
                                                            <div class="departments__menu">
                                                                 .menu 
                                                                <ul class="menu menu--layout--classic">
                                                                    <li>
                                                                        <a href="#">
                                                                            Soldering Equipment 
                                                                            <svg class="menu__arrow" width="6px" height="9px">
                                                                                <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#arrow-rounded-right-6x9"></use>
                                                                            </svg>
                                                                        </a>
                                                                        <div class="menu__submenu">
                                                                             .menu 
                                                                            <ul class="menu menu--layout--classic">
                                                                                <li><a href="#">Soldering Station</a></li>
                                                                                <li><a href="#">Soldering Dryers</a></li>
                                                                                <li><a href="#">Gas Soldering Iron</a></li>
                                                                                <li><a href="#">Electric Soldering Iron</a></li>
                                                                            </ul>
                                                                             .menu / end 
                                                                        </div>
                                                                    </li>
                                                                    <li><a href="#">Light Bulbs</a></li>
                                                                    <li><a href="#">Batteries</a></li>
                                                                    <li><a href="#">Light Fixtures</a></li>
                                                                    <li><a href="#">Warm Floor</a></li>
                                                                    <li><a href="#">Generators</a></li>
                                                                    <li><a href="#">UPS</a></li>
                                                                </ul>
                                                                 .menu / end 
                                                            </div>
                                                        </li>
                                                        <li class="departments__item"><a href="#">Wifi Empresarial</a></li>
                                                        <li class="departments__item"><a href="#">Seguridad Electrónica</a></li>
                                                        <li class="departments__item"><a href="#">Certificadores e Instrumentos</a></li>-->
                                                                                                           <!--<li class="departments__item"><a href="#">Plumbing</a></li>
                                                        <li class="departments__item"><a href="#">Storage & Organization</a></li>
                                                        <li class="departments__item"><a href="#">Welding & Soldering</a></li>-->
                                                    </ul>
                                                </div>
                                            </div>
                                            <button class="departments__button">
                                                <svg class="departments__button-icon" width="18px" height="14px">
                                                    <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#menu-18x14"></use>
                                                </svg>
                                                L&iacute;nea Productos
                                                <svg class="departments__button-arrow" width="9px" height="6px">
                                                    <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#arrow-rounded-down-9x6"></use>
                                                </svg>
                                            </button>
                                        </div>
                                        <!-- .departments / end -->
                                    </div>
                                    <!-- .nav-links -->
                                    <div class="nav-panel__nav-links nav-links">
                                        <ul class="nav-links__list">
                                            <li class="nav-links__item">
                                                <a href="<?php echo Idirectorio("home"); ?>">
                                                    <span>
                                                        Inicio 
                                                        
                                                    </span>
                                                </a>
                                                <!--<div class="nav-links__menu">
                                                    <!-- .menu --
                                                    <ul class="menu menu--layout--classic">
                                                        <li><a href="index.html">Home 1</a></li>
                                                        <li><a href="index-2.html">Home 2</a></li>
                                                    </ul>
                                                    <!-- .menu / end --
 
                                                </div>
                                                -->
                                                
                                            </li>
                                            <li class="nav-links__item nav-links__item--with-submenu">
                                               
                                                    
                                                    <li class="nav-links__item nav-links__item--with-submenu">
                                                <a href="index.html">
                                                   <span> Marcas<svg class="nav-links__arrow" width="9px" height="6px">
                                                            <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#arrow-rounded-down-9x6"></use>
                                                        </svg>
                                                        </span>
                                                </a>
                                                <div class="nav-links__megamenu nav-links__megamenu--size--nl">
                                                    <!-- .megamenu -->
                                                    <div class="megamenu">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <ul class="megamenu__links megamenu__links--level--0">
                                                                    <li class="megamenu__item megamenu__item--with-submenu">
                                                                        <a href="#">Power Tools</a>
                                                                        <ul class="megamenu__links megamenu__links--level--1">
                                                                            <li class="megamenu__item"><a href="#">Engravers</a></li>
                                                                            <li class="megamenu__item"><a href="#">Wrenches</a></li>
                                                                            <li class="megamenu__item"><a href="#">Wall Chaser</a></li>
                                                                            <li class="megamenu__item"><a href="#">Pneumatic Tools</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class="megamenu__item megamenu__item--with-submenu">
                                                                        <a href="#">Machine Tools</a>
                                                                        <ul class="megamenu__links megamenu__links--level--1">
                                                                            <li class="megamenu__item"><a href="#">Thread Cutting</a></li>
                                                                            <li class="megamenu__item"><a href="#">Chip Blowers</a></li>
                                                                            <li class="megamenu__item"><a href="#">Sharpening Machines</a></li>
                                                                            <li class="megamenu__item"><a href="#">Pipe Cutters</a></li>
                                                                            <li class="megamenu__item"><a href="#">Slotting machines</a></li>
                                                                            <li class="megamenu__item"><a href="#">Lathes</a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-6">
                                                                <ul class="megamenu__links megamenu__links--level--0">
                                                                    <li class="megamenu__item megamenu__item--with-submenu">
                                                                        <a href="#">Hand Tools</a>
                                                                        <ul class="megamenu__links megamenu__links--level--1">
                                                                            <li class="megamenu__item"><a href="#">Screwdrivers</a></li>
                                                                            <li class="megamenu__item"><a href="#">Handsaws</a></li>
                                                                            <li class="megamenu__item"><a href="#">Knives</a></li>
                                                                            <li class="megamenu__item"><a href="#">Axes</a></li>
                                                                            <li class="megamenu__item"><a href="#">Multitools</a></li>
                                                                            <li class="megamenu__item"><a href="#">Paint Tools</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class="megamenu__item megamenu__item--with-submenu">
                                                                        <a href="#">Garden Equipment</a>
                                                                        <ul class="megamenu__links megamenu__links--level--1">
                                                                            <li class="megamenu__item"><a href="#">Motor Pumps</a></li>
                                                                            <li class="megamenu__item"><a href="#">Chainsaws</a></li>
                                                                            <li class="megamenu__item"><a href="#">Electric Saws</a></li>
                                                                            <li class="megamenu__item"><a href="#">Brush Cutters</a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- .megamenu / end -->
                                                </div>
                                            </li>
                                            <li class="nav-links__item nav-links__item--with-submenu">
                                                <a href="shop-grid-3-columns-sidebar.html">
                                                    <span>
                                                        E-Learning 
                                                        <svg class="nav-links__arrow" width="9px" height="6px">
                                                            <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#arrow-rounded-down-9x6"></use>
                                                        </svg>
                                                    </span>
                                                </a>
                                                <div class="nav-links__menu">
                                                    <!-- .menu -->
                                                    <ul class="menu menu--layout--classic">
                                                        <li>
                                                            <a href="shop-grid-3-columns-sidebar.html">
                                                                Shop Grid 
                                                                <svg class="menu__arrow" width="6px" height="9px">
                                                                    <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#arrow-rounded-right-6x9"></use>
                                                                </svg>
                                                            </a>
                                                            <div class="menu__submenu">
                                                                <!-- .menu -->
                                                                <ul class="menu menu--layout--classic">
                                                                    <li><a href="shop-grid-3-columns-sidebar.html">3 Columns Sidebar</a></li>
                                                                    <li><a href="shop-grid-4-columns-full.html">4 Columns Full</a></li>
                                                                    <li><a href="shop-grid-5-columns-full.html">5 Columns Full</a></li>
                                                                </ul>
                                                                <!-- .menu / end -->
                                                            </div>
                                                        </li>
                                                        <li><a href="shop-list.html">Shop List</a></li>
                                                        <li><a href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                                        <li>
                                                            <a href="product.html">
                                                                Product 
                                                                <svg class="menu__arrow" width="6px" height="9px">
                                                                    <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#arrow-rounded-right-6x9"></use>
                                                                </svg>
                                                            </a>
                                                            <div class="menu__submenu">
                                                                <!-- .menu -->
                                                                <ul class="menu menu--layout--classic">
                                                                    <li><a href="product.html">Product</a></li>
                                                                    <li><a href="product-alt.html">Product Alt</a></li>
                                                                    <li><a href="product-sidebar.html">Product Sidebar</a></li>
                                                                </ul>
                                                                <!-- .menu / end -->
                                                            </div>
                                                        </li>
                                                        <li><a href="cart.html">Cart</a></li>
                                                        <li><a href="checkout.html">Checkout</a></li>
                                                        <li><a href="wishlist.html">Wishlist</a></li>
                                                        <li><a href="compare.html">Compare</a></li>
                                                        <li><a href="account.html">My Account</a></li>
                                                        <li><a href="track-order.html">Track Order</a></li>
                                                    </ul>
                                                    <!-- .menu / end -->
                                                </div>
                                            </li>
                                            <li class="nav-links__item nav-links__item--with-submenu">
                                                <a href="blog-classic.html">
                                                    <span>
                                                        Catálogo 
                                                        <svg class="nav-links__arrow" width="9px" height="6px">
                                                            <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#arrow-rounded-down-9x6"></use>
                                                        </svg>
                                                    </span>
                                                </a>
                                                <div class="nav-links__menu">
                                                    <!-- .menu -->
                                                    <ul class="menu menu--layout--classic">
                                                        <li><a href="blog-classic.html">Blog Classic</a></li>
                                                        <li><a href="blog-grid.html">Blog Grid</a></li>
                                                        <li><a href="blog-list.html">Blog List</a></li>
                                                        <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                                        <li><a href="post.html">Post Page</a></li>
                                                        <li><a href="post-without-sidebar.html">Post Without Sidebar</a></li>
                                                    </ul>
                                                    <!-- .menu / end -->
                                                </div>
                                            </li>
                                            <li class="nav-links__item nav-links__item--with-submenu">
                                                <a href="#">
                                                    <span>
                                                        Contáctenos 
                                                        <svg class="nav-links__arrow" width="9px" height="6px">
                                                            <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#arrow-rounded-down-9x6"></use>
                                                        </svg>
                                                    </span>

                                                </a>
                                                <div class="nav-links__menu">
                                                    <!-- .menu -->
                                                    <ul class="menu menu--layout--classic">
                                                        <li><a href="about-us.html">About Us</a></li>
                                                        <li><a href="contact-us.html">Contact Us</a></li>
                                                        <li><a href="contact-us-alt.html">Contact Us Alt</a></li>
                                                        <li><a href="404.html">404</a></li>
                                                        <li><a href="terms-and-conditions.html">Terms And Conditions</a></li>
                                                        <li><a href="faq.html">FAQ</a></li>
                                                        <li><a href="components.html">Components</a></li>
                                                        <li><a href="typography.html">Typography</a></li>
                                                    </ul>
                                                    <!-- .menu / end -->
                                                </div>
                                            </li>
                                            <!--<li class="nav-links__item"><a href="contact-us.html"><span>Contact Us</span></a></li>-->
                                            <!--<li class="nav-links__item"><a href="https://themeforest.net/user/kos9/portfolio"><span>Buy Theme</span></a></li>-->
                                        </ul>
                                    </div>
                                    <!-- .nav-links / end -->
                                    <div class="nav-panel__indicators">
                                        <!--<div class="indicator">
                                            <a href="wishlist.html" class="indicator__button">
                                                <span class="indicator__area">
                                                    <svg width="20px" height="20px">
                                                        <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#heart-20"></use>
                                                    </svg>
                                                    <span class="indicator__value">0</span>
                                                </span>
                                            </a>
                                        </div>-->
                                        <div class="indicator indicator--trigger--click">
                                            <a href="cart.html" class="indicator__button">
                                                <span class="indicator__area">
                                                    <svg width="20px" height="20px">
                                                        <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#cart-20"></use>
                                                    </svg>
                                                    <span class="indicator__value">3</span>
                                                </span>
                                            </a>
                                            <div class="indicator__dropdown">
                                                <!-- .dropcart -->
                                                <div class="dropcart">
                                                    <div class="dropcart__products-list">
                                                        <div class="dropcart__product">
                                                            <div class="dropcart__product-image"><a href="product.html"><img src="<?php echo Idirectorio("home"); ?>_files/images/products/product-1.jpg" alt=""></a></div>
                                                            <div class="dropcart__product-info">
                                                                <div class="dropcart__product-name"><a href="product.html">Electric Planer Brandix KL370090G 300 Watts</a></div>
                                                                <ul class="dropcart__product-options">
                                                                    <li>Color: Yellow</li>
                                                                    <li>Material: Aluminium</li>
                                                                </ul>
                                                                <div class="dropcart__product-meta"><span class="dropcart__product-quantity">2</span> x <span class="dropcart__product-price">$699.00</span></div>
                                                            </div>
                                                            <button type="button" class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon">
                                                                <svg width="10px" height="10px">
                                                                    <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#cross-10"></use>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="dropcart__product">
                                                            <div class="dropcart__product-image"><a href="product.html"><img src="<?php echo Idirectorio("home"); ?>_files/images/products/product-2.jpg" alt=""></a></div>
                                                            <div class="dropcart__product-info">
                                                                <div class="dropcart__product-name"><a href="product.html">Undefined Tool IRadix DPS3000SY 2700 watts</a></div>
                                                                <div class="dropcart__product-meta"><span class="dropcart__product-quantity">1</span> x <span class="dropcart__product-price">$849.00</span></div>
                                                            </div>
                                                            <button type="button" class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon">
                                                                <svg width="10px" height="10px">
                                                                    <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#cross-10"></use>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                        <div class="dropcart__product">
                                                            <div class="dropcart__product-image"><a href="product.html"><img src="<?php echo Idirectorio("home"); ?>_files/images/products/product-5.jpg" alt=""></a></div>
                                                            <div class="dropcart__product-info">
                                                                <div class="dropcart__product-name"><a href="product.html">Brandix Router Power Tool 2017ERXPK</a></div>
                                                                <ul class="dropcart__product-options">
                                                                    <li>Color: True Red</li>
                                                                </ul>
                                                                <div class="dropcart__product-meta"><span class="dropcart__product-quantity">3</span> x <span class="dropcart__product-price">$1,210.00</span></div>
                                                            </div>
                                                            <button type="button" class="dropcart__product-remove btn btn-light btn-sm btn-svg-icon">
                                                                <svg width="10px" height="10px">
                                                                    <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#cross-10"></use>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="dropcart__totals">
                                                        <table>
                                                            <tr>
                                                                <th>Subtotal</th>
                                                                <td>$5,877.00</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Shipping</th>
                                                                <td>$25.00</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Tax</th>
                                                                <td>$0.00</td>
                                                            </tr>
                                                            <tr>
                                                                <th>Total</th>
                                                                <td>$5,902.00</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                    <div class="dropcart__buttons"><a class="btn btn-secondary" href="<?php echo Idirectorio("carrito"); ?>">Ver Carrito</a> <a class="btn btn-primary" href="checkout.html">Checkout</a></div>
                                                </div>
                                                <!-- .dropcart / end -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- desktop site__header / end -->