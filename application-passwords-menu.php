<?php
add_action( 'admin_menu', 'add_general_custom_fields' );
 
function add_general_custom_fields() {
    add_options_page(
        'Application Password By TS', // page_title
        'Application Password By TS', // menu_title
        'administrator', // capability
        'application_password_by_ts', // menu_slug
        'display_apbts_menu_page' // function
    );
    register_setting(
          'apbts_header', // option_group
          'apbts_header_user' // option_name
    );
     register_setting(
      'apbts_header', // option_group
      'apbts_header_password' // option_name
    );
}
 
function display_apbts_menu_page() {
?>
 
<div class="wrap">
 
<h2>Application Passwords By TS 設定</h2>
 
<form method="post" action="options.php">
 
<?php
  settings_fields( 'apbts_header' );
  do_settings_sections( 'default' );
?>
 
<table class="form-table">
  <tbody>
    <tr>
      <th scope="row">ユーザーのカスタムヘッダー名</th>
      <td>
        <input style='width:300px;' type="text" name="apbts_header_user" value="<?php echo( get_option('apbts_header_user') ); ?>">
      </td>
    </tr>
    <tr>
      <th scope="row">パスワードのカスタムヘッダー名</th>
      <td>
        <input style='width:300px;' type="text" name="apbts_header_password" value="<?php echo( get_option('apbts_header_password') ); ?>">
      </td>
    </tr>
  </tbody>
</table>
 
<?php submit_button(); // 送信ボタン ?>
 
</form>
 
</div><!-- .wrap --> 
<?php } ?>