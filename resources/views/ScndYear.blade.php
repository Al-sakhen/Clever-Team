
@include('header')
<!-- End Header -->

<main id="main" data-aos="fade-up" class="flex-column min-vh-100" >

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
<div class="container">
    <div class="d-flex justify-content-between align-items-right">
    <ol>
        <li><a href="{{url('/index')}}">الرئيسية</a></li>
        <li> مواد السنة الدراسية الثانية</li>
    </ol>
    <h2>العام الدراسي الثاني</h2>
    </div>
</div>
</section><!-- End Breadcrumbs -->



<section class="inner-page">
    <div class="container">
        <div class="col-lg-12">
            <div class="box-menu dmne-tab-inner text-center">
                <ul class="">
                    <li class="mixitup-control-active nav-link " data-filter=".university_mandatory"> جامعة اجباري</li>
                    <li  data-filter=".university_optional">جامعة اختياري</li>
                    <li  data-filter=".college_mandatory">كلية اجباري</li>
                    <li  data-filter=".major_mandatory">تخصص اجباري</li>
                    <li  data-filter=".major_optional">تخصص اختياري</li>
                    <li  data-filter=".support_materials">مواد مساندة</li>
                </ul>
            </div>
        </div>


        <div class="team-boxed box-mix">
            <div class="container">
                <div class="row people">

                    @foreach ($course as $c)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-3 float-left mix {{$c->course_type}}">
                        <div class="wt-categorycontent">
                            <figure><img src="{{asset('img/'. $c->image_path)}}" alt="image description"></figure>
                                <div class="wt-cattitle">
                                    <h3><a href="{{url('subject',['id'=>$c->id])}}">{{$c->name}}</a></h3>
                                </div>
                                <div class="wt-categoryslidup">
                                    <p>{{$c->description}}</p>
                                        <a href="{{url('subject',['id'=>$c->id])}}">Explore <i class="fa fa-arrow-right"></i></a>
                                </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
</main>
@include('footer')
