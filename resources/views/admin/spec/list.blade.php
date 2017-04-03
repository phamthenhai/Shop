@extends('admin.admin')
@section('handle','List Cate')
@section('contentA')

    <!-- /.col-lg-12 -->
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
        <tr align="center">
            <th>ID</th>
            <th>Name</th>
            <th>Category Parent</th>
            <th>Status</th>
            <th>Delete</th>
            <th>Edit</th>
        </tr>
        </thead>
        <tbody>
        <?php $stt = 1; ?>
        @foreach($data as $item)
            <tr class="odd gradeX" align="center">
                <td><?php echo $stt; $stt += 1; ?></td>
                <td>{!! $item["name"] !!}</td>
                <td>
                    @if($item["parent_id"] == 0)
                        {!! "None" !!}
                    @else
                        <?php
                        $parent = DB::table('cate')->where('id', $item["parent_id"])->first();
                        echo $parent->name;
                        ?>
                    @endif
                </td>
                <td>{!! $item["id"] !!}</td>
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{!! URL::route("admin.cate.delete", $item["id"]) !!}"> Delete</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{!! URL::route("admin.cate.edit", $item["id"]) !!}">Edit</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection()