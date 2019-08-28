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
      <div class="box">
       
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Name</th>
                <th>Department</th>
                <th>Phone</th>
                <th>Email</th>
                <th>View</th>
                <th>Edit</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
           
              <tr>
                <td>Webkit</td>
                <td>Safari 2.0</td>
                <td>OSX.4+</td>
                <td>419.3</td>
                <td>A</td>
                <td>A</td>
                <td>A</td>
              </tr>
              
            </tbody>
            <tfoot>
              <tr>
                  <th>Name</th>
                  <th>Department</th>
                  <th>Phone</th>
                  <th>Email</th>
                  <th>View</th>
                  <th>Edit</th>
                  <th>Delete</th>
              </tr>
            </tfoot>
          </table>
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