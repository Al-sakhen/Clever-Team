@include('header')
<!-- ======= Contact Section ======= -->
<div class="mb-5"></div>
<section id="contact" class="contact flex-column min-vh-100 ">
    <div class="container " data-aos="fade-up">

        <div class="section-title">
            <h2>تواصل</h2>
            <h3><span>تواصل معنا</span></h3>
            <p>لأي استفسار او لتكن جزءً من الفريق تواصل معنا عبر الفورم التالي ، نتطلّع إلى التعاون معًا .</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-4">
                <div class="info-box mb-4">
                    <i class="bx bx-map"></i>
                    <h3>عنواننا</h3>
                    <p>اربد, الزرقاء</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="info-box  mb-4">
                    <i class="bx bx-envelope"></i>
                    <h3>البريد الإلكتروني</h3>
                    <p>info@cleverteam.com</p>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="info-box  mb-4">
                    <i class="bx bx-phone-call"></i>
                    <h3>الهاتف الخلوي</h3>
                    <p>059999999</p>
                </div>
            </div>

        </div>

        <div class="row " data-aos="fade-up" data-aos-delay="100">

            <!-- <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
        </div> -->

            <div class="col-lg-12  ">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="اسمك" required>
                        </div>
                        <div class="col form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="البريد الإلكتروني" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="الموضوع" required>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" placeholder="الرسالة" required></textarea>
                    </div>
                    <div class="my-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">إرسال الرسالة</button></div>
                </form>
            </div>

        </div>

    </div>
</section><!-- End Contact Section -->
</main>
@include('footer')
