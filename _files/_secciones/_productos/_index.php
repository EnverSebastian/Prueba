<?php
echo $URLLinea=$Pagina1;
$URLMarca=$Pagina2;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<!---->
   <head>
      <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="format-detection" content="telephone=no">
        <title>Ecommerce - Hentel</title>
        <?php /*  HEAD */ require_once("_files/_secciones/_modulos/_head.php"); ?>
    </head>
   <body>
      <!-- quickview-modal -->
      <div id="quickview-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content"></div>
        </div>
    </div><!-- quickview-modal / end --><!-- mobilemenu -->
    <?php /*  MENU PRINCIPAL MOBIL */ require_once("_files/_secciones/_modulos/_menuMobil.php"); ?>
    <!-- mobilemenu / end --><!-- site -->
    <div class="site"><!-- mobile site__header -->
        <?php /*  MENU PRINCIPAL */ /* 1= Menu desplegado para HOME | 0=Oculto para deplegar, en otras paginas*/ $Desplegado=0; require_once("_files/_secciones/_modulos/_menuPrincipal.php"); ?>
         <!-- desktop site__header / end -->
         
         <!-- site__body -->
         <div class="site__body">
            <div class="page-header">
               <div class="page-header__container container">
                  <div class="page-header__breadcrumb">
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item">
                              <a href="<?php echo Idirectorio("home"); ?>">Home</a> 
                              <svg class="breadcrumb-arrow" width="6px" height="9px">
                                 <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#arrow-rounded-right-6x9"></use>
                              </svg>
                           </li>
                           <li class="breadcrumb-item">
                              <a href="#"><?php //print ObtenerDatos("tienda_ventas_linea", "url_linea", $URLLinea, "linea") ?></a> 
                              <svg class="breadcrumb-arrow" width="6px" height="9px">
                                 <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#arrow-rounded-right-6x9"></use>
                              </svg>
                           </li>
                           <li class="breadcrumb-item active" aria-current="page">Fibra Óptica</li>
                        </ol>
                     </nav>
                  </div>
                  <div class="page-header__title">
                     <h1>Fibra Óptica</h1>
                  </div>
               </div>
            </div>
            <div class="container">
               <div class="shop-layout shop-layout--sidebar--start">
                  <div class="shop-layout__sidebar">
                     <div class="block block-sidebar">
                        <div class="block-sidebar__item">
                           <div class="widget-filters widget" data-collapse data-collapse-opened-class="filter--opened">
                              <h4 class="widget__title">Filters</h4>
                              <div class="widget-filters__list">
                                 <div class="widget-filters__item">
                                    <div class="filter filter--opened" data-collapse-item>
                                       <button type="button" class="filter__title" data-collapse-trigger>
                                          Categories 
                                          <svg class="filter__arrow" width="12px" height="7px">
                                             <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#arrow-rounded-down-12x7"></use>
                                          </svg>
                                       </button>
                                       <div class="filter__body" data-collapse-content>
                                          <div class="filter__container">
                                             <div class="filter-categories">
                                                <ul class="filter-categories__list">
                                                   <li class="filter-categories__item filter-categories__item--parent">
                                                      <svg class="filter-categories__arrow" width="6px" height="9px">
                                                         <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#arrow-rounded-left-6x9"></use>
                                                      </svg>
                                                      <a href="#">Construction & Repair</a>
                                                      <div class="filter-categories__counter">254</div>
                                                   </li>
                                                   <li class="filter-categories__item filter-categories__item--parent">
                                                      <svg class="filter-categories__arrow" width="6px" height="9px">
                                                         <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#arrow-rounded-left-6x9"></use>
                                                      </svg>
                                                      <a href="#">Instruments</a>
                                                      <div class="filter-categories__counter">75</div>
                                                   </li>
                                                   <li class="filter-categories__item filter-categories__item--current">
                                                      <a href="#">Power Tools</a>
                                                      <div class="filter-categories__counter">21</div>
                                                   </li>
                                                   <li class="filter-categories__item filter-categories__item--child">
                                                      <a href="#">Drills & Mixers</a>
                                                      <div class="filter-categories__counter">15</div>
                                                   </li>
                                                   <li class="filter-categories__item filter-categories__item--child">
                                                      <a href="#">Cordless Screwdrivers</a>
                                                      <div class="filter-categories__counter">2</div>
                                                   </li>
                                                   <li class="filter-categories__item filter-categories__item--child">
                                                      <a href="#">Screwdrivers</a>
                                                      <div class="filter-categories__counter">30</div>
                                                   </li>

                                                   <li class="filter-categories__item filter-categories__item--child">
                                                      <a href="#">Wrenches</a>
                                                      <div class="filter-categories__counter">7</div>
                                                   </li>
                                                   <li class="filter-categories__item filter-categories__item--child">
                                                      <a href="#">Grinding Machines</a>
                                                      <div class="filter-categories__counter">5</div>
                                                   </li>
                                                   <li class="filter-categories__item filter-categories__item--child">
                                                      <a href="#">Milling Cutters</a>
                                                      <div class="filter-categories__counter">2</div>
                                                   </li>
                                                   <li class="filter-categories__item filter-categories__item--child">
                                                      <a href="#">Electric Spray Guns</a>
                                                      <div class="filter-categories__counter">9</div>
                                                   </li>
                                                   <li class="filter-categories__item filter-categories__item--child">
                                                      <a href="#">Jigsaws</a>
                                                      <div class="filter-categories__counter">4</div>
                                                   </li>
                                                   <li class="filter-categories__item filter-categories__item--child">
                                                      <a href="#">Jackhammers</a>
                                                      <div class="filter-categories__counter">0</div>
                                                   </li>
                                                   <li class="filter-categories__item filter-categories__item--child">
                                                      <a href="#">Planers</a>
                                                      <div class="filter-categories__counter">12</div>
                                                   </li>
                                                   <li class="filter-categories__item filter-categories__item--child">
                                                      <a href="#">Glue Guns</a>
                                                      <div class="filter-categories__counter">7</div>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="widget-filters__item">
                                    <div class="filter filter--opened" data-collapse-item>
                                       <button type="button" class="filter__title" data-collapse-trigger>
                                          Price 
                                          <svg class="filter__arrow" width="12px" height="7px">
                                             <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#arrow-rounded-down-12x7"></use>
                                          </svg>
                                       </button>
                                       <div class="filter__body" data-collapse-content>
                                          <div class="filter__container">
                                             <div class="filter-price" data-min="500" data-max="1500" data-from="590" data-to="1130">
                                                <div class="filter-price__slider"></div>
                                                <div class="filter-price__title">Price: $<span class="filter-price__min-value"></span> – $<span class="filter-price__max-value"></span></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="widget-filters__item">
                                    <div class="filter filter--opened" data-collapse-item>
                                       <button type="button" class="filter__title" data-collapse-trigger>
                                          Brand 
                                          <svg class="filter__arrow" width="12px" height="7px">
                                             <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#arrow-rounded-down-12x7"></use>
                                          </svg>
                                       </button>
                                       <div class="filter__body" data-collapse-content>
                                          <div class="filter__container">
                                             <div class="filter-list">
                                                <div class="filter-list__list">
                                                   <label class="filter-list__item">
                                                      <span class="filter-list__input input-check">
                                                         <span class="input-check__body">
                                                            <input class="input-check__input" type="checkbox"> <span class="input-check__box"></span> 
                                                            <svg class="input-check__icon" width="9px" height="7px">
                                                               <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#check-9x7"></use>
                                                            </svg>
                                                         </span>
                                                      </span>
                                                      <span class="filter-list__title">Wakita </span><span class="filter-list__counter">7</span>
                                                   </label>
                                                   <label class="filter-list__item">
                                                      <span class="filter-list__input input-check">
                                                         <span class="input-check__body">
                                                            <input class="input-check__input" type="checkbox" checked="checked"> <span class="input-check__box"></span> 
                                                            <svg class="input-check__icon" width="9px" height="7px">
                                                               <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#check-9x7"></use>
                                                            </svg>
                                                         </span>
                                                      </span>
                                                      <span class="filter-list__title">Zosch </span><span class="filter-list__counter">42</span>
                                                   </label>
                                                   <label class="filter-list__item filter-list__item--disabled">
                                                      <span class="filter-list__input input-check">
                                                         <span class="input-check__body">
                                                            <input class="input-check__input" type="checkbox" checked="checked" disabled="disabled"> <span class="input-check__box"></span> 
                                                            <svg class="input-check__icon" width="9px" height="7px">
                                                               <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#check-9x7"></use>
                                                            </svg>
                                                         </span>
                                                      </span>
                                                      <span class="filter-list__title">WeVALT</span>
                                                   </label>
                                                   <label class="filter-list__item filter-list__item--disabled">
                                                      <span class="filter-list__input input-check">
                                                         <span class="input-check__body">
                                                            <input class="input-check__input" type="checkbox" disabled="disabled"> <span class="input-check__box"></span> 
                                                            <svg class="input-check__icon" width="9px" height="7px">
                                                               <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#check-9x7"></use>
                                                            </svg>
                                                         </span>
                                                      </span>
                                                      <span class="filter-list__title">Hammer</span>
                                                   </label>
                                                   <label class="filter-list__item">
                                                      <span class="filter-list__input input-check">
                                                         <span class="input-check__body">
                                                            <input class="input-check__input" type="checkbox"> <span class="input-check__box"></span> 
                                                            <svg class="input-check__icon" width="9px" height="7px">
                                                               <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#check-9x7"></use>
                                                            </svg>
                                                         </span>
                                                      </span>
                                                      <span class="filter-list__title">Mitasia </span><span class="filter-list__counter">1</span>
                                                   </label>
                                                   <label class="filter-list__item">
                                                      <span class="filter-list__input input-check">
                                                         <span class="input-check__body">
                                                            <input class="input-check__input" type="checkbox"> <span class="input-check__box"></span> 
                                                            <svg class="input-check__icon" width="9px" height="7px">
                                                               <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#check-9x7"></use>
                                                            </svg>
                                                         </span>
                                                      </span>
                                                      <span class="filter-list__title">Metaggo </span><span class="filter-list__counter">25</span>
                                                   </label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="widget-filters__item">
                                    <div class="filter filter--opened" data-collapse-item>
                                       <button type="button" class="filter__title" data-collapse-trigger>
                                          Brand 
                                          <svg class="filter__arrow" width="12px" height="7px">
                                             <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#arrow-rounded-down-12x7"></use>
                                          </svg>
                                       </button>
                                       <div class="filter__body" data-collapse-content>
                                          <div class="filter__container">
                                             <div class="filter-list">
                                                <div class="filter-list__list"><label class="filter-list__item"><span class="filter-list__input input-radio"><span class="input-radio__body"><input class="input-radio__input" name="filter_radio" type="radio"> <span class="input-radio__circle"></span> </span></span><span class="filter-list__title">Wakita </span><span class="filter-list__counter">7</span></label> <label class="filter-list__item"><span class="filter-list__input input-radio"><span class="input-radio__body"><input class="input-radio__input" name="filter_radio" type="radio"> <span class="input-radio__circle"></span> </span></span><span class="filter-list__title">Zosch </span><span class="filter-list__counter">42</span></label> <label class="filter-list__item filter-list__item--disabled"><span class="filter-list__input input-radio"><span class="input-radio__body"><input class="input-radio__input" name="filter_radio" type="radio" checked="checked" disabled="disabled"> <span class="input-radio__circle"></span> </span></span><span class="filter-list__title">WeVALT</span></label> <label class="filter-list__item filter-list__item--disabled"><span class="filter-list__input input-radio"><span class="input-radio__body"><input class="input-radio__input" name="filter_radio" type="radio" disabled="disabled"> <span class="input-radio__circle"></span> </span></span><span class="filter-list__title">Hammer</span></label> <label class="filter-list__item"><span class="filter-list__input input-radio"><span class="input-radio__body"><input class="input-radio__input" name="filter_radio" type="radio"> <span class="input-radio__circle"></span> </span></span><span class="filter-list__title">Mitasia </span><span class="filter-list__counter">1</span></label> <label class="filter-list__item"><span class="filter-list__input input-radio"><span class="input-radio__body"><input class="input-radio__input" name="filter_radio" type="radio"> <span class="input-radio__circle"></span> </span></span><span class="filter-list__title">Metaggo </span><span class="filter-list__counter">25</span></label></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="widget-filters__item">
                                    <div class="filter filter--opened" data-collapse-item>
                                       <button type="button" class="filter__title" data-collapse-trigger>
                                          Color 
                                          <svg class="filter__arrow" width="12px" height="7px">
                                             <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#arrow-rounded-down-12x7"></use>
                                          </svg>
                                       </button>
                                       <div class="filter__body" data-collapse-content>
                                          <div class="filter__container">
                                             <div class="filter-color">
                                                <div class="filter-color__list">
                                                   <label class="filter-color__item">

                                                      <span class="filter-color__check input-check-color input-check-color--white" style="color: #fff;">
                                                   <label class="input-check-color__body"><input class="input-check-color__input" type="checkbox" /> <span class="input-check-color__box"></span> <svg class="input-check-color__icon" width="12px" height="9px"><use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#check-12x9"></use></svg> <span class="input-check-color__stick"></span></label></span></label> 
                                                   <label class="filter-color__item">
                                                      <span class="filter-color__check input-check-color input-check-color--light" style="color: #d9d9d9;">
                                                   <label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <svg class="input-check-color__icon" width="12px" height="9px"><use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#check-12x9"></use></svg> <span class="input-check-color__stick"></span></label></span></label> 
                                                   <label class="filter-color__item">
                                                      <span class="filter-color__check input-check-color" style="color: #b3b3b3;">
                                                   <label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <svg class="input-check-color__icon" width="12px" height="9px"><use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#check-12x9"></use></svg> <span class="input-check-color__stick"></span></label></span></label> 
                                                   <label class="filter-color__item">
                                                      <span class="filter-color__check input-check-color" style="color: #808080;">
                                                   <label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <svg class="input-check-color__icon" width="12px" height="9px"><use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#check-12x9"></use></svg> <span class="input-check-color__stick"></span></label></span></label> 
                                                   <label class="filter-color__item">
                                                      <span class="filter-color__check input-check-color" style="color: #666;">
                                                   <label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <svg class="input-check-color__icon" width="12px" height="9px"><use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#check-12x9"></use></svg> <span class="input-check-color__stick"></span></label></span></label> 
                                                   <label class="filter-color__item">
                                                      <span class="filter-color__check input-check-color" style="color: #4d4d4d;">
                                                   <label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <svg class="input-check-color__icon" width="12px" height="9px"><use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#check-12x9"></use></svg> <span class="input-check-color__stick"></span></label></span></label> 
                                                   <label class="filter-color__item">
                                                      <span class="filter-color__check input-check-color" style="color: #262626;">
                                                   <label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <svg class="input-check-color__icon" width="12px" height="9px"><use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#check-12x9"></use></svg> <span class="input-check-color__stick"></span></label></span></label> 
                                                   <label class="filter-color__item">
                                                      <span class="filter-color__check input-check-color" style="color: #ff4040;">
                                                   <label class="input-check-color__body"><input class="input-check-color__input" type="checkbox" checked="checked"> <span class="input-check-color__box"></span> <svg class="input-check-color__icon" width="12px" height="9px"><use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#check-12x9"></use></svg> <span class="input-check-color__stick"></span></label></span></label> 
                                                   <label class="filter-color__item">
                                                      <span class="filter-color__check input-check-color" style="color: #ff8126;">
                                                   <label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <svg class="input-check-color__icon" width="12px" height="9px"><use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#check-12x9"></use></svg> <span class="input-check-color__stick"></span></label></span></label> 
                                                   <label class="filter-color__item">
                                                      <span class="filter-color__check input-check-color input-check-color--light" style="color: #ffd440;">
                                                   <label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <svg class="input-check-color__icon" width="12px" height="9px"><use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#check-12x9"></use></svg> <span class="input-check-color__stick"></span></label></span></label> 
                                                   <label class="filter-color__item">
                                                      <span class="filter-color__check input-check-color input-check-color--light" style="color: #becc1f;">
                                                   <label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <svg class="input-check-color__icon" width="12px" height="9px"><use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#check-12x9"></use></svg> <span class="input-check-color__stick"></span></label></span></label> 
                                                   <label class="filter-color__item">
                                                      <span class="filter-color__check input-check-color" style="color: #8fcc14;">
                                                   <label class="input-check-color__body"><input class="input-check-color__input" type="checkbox" checked="checked"> <span class="input-check-color__box"></span> <svg class="input-check-color__icon" width="12px" height="9px"><use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#check-12x9"></use></svg> <span class="input-check-color__stick"></span></label></span></label> 
                                                   <label class="filter-color__item">
                                                      <span class="filter-color__check input-check-color" style="color: #47cc5e;">
                                                   <label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <svg class="input-check-color__icon" width="12px" height="9px"><use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#check-12x9"></use></svg> <span class="input-check-color__stick"></span></label></span></label> 
                                                   <label class="filter-color__item">
                                                      <span class="filter-color__check input-check-color" style="color: #47cca0;">
                                                   <label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <svg class="input-check-color__icon" width="12px" height="9px"><use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#check-12x9"></use></svg> <span class="input-check-color__stick"></span></label></span></label> 
                                                   <label class="filter-color__item">
                                                      <span class="filter-color__check input-check-color" style="color: #47cccc;">
                                                   <label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <svg class="input-check-color__icon" width="12px" height="9px"><use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#check-12x9"></use></svg> <span class="input-check-color__stick"></span></label></span></label> 
                                                   <label class="filter-color__item">
                                                      <span class="filter-color__check input-check-color" style="color: #40bfff;">
                                                   <label class="input-check-color__body"><input class="input-check-color__input" type="checkbox" disabled="disabled"> <span class="input-check-color__box"></span> <svg class="input-check-color__icon" width="12px" height="9px"><use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#check-12x9"></use></svg> <span class="input-check-color__stick"></span></label></span></label> 
                                                   <label class="filter-color__item">
                                                      <span class="filter-color__check input-check-color" style="color: #3d6dcc;">
                                                   <label class="input-check-color__body"><input class="input-check-color__input" type="checkbox" checked="checked"> <span class="input-check-color__box"></span> <svg class="input-check-color__icon" width="12px" height="9px"><use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#check-12x9"></use></svg> <span class="input-check-color__stick"></span></label></span></label> 
                                                   <label class="filter-color__item">
                                                      <span class="filter-color__check input-check-color" style="color: #7766cc;">
                                                   <label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <svg class="input-check-color__icon" width="12px" height="9px"><use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#check-12x9"></use></svg> <span class="input-check-color__stick"></span></label></span></label> 
                                                   <label class="filter-color__item">
                                                      <span class="filter-color__check input-check-color" style="color: #b852cc;">
                                                   <label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <svg class="input-check-color__icon" width="12px" height="9px"><use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#check-12x9"></use></svg> <span class="input-check-color__stick"></span></label></span></label> 
                                                   <label class="filter-color__item">
                                                      <span class="filter-color__check input-check-color" style="color: #e53981;">
                                                   <label class="input-check-color__body"><input class="input-check-color__input" type="checkbox"> <span class="input-check-color__box"></span> <svg class="input-check-color__icon" width="12px" height="9px"><use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#check-12x9"></use></svg> <span class="input-check-color__stick"></span></label></span></label>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="widget-filters__actions d-flex"><button class="btn btn-primary btn-sm">Filter</button> <button class="btn btn-secondary btn-sm ml-2">Reset</button></div>
                           </div>
                        </div>
                        <?php require_once("_files/_secciones/_productos/_ultimos_productos.php"); ?>
                     </div>
                  </div>
                  <div class="shop-layout__content">
                     <div class="block">
                        <div class="products-view">
                           <div class="products-view__options">
                              <div class="view-options">
                                 <div class="view-options__layout">
                                    <div class="layout-switcher">
                                       <div class="layout-switcher__list">
                                          <button data-layout="grid-3-sidebar" data-with-features="false" title="Grid" type="button" class="layout-switcher__button layout-switcher__button--active">
                                             <svg width="16px" height="16px">
                                                <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#layout-grid-16x16"></use>
                                             </svg>
                                          </button>
                                          <button data-layout="grid-3-sidebar" data-with-features="true" title="Grid With Features" type="button" class="layout-switcher__button">
                                             <svg width="16px" height="16px">
                                                <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#layout-grid-with-details-16x16"></use>
                                             </svg>
                                          </button>
                                          <button data-layout="list" data-with-features="false" title="List" type="button" class="layout-switcher__button">
                                             <svg width="16px" height="16px">
                                                <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#layout-list-16x16"></use>
                                             </svg>
                                          </button>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="view-options__legend">Showing 6 of 98 products</div>
                                 <div class="view-options__divider"></div>
                                 <div class="view-options__control">
                                    <label for="">Sort By</label>
                                    <div>
                                       <select class="form-control form-control-sm" name="" id="">
                                          <option value="">Default</option>
                                          <option value="">Name (A-Z)</option>
                                       </select>
                                    </div>
                                 </div>
                                 <div class="view-options__control">
                                    <label for="">Show</label>
                                    <div>
                                       <select class="form-control form-control-sm" name="" id="">
                                          <option value="">12</option>
                                          <option value="">24</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="products-view__list products-list" data-layout="grid-3-sidebar" data-with-features="false">
                              <div class="products-list__body">
                             
                             
                             
                             
                      <?php
					  
					  /*
					  LISTA PRODUCTOS PRINCIPALES */
					  require_once("_files/_secciones/_productos/_ResultadosProducto.php"); ?>
                                 
                                 
                                 
                                
                              
                              </div>
                           </div>
                           <div class="products-view__pagination">
                              <ul class="pagination justify-content-center">
                                 <li class="page-item disabled">
                                    <a class="page-link page-link--with-arrow" href="#" aria-label="Previous">
                                       <svg class="page-link__arrow page-link__arrow--left" aria-hidden="true" width="8px" height="13px">
                                          <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#arrow-rounded-left-8x13"></use>
                                       </svg>
                                    </a>
                                 </li>
                                 <li class="page-item"><a class="page-link" href="#">1</a></li>
                                 <li class="page-item active"><a class="page-link" href="#">2 <span class="sr-only">(current)</span></a></li>
                                 <li class="page-item"><a class="page-link" href="#">3</a></li>
                                 <li class="page-item">
                                    <a class="page-link page-link--with-arrow" href="#" aria-label="Next">
                                       <svg class="page-link__arrow page-link__arrow--right" aria-hidden="true" width="8px" height="13px">
                                          <use xlink:href="<?php echo Idirectorio("home"); ?>_files/images/sprite.svg#arrow-rounded-right-8x13"></use>
                                       </svg>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- site__body / end -->
          <?php /*FOOTER*/ require_once("_files/_secciones/_modulos/_footer.php"); ?>
        </div>
        <!-- site / end -->
    </body>
</html>
