@extends('admin.admin')
@section('handle','Add Product Detail')
@section('contentA')
    <!-- Page Content -->
    <div class="large-12 columns">
        <div class="account-forms-container">
            <p class="account-forms">
                <form id="register" action="{!! route('admin.productdetail.add', 2) !!}" method="post" class="register"
                      style="display: block;" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                <label for="name">Product Name</label>
                {{--<input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="{!! $dataT["name"] !!}"--}}
                       {{--id="{!! $dataT["id"] !!}" readonly>--}}
            </p>
            @foreach($list as $item)
            <p class="woocommerce-FormRow woocommerce-FormRow--wide form-row form-row-wide">
                <label for="name">{!! $item["name"] !!}<span class="required">*</span></label>
                <input type="text" class="woocommerce-Input woocommerce-Input--text input-text" name="{!! $item["name"] !!}"
                       id="{!! $item["name"] !!}" value="">
            </p>
            @endforeach
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