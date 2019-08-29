@extends('admin.layouts.main')

@section('content')

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
      {{-- <a href="{{ route('admin.create.editor') }}" class="btn btn-success btn-sm"><span
        class="fa fa-plus-circle"></span> Create Future Conference</a> --}}
      <p></p>
      <div class="box">

        <!-- /.box-header -->
        <div class="box-body">
          @if (count($submittedPapers)!=0)
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Paper Ref.</th>
                <th>Lead Author</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Paper Title</th>
                <th>Submited</th>
                <th>Download</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($submittedPapers as $submitpaper)
              <tr>
                <td>{{$submitpaper->paper_ref}}</td>
                <td>{{$submitpaper->leadauthor}}</td>
                <td>{{$submitpaper->email}}</td>
                <td>{{$submitpaper->phone}}</td>
                <td>{{$submitpaper->papertitle}}</td>
                <td>{{$submitpaper->created_at->diffForHumans()}}</td>
                <td>
                  <a href="{{asset(Storage::disk('local')->url($submitpaper->filename))}}" download="{{$submitpaper->filename}}"
                    class="btn btn-success btn-sm"><span class="fa fa-download"></span> Download</a>
                </td>
              </tr>

              @endforeach

            </tbody>
            <tfoot>
              <tr>
                <th>Paper Ref.</th>
                <th>Lead Author</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Paper Title</th>
                <th>Submited</th>
                <th>Download</th>
              </tr>
            </tfoot>
          </table>

          @else
          <p class="alert alert-warning">No Paper has been submitted!</p>
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