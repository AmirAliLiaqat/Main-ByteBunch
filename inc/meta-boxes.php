<?php

/*********************************** Register meta boxes ***********************************/
function bb_register_meta_boxes() {
    add_meta_box( 'team_meta_box', 'Team Meta Box', 'team_meta_box_html', 'team' );
    // add_meta_box( 'portfolio_meta_box', 'Work Meta Box', 'portfolio_meta_box_html', 'portfolio' );
}
add_action( 'add_meta_boxes', 'bb_register_meta_boxes' );

/*********************************** Team Meta boxe Html ***********************************/
function team_meta_box_html( $post ) { ?>
    <form action="" method="post">
        <table class="form-table">
            <tbody>
                <tr>
                    <th scope="row">
                        <label for="is_active">Is Active</label>
                    </th>
                    <td>
                        <?php $is_active = get_post_meta( $post->ID,  'is_active', true ); ?>
                        <input type="text" name="is_active" value="<?php echo $is_active; ?>" class="regular-text">
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="team_designation">Designation</label>
                    </th>
                    <td>
                        <?php $designation = get_post_meta( $post->ID,  'team_designation', true ); ?>
                        <input type="text" name="team_designation" value="<?php echo $designation; ?>" class="regular-text">
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="team_facebook_url">Facebook URL</label>
                    </th>
                    <td>
                        <?php $facebook_url = get_post_meta( $post->ID,  'team_facebook_url', true ); ?>
                        <input type="text" name="team_facebook_url" value="<?php echo $facebook_url; ?>" class="regular-text">
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="team_twitter_url">Twitter URL</label>
                    </th>
                    <td>
                        <?php $twitter_url = get_post_meta( $post->ID,  'team_twitter_url', true ); ?>
                        <input type="text" name="team_twitter_url" value="<?php echo $twitter_url; ?>" class="regular-text">
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="team_linkedin_url">Linkedin URL</label>
                    </th>
                    <td>
                        <?php $linkedin_url = get_post_meta( $post->ID,  'team_linkedin_url', true ); ?>
                        <input type="text" name="team_linkedin_url" value="<?php echo $linkedin_url; ?>" class="regular-text">
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="team_github_url">Github URL</label>
                    </th>
                    <td>
                        <?php $githun_url = get_post_meta( $post->ID,  'team_github_url', true ); ?>
                        <input type="text" name="team_github_url" value="<?php echo $githun_url; ?>" class="regular-text">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
<?php }

/*********************************** Team Meta boxe Html ***********************************/
function portfolio_meta_box_html( $post ) { ?>
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
                        <?php $url = get_post_meta( $post->ID,  'site_url', true ); ?>
                        <input type="text" name="site_url" value="<?php echo $url; ?>" class="regular-text">
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="work_logo">Company logo</label>
                    </th>
                    <td>
                        <?php $logo = get_post_meta( $post->ID,  'work_logo', true ); ?>
                        <input type="url" name="work_logo" id="work_logo" value="<?php echo $logo; ?>" class="regular-text">
                    </td>
                    <!-- <td>
                        <?php //$logo = get_post_meta( $post->ID,  'company_logo', true ); ?>
                        <input type="file" name="company_logo" value="<?php //echo $logo; ?>" class="regular-text">
                    </td> -->
                </tr>
            </tbody>
        </table>
    </form>
<?php }

/*********************************** Save Team Meta boxe Values ***********************************/
function team_save_meta_box( $post_id = 'team' ) {
    global $post;
    
    if ( isset( $_POST['is_active'] ) ) { 
        update_post_meta( $post->ID, 'is_active', $_POST['is_active'] );      
    }
    
    if ( isset( $_POST['team_designation'] ) ) { 
        update_post_meta( $post->ID, 'team_designation', $_POST['team_designation'] );      
    }

    if ( isset( $_POST['team_facebook_url'] ) ) { 
        update_post_meta( $post->ID, 'team_facebook_url', $_POST['team_facebook_url'] );      
    }

    if ( isset( $_POST['team_twitter_url'] ) ) { 
        update_post_meta( $post->ID, 'team_twitter_url', $_POST['team_twitter_url'] );      
    }

    if ( isset( $_POST['team_linkedin_url'] ) ) { 
        update_post_meta( $post->ID, 'team_linkedin_url', $_POST['team_linkedin_url'] );      
    }

    if ( isset( $_POST['team_github_url'] ) ) { 
        update_post_meta( $post->ID, 'team_github_url', $_POST['team_github_url'] );      
    }
}
add_action( 'save_post', 'team_save_meta_box' );

/*********************************** Save Portfolio Meta boxe Values ***********************************/
function portfolio_save_meta_box( $post_id = 'portfolio' ) {
    global $post;

    if ( isset( $_POST['site_url'] ) ) { 
        update_post_meta( $post->ID, 'site_url', $_POST['site_url'] );      
    }

    if ( isset( $_POST['work_logo'] ) ) { 
        update_post_meta( $post->ID, 'work_logo', $_POST['work_logo'] );      
    }
}
add_action( 'save_post', 'portfolio_save_meta_box' );
