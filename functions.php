<?php 
function create_bcdcn_registration_form(){

	ob_start(); ?>

		<div class="bc-container">
		    <div class="bc-reg-form-container">
		        
		        <div class="bc-content-above">
		            Register with us by filling out the form below.
		        </div>

		        <form method="post" enctype="multipart/form-data" class="bc-form ">
		            <div class="bc-form-html" id="">
		                <div class="bc-rendered-form">

		                    <div class="bc-group">
		                        <label for="user_login" class="bc-text-label">Username<span class="bc-required">*</span></label>
		                        <input type="text" required="1"class="form-control" name="user_login" id="user_login" />
		                    </div>

		                    <div class="bc-group">
		                        <label for="first_name" class="bc-text-label">First Name</label><input type="text" class="form-control" name="first_name" id="first_name" />
		                    </div>
		                    <div class="bc-group">
		                        <label for="last_name" class="bc-text-label">Last Name</label><input type="text" class="form-control" name="last_name" id="last_name" />
		                    </div>
		                    <div class="bc-group">
		                        <label for="email" class="bc-email-label">Email<span class="bc-required">*</span></label>
		                        <input type="email" required="1" class="form-control" name="email" id="email" />
		                    </div>
		                    <div class="bc-group">
		                        <label for="password" class="bc-password-label">Password<span class="bc-required">*</span></label>
		                        <input type="password" required="1" value="" class="form-control" name="password" id="password" />
		                        
		                    </div>
		                    <div class="bc-group">
		                        <label for="confirm_password" class="bc-password-label">Confirm Password<span class="bc-required">*</span></label>
		                        <input type="password" required="1" value="" class="form-control" name="confirm_password" id="confirm_password" />
		                    </div>
		                    <div class="bc-group">
		                        <label for="practice_name_use" class="bc-text-label">Practice Name<span class="bc-required">*</span></label>
		                        <input type="text" class="form-control" name="practice_name_use" required="required" id="practice_name_use" />
		                    </div>
		                    <div class="bc-group">
		                        <label class="bc-text-label">Provider Name</label><input type="text"  class="form-control" name="provider_name_" id="provider_name_" />
		                    </div>
		                    <div class="bc-group">
		                        <label for="field-CicIpC5trDPkgaN" class="bc-tel-label">Phone Number<span class="bc-required">*</span></label>
		                           
		                        <input type="tel" class="form-control" name="phone_number_" required="required" enable-intl="1" id="phone_number_" autocomplete="off" placeholder="1812-345678" />
		                    </div>
		                    <div class="bc-group">
		                        <label for="email_address_for_invoice_receipt__if_different_from_above__" class="bc-email-label">Email address for invoice receipt (if different from above)</label>
		                        <input type="email" data-ref-label="Email address for invoice receipt" class="form-control" name="email_address_for_invoice_receipt__if_different_from_above__" id="email_address_for_invoice_receipt__if_different_from_above__" />
		                    </div>
		                    <div class="bc-group">
		                        <label for="office_contact__if_different_from_above__" class="bc-text-label">Office contact (if different from above)</label>
		                        <input type="text" class="form-control" name="office_contact__if_different_from_above__" id="office_contact__if_different_from_above__" />
		                    </div>
		                    <div class="bc-group">
		                        <label for="ecn_sales_representative" class="bc-text-label">ECN sales representative<span class="bc-required">*</span></label>
		                        <input type="text" class="form-control" name="ecn_sales_representative" required="required" id="ecn_sales_representative" />
		                    </div>
		                    <div class="bc-group">
		                        <label for="national_pro_hook_meta_key" class="bc-text-label">
		                            NPI# National Provider Identifier<span class="bc-required">*</span><span class="tooltip-element" title="Field must be 10 digits numeric value"><i style="padding-left:5px;" class="fa fa-info" aria-hidden="true"></i></span>
		                        </label>
		                        <input  title="Field must be 10 digits numeric value" type="text" class="form-control" name="national_pro_hook_meta_key" pattern="[0-9]{10}" required="required" id="national_pro_hook_meta_key" />
		                    </div>
		                    <div class="bc-group">
		                    	<h2 data-non-input="1" data-ref-label="CUSTOMER BILLING ADDRESS" data-ref-id="header-3kzxjxla" class="add_padding_to_heading">CUSTOMER BILLING ADDRESS</h2>
		                    </div>

		                    <div class="bc-group">
		                        <label for="billing_first_name" class="bc-text-label">First name<span class="bc-required">*</span></label>
		                        <input type="text"  class="form-control" name="billing_first_name" required="required" id="billing_first_name" />
		                    </div>
		                    <div class="bc-group">
		                        <label for="billing_last_name" class="bc-text-label">Last name<span class="bc-required">*</span></label>
		                        <input type="text" data-ref-label="Last name" class="form-control" name="billing_last_name" required="required" id="billing_last_name" />
		                    </div>
		                    <div class="bc-group">
		                        <label for="billing_company" class="bc-text-label">Company<span class="bc-required">*</span></label>
		                        <input type="text" class="form-control" name="billing_company" required="required" id="billing_company" />
		                    </div>
		                    <div class="bc-group">
		                        <label for="billing_address_1" class="bc-text-label">Address Line 1<span class="bc-required">*</span></label>
		                        <input type="text"  class="form-control" name="billing_address_1" required="required" id="billing_address_1" />
		                    </div>
		                    <div class="bc-group">
		                        <label for="billing_address_2" class="bc-text-label">Address Line 2</label><input type="text" class="form-control" name="billing_address_2" id="billing_address_2" />
		                    </div>
		                    <div class="bc-group">
		                        <label for="billing_city" class="bc-text-label">City<span class="bc-required">*</span></label>
		                        <input type="text" class="form-control" name="billing_city" required="required" id="billing_city" />
		                    </div>
		                    <div class="bc-group">
		                        <label for="billing_state" class="bc-text-label">State<span class="bc-required">*</span></label>
		                        <input type="text" class="form-control" name="billing_state" required="required" id="billing_state" />
		                    </div>
		                    <div class="bc-group">
		                        <label for="billing_postcode" class="bc-text-label">Zip Code<span class="bc-required">*</span></label>
		                        <input type="text" class="form-control" name="billing_postcode" required="required" id="billing_postcode" />
		                    </div>
		                    <div class="bc-group">
		                        <label for="bill_to_office_number__if_different_from_above_" class="bc-text-label">Bill to office number (if different from above)</label>
		                        <input type="text"  class="form-control" name="bill_to_office_number__if_different_from_above_" id="bill_to_office_number__if_different_from_above_" />
		                    </div>
		                    <div class="bc-group">
		                        <label for="bill_to_email__if_different_from_above_" class="bc-text-label">Bill to email (if different from above)</label>
		                        <input type="email" class="form-control" name="bill_to_email__if_different_from_above_" id="bill_to_email__if_different_from_above_" />
		                    </div>
		                    <div class="bc-group"><h2 class="add_padding_to_heading">CUSTOMER SHIPPING ADDRESS</h2></div>
		                    <div class="bc-group">
		                        <label for="shipping_first_name" class="bc-text-label">First name<span class="bc-required">*</span></label>
		                        <input type="text" class="form-control" name="shipping_first_name" required="required" id="shipping_first_name" />
		                    </div>
		                    <div class="bc-group">
		                        <label for="shipping_last_name" class="bc-text-label">Last name<span class="bc-required">*</span></label>
		                        <input type="text" data-ref-label="Last name Shipping" class="form-control" name="shipping_last_name" required="required" id="shipping_last_name" />
		                    </div>
		                    <div class="bc-group">
		                        <label for="shipping_company" class="bc-text-label">Company<span class="bc-required">*</span></label>
		                        <input type="text" class="form-control" name="shipping_company" required="required" id="shipping_company" />
		                    </div>
		                    <div class="bc-group">
		                        <label for="shipping_address_1" class="bc-text-label">Address Line 1<span class="bc-required">*</span></label>
		                        <input type="text" class="form-control" name="shipping_address_1" required="required" id="shipping_address_1" />
		                    </div>
		                    <div class="bc-group">
		                        <label for="shipping_address_2" class="bc-text-label">Address Line 2</label>
		                        <input type="text"  class="form-control" name="shipping_address_2" id="shipping_address_2" />
		                    </div>
		                    <div class="bc-group">
		                        <label for="shipping_city" class="bc-text-label">City<span class="bc-required">*</span></label>
		                        <input type="text" class="form-control" name="shipping_city" required="required" id="shipping_city" />
		                    </div>
		                    <div class="bc-group">
		                        <label for="shipping_state" class="bc-text-label">State<span class="bc-required">*</span></label>
		                        <input type="text" class="form-control" name="shipping_state" required="required" id="shipping_state" />
		                    </div>
		                    <div class="bc-group">
		                        <label for="shipping_postcode" class="bc-text-label">Zip Code<span class="bc-required">*</span></label>
		                        <input type="text" class="form-control" name="shipping_postcode" required="required" id="shipping_postcode" />
		                    </div>
		                
		                </div>
		            </div>

		            <div class="bc-submit-button clearfix">
		                <div class="bc-group">
		                	<button type="submit" class="btn btn-default" name="button-tUcWmC" data-ref-label="Register" id="button-tUcWmC">Register</button></div>
		            </div>

		            <div class="bc_message"></div>

		            <?php wp_nonce_field('bc_submission_nonce' ); ?>
		            <input type="hidden" name="_wp_http_referer" value="<?php echo wp_get_referer(); ?>" />
		            <input type="hidden" name="action" value="bc_submit_form" />
		            <input type="hidden" name="redirect_to" id="bc_redirect_to" value="<?php echo get_permalink(); ?>" />

		            <input type="hidden" name="bc_user" value="169" />
		        </form>
		    </div>
		</div>

		<script type="text/javascript">
		    jQuery(document).ready(function($){

		        $(".bc-form").on('submit', function() {

		        	$('.bc_message').html('Please wait...');

		            //get foem data
		            var input_data = $(this).serialize();

		            console.log(input_data);

		            //make ajax call
		            $.ajax({
		                type: "POST",
		                url: "<?php echo admin_url('admin-ajax.php') ?>",
		                data: input_data,
		                success: function(msg) {
		                	
		                	$('.bc_message').html(msg);

		                }
		            });
		            

		            return false;
		        });
		    });
		</script>

		<style>

			.bc-content-above {
			  font-size: 20px;
			  font-weight: 700;
			  margin-bottom: 20px;
			}
			.bc-group {
			  margin-bottom: 15px;
			}
			.bc-group label {
			  display: block;
			  width: 100%;
			  padding-bottom: 5px;
			}
			.bc-group input {
			  width: 100%;
			  border: 1px solid #ccc;
			  padding: 6px 10px;
			  height: 38px;
			  border-radius: 4px;
			}
			.bc-submit-button button {
			  background: #99c957;
			  border: none;
			  color: #fff;
			  font-size: 20px;
			  width: auto;
			  padding: 10px 25px;
			  font-weight: 700;
			  cursor: pointer;
			}
			.bc-submit-button button:hover {
			  background: #00177f;
			}
			.bc-required {
			    color: red;
			    padding-left: 3px;
			}
			.bc_message {
			    font-size: 20px;
			    font-weight: 700;
			    padding: 10px 0px;
			}
		</style>


	<?php return ob_get_clean();

}
add_shortcode('bcdcn-registration', 'create_bcdcn_registration_form');



