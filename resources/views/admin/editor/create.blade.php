@extends('admin.layouts.main')

@section('content')

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable">

            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-body">
                            <form role="form">
                                <div class="form-group">
                                    <label>Title</label>
                                    <select class="form-control select2" style="width: 100%;">
                                        <option selected="disabled">Select Title</option>
                                        <option>Engr.</option>
                                        <option >Dr.</option>
                                        <option>Prof.</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="surname">Surname</label>
                                    <input type="email" class="form-control" id="surname" name="surname"
                                        placeholder="Enter Surname">
                                </div>
                                <div class="form-group">
                                    <label for="firstname">First Name</label>
                                    <input type="email" class="form-control" id="firstname" name="firstname"
                                        placeholder="Enter First Name">
                                </div>
                                <div class="form-group">
                                    <label for="othername">Other Name</label>
                                    <input type="email" class="form-control" id="othername" name="othername"
                                        placeholder="Enter Other Name">
                                </div>
                                <div class="form-group">
                                    <label for="organization">Organization</label>
                                    <input type="email" class="form-control" id="organization" name="organization"
                                        placeholder="Enter Organization e.g. Akanu Ibiam Federal Poly. Unwana">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                        placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="editor_image">File input</label>
                                    <input type="file" id="editor_image" name="editor_image">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>

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