
@include('dashboard/header')



<div class="content-wrapper">


    <!-- Main content -->
    <section class="content">
    <div class="container-fluid">
        <div class="row">
        <div class="col-12">
            <div class="card m-5">
                @include('sweetalert::alert')
                @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

            <div class="card-header">
                <h3 class="card-title">Years</h3>
            </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive ">

                <table class="table table-hover text-wrap pt-5">

                <thead >
                    <tr >
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Methods</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach (session()->get('years') as $c)
                    <tr>
                        <td>{{$c->id}}</td>
                        <td>{{$c->name}}</td>
                        <td>{{$c->description}}</td>
                        <td class="d-flex justify-content-around">
                        <a href="{{url('dashboard/year/updateyear/'. $c->id)}}" ><img style="width: 2.5rem" src="{{asset('assets/img/edit.svg')}}"  style=""/></a>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
                </table>
                </div>
</div>

        </div>
        </div>
    </div>
    </section>

</div>



@include('dashboard/footer')
