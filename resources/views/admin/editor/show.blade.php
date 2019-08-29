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
              <div class="container">
                <div class="row">
                  <div>
                    <h2>{{$editor->title.' '.($editor->surname.' '.$editor->firstname.' '.$editor->othername)}}</h2>
                  </div>
                  <div class="col-md-2">
                    {{-- <img src="{{asset('storage/editors/'.$editor->editor_image)}}" style="width:50%;"> --}}
                    <img src="{{asset(Storage::disk('local')->url($editor->editor_image))}}" style="width:100%;">
                  </div>
                  <div class="col-md-8">
                    <div>Organization : {{$editor->organization}}</div>
                    <div>Department : {{$editor->department}}</div>
                    <div>Country : {{$editor->country->name}}</div>
                    <div>Phone : {{$editor->phone}}</div>
                    <div>Email : {{$editor->email}}</div>
                    <div>Created : {{$editor->created_at->diffForHumans()}}</div>
                  </div>
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