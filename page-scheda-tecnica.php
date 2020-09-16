<?php 
/* Template Name: Scheda tecnica */
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
if (!empty($_GET['arg'])){
    $smartphone = $wpdb->get_results('SELECT * FROM `'.$wpdb->prefix.'recensility_schede_tecniche_smartphone'.'` WHERE `id_smartphone` = '.$_GET['arg'], ARRAY_A)[0];
    $shop = $wpdb->get_results('SELECT * FROM `'.$wpdb->prefix.'recensility_shop_smartphone'.'` WHERE `id_shop_smartphone` = '.$_GET['arg'], ARRAY_A)[0];
?>

<div class="recensility-main-wrapper hidden no-margin left relative no-padding clearfix" id="recensility-main-wrapper" itemscope="itemscope" itemtype="http://schema.org/Blog" role="main">
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

<div class="recensility-schede-tecniche-table no-padding full-width">
    <center>
    <table cellspacing="1" cellpadding="4">
            <thead>
                <th>
                </th>
                <th class="recensility-schede-tecniche-table-header white no-margin">
                    <i style="font-size:18px; padding:8px;" class="fas fa-info-circle"> INFO GENERALI </i>
                </th>
            </thead>
            <tbody>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                           
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                            <div class="recensility-schede-tecniche-table-image no-margin no-padding">
                                <img src="<?php echo $shop['image_url']; ?>"></img>
                            </div> 
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-industry"> 
                                PRODUTTORE
                            </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                            <strong>
                            <?php echo $smartphone['brand']; ?>
                            </strong> 
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-address-card"> MODELLO  </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                            <strong>
                             <?php echo $smartphone['model']; ?>   
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-calendar-alt"> USCITA  </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                            <strong>
                             <?php $date = new DateTime($smartphone['published']); echo $date->format('Y-m-d');  ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-address-card"> 
                             SISTEMA OPERATIVO 
                            </i> 
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                            <strong>
                                <?php echo $smartphone['os_mobile']; ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-list-alt"> 
                                GUI
                            </i> 
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                            <strong>
                            <?php echo $smartphone['gui']; ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-ruler-combined"> 
                                FORM FACTOR
                            </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                            <strong>
                            <?php echo $smartphone['form_factor']; ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-ruler-combined"> DIMENSIONI  </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                            <strong>
                                <?php echo $smartphone['dim']; ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-weight"> PESO  </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                            <strong>
                                <?php echo $smartphone['weight'].' grammi'; ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-palette"> COLORAZIONI  </i>
                            
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                            <strong>
                                <?php echo $smartphone['colors']; ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-money-bill-wave-alt"> PREZZO  </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                            <strong>
                                <a style="color:Orange; font-size: 18px;" target="_blank" href="<?php echo $shop['link_amazon'] ?>"><?php echo $shop['price'].' €'; ?></a>
                            </strong>
                        </center>
                    </td>
                </tr>
                <?php 
                if (!empty($smartphone['link'])){
                    ?>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-file-invoice"> RECENSIONE  </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                            <strong>
                                <a style="color:#2f6d43; font-size: 18px;" target="_blank" href="<?php echo $smartphone['link'] ?>">Leggi la nostra recensione</a>
                            </strong>
                        </center>
                    </td>
                </tr>
                <?php
                }
                ?>
                <tr>
                    <td>

                    </td>
                    <td class="recensility-schede-tecniche-table-row-header full-width  white left main-color no-padding">
                        <p style="text-align:center">
                            <i style="font-size:18px;" class="fab fa-whmcs"> SISTEMA  </i>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td width="25%" class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-atom"> 
                                SOC
                            </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                            <strong>
                                <?php echo $smartphone['soc']; ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-microchip"> CORE  </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                            <strong>
                                <?php echo $smartphone['soc_core'].' core'; ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-file-alt"> SPECIFICHE SOC  </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                            <strong>
                                <?php 
                                    echo str_replace(' : ', ' + ', str_replace('#', '',$smartphone['soc_spec']));
                                ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-file-alt"> ARCHITETTURA  </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                            <strong>
                                <?php echo $smartphone['soc_arch'].' bit'; ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-tachometer-alt"> FREQUENZA  </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                            <strong>
                                <?php echo str_replace('-',' ',$smartphone['soc_freq']); ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-dna"> LITOGRAFIA  </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                            <strong>
                                <?php echo $smartphone['soc_lith']; ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-memory"> RAM  </i> <!-- Qui va una icona per Android e una per iOs -->
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                            <strong>
                                <?php echo $smartphone['ram'].' GB'; ?>
                            </strong> 
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-tv"> 
                                GPU
                            </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                            <strong>
                                <?php echo $smartphone['gpu']; ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-database"> ARCHIVIAZIONE  </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                            <strong>
                                <?php echo $smartphone['rom'].' GB'; ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-sd-card"> 
                                SLOT ESPANSIONE
                            </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                            <strong>
                                <?php 
                                echo ($smartphone['slot_expansion']=='No' ? '<i style="color: Red" class="far fa-thumbs-down"></i>' : $smartphone['slot_expansion'] );
                                ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-umbrella"> IMPERMEABILITÀ  </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>    
                            <strong>
                                <?php 
                                echo '<i '.($smartphone['ip']=='Si' ? 'style="color: Green" class="far fa-thumbs-up' : 'style="color: Red" class="far fa-thumbs-down').'"></i>';
                                ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-certificate"> CERTIFICAZIONE IP  </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>    
                            <strong>
                                <?php 
                                echo $smartphone['ip_value'];
                                ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-power-off"> 
                                IMPRONTA SBLOCCO
                            </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                            <strong>
                                <?php 
                                echo $smartphone['soft_unlock'];
                                ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-item-row">

                    </td>
                        <td class="recensility-schede-tecniche-table-row-header full-width  white main-color no-padding left">
                        <p style="text-align:center">
                            <i style="font-size:18px;" class="fas fa-tv"> DISPLAY  </i>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td width="25%" class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-arrows-alt-v"> DIMENSIONE </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>    
                            <strong>
                                <?php 
                                echo $smartphone['display_dim'].'"';
                                ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-address-card"> 
                                TIPOLOGIA
                            </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>    
                            <strong>
                                <?php 
                                echo $smartphone['display_type'];
                                ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-mobile-alt"> NOTCH  </i> 
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>    
                            <strong>
                                <?php 
                                echo '<i '.($smartphone['display_notch']=='Si' ? 'style="color: Green" class="far fa-thumbs-up' : 'style="color: Red" class="far fa-thumbs-down').'"></i>';
                                ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-mobile-alt"> BORDLESS  </i> 
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                            <strong>
                                <?php 
                                echo '<i '.($smartphone['display_bordless']=='Si' ? 'style="color: Green" class="far fa-thumbs-up' : 'style="color: Red" class="far fa-thumbs-down').'"></i>';
                                ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-tv"> RISOLUZIONE  </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>    
                            <strong>    
                            <?php 
                            echo $smartphone['display_resolution'];
                            ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-lightbulb"> LED  </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                           <?php 
                            if ($smartphone['display_resolution']=='No') {
                                echo '<i style="color: Red" class="far fa-thumbs-down"></i>';
                            } else {
                                echo '<strong>'.$smartphone['led'].'</strong>';
                            }
                            ?>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-item-row">

                    </td>
                        <td class="recensility-schede-tecniche-table-row-header full-width  white main-color no-padding left">
                        <p style="text-align:center">
                            <i style="font-size:18px;" class="fas fa-battery-full"> BATTERIA  </i>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td width="25%" class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-gas-pump"> CAPACITÀ </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                           <strong>    
                            <?php 
                            echo $smartphone['battery'].' mAh';
                            ?>
                            </strong>   
                        </center>
                    </td>
                </tr>
                <tr>
                    <td width="25%" class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fab fa-cloudscale"> RICARICA RAPIDA </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                            <strong>
                           <?php 
                            echo '<i '.($smartphone['rapid_charge']=='Si' ? 'style="color: Green" class="far fa-thumbs-up' : 'style="color: Green" class="far fa-thumbs-down').'"></i>';
                            ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-address-card"> RICARICA WIRELESS  </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                            <strong>
                            <?php 
                            echo '<i '.($smartphone['wireless_recharge']=='Si' ? 'style="color: Green" class="far fa-thumbs-up' : 'style="color: Red" class="far fa-thumbs-down').'"></i>';
                            ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fab fa-usb"> CONNETTORE  </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                            <strong>    
                            <?php 
                            echo $smartphone['port'];
                            ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-item-row">

                    </td>
                        <td class="recensility-schede-tecniche-table-row-header full-width  white main-color no-padding left">
                        <p style="text-align:center">
                            <i style="font-size:18px;" class="fas fa-camera"> FOTOCAMERA  </i>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td width="25%" class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-camera-retro"> POSTERIORE </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                            <strong>    
                            <?php 
                            echo $smartphone['cam_post'];
                            ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td width="25%" class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-camera-retro"> ANTERIORE </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                            <strong>    
                            <?php 
                            echo $smartphone['cam_ant'];
                            ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-eye"> MEGAPIXEL </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                            <strong>    
                            <?php 
                            echo $smartphone['cam_res'].' MP';
                            ?>
                            </strong> 
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-memory"> APERTURA  </i> 
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                            <strong>    
                            <?php 
                            echo 'F '.$smartphone['cam_aperture'];
                            ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-tv"> CAMERA SELFIE  </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                            <strong>
                            <?php 
                            echo $smartphone['cam_selfie'].' MP';
                            ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-brain"> AI FOTOCAMERA  </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                            <strong>
                                <?php 
                                echo '<i '.($smartphone['cam_ai']=='Si' ? 'style="color: Green" class="far fa-thumbs-up' : 'style="color: Red" class="far fa-thumbs-down').'"></i>';
                                ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-adjust"> AUTOFOCUS  </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                            <strong>
                            <?php 
                            echo '<i '.($smartphone['cam_autofocus']=='Si' ? 'style="color: Green" class="far fa-thumbs-up' : 'style="color: Red" class="far fa-thumbs-down').'"></i>';
                            ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-balance-scale"> STABILIZZATORE  </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                            <?php 
                            if ($smartphone['cam_stability']=='No') {
                                echo '<i style="color: Red" class="far fa-thumbs-down"></i>';
                            } else {
                                echo '<strong>'.$smartphone['cam_stability'].'</strong>';
                            }
                            ?>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-bolt"> FLASH  </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                            <?php 
                            switch ($smartphone['cam_flash']) {
                                case 'No': {
                                    echo '<i style="color: Red" class="far fa-thumbs-down"></i>';
                                } break;
                                case 'Si': {
                                    echo '<i style="color: Green" class="far fa-thumbs-up"></i>';
                                } break;
                                default: {
                                    echo '<strong>'.$smartphone['cam_flash'].'</strong>';
                                }break;
                            } 
                            ?>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-map"> HDR  </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                            <strong>
                            <?php 
                            switch ($smartphone['cam_hdr']) {
                                case 'No': {
                                    echo '<i style="color: Red" class="far fa-thumbs-down"></i>';
                                } break;
                                case 'Si': {
                                    echo '<i style="color: Green" class="far fa-thumbs-up"></i>';
                                } break;
                                default: {
                                    echo $smartphone['cam_hdr'];
                                }break;
                            } 
                            ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-video"> RISOLUZIONE VIDEO  </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                            <strong>
                            <?php 
                            echo $smartphone['cam_video'];
                            ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-item-row">

                    </td>
                        <td class="recensility-schede-tecniche-table-row-header full-width  white main-color no-padding left">
                        <p style="text-align:center">
                            <i style="font-size:18px;" class="fas fa-signal"> CONNETTIVITÀ  </i>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-wifi"> 
                                WI-FI
                            </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>    
                            <strong>
                            <?php 
                            echo $smartphone['wifi'];
                            ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-bullseye"> NFC  </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>  
                            <strong>
                            <?php 
                            echo '<i '.($smartphone['nfc']=='Si' ? 'style="color: Green" class="far fa-thumbs-up' : 'style="color: Red" class="far fa-thumbs-down').'"></i>';
                            ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fab fa-bluetooth"> 
                                BLUETOOTH
                            </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>    
                            <strong>
                            <?php 
                            echo $smartphone['bluetooth'];
                            ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td width="25%" class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-network-wired"> RETE </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>    
                            <strong>
                            <?php 
                            echo $smartphone['net'];
                            ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td width="25%" class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-broadcast-tower"> GENERAZIONE </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>    
                            <strong>
                            <?php 
                            echo $smartphone['net_gen'];
                            ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-sim-card"> 
                                TIPO SIM
                            </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>    
                            <strong>
                            <?php 
                            echo $smartphone['sim'];
                            ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-sim-card"> 
                            <i style="font-size:14px; padding:0px" class="fas fa-sim-card"> 
                                DUAL SIM  
                            </i>
                            </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center> 
                            <strong>
                            <?php 
                            switch ($smartphone['dual_sim']) {
                                case 'Single': {
                                    echo '<i style="color: Red" class="far fa-thumbs-down"></i>';
                                } break;
                                case 'Dual': {
                                    echo '<i style="color: Green" class="far fa-thumbs-up"></i>';
                                } break;
                                default: {
                                    echo $smartphone['dual_sim'];
                                }break;
                            } 
                            ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-item-row">

                    </td>
                        <td class="recensility-schede-tecniche-table-row-header full-width  white main-color no-padding left">
                        <p style="text-align:center">
                            <i style="font-size:18px;" class="fas fa-shapes"> SENSORI  </i>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td width="25%" class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-map-marker-alt">
                                GPS
                            </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center> 
                           <strong>
                                <?php 
                                if ($smartphone['gps']=='No'){
                                    echo '<i style="color: Red" class="far fa-thumbs-down"></i>';
                                } else {
                                    echo $smartphone['gps'];
                                }
                                ?>
                            </strong> 
                        </center>
                    </td>
                </tr>
                <tr>
                    <td width="25%" class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-map-marked-alt"> A-GPS </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>    
                            <strong>
                           <?php 
                            echo '<i '.($smartphone['a_gps']=='Si' ? 'style="color: Green" class="far fa-thumbs-up' : 'style="color: Red" class="far fa-thumbs-down').'"></i>';
                            ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td width="25%" class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-expand-arrows-alt"> ACCELEROMETRO </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>    
                            <strong>
                           <?php 
                            echo '<i '.($smartphone['accel']=='Si' ? 'style="color: Green" class="far fa-thumbs-up' : 'style="color: Red" class="far fa-thumbs-down').'"></i>';
                            ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td width="25%" class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-street-view"> AMBIENTE </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>    
                            <strong>
                           <?php 
                            echo '<i '.($smartphone['amb']=='Si' ? 'style="color: Green" class="far fa-thumbs-up' : 'style="color: Red" class="far fa-thumbs-down').'"></i>';
                            ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td width="25%" class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-mountain"> BAROMETRO </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>    
                            <strong>
                           <?php 
                            echo '<i '.($smartphone['bar']=='Si' ? 'style="color: Green" class="far fa-thumbs-up' : 'style="color: Red" class="far fa-thumbs-down').'"></i>';
                            ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td width="25%" class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-compass"> BUSSOLA </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>    
                            <strong>
                           <?php 
                            echo '<i '.($smartphone['compass']=='Si' ? 'style="color: Green" class="far fa-thumbs-up' : 'style="color: Red" class="far fa-thumbs-down').'"></i>';
                            ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td width="25%" class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-heartbeat"> HEART RATE </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>    
                            <strong>
                           <?php 
                            echo '<i '.($smartphone['heart_rate']=='Si' ? 'style="color: Green" class="far fa-thumbs-up' : 'style="color: Red" class="far fa-thumbs-down').'"></i>';
                            ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td width="25%" class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-location-arrow"> GIROSCOPIO </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>    
                            <strong>
                           <?php 
                            echo '<i '.($smartphone['gyro']=='Si' ? 'style="color: Green" class="far fa-thumbs-up' : 'style="color: Red" class="far fa-thumbs-down').'"></i>';
                            ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td width="25%" class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-headphones"> JACK AUDIO </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>    
                            <strong>
                           <?php 
                            echo '<i '.($smartphone['audio_jack']=='Si' ? 'style="color: Green" class="far fa-thumbs-up' : 'style="color: Red" class="far fa-thumbs-down').'"></i>';
                            ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td width="25%" class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-eye"> LETTORE IRIDE </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>    
                            <strong>
                           <?php 
                            echo '<i '.($smartphone['eye_reader']=='Si' ? 'style="color: Green" class="far fa-thumbs-up' : 'style="color: Red" class="far fa-thumbs-down').'"></i>';
                            ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td width="25%" class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-sort-amount-up-alt"> PROSSIMITÀ </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>    
                            <strong>
                           <?php 
                            echo '<i '.($smartphone['prox']=='Si' ? 'style="color: Green" class="far fa-thumbs-up' : 'style="color: Red" class="far fa-thumbs-down').'"></i>';
                            ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td width="25%" class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-broadcast-tower"> RADIO FM </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>    
                            <strong>
                           <?php 
                            echo '<i '.($smartphone['radio']=='Si' ? 'style="color: Green" class="far fa-thumbs-up' : 'style="color: Red" class="far fa-thumbs-down').'"></i>';
                            ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td width="25%" class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-wave-square"> RIDUZIONE RUMORE </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>    
                            <strong>
                           <?php 
                            echo '<i '.($smartphone['noise_redux']=='Si' ? 'style="color: Green" class="far fa-thumbs-up' : 'style="color: Red" class="far fa-thumbs-down').'"></i>';
                            ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td width="25%" class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-fingerprint"> LETTORE IMPRONTA </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>    
                            <strong>
                           <?php 
                            echo '<i '.($smartphone['fingerprint']=='Si' ? 'style="color: Green" class="far fa-thumbs-up' : 'style="color: Red" class="far fa-thumbs-down').'"></i>';
                            ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-item-row">

                    </td>
                        <td class="recensility-schede-tecniche-table-row-header full-width  white main-color no-padding left">
                        <p style="text-align:center">
                            <i style="font-size:18px;" class="fas fa-poll"> VOTI  </i>
                        </p>
                    </td>
                </tr>
                <tr>
                    <td width="25%" class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-percentage"> QUALITÀ PREZZO </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>    
                            <strong>
                           <?php 
                            echo $smartphone['rate'].' su 10';
                            ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td width="25%" class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                            <div>
                                <canvas id="myChart" class="recensility-chart block"></canvas>
                                <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
                            <script type="application/javascript">
                                var ctx = document.getElementById('myChart');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Prestazioni', 'Materiali', 'Batteria', 'Multimedia', 'Connettività', 'Prezzo'],
        datasets: [{
            data: [<?php echo $smartphone['performance'].', '.$smartphone['material'].', '.$smartphone['bat_vote'].', '.$smartphone['multimedia'].', '.$smartphone['connections'].', '.$smartphone['price'].', '?>, 10],
            label: '<?php echo $smartphone['model'] ?>',
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(103, 62, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(103, 62, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 3
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        legend: {
            display: false
        },
        responsive: true,
        aspectRatio: 2,
        
    }
});
</script>
                            </div>
                    </td>
                </tr>
                <tr>
                    <td width="25%" class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-gavel"> VOTO FINALE </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>    
                            <strong>
                           <?php 
                            echo $smartphone['vote'].' su 10';
                            ?>
                            </strong>
                        </center>
                    </td>
                </tr>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-money-bill-wave-alt"> PREZZO  </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                            <strong>
                                <a style="color:Orange; font-size: 18px;" target="_blank" href="<?php echo $shop['link_amazon'] ?>"><?php echo $shop['price'].' €'; ?></a>
                            </strong>
                        </center>
                    </td>
                </tr>
                <?php 
                if (!empty($smartphone['link'])){
                    ?>
                <tr>
                    <td class="recensility-schede-tecniche-table-header white no-margin">
                        <p class="recensility-schede-tecniche-table-header white-item">
                            <i style="font-size:14px; padding:0px" class="fas fa-file-invoice"> RECENSIONE  </i>
                        </p>
                    </td>
                    <td class="recensility-schede-tecniche-table-item-row">
                        <center>
                            <strong>
                                <a style="color:#2f6d43; font-size: 18px;" target="_blank" href="<?php echo $smartphone['link'] ?>">Leggi la nostra recensione</a>
                            </strong>
                        </center>
                    </td>
                </tr>
                <?php
                }
                ?>
                </tbody>
            </table>
    </center>


</div>
 
<?php 
}
?>   
<div class="clear"></div>

</div><!--/#recensility-posts-wrapper -->

<?php recensility_bottom_widgets(); ?>

</div>
</div>
</div><!-- /#recensility-main-wrapper 
<button id="recensility-silence" class="recensility-silence no-margin white main-color no-margin" onclick="toogle()">&lt;</button>-->
<?php get_sidebar(); ?>

<?php get_footer(); ?>
 
