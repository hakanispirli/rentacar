@extends('frontend.dashboard.dashboard_master')
@section('userDashboard')
<div class="row align-items-center pb40">
    <div class="col-lg-12">
        <div class="dashboard_title_area">
            <h2>Hesabım</h2>
            <p class="text">Hesap Ayarlarınızı Bu Bölümden Düzenleyebilirsiniz.</p>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-12">
        <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
            <div class="col-lg-12">
                <form class="form-style1" action="{{ route('profile.update') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-sm-6 col-xl-6">
                            <div class="mb20">
                                <label class="heading-color ff-heading fw600 mb10">Ad Soyad</label>
                                <input type="text" class="form-control" name="name" value="">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-6">
                            <div class="mb20">
                                <label class="heading-color ff-heading fw600 mb10">E-Posta</label>
                                <input type="email" class="form-control" name="email" value="">
                            </div>
                        </div>
                        <div class="col-sm-6 col-xl-6">
                            <div class="mb20">
                                <label class="heading-color ff-heading fw600 mb10">Telefon</label>
                                <input type="email" class="form-control" name="email" value="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="text-end">
                                <button class="ud-btn btn-dark" type="submit">
                                    Kaydet
                                    <i class="fal fa-arrow-right-long"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
            <h4 class="title fz17 mb30">Şifre Değişikliği</h4>
            <form class="form-style1" action="{{ route('profile.password') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-sm-6 col-xl-4">
                        <div class="mb20">
                            <label class="heading-color ff-heading fw600 mb10">Mevcut Şifre *</label>
                            <input class="form-control" id="old_password" type="password" name="old_password" placeholder="***********">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-xl-4">
                        <div class="mb20">
                            <label class="heading-color ff-heading fw600 mb10">Yeni Şifre *</label>
                            <input class="form-control" id="new_password" type="password" name="new_password">
                        </div>
                    </div>
                    <div class="col-sm-6 col-xl-4">
                        <div class="mb20">
                            <label class="heading-color ff-heading fw600 mb10">Yeni Şifre Doğrula *</label>
                            <input class="form-control" id="new_password_confirmation" type="password" name="new_password_confirmation">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="text-end">
                            <button class="ud-btn btn-dark" type="submit">
                                Kaydet
                                <i class="fal fa-arrow-right-long"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
