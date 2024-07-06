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
                            <h2>Kayıt</h2>
                        </div>
                        <form id="registerForm" action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="mb25">
                                <label class="form-label fw600 dark-color">Adınız ve Soyadınız</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Ad Soyad" required>
                            </div>
                            <div class="mb15">
                                <label class="form-label fw600 dark-color">E-Posta</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="E-posta adresiniz" required>
                            </div>
                            <div class="mb25">
                                <label class="form-label fw600 dark-color">Telefon</label>
                                <input id="phoneRegisterPage" name="phone" type="text" class="form-control phone-number-input" placeholder="(5xx) xxx xx xx" autocomplete="off" inputmode="text" required>
                            </div>
                            <div class="mb20">
                                <label class="form-label fw600 dark-color">Şifre</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="**********" required>
                            </div>
                            <div class="mb20">
                                <label class="form-label fw600 dark-color">Şifre Doğrula</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="**********" required>
                            </div>
                            <div class="mb20">
                                <label class="custom_checkbox">
                                    <a class="dark-color fw600" href="">Müşteri Aydınlatma Metni</a> 'nde belirtilen koşulları okudum ve kabul ediyorum.
                                    <input type="checkbox" id="terms1" name="terms1" required>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="mb20">
                                <label class="custom_checkbox">
                                    Verilerimin işlenmesi için <a class="dark-color fw600" href="">Açık Rıza Metni</a> 'nde belirtilen koşulları okudum ve kabul ediyorum.
                                    <input type="checkbox" id="terms2" name="terms2" required>
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            <div class="d-grid mb20">
                                <button class="ud-btn btn-thm" type="submit">Kayıt Oluştur <i class="fal fa-arrow-right-long"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
