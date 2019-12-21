<?php
/**
Template Name: Shop
**/

?>


   <?php get_header(); ?>


        <?php
 
$page_id = get_the_ID();
$page_data = get_page( $page_id );
$content = $page_data->post_content;
$title = $page_data->post_title; 

echo $page_data->post_content;

?>

        </div>
    </div>
    
    </div>
</div>

<div class="clear"></div>

<?php get_footer();?>
