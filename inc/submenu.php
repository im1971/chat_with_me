<?php
add_action('admin_init', 'sm_artistry_init_callback');

function sm_artistry_init_callback(){
    if(isset($_GET['action']) && $_GET['action'] == 'save-form' && $_POST['action'] && $_POST['action'] == 'submit-fb-messenger'){

        $sm_artistry_update_value = array(
            'page-Id' => $_POST["pageId"],
            'app-Id' => $_POST["appId"]
        );

        update_option('getUpdateValue', maybe_serialize($sm_artistry_update_value));
    }
}

add_action( 'admin_menu', 'sm_artistry_fb_chat' );
function sm_artistry_fb_chat() {
    add_options_page(
        'FB Messenger',
        'FB Messenger',
        'manage_options',
        'fb-messenger',
        'sm_artistry_fb_chat_option'
    );
}

function sm_artistry_fb_chat_option(){
    $data = maybe_unserialize(get_option("getUpdateValue"));
    $page_Id = $data['page-Id'];
    $app_Id = $data['app-Id'];
    ?>

    <div class="wrap">
        <h1><?php echo __('FB Messenger settings field', 'fb-messenger') ?></h1>

        <?php if($_POST['action'] && $_POST['action'] == 'submit-fb-messenger'){?>

            <div class="updated settings-error notice is-dismissible">
                <p><strong>Settings saved.</strong></p>
            </div>

        <?php }?>

        <p class="description">
        Step 1: To get started, go to "developers.facebook.com" and click the “Add a new app” button to create a new Facebook app.</br>
        Step 2: Give your app a name and click the Create button to get your own "App ID". Copy the "App ID" and paste the "App ID" into the plugin "App ID" field. </br>
        Step 3: Go to your Facebook Page, click the Settings tab, choose Messenger Platform, Whitelisted domain, enter the full URL of your website and click Save. You can also enter multiple domains if you wish to embed the same widget on multiple websites. </br>
        Step 4: Get the Facebook Page ID of the specific page that you wish to connect with the customer chat widget. Copy the "Page ID" and paste the "Page ID" into the plugin "Page ID" field. </br>
        Step 5: Paste the shortcode [fbmessenger] in any page and you are done. </br>
        </p>

        <form method="post" action="<?php echo $_SERVER['REQUEST_URI']?>&action=save-form">
            <table class="form-table">
                <tbody>
                <tr>
                    <th scope="row"><label><?php echo __('Page ID : ', 'fb-messenger')?></label></th>
                    <td>
                        <input type="text" name="pageId" value="<?php echo $page_Id ?>" class="regular-text""/>
                    </td>
                </tr>
                <tr>
                    <th scope="row"><label><?php echo __('App ID   : ', 'fb-messenger')?></label></th>
                    <td>
                        <input type="text" name="appId" value="<?php echo $app_Id ?>" class="regular-text">
                    </td>
                </tr>
                </tbody>
            </table>

            <input type="hidden" name="action" value="submit-fb-messenger">
            <input type="submit" value="Save" class="button button-primary"/>
        </form>
    </div>
    <?php
}