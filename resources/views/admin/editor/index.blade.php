@extends('admin.layouts.main')

@section('content')

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
      <a href="{{ route('admin.create.editor') }}" class="btn btn-success btn-sm"><span
          class="fa fa-plus-circle"></span> Create Editor</a>
      <p></p>

      @include('messages.success')
      <br>
      <div class="box">

        <!-- /.box-header -->
        <div class="box-body">
          @forelse ($editors as $editor)
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Name</th>
                <th>Department</th>
                <th>Phone</th>
                <th>Email</th>
                <th>From</th>
                <th>View Details</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>

              <tr>
                <td>{{$editor->title.' '.($editor->surname.' '.$editor->firstname.' '.$editor->othename)}}</td>
                <td>{{$editor->department}}</td>
                <td>{{$editor->phone}}</td>
                <td>{{$editor->email}}</td>
                <td>{{$editor->country->name}}</td>
                <td><a href="#"><span class="fa fa-eye fa-2x"></span></a></td>
                <td><a href="#"><span class="fa fa-pencil-square-o fa-2x"></span></a></td>
                <td><a href="#"><span class="fa fa-trash-o fa-2x text-danger"></span></a></td>
              </tr>
            </tbody>
            <tfoot>
              <tr>
                <th>Name</th>
                <th>Department</th>
                <th>Phone</th>
                <th>Email</th>
                <th>From</th>
                <th>View Details</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </tfoot>
          </table>

          @empty
          <p class="alert alert-warning">No Editor has been added!</p>
          @endforelse
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.Left col -->

    <section class="col-lg-5 connectedSortable">

    </section>
    <!-- right col -->
  </div>
  <!-- /.row (main row) -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection