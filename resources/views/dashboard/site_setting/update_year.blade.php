@include('dashboard/header')

<div class="container-fluid">

    <div class="content-wrapper">






        <section class="content">
            <div class="row">
            <div class="mx-auto col-6 m-4">
                <div class="card card-primary ">

                    <div class="card-header">
                        <h3 class="card-title">Years</h3>
                    </div>
                <form action="{{url('dashboard/year/postupdateyear')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @include('sweetalert::alert')
                    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">Year Name</label>
                            <input type="text" name="name" value="{{$year->name}}"  id="inputName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Year Description</label>
                            <input type="text" name="description" value="{{$year->description}}"  id="inputDescription" class="form-control">
                        </div>

                        <div class="">

                            <input type="submit" value="Update Course" class="btn btn-success float-left">
                            {{-- <a href="{{url('dashboard/FirstYear')}}" class="btn btn-secondary float-right">Show Courses</a> --}}
                            <input type="hidden" name="id" value="{{$year->id}}">

                        </div>

                    </div>

                </form>
                <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>

            </div>

        </section>
    </div>
</div>

@include('dashboard/footer');
