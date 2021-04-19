
function create_enhancedcn_registration_form(){

	ob_start(); ?>

		<div class="enhance-container">

    <div class="enhance-reg-form-container" style="">
        

        <div class="enhance-content-above">
            Register with us by filling out the form below.
        </div>
        <form method="post" enctype="multipart/form-data" class="enhance-form ">
            <div class="enhance-form-html" id="">
                <div class="enhance-rendered-form">

                    <div class="enhance-group">
                        <label for="user_login" class="enhance-text-label">Username<span class="enhance-required">*</span></label>
                        <input type="text" required="1"class="form-control" name="user_login" id="user_login" />
                    </div>

                    <div class="enhance-group">
                        <label for="first_name" class="enhance-text-label">First Name</label><input type="text" class="form-control" name="first_name" id="first_name" />
                    </div>
                    <div class="enhance-group">
                        <label for="last_name" class="enhance-text-label">Last Name</label><input type="text" class="form-control" name="last_name" id="last_name" />
                    </div>
                    <div class="enhance-group">
                        <label for="email" class="enhance-email-label">Email<span class="enhance-required">*</span></label>
                        <input type="email" required="1" class="form-control" name="email" id="email" />
                    </div>
                    <div class="enhance-group">
                        <label for="password" class="enhance-password-label">Password<span class="enhance-required">*</span></label>
                        <input type="password" required="1" value="" class="form-control" name="password" id="password" />
                        
                    </div>
                    <div class="enhance-group">
                        <label for="confirm_password" class="enhance-password-label">Confirm Password<span class="enhance-required">*</span></label>
                        <input type="password" required="1" value="" class="form-control" name="confirm_password" id="confirm_password" />
                    </div>
                    <!-- 
                    <div class="enhance-group">
                        <label for="practice_name_use" class="enhance-text-label">Practice Name<span class="enhance-required">*</span></label>
                        <input type="text" class="form-control" name="practice_name_use" required="required" id="practice_name_use" />
                    </div>
                    <div class="enhance-group">
                        <label class="enhance-text-label">Provider Name</label><input type="text"  class="form-control" name="provider_name_" id="provider_name_" />
                    </div>
                    <div class="enhance-group">
                        <label for="field-CicIpC5trDPkgaN" class="enhance-tel-label">Phone Number<span class="enhance-required">*</span></label>
                           
                        <input type="tel" class="form-control" name="phone_number_" required="required" enable-intl="1" id="phone_number_" autocomplete="off" placeholder="1812-345678" />
                    </div>
                    <div class="enhance-group">
                        <label for="email_address_for_invoice_receipt__if_different_from_above__" class="enhance-email-label">Email address for invoice receipt (if different from above)</label>
                        <input type="email" data-ref-label="Email address for invoice receipt" class="form-control" name="email_address_for_invoice_receipt__if_different_from_above__" id="email_address_for_invoice_receipt__if_different_from_above__" />
                    </div>
                    <div class="enhance-group">
                        <label for="office_contact__if_different_from_above__" class="enhance-text-label">Office contact (if different from above)</label>
                        <input type="text" class="form-control" name="office_contact__if_different_from_above__" id="office_contact__if_different_from_above__" />
                    </div>
                    <div class="enhance-group">
                        <label for="field-5d1Y7DVKzUQGyiw" class="enhance-text-label">ECN sales representative<span class="enhance-required">*</span></label>
                        <input type="text" data-ref-label="ECN sales representative" class="form-control" name="field-5d1Y7DVKzUQGyiw" required="required" id="field-5d1Y7DVKzUQGyiw" />
                    </div>
                    <div class="enhance-group">
                        <label for="national_pro_hook_meta_key" class="enhance-text-label">
                            NPI# National Provider Identifier<span class="enhance-required">*</span><span class="tooltip-element" tooltip="Field must be 10 digits numeric value"><i class="fa fa-info" aria-hidden="true"></i></span>
                        </label>
                        <input type="text" class="form-control" name="national_pro_hook_meta_key" pattern="[0-9]{10}" required="required" id="national_pro_hook_meta_key" />
                    </div>
                    <div class="enhance-group">
                    	<h2 data-non-input="1" data-ref-label="CUSTOMER BILLING ADDRESS" data-ref-id="header-3kzxjxla" class="add_padding_to_heading">CUSTOMER BILLING ADDRESS</h2>
                    </div>

                    <div class="enhance-group">
                        <label for="billing_first_name" class="enhance-text-label">First name<span class="enhance-required">*</span></label>
                        <input type="text"  class="form-control" name="billing_first_name" required="required" id="billing_first_name" />
                    </div>
                    <div class="enhance-group">
                        <label for="billing_last_name" class="enhance-text-label">Last name<span class="enhance-required">*</span></label>
                        <input type="text" data-ref-label="Last name" class="form-control" name="billing_last_name" required="required" id="billing_last_name" />
                    </div>
                    <div class="enhance-group">
                        <label for="billing_company" class="enhance-text-label">Company<span class="enhance-required">*</span></label>
                        <input type="text" class="form-control" name="billing_company" required="required" id="billing_company" />
                    </div>
                    <div class="enhance-group">
                        <label for="billing_address_1" class="enhance-text-label">Address Line 1<span class="enhance-required">*</span></label>
                        <input type="text"  class="form-control" name="billing_address_1" required="required" id="billing_address_1" />
                    </div>
                    <div class="enhance-group">
                        <label for="billing_address_2" class="enhance-text-label">Address Line 2</label><input type="text" class="form-control" name="billing_address_2" id="billing_address_2" />
                    </div>
                    <div class="enhance-group">
                        <label for="billing_city" class="enhance-text-label">City<span class="enhance-required">*</span></label>
                        <input type="text" class="form-control" name="billing_city" required="required" id="billing_city" />
                    </div>
                    <div class="enhance-group">
                        <label for="billing_state" class="enhance-text-label">State<span class="enhance-required">*</span></label>
                        <input type="text" class="form-control" name="billing_state" required="required" id="billing_state" />
                    </div>
                    <div class="enhance-group">
                        <label for="billing_postcode" class="enhance-text-label">Zip Code<span class="enhance-required">*</span></label>
                        <input type="text" class="form-control" name="billing_postcode" required="required" id="billing_postcode" />
                    </div>
                    <div class="enhance-group">
                        <label for="bill_to_office_number__if_different_from_above_" class="enhance-text-label">Bill to office number (if different from above)</label>
                        <input type="text"  class="form-control" name="bill_to_office_number__if_different_from_above_" id="bill_to_office_number__if_different_from_above_" />
                    </div>
                    <div class="enhance-group">
                        <label for="bill_to_email__if_different_from_above_" class="enhance-text-label">Bill to email (if different from above)</label>
                        <input type="text" class="form-control" name="bill_to_email__if_different_from_above_" id="bill_to_email__if_different_from_above_" />
                    </div>
                    <div class="enhance-group"><h2 class="add_padding_to_heading">CUSTOMER SHIPPING ADDRESS</h2></div>
                    <div class="enhance-group">
                        <label for="shipping_first_name" class="enhance-text-label">First name<span class="enhance-required">*</span></label>
                        <input type="text" class="form-control" name="shipping_first_name" required="required" id="shipping_first_name" />
                    </div>
                    <div class="enhance-group">
                        <label for="shipping_last_name" class="enhance-text-label">Last name<span class="enhance-required">*</span></label>
                        <input type="text" data-ref-label="Last name Shipping" class="form-control" name="shipping_last_name" required="required" id="shipping_last_name" />
                    </div>
                    <div class="enhance-group">
                        <label for="shipping_company" class="enhance-text-label">Company<span class="enhance-required">*</span></label>
                        <input type="text" class="form-control" name="shipping_company" required="required" id="shipping_company" />
                    </div>
                    <div class="enhance-group">
                        <label for="shipping_address_1" class="enhance-text-label">Address Line 1<span class="enhance-required">*</span></label>
                        <input type="text" class="form-control" name="shipping_address_1" required="required" id="shipping_address_1" />
                    </div>
                    <div class="enhance-group">
                        <label for="shipping_address_2" class="enhance-text-label">Address Line 2</label>
                        <input type="text"  class="form-control" name="shipping_address_2" id="shipping_address_2" />
                    </div>
                    <div class="enhance-group">
                        <label for="shipping_city" class="enhance-text-label">City<span class="enhance-required">*</span></label>
                        <input type="text" class="form-control" name="shipping_city" required="required" id="shipping_city" />
                    </div>
                    <div class="enhance-group">
                        <label for="shipping_state" class="enhance-text-label">State<span class="enhance-required">*</span></label>
                        <input type="text" class="form-control" name="shipping_state" required="required" id="shipping_state" />
                    </div>
                    <div class="enhance-group">
                        <label for="shipping_postcode" class="enhance-text-label">Zip Code<span class="enhance-required">*</span></label>
                        <input type="text" class="form-control" name="shipping_postcode" required="required" id="shipping_postcode" />
                    </div>
                -->
                </div>
            </div>

            <div class="enhance-submit-button clearfix">
                <div class="enhance-group">
                	<button type="submit" class="btn btn-default" name="button-tUcWmC" data-ref-label="Register" id="button-tUcWmC">Register</button></div>
            </div>

            <div class="enhance_message"></div>

            <?php wp_nonce_field('enhance_submission_nonce' ); ?>
            <input type="hidden" name="_wp_http_referer" value="<?php echo wp_get_referer(); ?>" />
            <input type="hidden" name="action" value="enhance_submit_form" />
            <input type="hidden" name="redirect_to" id="enhance_redirect_to" value="<?php echo get_permalink(); ?>" />

            <input type="hidden" name="enhance_user" value="169" />
        </form>
    </div>
</div>

<script type="text/javascript">
    jQuery(document).ready(function($){

        $(".enhance-form").on('submit', function() {

            //get foem data
            var input_data = $(this).serialize();

            console.log(input_data);

            //make ajax call
            $.ajax({
                type: "POST",
                url: "<?php echo admin_url('admin-ajax.php') ?>",
                data: input_data,
                success: function(msg) {
                   
                	$('.enhance_message').html(msg);

                }
            });
            

            return false;
        });
    });
</script>


	<?php return ob_get_clean();

}
add_shortcode('enhancedcn-registration', 'create_enhancedcn_registration_form');
