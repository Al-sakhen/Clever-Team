@include('header')

<!-- End Header -->
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <h1>أهلاً بكم في <span class="shadow1">كليفير تيم</span></h1>
        <h2>فريق عمل طلابي لتوفير الكورسات والمصادر للتسهيل على الطلاب!</h2>
        <div class="d-flex">
            <a href="#services" class="btn-get-started scrollto"> ابدأ الآن</a>
            <a href="#####" class="glightbox btn-watch-video"><i class="bi bi-play-circle"> </i><span> الفيديو التعريفي </span></a>
        </div>
    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4 class="title">كورسات</h4>
                        <p class="description">نوفر لكم أفضل المصادر التعليمية لمساعدتك في الدراسة</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon"><i class="bx bx-file"></i></div>
                        <h4 class="title"><a href="">بنك اسئلة</a></h4>
                        <p class="description">نوفر لك العديد من الاسئلة للسنوات السابقة وبعض من الاسئلة المتوقعة والتدريبية</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon"><i class="bx bx-tachometer"></i></div>
                        <h4 class="title"><a href="">نصائح دراسية</a></h4>
                        <p class="description">نصائح دراسية لكيفية دراسة المواد والحصول على اعلى علامة مقدمة من اكفئ الطلاب</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon"><i class="bx bx-world"></i></div>
                        <h4 class="title"><a href="">ملخصات</a></h4>
                        <p class="description">ملخصات دراسية لحل مشاكل قبل الامتحان والتسهيل لملمة المادة.</p>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Years Section ======= -->

    <section id="services" class="services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>السنوات الدراسية</h2>
                <h3>اختَر السنة الدراسية <span>لمساعدتك!</span></h3>
                <p>يوجد العديد من المواد ومرتبة ومصنفة حسب السنوات الدراسية وهنالك المواد المشتركة بين العديد من التخصصات!</p>
            </div>

            <div class="row">
                @foreach (session()->get('years') as $d)
                <div class="col-lg-3 col-md-6 mt-4 mt-md-0 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box">
                        <div class="icon"><i class="bx bxl-dribbble"></i></div>
                        <h4><a href="{{url('years/'.$d->id)}}">{{$d->name}}</a></h4>
                        <p>{{$d->description}}</p>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
    </section><!-- End Years Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>من نحن؟</h2>
                <h3>تعرّف أكثر <span>من نحن!</span></h3>
                <p>مجموعة من الشباب المتطوعون لمساعدة اكبر فئة طلابية لتسهيل المواد الدراسية عليهم.</p>
            </div>


            <div class="row">
                <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <img src="{{asset('assets/img/book-lovers.svg')}}" class="img-fluid w-75" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <h3> فريق أكاديمي خدماتي على مستوى جامعة البلقاء التطبيقية!</h3>
                    <p class="fst-italic">
                    </p>
                    <ul>
                        <li>
                            <i class="bx bx-store-alt"></i>
                            <div>
                                <h5>نوفر للطلبة ما يحتاجونه من اسئلة وملخصات ودوسيات وامتحانات بأفضل طريقة </h5>
                                <p>والعديد من الميزات المجانية تمامًا</p>
                            </div>
                        </li>
                        <li>
                            <i class="bx bx-images"></i>
                            <div>
                                <h5>العديد من المصادر العلمية والتعليمية </h5>
                                <p>افضل الطرق والاساليب التدريسية الحديثة لكل ما هو مناسب للطالب</p>
                            </div>
                        </li>
                    </ul>
                    <p class="text-center">
                        وهذه المبادرة تم إطلاقها إيمانًا بقوله تعالى :<br> <span class="fw-bold">{ يَرْفَعِ اللَّهُ الَّذِينَ آمَنُوا مِنْكُمْ وَ الَّذِينَ أُوتُوا الْعِلْمَ دَرَجَات}</span> <br>ونطمح لمساعدة العديد من الطلاب الطموحين في إرثاء مجتمعنا بالكفاءات والعلوم النافعة
                    </p>
                </div>
            </div>
        </div>
    </section><!-- End About Section -->


    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <span data-purecounter-start="0" data-purecounter-end="10" data-purecounter-duration="1" class="purecounter"></span>
                        <p>مصدر تعليمي!</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
                    <div class="count-box">
                        <i class="bi bi-journal-richtext"></i>
                        <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
                        <p>اسئلة!</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="bi bi-headset"></i>
                        <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                        <p>دوسيات!</p>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
                    <div class="count-box">
                        <i class="bi bi-people"></i>
                        <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                        <p>تفريغات!</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->



    <!-- ======= Clients Section ======= -->

    <div class="section-title">
        <h2>روابط مهمة</h2>
        <h3>روابط مهمة<span> تفيدك!</span></h3>
        <p>مجموعة من الروابط قد تفيدك في المستقبل!</p>
    </div>

    <section id="clients" class="clients section-bg">
        <div class="container" data-aos="zoom-in">

            <div class="row">


                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <a target="_blank" data-toggle="نظام التسجيل" title="نظام التسجيل" href="http://appserver.ajloun.bau.edu.jo/reg_new/index.jsp"><img src="https://image.flaticon.com/icons/png/512/1728/1728853.png" class="img-fluid" alt=""></a>
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <a target="_blank" data-toggle="نظام التسجيل" title="التعليم الألكتروني" href="http://s3.ebalqa.courses/najlounmoodle/"><img src="https://image.flaticon.com/icons/png/512/3652/3652196.png" class="img-fluid" alt=""></a>
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <a target="_blank" data-toggle="نظام التسجيل" title="حساب المعدل" href="https://app2.bau.edu.jo:7799/courses/index.jsp?param=1"><img src="https://image.flaticon.com/icons/png/512/2620/2620212.png" class="img-fluid" alt=""></a>
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <a target="_blank" data-toggle="نظام التسجيل" title="الخطة الدراسية" href="https://www.bau.edu.jo/Plans.aspx"><img src="https://image.flaticon.com/icons/png/512/1055/1055648.png" class="img-fluid" alt=""></a>
                </div>

                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <a target="_blank" data-toggle="نظام التسجيل" title="التقويم الجامعي" href="https://www.bau.edu.jo/bauar/Units/Reg/media/tagweem_2.pdf"><img src="https://image.flaticon.com/icons/png/512/3652/3652191.png" class="img-fluid" alt=""></a>
                </div>



            </div>

        </div>
    </section><!-- End Clients Section -->

    <!-- ======= Testimonials Section ======= -->
    <div class="section-title">
        <h2>الآراء</h2>
        <h3>بعض من آراء طلابنا <span>المتميزن!</span></h3>
        <p>يمكنك الحصول على العديد من الميزات والتسهيلات من خلال موقعنا الطلابي</p>
    </div>

    <section id="testimonials" class="testimonials mb-5">

        <div class="container" data-aos="zoom-in">


            <div class="testimonials-slider swiper-container" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{asset('assets/img/testimonials/mohammad.png')}}" class="testimonial-img" alt="">
                            <h3>Mohammed Alqudah</h3>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aliquam illo non assumenda dolore eaque ipsum, architecto veritatis obcaecati sunt! Dolores eos amet beatae expedita vero tempora molestias minima labore.                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{asset('assets/img/testimonials/abd.png')}}" class="testimonial-img" alt="">
                            <h3>Abdulkareem Aldeek</h3>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Labore, ab corrupti. Eaque neque earum voluptatibus at asperiores quaerat laboriosam cupiditate vero fugit ipsum eveniet laborum excepturi, ea nesciunt quam? Eum.                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{asset('assets/img/testimonials/ahmad.jpg')}}" class="testimonial-img" alt="">
                            <h3>Ahmad Alsakhen</h3>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas dolorum iure eius accusamus et dignissimos neque eligendi, fuga dolor suscipit fugit ullam, qui labore porro dolore magnam harum temporibus consectetur!                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->


                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>
    <!-- End Frequently Asked Questions Section -->


</main><!-- End #main -->


@include('footer')
