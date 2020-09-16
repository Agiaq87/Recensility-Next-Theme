<?php 
/* Template Name: Database schede tecniche */
/**
* The template for displaying download page. It's very specific.
*
* This is the template that display only download page.
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-page
*
* @package Giaquinto-Recensility WordPress Theme
* @copyright Copyright (C) 2018 Alessandro Giaquinto
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author Alessandro Giaquinto <agiaquinto87@gmail.com>
*/

get_header(); 
global $wpdb;
$delimiter=null;
if (!empty($_GET['srch'])){
    switch($_GET['srch']){
        case 'brnd':{
            $delimiter = ' WHERE `brand` LIKE "'.$_GET['rg'].'"'.' ORDER BY `id_shop_smartphone` DESC';
        }break;
        case 'os':{
            $delimiter = ' WHERE `os_name` LIKE "'.$_GET['rg'].'"'.' ORDER BY `id_shop_smartphone` DESC';
        }break;
        case 'sname':{
            $delimiter = ' WHERE `soc_name` LIKE "'.$_GET['rg'].'"'.' ORDER BY `id_shop_smartphone` DESC';
        }break;
        case 'sversion':{
            $delimiter = ' WHERE `soc_version` LIKE "'.$_GET['rg'].'"'.' ORDER BY `id_shop_smartphone` DESC'; 
        }break;
        case 'year':{
            $delimiter;
        }break;
        case 'Ram':{
            $delimiter = ' WHERE `ram` >= '.$_GET['rg'].' ORDER BY `ram` ASC';
        }break;
        case 'ram':{
            $delimiter = ' WHERE `ram` <= '.$_GET['rg'].' ORDER BY `ram` DESC';
        }break;
        case 'dsply': {
            $delimiter = ' WHERE `display` <= '.$_GET['rg'].' ORDER BY `display` ASC';   
        }break;
        case 'Vt': {
            $delimiter = ' WHERE `vote` >= '.$_GET['rg'].' ORDER BY `vote` ASC';
        }break;
        case 'vt': {
            $delimiter = ' WHERE `vote` <= '.$_GET['rg'].' ORDER BY `vote` DESC';
        }break;
        case 'prc': {
            $delimiter = ' WHERE `price` <= '.$_GET['rg'].' ORDER BY `id_shop_smartphone` DESC';
        }break;
        case 'strg':{
            $delimiter = ' WHERE `storage` = '.$_GET['rg'].' ORDER BY `storage` ASC';
        }break;
        case 'exp':{
            $delimiter = ' WHERE `slot_expansion` = "'.$_GET['rg'].'" ORDER BY `id_shop_smartphone` DESC';
        }break;
        case 'Bat':{
            $delimiter = ' WHERE `batt` > '.$_GET['rg'].' ORDER BY `batt` DESC';
        }break;
        case 'bat':{
            $delimiter = ' WHERE `batt` <= '.$_GET['rg'].' ORDER BY `batt` DESC';
        }break;
    }
}
$shopItems = $wpdb->get_results('SELECT * FROM `'.$wpdb->prefix.'recensility_shop_smartphone'.'`'.$delimiter, ARRAY_A);
?>
<script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type" : "CollectionPage",
  "@id"	: "https://recensility.it/schede-tecniche",
  "url"	: "https://recensility.it/schede-tecniche",
  "inLanguage"	: "it-IT",
  "name" : "Recensility Schede Tecniche",
  "description" : "Le schede tecniche degli smartphone proposti da Recensility"
}
</script>
<div class="recensility-main-wrapper hidden no-margin left relative clearfix" id="recensility-main-wrapper" itemscope="itemscope" itemtype="http://schema.org/Blog" role="main">
<meta name="viewport" content="width=device-width, initial-scale=1">
<div class="theiaStickySidebar">
<div class="recensility-main-wrapper-inside clearfix">

<?php recensility_top_widgets(); ?>

<div class="recensility-posts-wrapper" id="recensility-posts-wrapper">
  <div class="recensility-posts hidden relative no-padding">

  <header class="page-header no-margin">
  <h1 class="recensility-posts-heading white">
    <span>
      <i class="fas fa-database" style="color:#ffffff"></i>
  <?php echo get_the_title(); ?>
      </i>
   </span>
  </h1>
