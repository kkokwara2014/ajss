@extends('admin.layouts.main')

@section('content')

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-10 connectedSortable">
            <a href="{{ route('admin.admins.create') }}" class="btn btn-success btn-sm"><span
                    class="fa fa-plus-circle"></span> Add New</a>
            <br><br>
            <div class="box">
                {{-- <div class="box-header">
                    <h3 class="box-title">Data Table With Full Features</h3>
                </div> --}}
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created</th>
                                <th>Edit</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($admins as $admin)
                                
                            <tr>
                                <td>{{ $admin->name }}</td>
                                <td>{{ $admin->email }}</td>
                                <td>{{ $admin->created_at->diffForHumans() }}</td>
                                <td>
                                <a href="{{ route('admin.admins.edit',$admin->id) }}"><span class="fa fa-pencil-square fa-2x text-primary"></span></a>
                                </td>
                                <td>
                                <form id="delete-form-{{$admin->id}}" style="display: none" action="{{ route('admin.destroy',$admin->id) }}" method="post">
                                    {{ csrf_field() }}
                                    {{method_field('DELETE')}}
                                </form>    
                                    <a href="" onclick="
                                        if (confirm('Are you sure you want to delete this?')) {
                                            event.preventDefault();
                                        document.getElementById('delete-form-{{$admin->id}}').submit();
                                        } else {
                                            event.preventDefault();
                                        }
                                    "><span class="fa fa-trash fa-2x text-danger"></span>
                                    </a>
                                
                                </td>
                            </tr>
                            @endforeach

                            

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Created</th>
                                <th>Edit</th>
                                <th>Remove</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </section>
    </div>

</section>
<!-- /.Left col -->

{{-- <section class="col-lg-5 connectedSortable">

</section> --}}
<!-- right col -->

{{-- </div> --}}

<!-- /.row (main row) -->

{{-- </section> --}}

<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection