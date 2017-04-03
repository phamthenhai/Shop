@extends('admin.admin')
@section('handle','Add User')
@section('contentA')

                                    <div class="row">


                                        <div class="large-12 columns">
                                            <div class="account-forms-container">

                                                <div class="account-forms">



                                                    <form id="register" method="post" class="register" style="display: block;">



                                                        <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                                            <label for="reg_email">Username<span class="required">*</span></label>
                                                            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" value="">
                                                        </p>


                                                        <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                                            <label for="reg_password">Password <span class="required">*</span></label>
                                                            <input type="password" class="woocommerce-Input woocommerce-Input--text input-text" name="password" id="reg_password">
                                                        </p>

                                                        <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                                            <label for="reg_password">Email <span class="required">*</span></label>
                                                            <input type="email" class="woocommerce-Input woocommerce-Input--text input-text" name="email" id="email">
                                                        </p>
                                                        <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                                            <label for="reg_password">Phone <span class="required">*</span></label>
                                                            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="phone" id="phone">
                                                        </p>
                                                        <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                                            <label for="reg_password">Address <span class="required">*</span></label>
                                                            <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="address" id="address">
                                                        </p>

                                                        <!-- Spam Trap -->
                                                        <div style="left: -999em; position: absolute;"><label for="trap">Anti-spam</label><input type="text" name="email_2" id="trap" tabindex="-1"></div>


                                                        <p class="woocomerce-FormRow form-row">
                                                            <input type="hidden" id="woocommerce-register-nonce" name="woocommerce-register-nonce" value="f96d32544a"><input type="hidden" name="_wp_http_referer" value="/electronics/my-account/">				<input type="submit" class="woocommerce-Button button" name="register" value="Add">
                                                            <input type="button" class="woocommerce-Button button" name="delete" value="Delete">
                                                        </p>


                                                    </form>


                                                </div><!-- .account-forms-->
                                            </div><!-- .account-forms-container-->
                                        </div><!-- .medium-8-->
                                    </div><!-- .row-->
@endsection()