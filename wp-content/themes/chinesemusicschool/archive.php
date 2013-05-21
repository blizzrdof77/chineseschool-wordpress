<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Twelve already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<section id="primary" class="site-content">
		<div id="content" role="main">

		<?php if ( have_posts() ) : ?>
		

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>


<div class="greenBorder" style="display: table;  #position: relative; overflow: visible;margin:auto;height: 100%;">
  <div style=" #position: absolute; #top: 50%;display: table-cell; vertical-align: middle; display: table-cell;">
    <div class="greenBorder" style="background: rgba(255, 255, 255, 0.88); #position: relative; #top: -50%; display: table-cell; width: auto; height: auto; padding: 0 16px; border: 1px solid #eee; border-radius: 2px; min-height: 250px;vertical-align: middle;">
      <?php if(get_field('shows')): ?>
        <div class="table" id="shows">
          <ul>         
           <?php while(the_repeater_field('shows')): ?>
           <?php 
            /* Get Field Values */
            
            $date = strtotime(get_sub_field('date'));
            $date_formatted = "<span class=\"month\">".date("M", $date)."</span> <span class=\"day\">".date("d", $date)."</span> <span class=\"time\">".get_sub_field('start_time')."</span>";
            
            $venue_thumbnail = get_sub_field('venue_thumbnail');



            $venue_name = get_sub_field('venue_name');
            $city_and_state = get_sub_field('city_and_state');
            $venue_url = get_sub_field('venue_url');
            $venue_address = get_sub_field('venue_address');
            $venue_directions_url = get_sub_field('venue_directions_url');
            $event_url = get_sub_field('event_url');              
           ?>




           <li>
              <div class="date" onclick="window.location.href='<?php echo $event_url; ?>'">
                <?php echo $date_formatted; ?>
              </div>
              <div class="info"> 
                <div>
                  <div class="venue">
                    <span> <?php echo $venue_name; ?> </span> <span> <?php echo $city_and_state; ?> </span>

                    <div class="venue-info">
                      
                      <a href="<?php echo $venue_url; ?>" target="_blank" class="thumbnail">
                        <?php if( get_sub_field('venue_thumbnail') ): ?>
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
                    <?php if( get_sub_field('bands') ) { ?>
                    <?php 
                      $i = 0;
                      $other_bands['band_website'] = array(); 
                      $other_bands['band_name'] = array(); 
                    ?>
                      <?php while( has_sub_field("bands") ) { ?>
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
                            $div_char = ", "; 
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

                    <?php } ?>
                  </p>
                </div>
                <div class="link">
                  <a target="_blank" href="<?php echo $event_url; ?>"> <img src="<?php echo get_template_directory_uri(); ?>/images/facebook.png"> </a>
                  <a target="_blank" href="<?php echo $event_url; ?>"> View Facebook Event </a>
                </div>
              </div>
            </li>
          <?php endwhile; ?>
        </div>
      </ul>
    <?php endif; ?>
  </div>
</div>
</div>
</div>

			<?php endwhile;

			twentytwelve_content_nav( 'nav-below' );
			?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>

		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>