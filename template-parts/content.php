<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Benjamin
 */

?>

<?php
// Get Category Information
$cat_id_array = get_the_category($post->ID);
$cat_id = $cat_id_array[0]->cat_ID;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	
	<?php 
$edgID = get_post_meta($post->ID, 'EDG_ID', true);
if ($edgID && $cat_id == 2 && is_single()) {
 $curl = curl_init();
      curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($curl, CURLOPT_URL, 'https://edg.epa.gov/metadata/rest/find/document?f=dcat&uuid='. $edgID);
      $content = curl_exec($curl);
	  curl_close($curl);
$json = json_decode(utf8_encode($content));
// BEGIN JSON ERROR CHECK
if ($json === null
    || json_last_error() !== JSON_ERROR_NONE) {
    echo "<span class='warning'>Error retrieving information. Please check back later.</span>";
} else { 
?>
<?php
$i=0;
foreach($json->dataset as $item) {
	     if($i!=0)  
          break;
    echo '<header class="entry-header"><h2 class="entry-title">' . $item->title . '</h2></header>';
	$i++;
}
?>
    		<?php if ( 'page' !== get_post_type() ) : ?>
    		<div class="entry-meta">
    			<?php benjamin_posted_on(); ?>
    		</div><!-- .entry-meta -->
    		<?php
    		endif; 
		?>
	
<?php echo Custom_Ratings_Public::vote(); ?>
	
<?php 
echo '<div class="entry-content">';
$i_link=0;
foreach($json->dataset as $item) { 
if($i_link!=0) 
	break;
   $arr = $item->distribution;
   $result = count($arr);
   //echo $result;
   $default = '<div class="post-format"><div class="format-container pad"><p><a href="https://edg.epa.gov/metadata/catalog/search/resource/details.page?uuid='. $edgID .'" class="post-format-link" target="_blank"><i class="fa fa-link fa-2x"></i> Additional Information &rarr;</a></p></div></div>';
   if ($result == 0) {
    echo  $default;
} else if ($result == 1) {
    echo  $default;
	echo '<div class="post-format"><i class="fa fa-link fa-2x"></i><div class="format-container pad"><p><a href="'. $arr[0]->downloadURL .'" class="post-format-link" target="_blank">Download Data &rarr;</a></p></div></div>';
} else if ($result == 2) {
	
	if ($arr[0]->accessURL != null && $arr[1]->accessURL != null ) {
    echo '<div class="post-format"><div class="format-container pad"><p><a href="'. $arr[0]->accessURL .'" class="post-format-link" target="_blank"><i class="fa fa-link fa-2x"></i> Access Data &rarr;</a></p></div></div>';
	echo '<div class="post-format"><div class="format-container pad"><p><a href="'. $arr[1]->accessURL .'" class="post-format-link" target="_blank"><i class="fa fa-link fa-2x"></i> Access Data &rarr;</a></p></div></div>';
	} else if ($arr[0]->downloadURL != null && $arr[1]->downloadURL != null) {
	echo '<div class="post-format"><div class="format-container pad"><p><a href="'. $arr[0]->downloadURL .'" class="post-format-link" target="_blank"><i class="fa fa-link fa-2x"></i> Download Data &rarr;</a></p></div></div>';
	echo '<div class="post-format"><div class="format-container pad"><p><a href="'. $arr[1]->downloadURL .'" class="post-format-link" target="_blank"><i class="fa fa-link fa-2x"></i> Download Data &rarr;</a></p></div></div>';
	} else if ($arr[0]->accessURL != null && $arr[1]->downloadURL != nulll) {
	echo '<div class="post-format"><div class="format-container pad"><p><a href="'. $arr[0]->accessURL .'" class="post-format-link" target="_blank"><i class="fa fa-link fa-2x"></i> Access Data &rarr;</a></p></div></div>';
	echo '<div class="post-format"><div class="format-container pad"><p><a href="'. $arr[1]->downloadURL .'" class="post-format-link" target="_blank"><i class="fa fa-link fa-2x"></i> Download Data &rarr;</a></p></div></div>';
	} else {
	echo  $default;	
	}
} else {
	echo  $default;	
	}
	$i_link++;
}
?>


						
						
<?php 
$i_contact=0;
foreach($json->dataset as $item) {
if($i_contact!=0) 
	break;	   
    echo $item->description;
	echo '<br /><br /><strong>Organization Name</strong>: ' . $item->publisher->name;
	echo '<br /><br /><strong>Contact</strong>: <a href="mailto:'.str_replace("mailto:", "", $item->contactPoint->hasEmail).'">' . $item->contactPoint->fn .'</a> ('. str_replace("mailto:", "", $item->contactPoint->hasEmail) .')<br /><br />';
	echo '</div><!-- .entry-content -->';
$i_contact++;
}
?>

<?php
} // END JSON ERROR CHECK
?>

						
<?php 
} else {
?>

	<header class="entry-header">
		<?php
		if ( !is_single() ) :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

    		if ( 'page' !== get_post_type() ) : ?>
    		<div class="entry-meta">
    			<?php benjamin_posted_on(); ?>
    		</div><!-- .entry-meta -->
    		<?php
    		endif;

		endif;
        ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php

            the_content( sprintf(
                wp_kses(
                    /* translators: %s: Name of current post. */
                    __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'benjamin' ),
                    array( 'span' => array( 'class' => array() ) )
                ),
                the_title( '<span class="screen-reader-text">"', '"</span>', false )
                )
            );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'benjamin' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
<?php 
} //EDG API END
?>
	<footer class="entry-footer">
		<?php benjamin_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
