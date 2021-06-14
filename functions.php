/**
 * @snippet       Get Logged In Username - WooCommerce
 * @author        codeithub.com
*/
 
add_action('woocommerce_after_checkout_billing_form', 'codeithub_get_logged_in_username');
 
function codeithub_get_logged_in_username( $checkout ) {
 
$current_user = wp_get_current_user();
$getmemid = $current_user->user_login;
 
woocommerce_form_field( 'memb_id', array(
'type' => 'text',
'class' => array('my-field-class form-row-wide'),
'label' => __('Username'),
'required' => 'true',
'placeholder' => __('Placeholder'),
), $getmemid);
 
}
