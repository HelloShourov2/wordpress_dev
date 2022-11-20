<?php
/**
 * Template non-content file
 * 
 * @package mytheme
 */
?>

<section class="no_result not_found">
    <header class="page_header">
        <h1 class="Page_title">
            <?php esc_html_e( 'Nothing Found', 'mytheme' ); ?>
        </h1>
    </header>

    <div class="page_content">
        <?php
            if(is_home() && current_user_can('publish_posts')){
                ?>
        <p>
            <?php
                printf(
                    wp_kses(
                        __('Ready to publish your post? <a  href="%s">Get started here</a>', 'mytheme'),
                        [
                            'a' => [
                                'href' =>[]
                            ]
                        ]
                            ),
                    esc_url(admin_url('post-new.php'))
                )
            ?>
        </p>
        <?php
            } elseif(is_search()){
                ?>
        <p><?php esc_html_e('Sorry but nothing matched with your search', 'mytheme'); ?></p>
        <?php
                get_search_form();
            }else{
                ?>
        <p><?php esc_html_e('It seems we cannot find what you are looking for', 'mytheme'); ?></p>
        <?php
                get_search_form();
            }
        ?>
    </div>
</section>