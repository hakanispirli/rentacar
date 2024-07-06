@extends('frontend.master')
@section('home')
    <section class="pt60 pb90 bgc-f7">
        <div class="container">
            <div class="row mb30 wow fadeInUp">
                <div class="col-lg-8">
                    <div class="single-property-content mb30-md">
                        <h2 class="sp-lg-title">Renault Clio</h2>
                        <div class="pd-meta mb15 d-md-flex align-items-center">
                            <p class="text fz15 mb-0 pr10">4834 N 10th St, Philadelphia, PA 19141
                            </p>
                        </div>
                        <div class="property-meta d-flex align-items-center">
                            <span class="ff-heading fz15 pr10">
                                <i class="far fa-clock pe-2"></i>
                                Çar, 19 Haz, 2024 10:00 - Cum, 21 Haz, 2024 10:00
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp">
                <div class="col-lg-8">
                    <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
                        <h4 class="title fz17 mb30">Sürücü Bilgileri</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <form class="form-style1 row">
                                    <div class="col-md-6">
                                        <div class="mb20">
                                            <label class="heading-color ff-heading fw600 mb10">Adınız *</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb20">
                                            <label class="heading-color ff-heading fw600 mb10">Soyadınız *</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb20">
                                            <label class="heading-color ff-heading fw600 mb10">T.C. Kimlik No *</label>
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb20">
                                            <label class="heading-color ff-heading fw600 mb10">Ehliyet No *</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb20">
                                            <label class="heading-color ff-heading fw600 mb10">Doğum Tarihi *</label>
                                            <input id="odemePageBirthDate" placeholder="GG/AA/YYYY" type="text"
                                                class="form-control birthdate-input" autocomplete="off" inputmode="text"
                                                maxlength="10">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb20">
                                            <label class="heading-color ff-heading fw600 mb10">Telefon *</label>
                                            <input id="odemePagePhone" placeholder="(5xx) xxx xx xx" type="text"
                                                class="form-control phone-number-input" autocomplete="off" inputmode="text"
                                                maxlength="15">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb20">
                                            <label class="heading-color ff-heading fw600 mb10">E-Posta *</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb20">
                                            <label class="heading-color ff-heading fw600 mb10">İl *</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="mb20">
                                            <label class="heading-color ff-heading fw600 mb10">İlçe *</label>
                                            <input type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb10">
                                            <label class="heading-color ff-heading fw600 mb10">Adres *</label>
                                            <textarea cols="20" rows="1"></textarea>
                                        </div>
                                    </div>
                                    <div
                                        class="checkbox-style1 d-block d-sm-flex align-items-center justify-content-between mb10">
                                        <label class="custom_checkbox fz14 ff-heading">
                                            Kiralama şartlarını okudum ve kabul ediyorum.
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="agen-personal-info position-relative bgc-white default-box-shadow2 bdrs12 p30 mb30">
                        <div class="widget-wrapper mb-0">
                            <h6 class="title fz17">Ödeme Bilgileri</h6>
                            <hr class="mt-3 mb-3">
                            <div class="d-flex justify-content-between">
                                <div class="pd-list">
                                    <p class="fw600 mb10 ff-heading dark-color">Günlük Fiyat</p>
                                    <p class="fw600 mb10 ff-heading dark-color">Ofis Telefon</p>
                                </div>
                                <div class="pd-list">
                                    <p class="text mb10">450,50 TL</p>
                                    <p class="text mb10">680,89 TL</p>
                                </div>
                            </div>
                            <hr class="mt-3 mb-3">
                            <div class="d-flex justify-content-between">
                                <div class="pd-list">
                                    <h6 class="title fz17">Toplam Tutar</h6>
                                </div>
                                <div class="pd-list">
                                    <p class="text mb10" style="font-size: 18px; font-weight: bold; color:#EE4C34;">450,50
                                        TL</p>
                                </div>
                            </div>
                            <div class="col-md-12 mt10">
                                <div class="d-grid">
                                    <a class="ud-btn btn-thm" href="#">Devam Et
                                        <i class="fal fa-arrow-right-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
