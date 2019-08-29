@extends('admin.layouts.main')

@section('content')

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
      {{-- <a href="{{ route('admin.create.editor') }}" class="btn btn-success btn-sm"><span
          class="fa fa-plus-circle"></span> Create Editor</a>
      <p></p> --}}
      <div class="box">
       
        <!-- /.box-header -->
        <div class="box-body">
          @forelse ($contacts as $contact)
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Sender</th>
                <th>Sender Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Sent at</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
           
              <tr>
                <td>{{$contact->name}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->subject}}</td>
                <td>{{$contact->message}}</td>
                <td>{{$contact->created_at->diffForHumans()}}</td>
                <td><a href="#"><span class="fa fa-trash-o fa-2x text-danger"></span></a></td>
              </tr>
                        
            </tbody>
            <tfoot>
              <tr>
                  <th>Sender</th>
                  <th>Sender Email</th>
                  <th>Subject</th>
                  <th>Message</th>
                  <th>Sent at</th>
                  <th>Delete</th>
              </tr>
            </tfoot>
          </table>
              
          @empty
          <p class="alert alert-warning">No Message has been recieved!</p>
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