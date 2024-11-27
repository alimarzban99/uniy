<!DOCTYPE html>
<html class="no-js" lang="fa">
@include('client.layouts.navbar',['title' => 'تماس باما'])

@include('client.layouts.breadcrumb',['title' => 'تماس باما'])

<!-- Start Contact Section -->
<section class="section-padding">
    <div class="container rtl">
        <div class="row">
            <div class="col-lg-8 align-self-center">
                <div class="contact-form">
                    <h2>در تماس باشید</h2>
                    <form id="contact-form" action="https://preetheme.com/html/fruits/mail.php" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-input">
                                    <input type="text" name="name" placeholder="نام و نام خانوادگی">
                                    <i class="fas fa-user"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input">
                                    <input type="email" name="email" placeholder="ایمیل">
                                    <i class="far fa-envelope"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input">
                                    <input type="text" name="phone" placeholder="موبایل">
                                    <i class="fas fa-mobile-alt"></i>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-input">
                                    <input type="text" name="subject" placeholder="موضوعات">
                                    <i class="fas fa-file-alt"></i>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single-input">
                                    <textarea name="message" placeholder="متن" spellcheck="false"></textarea>
                                    <i class="fas fa-pen"></i>
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="button-1">ارسال</button>
                            </div>
                        </div>
                    </form>
                    <p class="ajax-response"></p>
                </div>
            </div>
            <div class="col-lg-4 align-self-center">
                <div class="contact-form-info" style="background-image:url('{{asset('assets/img/contact.jpg')}}');">
                    <h2>در تماس با ما دریغ نکنید</h2>
                    <div class="contact-info-list">
                        <div class="item mb-20">
                            <div class="icon">
                                <i class="fas fa-home"></i>
                            </div>
                            <div class="content">
                                <h4>مکان ها</h4>
                                <p>تهران، تجریش، پاساژ ارگ طبقه دوم واحد 122</p>
                            </div>
                        </div>
                        <div class="item mb-20">
                            <div class="icon">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="content">
                                <h4>ارسال یک ایمیل</h4>
                                <p>support@example.com</p>
                                <p>example@gmail.com </p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="content">
                                <h4>تماس باما</h4>
                                <p> (021)345578</p>
                                <p>09129354776 </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Section -->

@include('client.layouts.footer')

</html>
