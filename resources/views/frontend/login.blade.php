@extends('frontend.master')
@section('home')
    <section class="our-compare pt60 pb60">
        <img src="{{ ('asset/images/icon/login-page-icon.svg') }}"
        style="padding-bottom: 140px;" alt="" class="login-bg-icon wow fadeInLeft" data-wow-delay="300ms">
        <div class="container">
            <div class="row wow fadeInRight" data-wow-delay="300ms">
                <div class="col-lg-6">
                    <div class="log-reg-form signup-modal form-style1 bgc-white p50 p30-sm default-box-shadow2 bdrs12">
                        <div class="text-center mb40">
                            <h2>Giriş</h2>
                        </div>
                        <form action="{{ route('login') }}" method="POST" id="loginForm">
                            @csrf
                            <div class="mb25">
                                <label class="form-label fw600 dark-color">E-Posta</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="E-posta adresiniz">
                            </div>
                            <div class="mb15">
                                <label class="form-label fw600 dark-color">Şifre</label>
                                <input type="password" name="password" id="password" class="form-control" placeholder="Şifreniz">
                            </div>
                            <div class="checkbox-style1 d-block d-sm-flex align-items-center justify-content-between mb10">
                                <label class="custom_checkbox fz14 ff-heading">Beni hatırla
                                    <input type="checkbox" checked="checked">
                                    <span class="checkmark"></span>
                                </label>
                                <a class="fz14 ff-heading" href="#">Şifrenizi mi unuttunuz?</a>
                            </div>
                            <div class="d-grid mb20">
                                <button class="ud-btn btn-thm" type="submit">Giriş
                                    <i class="fal fa-arrow-right-long"></i>
                                </button>
                            </div>
                        </form>
                        <div class="hr_content mb20">
                            <hr><span class="hr_top_text">VEYA</span>
                        </div>
                        <div class="d-grid mb10">
                            <button class="ud-btn btn-white fw400" type="button"><i class="fab fa-google"></i>
                                Continue Google</button>
                        </div>
                        <div class="d-grid mb10">
                            <button class="ud-btn btn-fb fw400" type="button"><i class="fab fa-facebook-f"></i> Continue
                                Facebook</button>
                        </div>
                        <p class="dark-color text-center mb0 mt10">Hesabınız yok mu? <a class="dark-color fw600"
                                href="{{ route('register') }}">Hesap Oluştur.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
