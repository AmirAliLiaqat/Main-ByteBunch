<?php

/*********************************** Register meta boxes ***********************************/
function bb_register_meta_boxes() {
    add_meta_box( 'team_meta_box', 'Team Meta Box', 'team_meta_box_html', 'team' );
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