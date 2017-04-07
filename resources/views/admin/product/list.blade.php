@extends('admin.admin')
@section('handle','List Product')
@section('contentA')
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>STT</th>
                                <th>Name</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Delete</th>
                                <th>Edit</th>
                                <th>Spec</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $stt = 1; ?>
                        @foreach($list as $item)
                            <tr class="odd gradeX" align="center">
                                <td><?php echo $stt; $stt += 1; ?></td>
                                <td>{!! $item["name"] !!}</td>
                                <td>{!! $item["price"] !!}</td>
                                <td>
                                    {!! $item["catename"] !!}
                                </td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{!! URL::route("admin.product.delete", $item["id"]) !!}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route("admin.product.edit", $item["id"]) !!}">Edit</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route("admin.productdetail.add", $item["id"]) !!}">Detail</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection()