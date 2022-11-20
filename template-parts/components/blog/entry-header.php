<?php
/**
 * Template post entry header file
 * 
 * @package mytheme
 */

 $the_post_id = get_the_ID();
 $has_post_thumbnail = get_the_post_thumbnail();
?>
<header class="entry_header">
    <?php
    // Featured image
    if($has_post_thumbnail){
        ?>
    <div class="entry_img">
        <a href="<?php echo esc_url(get_permalink()); ?>">
            <?php
                the_post_custom_thumbnail(
                    $the_post_id,
                    'featured-image',
                    [
                        'sizes' => '(max-width: 350px) 350px, 200px',
                        'class' => 'attachment-featured-large size-featured-image',
                    ]
                )
            ?>
        </a>
    </div>
    <?php
    }
    ?>
</header>