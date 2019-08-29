@extends('admin.layouts.main')

@section('content')

<!-- Main content -->
<section class="content">
  <div class="row">
    <!-- Left col -->
    <section class="col-lg-9 connectedSortable">
      <div>
        <a href="{{ route('admin.editor.all') }}" class="btn btn-success btn-sm">
          Back</a>
      </div>
      <p></p>
      @include('messages.success')
      <p></p>
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <div class="panel">
            <div class="panel-body">
                <div class="row">
                    <h2>{{$editor->title.' '.($editor->surname.' '.$editor->firstname.' '.$editor->othename)}}</h2>
                  <div class="col-md-2">
                      <img src="{{$editor->editor_image}}" style="width:30%;">
                  </div>
                  <div class="col-md-8">
                  <div>{{$editor->organization}}</div>
                  <div>{{$editor->department}}</div>
                  <div>{{$editor->country->name}}</div>
                  <div>{{$editor->phone}}</div>
                  <div>{{$editor->email}}</div>
                  <div>{{$editor->created_at->diffForHumans()}}</div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>

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