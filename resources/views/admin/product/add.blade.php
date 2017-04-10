@extends('admin.admin')
@section('handle','Add Product')
@section('contentA')
    <!-- Page Content -->
    <div class="large-12 columns">
        <div class="account-forms-container">
            <p class="account-forms">
                <form id="register" action="{!! route('admin.product.add') !!}" method="post" class="register"
                      style="display: block;" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                <label for="name">Cate</label>
                <select name="sltParent">
                    <?php cate_parent($list); ?>
                </select>
            </p>
            <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                <label for="name">Name<span class="required">*</span></label>
                <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="name"
                       id="name" value="">
            </p>
            <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                <label for="name">Content</label>
                <textarea  class="woocommerce-Input woocommerce-Input--text input-text" name="contents"
                       id="contents"  ></textarea>
            </p>
            <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                <label for="image">Price<span class="required">*</span></label>
                <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="price"
                       id="price">
            </p>
            <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                <label for="name">Discount</label>
                <input type="text"  class="woocommerce-Input woocommerce-Input--text input-text" name="discount"
                           id="discount">
            </p>
            <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                <label for="desc">Image</label>
                <input type="file" class="woocommerce-Input woocommerce-Input--text input-text" name="image_link"
                       id="image_link" value="">
            </p>
            <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                <label for="desc">List Image</label>
                <input type="file" class="woocommerce-Input woocommerce-Input--text input-text" name="image_list[]" multiple
                       id="image_list" value="">
            </p> <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                <label for="desc">Description</label>
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
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
    </div>
@endsection()