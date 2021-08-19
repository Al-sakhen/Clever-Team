@include('header')

<!-- End Header -->
<main id="main" data-aos="fade-up" class="flex-column min-vh-100">
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
    <div class="container">

        <div class="d-flex justify-content-between align-items-center">
        <ol>
            <li><a href="{{url('/index')}}"> الرئيسية </a></li>
            <li><a href="{{url('years/'.$year->id)}}"> مواد {{$year->name}}</a></li>
            <li>وصف المادة</li>
        </ol>
        @foreach ($courses as $c)
            <h2>{{$c->name}}</h2>
        @endforeach
        </div>

    </div>
    </section><!-- Breadcrumbs Section -->


    <!-- ======= Portfolio Details Section ======= -->
<section class="desc">


        <div class="col-lg-12">

            <div class="box-menu dmne-tab-inner text-center">
                <ul class="">
                    <li class="mixitup-control-active nav-link active" data-filter=".materials"> المواد</li>
                    <li  data-filter=".resources">ملخصات</li>
                    <li  data-filter=".testBank">اسئلة سنوات</li>
                    <li  data-filter=".books">الكتب</li>
                </ul>
            </div>
        </div>

    <div class="container box-mix">
        <div class="row">
            @foreach ($details as $d)
                        <div class="col-lg-3    col-md-4 mix {{$d->type}}">
                            <div class="materials">
                                <a href="{{url('download/'.$d->file_path)}}" class="card education">
                                <div class="circle">
                                    <img class="" src="{{asset('assets/img/svg/download-file1.png')}}" alt="" srcset="">
                                </div>
                                <p>{{$d->name}}</p>
                                </a>
                            </div>
                        </div>
            @endforeach

    </div>
</div>

</section>
</main>

@include('footer')
