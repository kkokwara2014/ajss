@extends('admin.layouts.main')

@section('content')

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-9 connectedSortable">

            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="panel">
                        <div class="panel-body">
                        <form action="{{ route('admin.update.editor',$editors->id) }}" method="POST" enctype="multipart/form-data" role="form">
                                {{ csrf_field() }}
                                {{method_field('PUT')}}
                                <div class="row">
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <select name="title" class="form-control select2" style="width: 100%;">
                                                <option selected="disabled">Select Title</option>
                                                <option>Engr.</option>
                                                <option>Dr.</option>
                                                <option>Prof.</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="surname">Surname</label>
                                            <input type="text" class="form-control" id="surname" name="surname"
                                                placeholder="Enter Surname" value="{{$editors->surname}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="firstname">First Name</label>
                                            <input type="text" class="form-control" id="firstname" name="firstname"
                                                placeholder="Enter First Name" value="{{$editors->firstname}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="othername">Other Name</label>
                                            <input type="text" class="form-control" id="othername" name="othername"
                                                placeholder="Enter Other Name" value="{{$editors->othername}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="organization">Organization</label>
                                            <input type="text" class="form-control" id="organization"
                                                name="organization" value="{{$editors->organization}}"
                                                placeholder="Enter Organization e.g. Akanu Ibiam Federal Poly. Unwana">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-lg-6">
                                        <div class="form-group">
                                            <label for="department">Department</label>
                                            <input type="text" class="form-control" id="Department" name="department"
                                                placeholder="Enter Department e.g. Computer Science"
                                                value="{{$editors->department}}">
                                        </div>
                                        <div class="form-group">
                                            <label>Country</label>
                                            <select name="country_id" class="form-control select2" style="width: 100%;">
                                                <option selected="disabled">Select Country</option>
                                                @foreach ($countries as $country)
                                                <option value="{{$country->id}}" @if(old('country_id')==$country->id)
                                                    {{ 'selected' }} @endif>{{$country->name}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="tel" class="form-control" id="phone" name="phone"
                                                placeholder="Enter phone e.g. 08038883919" maxlength="11"
                                                value="{{$editors->phone}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Enter Email Address" value="{{$editors->email}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="editor_image">Editor Image</label>
                                            <input type="file" id="editor_image" name="editor_image">
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary">Update Editor</button>
                                <a href="{{ route('admin.editor.all') }}" class="btn btn-danger"> Cancel</a>

                            </form>
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