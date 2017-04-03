@extends('admin.admin')
@section('handle','Add Cate')
@section('contentA')
    <div class="large-12 columns">
        <div class="account-forms-container">
            <div class="account-forms">
                <form id="register" action="{!! route('admin.cate.add') !!}" method="post" class="register" style="display: block;" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                        <label for="name">Cate</label>
                        <select name="parent">

                        </select>
                    </p>
                    <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                        <label for="name">Name<span class="required">*</span></label>
                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="name"
                               id="name" value="">
                    </p>
                    <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                        <label for="image">Link Image<span class="required">*</span></label>
                        <input type="file" class="woocommerce-Input woocommerce-Input--text input-text" name="link_image"
                               id="link_image">
                    </p>
                    <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                        <label for="name">Sort</label>
                        <input type="number" class="woocommerce-Input woocommerce-Input--text input-text" name="sort"
                               id="sort" value="">
                    </p>
                    <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                        <label for="desc">Description </label>
                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="desc"
                               id="desc" value="">
                    </p>
                    <p class="woocomerce-FormRow form-row" style="text-align: center;">
                        <input type="submit"
                               class="woocommerce-Button button"
                               name="register"
                               value="Add">
                        <input type="button"
                               class="woocommerce-Button button"
                               name="clear"
                               value="Clear">
                    </p>


                </form>


            </div><!-- .account-forms-->
        </div><!-- .account-forms-container-->
    </div><!-- .medium-8-->

@endsection()