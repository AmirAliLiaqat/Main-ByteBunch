<?php

function call_Multi_Image_Uploader()
{
    new Multi_Image_Uploader();
}

/**
 * Get images attached to some post
 *
 * @param int $post_id
 * @return array
 */
function miu_get_images($post_id=null)
{
    global $post;
    if ($post_id == null)
    {
        $post_id = $post->ID;
    }

    $value = get_post_meta($post_id, 'miu_images', true);
    $images = unserialize($value);
    $result = array();
    if (!empty($images))
    {
        foreach ($images as $image)
        {
            $result[] = $image;
        }
    }
    return $result;
}

if (is_admin())
{
    add_action('load-post.php', 'call_Multi_Image_Uploader');
    add_action('load-post-new.php', 'call_Multi_Image_Uploader');
}

/**
 * Multi_Image_Uploader
 */
class Multi_Image_Uploader
{

    var $post_types = array();

    /**
     * Initialize Multi_Image_Uploader
     */
    public function __construct()
    {
        $this->post_types = array('portfolio');     //limit meta box to certain post types
        add_action('add_meta_boxes', array($this, 'add_meta_box'));
        add_action('save_post', array($this, 'save'));
        add_action('admin_enqueue_scripts', array($this, 'enqueue_scripts'));
    }

    /**
     * Adds the meta box container.
     */
    public function add_meta_box($post_type)
    {

        if (in_array($post_type, $this->post_types))
        {
            add_meta_box(
                'multi_image_upload_meta_box', 
                __('Work Meta Box', 'miu_textdomain'), 
                array($this, 'render_meta_box_content'), 
                $post_type, 
                'advanced', 
                'high'
            );
        }
    }

    /**
     * Save the images when the post is saved.
     *
     * @param int $post_id The ID of the post being saved.
     */
    public function save($post_id)
    {
        /*
         * We need to verify this came from the our screen and with proper authorization,
         * because save_post can be triggered at other times.
         */

        // Check if our nonce is set.
        if (!isset($_POST['miu_inner_custom_box_nonce']))
            return $post_id;

        $nonce = $_POST['miu_inner_custom_box_nonce'];

        // Verify that the nonce is valid.
        if (!wp_verify_nonce($nonce, 'miu_inner_custom_box'))
            return $post_id;

        // If this is an autosave, our form has not been submitted,
        //     so we don't want to do anything.
        if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE)
            return $post_id;

        // Check the user's permissions.
        if ('page' == $_POST['post_type'])
        {

            if (!current_user_can('edit_page', $post_id))
                return $post_id;
        } else
        {

            if (!current_user_can('edit_post', $post_id))
                return $post_id;
        }

        /* OK, its safe for us to save the data now. */

        // Validate user input.
        $posted_images = $_POST['miu_images'];
        $url = $_POST['site_url'];
        $miu_images = array();
        if (!empty($posted_images))
        {
            foreach ($posted_images as $image_url)
            {
                if (!empty($image_url))
                    $miu_images[] = esc_url_raw($image_url);
            }
        }

        // Update the miu_images meta field.
        update_post_meta($post_id, 'miu_images', serialize($miu_images));
        update_post_meta($post_id, 'site_url', $url);
    }

    /**
     * Render Meta Box content.
     *
     * @param WP_Post $post The post object.
     */
    public function render_meta_box_content($post)
    {

        // Add an nonce field so we can check for it later.
        wp_nonce_field('miu_inner_custom_box', 'miu_inner_custom_box_nonce');

        // Use get_post_meta to retrieve an existing value from the database.
        $value = get_post_meta($post->ID, 'miu_images', true);
        $url = get_post_meta($post->ID, 'site_url', true);

        $metabox_content = '<div id="miu_images">
        <form action="" method="post">
            <table class="form-table">
                <tbody>
                    <tr>
                        <th scope="row">
                            <label for="work_featured">Featured</label>
                        </th>
                        <td>
                            <input type="checkbox" name="work_featured" value="1" class="regular-text" checked>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">
                            <label for="site_url">URL</label>
                        </th>
                        <td>
                            <input type="text" name="site_url" value="'.$url.'" class="regular-text">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
        </div><!--miu_images-->
        <input type="button" onClick="addRow()" value="Add Image" class="button" style="margin-top:10px;" />';
        echo $metabox_content;

        $images = unserialize($value);

        $script = "<script>
            itemsCount= 0;";
        if (!empty($images))
        {
            foreach ($images as $image)
            {
                $script.="addRow('{$image}');";
            }
        }
        $script .="</script>";
        echo $script;
    }

    function enqueue_scripts($hook)
    {
        if ('post.php' != $hook && 'post-edit.php' != $hook && 'post-new.php' != $hook)
            return;
        wp_enqueue_script('image-upload', get_template_directory_uri() . '/js/image-upload.js', array('jquery'));
    }

}