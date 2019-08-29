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

          @if (count($editors)!=0)
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
              @foreach ($editors as $editor)
              <tr>
                <td>{{$editor->title.' '.($editor->surname.' '.$editor->firstname.' '.$editor->othername)}}</td>
                <td>{{$editor->department}}</td>
                <td>{{$editor->phone}}</td>
                <td>{{$editor->email}}</td>
                <td>{{$editor->country->name}}</td>
              <td><a href="{{ route('admin.details.editor',$editor->id) }}"><span class="fa fa-eye fa-2x"></span></a></td>
                <td><a href="{{ route('admin.edit.editor',$editor->id) }}"><span
                      class="fa fa-pencil-square-o fa-2x"></span></a></td>
                <td>
                  <form id="delete-form-{{$editor->id}}" style="display: none"
                    action="{{ route('admin.delete.editor',$editor->id) }}" method="post">
                    {{ csrf_field() }}
                    {{method_field('DELETE')}}
                  </form>
                  <a href="" onclick="
                            if (confirm('Are you sure you want to delete this?')) {
                                event.preventDefault();
                            document.getElementById('delete-form-{{$editor->id}}').submit();
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
          @else
          <p class="alert alert-warning">No Editor has been added!</p>
          @endif




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