</div>
   
<div class="recensility-schede-tecniche-container">
    <div class="recensility-schede-tecniche-intro-searcher left main-color">
            <div style="border-top:1px solid #fff">
                <button class="recensility-schede-tecniche-collapsible white no-border full-width font18" onclick="expandButton()">PRODUTTORI</button>
                    <div class="content">
                        <div style="display: inline-grid;">
                            <?php
                            $brand = $wpdb->get_results('SELECT DISTINCT `brand` FROM `'.$wpdb->prefix.'recensility_shop_smartphone` ORDER BY `brand` ASC', ARRAY_A);
                            foreach ($brand as $x){
                                ?>
                                <p style="margin:0px;color:#fff;background-color:#2f6d43;text-align:center">
                                    <a class="recensility-schede-tecniche-search-input white font14 font14 main-color" style="font-size:14px" href="javascript:sendSearch('brnd','<?php echo $x['brand'] ?>');"><?php echo $x['brand'] ?></a></p>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
            </div>
            <div style="border-top:1px solid #fff">
                <p style="margin:0px;color:#fff;font-size:18px">OS</p>
                <div class="recensility-schede-tecniche-intro-searcher-icons white main-color">
                    <div class="recensility-schede-tecniche-intro-searcher-icons white-rows">
                        <div class="recensility-schede-tecniche-intro-searcher-icon  tooltip relative">
                            <a class="recensility-schede-tecniche-search-input white font14 font14 main-color" href="javascript:sendSearch('os','Android');"><i class="fab fa-android"></i></a>
                            <span class="tooltiptext">Con Android</span>
                        </div>
                        <div class="recensility-schede-tecniche-intro-searcher-icon tooltip relative">
                            <a class="recensility-schede-tecniche-search-input white font14 font14 main-color" href="javascript:sendSearch('os','iOs');"><i class="fab fa-apple"></i></a>
                            <span class="tooltiptext">Con iOs</span>
                        </div>
                    </div>
                </div>
            </div>
            <div style="border-top:1px solid #fff">
                <p style="margin:0px;color:#fff;font-size:18px">RAM</p>
                <div class="recensility-schede-tecniche-intro-searcher-icons white main-color">
                    <div class="recensility-schede-tecniche-intro-searcher-icons white-rows">
                        <div class="recensility-schede-tecniche-intro-searcher-icon  tooltip relative">
                            <a class="recensility-schede-tecniche-search-input white font14 main-color" href="javascript:sendSearch('ram','4');"><i style="font-size: 18px;" class="fas fa-memory"></i></a>
                            <span class="tooltiptext">Ram minore di 4GB</span>
                        </div>
                        <div class="recensility-schede-tecniche-intro-searcher-icon  tooltip relative">
                            <a class="recensility-schede-tecniche-search-input white font14 main-color" href="javascript:sendSearch('ram','6');"><i style="font-size: 24px;" class="fas fa-memory"></i></a>
                            <span class="tooltiptext">Ram minore di 6GB</span>
                        </div>
                        <div class="recensility-schede-tecniche-intro-searcher-icon  tooltip relative">
                            <a class="recensility-schede-tecniche-search-input white font14 main-color" href="javascript:sendSearch('ram','16');"><i style="font-size: 30px;" class="fas fa-memory"></i></a>
                            <span class="tooltiptext">Ram minore di 16GB</span>
                        </div>
                    </div>
                </div>
            </div>
            <div style="border-top:1px solid #fff">
                <p style="margin:0px;color:#fff;font-size:18px">ARCHIVIAZIONE</p>
                <div class="recensility-schede-tecniche-intro-searcher-icons white main-color">
                    <div class="recensility-schede-tecniche-intro-searcher-icons white-rows">
                        <div class="recensility-schede-tecniche-intro-searcher-icon  tooltip relative">
                            <a class="recensility-schede-tecniche-search-input white font14 main-color" href="javascript:sendSearch('strg','32');"><i style="font-size: 14px;" class="fas fa-hdd"></i></a>
                            <span class="tooltiptext">Fino a 32GB</span>
                        </div>
                        <div class="recensility-schede-tecniche-intro-searcher-icon  tooltip relative">
                            <a class="recensility-schede-tecniche-search-input white font14 main-color" href="javascript:sendSearch('strg','64');"><i style="font-size: 18px;" class="fas fa-hdd"></i></a>
                                <span class="tooltiptext">Fino a 64GB</span>
                        </div>
                        <div class="recensility-schede-tecniche-intro-searcher-icon tooltip relative">
                            <a class="recensility-schede-tecniche-search-input white font14 main-color" href="javascript:sendSearch('strg','128');"><i style="font-size: 22px;"class="fas fa-hdd"></i></a>
                                <span class="tooltiptext">Fino a 128GB</span>
                        </div>
                        <div class="recensility-schede-tecniche-intro-searcher-icon tooltip relative">
                            <a class="recensility-schede-tecniche-search-input white font14 main-color" href="javascript:sendSearch('Strg','256');"><i style="font-size: 26px;"class="fas fa-hdd"></i></a>
                                <span class="tooltiptext">Fino a 256GB</span>
                        </div>
                        <div class="recensility-schede-tecniche-intro-searcher-icon tooltip relative">
                            <a class="recensility-schede-tecniche-search-input white font14 main-color" href="javascript:sendSearch('strg','512');"><i style="font-size: 30px;"class="fas fa-hdd"></i></a>
                                <span class="tooltiptext">Fino a 512GB</span>
                        </div>
                    </div>
                </div>
            </div>
            <div style="border-top:1px solid #fff">
                <p style="margin:0px;color:#fff;font-size:18px">DISPLAY</p>
                <div class="recensility-schede-tecniche-intro-searcher-icons white main-color">
                    <div class="recensility-schede-tecniche-intro-searcher-icons white-rows">
                        <div class="recensility-schede-tecniche-intro-searcher-icon tooltip relative">
                            <a class="recensility-schede-tecniche-search-input white font14 main-color" href="javascript:sendSearch('dsply','5');"><i style="font-size: 18px" class="fas fa-mobile-alt"></i></a>
                            <span class="tooltiptext">minore di 5"</span>
                        </div>
                        <div class="recensility-schede-tecniche-intro-searcher-icon tooltip relative">
                            <a class="recensility-schede-tecniche-search-input white font14 main-color" href="javascript:sendSearch('dsply','5.5');"><i style="font-size: 24px" class="fas fa-mobile-alt"></i></a>
                            <span class="tooltiptext">minore di 5,5"</span>
                        </div>
                        <div class="recensility-schede-tecniche-intro-searcher-icon tooltip relative">
                            <a class="recensility-schede-tecniche-search-input white font14 main-color" href="javascript:sendSearch('dsply','6');"><i style="font-size: 30px" class="fas fa-mobile-alt"></i></a>
                            <span class="tooltiptext">minore di 6"</span>
                        </div>
                        <div class="recensility-schede-tecniche-intro-searcher-icon  tooltip relative">
                            <a class="recensility-schede-tecniche-search-input white font14 main-color" href="javascript:sendSearch('dsply','10');"><i style="font-size: 30px" class="fas fa-tablet-alt"></i></a>
                            <span class="tooltiptext">maggiore di 6"</span>
                        </div>
                    </div>
                </div>
            </div>
            <div style="border-top:1px solid #fff">
                <p style="margin:0px;color:#fff;font-size:18px">BATTERIA</p>
                <div class="recensility-schede-tecniche-intro-searcher-icons white main-color">
                    <div class="recensility-schede-tecniche-intro-searcher-icons white-rows">
                        <div class="recensility-schede-tecniche-intro-searcher-icon tooltip relative">
                            <a class="recensility-schede-tecniche-search-input white font14 main-color" href="javascript:sendSearch('bat','3000');"><i class="fas fa-battery-quarter"></i></a>
                            <span class="tooltiptext">Capacità minore di 3000mAh</span>
                        </div>
                        <div class="recensility-schede-tecniche-intro-searcher-icon tooltip relative">
                            <a class="recensility-schede-tecniche-search-input white font14 main-color" href="javascript:sendSearch('bat','3500');"><i class="fas fa-battery-half"></i></a>
                            <span class="tooltiptext">Capacità minore di 3500mAh</span>
                        </div>
                        <div class="recensility-schede-tecniche-intro-searcher-icon tooltip relative">
                            <a class="recensility-schede-tecniche-search-input white font14 main-color" href="javascript:sendSearch('bat','4000');"><i class="fas fa-battery-three-quarters"></i></a>
                            <span class="tooltiptext">Capacità minore di 4000mAh</span>
                        </div>
                        <div class="recensility-schede-tecniche-intro-searcher-icon tooltip relative">
                            <a class="recensility-schede-tecniche-search-input white font14 main-color" href="javascript:sendSearch('Bat','4000');"><i class="fas fa-battery-full"></i></a>
                            <span class="tooltiptext">Capacità maggiore di 4000mAh</span>
                        </div>
                    </div>
                </div>
            </div>
            <div style="border-top:1px solid #fff">
                <p style="margin:0px;color:#fff;font-size:18px">VOTO</p>
                <div class="recensility-schede-tecniche-intro-searcher-icons white main-color">
                    <div class="recensility-schede-tecniche-intro-searcher-icons white-rows">
                        <div class="recensility-schede-tecniche-intro-searcher-icon tooltip relative">
                            <a class="recensility-schede-tecniche-search-input white font14 main-color" href="javascript:sendSearch('vt','5');"><p style="margin:0px;color:#fff;font-size:18px">5</p></a>
                            <span class="tooltiptext">5 e minori</span>
                        </div>
                        <div class="recensility-schede-tecniche-intro-searcher-icon tooltip relative">
                            <a class="recensility-schede-tecniche-search-input white font14 main-color" href="javascript:sendSearch('vt','6');"><p style="margin:0px;color:#fff;font-size:18px">6</p></a>
                            <span class="tooltiptext">6 e minori</span>
                        </div>
                        <div class="recensility-schede-tecniche-intro-searcher-icon tooltip relative">
                            <a class="recensility-schede-tecniche-search-input white font14 main-color" href="javascript:sendSearch('vt','7');"><p style="margin:0px;color:#fff;font-size:18px">7</p></a>
                            <span class="tooltiptext">7 e minori</span>
                        </div>
                        <div class="recensility-schede-tecniche-intro-searcher-icon tooltip relative">
                            <a class="recensility-schede-tecniche-search-input white font14 main-color" href="javascript:sendSearch('vt','8');"><p style="margin:0px;color:#fff;font-size:18px">8</p></a>
                            <span class="tooltiptext">8 e minori</span>
                        </div>
                        <div class="recensility-schede-tecniche-intro-searcher-icon tooltip relative">
                            <a class="recensility-schede-tecniche-search-input white font14 main-color" href="javascript:sendSearch('vt','9');"><p style="margin:0px;color:#fff;font-size:18px">9</p></a>
                            <span class="tooltiptext">9 e minori</span>
                        </div>
                        <div class="recensility-schede-tecniche-intro-searcher-icon tooltip relative">
                            <a class="recensility-schede-tecniche-search-input white font14 main-color" href="javascript:sendSearch('vt','10');"><p style="margin:0px;color:#fff;font-size:18px">10</p></a>
                            <span class="tooltiptext">10 e minori</span>
                        </div>
                    </div>
                </div>
            </div> 
    </div>
    
    <div>    
        <div class="recensility-schede-tecniche-legend">
            <img src="https://recensility.it/wp-content/uploads/2019/08/9edd0471-6fd0-48f9-bac2-ed52e96800d4.jpeg">
        </div>
        <div class="recensility-schede-tecniche-grid full-width" style="float:right;">  
            <?php 
            foreach ($shopItems as $shop) {
                $shop = (array)$shop; 
            ?>
        <div id="<?php echo $shop['ASIN'] ?>" class="recensility_shop_container no-background-color">
            <h2 id="recensility_shop_brand" class="recensility_shop_brand main-color-text font18">
                <?php echo $shop['brand'] ?>
            </h2>
              <h3 id="recensility_shop_title" class="recensility_shop_title no-background-color main-color-text font18">
                  <strong><?php echo $shop['title'] ?></strong>
              </h3>
              <div id="recensility_shop_vote" class="white no-padding">
                <h5 class="recensility_shop_vote_title main-color-text font18">VOTO</h5>
                <h5 class="recensility_shop_vote_value main-color-text"><?php echo $shop['vote'] ?></h5>
              </div>
                <div id="recensility_shop_container_item" class="recensility_shop-container-item"> 
                       <div style="display:inline">
                            <div id="recensility_shop_container_item_os" class="recensility_shop_container_item_os main-color-text">
                                <i class="<?php echo $shop['os_icon'] ?>">
                                    <p class="recensility_shop_container_item font18"><?php echo $shop['os_version'] ?></p>
                                </i>
                            </div>
                            <div id="recensility_shop_container_item_soc" class="recensility_shop_container_item_soc main-color-text">
                                <i class="fas fa-microchip">
                                    <p class="recensility_shop_container_item font18"><?php echo $shop['core'] ?></p>
                                </i>
                            </div>
                       </div>
                       <div style="display:inline">
                           <div id="recensility_shop_container_item_cam" class="recensility_shop_container_item_cam main-color-text">
                                <i class="fas fa-camera">
                                    <p class="recensility_shop_container_item font18"><?php echo $shop['camera'] ?></p>
                                </i>
                            </div>
                            <div id="recensility_shop_container_item_ram" class="recensility_shop_container_item_ram main-color-text">
                                <i class="fas fa-memory">
                                    <p class="recensility_shop_container_item font18"><?php echo $shop['ram'] ?></p>
                                </i>
                            </div>
                       </div>
                       <div style="display:inline">
                            <div id="recensility_shop_container_item_display" class="recensility_shop_container_item_display main-color-text">
                                <i class="fas fa-mobile-alt">
                                    <p class="recensility_shop_container_item font18"><?php echo $shop['display'] ?></p>
                                </i>
                            </div>
                            <div id="recensility_shop_container_item_hdd" class="recensility_shop_container_item_hdd main-color-text">
                                <i class="fas fa-database">
                                    <p class="recensility_shop_container_item font18">
                                        <?php echo $shop['storage'] ?></p>
                                </i>
                            </div>
                       </div>
                        <div id="recensility_shop_image" class="recensility_shop_image">
                         <img class="image_recensility_shop" src="<?php echo $shop['image_url'] ?>">
                     </div>
                    <div class="recensility-mezzaluna-invert">
                        <div class="white">
                            <a class="white" href="<?php echo $shop['link_datasheet'] ?>">Scheda</a>
                            <i class="fas fa-table"></i>
                        </div>
                    </div>
                    <div class="recensility-mezzaluna">
                        <div class="recensility-mezzaluna-price white"><i class="fab fa-amazon"></i></div>
                        <div class="recensility-mezzaluna-price white"><a id="recensility_price_amazon_control-<?php echo $shop['ASIN'] ?>" class="white" href="<?php echo $shop['link_amazon'] ?>"><?php echo $shop['price'] ?> €</a></div>
                    </div>

                    </div>                
                     <div class="recensility_shop_last white full-width main-color"></div>
             </div> 
            <?php
            }
            ?>
            </div>
    </div>
</div>

<!-- The Modal -->
<div id="recensilityLoadingModal" class="modal full-width">

  <!-- Modal content -->
  <div class="modal-content">
      <div class="lds-ring inline-block"><div></div><div></div><div></div><div></div></div>
  </div>

</div>


<div class="clear"></div>

</div>

<?php recensility_bottom_widgets(); ?>

</div>
</div>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

<script type="text/javascript">
function expandButton() {
    var coll = document.getElementsByClassName("recensility-schede-tecniche-collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
      coll[i].addEventListener("click", function() {
        this.classList.toggle("recensility-schede-tecniche-active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight){
          content.style.maxHeight = null;
        } else {
          content.style.maxHeight = content.scrollHeight + "px";
        } 
      });
    }
}


function sendSearch(search, argument) {
    var modal = document.getElementById("recensilityLoadingModal");
    modal.style.display = "block";
        
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    setTimeout(3000);
        
    window.location="/schede-tecniche/?srch="+search+"&rg="+argument;
 }
</script>