/**
 * New User registration
 *
 */
function bc_submit_form_action_callback() {
 
  // Verify nonce
	check_ajax_referer( 'bc_submission_nonce', 'security' );

  // Post values
    $username = sanitize_user($_POST['user_login']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $email    = $_POST['email'];
    $first_name    = $_POST['first_name'];
    $last_name    = $_POST['last_name'];
    $practice_name_use    = $_POST['practice_name_use'];
    $provider_name_    = $_POST['provider_name_'];
    $phone_number_    = $_POST['phone_number_'];
    $email_address_for_invoice_receipt__if_different_from_above__    = $_POST['email_address_for_invoice_receipt__if_different_from_above__'];
    $office_contact__if_different_from_above__    = $_POST['office_contact__if_different_from_above__'];
    $national_pro_hook_meta_key    = $_POST['national_pro_hook_meta_key'];
    $billing_first_name    = $_POST['billing_first_name'];
    $billing_last_name    = $_POST['billing_last_name'];
    $billing_company    = $_POST['billing_company'];
    $billing_address_1    = $_POST['billing_address_1'];
    $billing_address_2    = $_POST['billing_address_2'];
    $billing_city    = $_POST['billing_city'];
    $billing_state    = $_POST['billing_state'];
    $billing_postcode    = $_POST['billing_postcode'];
    $bill_to_office_number__if_different_from_above_    = $_POST['bill_to_office_number__if_different_from_above_'];
    $shipping_first_name    = $_POST['shipping_first_name'];
    $shipping_last_name    = $_POST['shipping_last_name'];
    $shipping_company    = $_POST['shipping_company'];
    $shipping_address_1    = $_POST['shipping_address_1'];
    $shipping_address_2    = $_POST['shipping_address_2'];
    $shipping_city    = $_POST['shipping_city'];
    $shipping_state    = $_POST['shipping_state'];
    $shipping_postcode    = $_POST['shipping_postcode'];
    $ecn_sales_representative    = $_POST['ecn_sales_representative'];

    if ( username_exists( $username ) ) {
	    die("Username is already exists!");
	}

	/*if ( validate_username( $username ) ) {
	    die("Please Enter a valid username");
	}*/
 
    if(!is_email($email)){
    	die('Please enter a valid email address!');
    }
    if ( strcmp( $password, $confirm_password ) !== 0 ) {
    	die('Password and Confirm Password Fields should be same!');
    }

    $userdata = array(
        'user_login' => $username,
        'user_pass'  => $password,
        'user_email' => $email,
        'first_name' => $first_name,
        'last_name' => $last_name,
        'role' => 'customer',
    );
 
    $user_id = wp_insert_user( wp_slash($userdata) ) ;


    
 
    // Return
    if( !is_wp_error($user_id) ) {

    	 update_user_meta( $user_id, 'practice_name_use', $practice_name_use );
	    update_user_meta( $user_id, 'provider_name_', $provider_name_ );
	    update_user_meta( $user_id, 'phone_number_', $phone_number_ );
	    update_user_meta( $user_id, 'email_address_for_invoice_receipt__if_different_from_above__', $email_address_for_invoice_receipt__if_different_from_above__ );
	    update_user_meta( $user_id, 'office_contact__if_different_from_above__', $office_contact__if_different_from_above__ );
	    update_user_meta( $user_id, 'national_pro_hook_meta_key', $national_pro_hook_meta_key );
	    update_user_meta( $user_id, 'billing_first_name', $billing_first_name );
	    update_user_meta( $user_id, 'billing_last_name', $billing_last_name );
	    update_user_meta( $user_id, 'billing_company', $billing_company );
	    update_user_meta( $user_id, 'billing_address_1', $billing_address_1 );
	    update_user_meta( $user_id, 'billing_address_2', $billing_address_2 );
	    update_user_meta( $user_id, 'billing_city', $billing_city );
	    update_user_meta( $user_id, 'billing_state', $billing_state );
	    update_user_meta( $user_id, 'billing_postcode', $billing_postcode );
	    update_user_meta( $user_id, 'bill_to_office_number__if_different_from_above_', $bill_to_office_number__if_different_from_above_ );
	    update_user_meta( $user_id, 'bill_to_email__if_different_from_above_', $bill_to_email__if_different_from_above_ );
	    update_user_meta( $user_id, 'shipping_first_name', $shipping_first_name );
	    update_user_meta( $user_id, 'shipping_last_name', $shipping_last_name );
	    update_user_meta( $user_id, 'shipping_company', $shipping_company );
	    update_user_meta( $user_id, 'shipping_address_1', $shipping_address_1 );
	    update_user_meta( $user_id, 'shipping_address_2', $shipping_address_2 );
	    update_user_meta( $user_id, 'shipping_city', $shipping_city );
	    update_user_meta( $user_id, 'shipping_state', $shipping_state );
	    update_user_meta( $user_id, 'shipping_postcode', $shipping_postcode );
	    update_user_meta( $user_id, 'ecn_sales_representative', $ecn_sales_representative );

        echo 'Thanks for registering with us!';
    } else {
        echo $user_id->get_error_message();
    }

  	die();
 
}
 
add_action('wp_ajax_bc_submit_form', 'bc_submit_form_action_callback');
add_action('wp_ajax_nopriv_bc_submit_form', 'bc_submit_form_action_callback');
