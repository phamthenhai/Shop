@extends('master')
@section('controller','Our Shop')
@section('content')
    <div id="content" class="site-content" role="main" style="">

            <div class="row">
                <div class="large-12 columns">

                    <div class="entry-content">
                        <div class="woocommerce">
                            <style>
                                .site-content {
                                    margin-top: 80px;
                                    margin-bottom: 80px;
                                }
                            </style>


                            <div class="row">
                                <div class="medium-10 medium-centered large-6 large-centered columns">


                                    <div class="login-register-container">

                                        <div class="row">


                                            <div class="large-12 columns">
                                                <div class="account-forms-container">
                                                    <ul class="account-tab-list">

                                                        <li class="account-tab-item"><a class="account-tab-link current" href="#login">Login</a></li>

                                                    </ul>

                                                    <div class="account-forms">
                                                        <form id="login" method="post" class="login-form">


                                                            <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                                                <label for="username">Username <span class="required">*</span></label>
                                                                <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="username" id="username" value="">
                                                            </p>
                                                            <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                                                                <label for="password">Password <span class="required">*</span></label>
                                                                <input class="woocommerce-Input woocommerce-Input--text input-text" type="password" name="password" id="password">
                                                            </p>

                                                            <p class="form-row">
                                                                <input type="hidden" id="woocommerce-login-nonce" name="woocommerce-login-nonce" value="cdcc2e55a8"><input type="hidden" name="_wp_http_referer" value="/electronics/my-account/">				<input type="submit" class="woocommerce-Button button" name="login" value="Login">
                                                                <label for="rememberme" class="inline">
                                                                    <input class="woocommerce-Input woocommerce-Input--checkbox" name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember me				</label>
                                                            </p>
                                                            <p class="woocommerce-LostPassword lost_password">
                                                                <a href="http://woodstock.temashdesign.com/electronics/my-account/lost-password/">Lost your password?</a>
                                                            </p>


                                                        </form>
                                                    </div><!-- .account-forms-->
                                                </div><!-- .account-forms-container-->
                                            </div><!-- .medium-8-->
                                        </div><!-- .row-->
                                    </div><!-- .login-register-container-->


                                </div><!-- .large-6-->
                            </div><!-- .rows-->
                        </div>
                    </div><!-- .entry-content -->

                </div><!-- .columns -->
            </div><!-- .row -->

    </div>
    @endsection()
