<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage ChineseMusicSchool
 * @since May 2013
 */
?>


<?php if(get_field('shows')): ?>
  
    <?php 
      /* Get Field Values */
      $date = strtotime(get_field('date'));
      $date_formatted = "<span class=\"month\">".date("M", $date)."</span> <span class=\"day\">".date("d", $date)."</span> <span class=\"time\">".get_field('start_time')."</span>";
      $venue_thumbnail = get_field('venue_thumbnail');
      $venue_name = get_field('venue_name');
      $city_and_state = get_field('city_and_state');
      $venue_url = get_field('venue_url');
      $venue_address = get_field('venue_address');
      $venue_directions_url = get_field('venue_directions_url');
      $event_url = get_field('event_url');
    ?>
   <li id="show-<?php the_ID(); ?>" <?php post_class(); ?>>
     <div class="date" onclick="window.location.href='<?php echo $event_url; ?>'">
        <?php echo $date_formatted; ?>
     </div>
     <div class="info"> 
       <div>
        <div class="venue">
          <span> <?php echo $venue_name; ?> </span> <span> <?php echo $city_and_state; ?> </span>

          <div class="venue-info">
            
            <a href="<?php echo $venue_url; ?>" target="_blank" class="thumbnail">
              <?php if( get_field('venue_thumbnail') ): ?>
                <img src="<?php echo $venue_thumbnail; ?>" alt="<?php  the_sub_field('title');?>" rel="<?php echo $venue_thumbnail; ?>" />
              <?php else: ?>
                <img src="<?php echo get_template_directory_uri(); ?>/images/rock-on-square-thumb.jpg" alt="" /> 
              <?php endif ?>
            </a>
            <div>
              <h4 class="venue-name">
                <a href="<?php echo $venue_url; ?>" target="_blank"> <?php echo $venue_name; ?> </a>
              </h4>
              <span class="venue-address"> <?php echo $venue_address; ?> </span>
              <div class="venue-map">
                <a href="<?php echo $venue_directions_url; ?>" target="_blank"> View Map </a>
                <span class="no-link"> - </span> 
                <a href="<?php echo $venue_directions_url; ?>" target="_blank"> Get Directions </a>
              </div>
            </div>
          </div>
        </div>
        <p class="other-bands"> 
          with           
          <?php if( the_repeater_field('bands') ) { ?>
          <?php 
            $i = 0;
            $other_bands['band_website'] = array(); 
            $other_bands['band_name'] = array(); 
          ?>
          <?php }?>
            <?php while( the_repeater_field("bands") ) { ?>
              <?php
                $other_bands['band_website'][$i] = get_sub_field('band_website'); 
                $other_bands['band_name'][$i] = get_sub_field('band_name'); 
                $i += 1;
              ?>
            <?php } ?>
            <?php $x = 0; ?>
            <?php foreach($other_bands['band_name'] as $band) { 
              if ( ($x + 1) != $i)
                { 
                  if ( ($i - $x) == 2){
                    $div_char = "<span class=\"no-link\"> and </span>";
                  }
                  else {
                    $div_char = ", ";   
                  }
                  
                }
                else { 
                  $div_char = ""; 
                }
              ?>
              <a href="<?php echo $other_bands['band_website'][$x]; ?>" target="_blank">
                <?php echo $other_bands['band_name'][$x].$div_char; ?>
              </a>
              <?php $x += 1; ?>
            <?php } ?>
          </p>
        </div>
        <div class="link">
          <a target="_blank" href="<?php echo $event_url; ?>"> <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png"> </a>
          <a target="_blank" href="<?php echo $event_url; ?>"> View Facebook Event </a>
        </div>
      </div>
    </li>
<?php endif; ?>

