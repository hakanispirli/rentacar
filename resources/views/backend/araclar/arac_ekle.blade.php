@extends('backend.admin_master')
@section('adminDashboard')
    <div class="row">
        <div class="col-xl-12">
            <div class="ps-widget bgc-white bdrs12 default-box-shadow2 pt30 mb30 overflow-hidden position-relative">
                <div class="navtab-style1">
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab2" role="tablist">
                            <button class="nav-link active fw600 ms-3" id="nav-item1-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-item1" type="button" role="tab" aria-controls="nav-item1"
                                aria-selected="true">Araç Ekle</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-item1" role="tabpanel"
                            aria-labelledby="nav-item1-tab">
                            <div class="ps-widget bgc-white bdrs12 p30 overflow-hidden position-relative">
                                <h4 class="title fz17 mb30">Araç Bilgileri</h4>
                                <form id="aracForm" class="form-style1" action="{{ route('admin.araclar.ekle.action') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="mb20">
                                                <label class="heading-color ff-heading fw600 mb10">Araç Başlığı</label>
                                                <input type="text" name="arac_adi" placeholder="Örn: Renault Clio" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="mb20">
                                                <label class="heading-color ff-heading fw600 mb10">Araç Plaka (Sadece Yönetici Görebilir)</label>
                                                <input type="text" name="arac_plaka" placeholder="Örn: 34ABC34" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xl-4">
                                            <div class="mb20">
                                                <label class="heading-color ff-heading fw600 mb10">Araç Depozito</label>
                                                <input type="text" name="arac_depozito" placeholder="Örn: 3000" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xl-4">
                                            <div class="mb20">
                                                <label class="heading-color ff-heading fw600 mb10">Araç Koltuk</label>
                                                <input type="text" name="arac_kapasite" placeholder="Örn: 5" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xl-4">
                                            <div class="mb20">
                                                <label class="heading-color ff-heading fw600 mb10">Araç Yaş Sınırı</label>
                                                <input type="text" name="arac_yas_siniri" placeholder="Örn: 21" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xl-4">
                                            <div class="mb20">
                                                <label class="heading-color ff-heading fw600 mb10">Araç KM Limiti</label>
                                                <input type="text" name="arac_km_limiti" placeholder="Örn: 1000" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xl-4">
                                            <div class="mb30">
                                                <label class="heading-color ff-heading fw600 mb10">Araç Yakıt</label>
                                                <div class="bootselect-multiselect">
                                                    <div class="dropdown bootstrap-select">
                                                        <select class="selectpicker" name="arac_yakit" tabindex="null">
                                                            <option value="Benzin/Dizel">Benzin/Dizel</option>
                                                            <option value="Benzin">Benzin</option>
                                                            <option value="Dizel">Dizel</option>
                                                            <option value="Hybrid">Hybrid</option>
                                                            <option value="LPG">LPG</option>
                                                            <option value="Elektrik">Elektrik</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xl-4">
                                            <div class="mb30">
                                                <label class="heading-color ff-heading fw600 mb10">Araç Vites</label>
                                                <div class="bootselect-multiselect">
                                                    <div class="dropdown bootstrap-select">
                                                        <select class="selectpicker" name="arac_vites" tabindex="null">
                                                            <option value="Manuel">Manuel</option>
                                                            <option value="Otomatik">Otomatik</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xl-4">
                                            <div class="mb30">
                                                <label class="heading-color ff-heading fw600 mb10">Araç Sınıf</label>
                                                <div class="bootselect-multiselect">
                                                    <div class="dropdown bootstrap-select">
                                                        <select class="selectpicker" name="arac_sinif" tabindex="null">
                                                            <option value="Ekonomi">Ekonomi</option>
                                                            <option value="Orta">Orta</option>
                                                            <option value="Lüks">Lüks</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xl-4">
                                            <div class="mb20">
                                                <label class="heading-color ff-heading fw600 mb10">Araç Günlük Fiyat (TL)</label>
                                                <input type="text" name="arac_fiyat" placeholder="Örn: 1150" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xl-4">
                                            <div class="mb30">
                                                <label class="heading-color ff-heading fw600 mb10">Araç Marka</label>
                                                <div class="bootselect-multiselect">
                                                    <div class="dropdown bootstrap-select">
                                                        <select class="selectpicker" name="arac_marka" tabindex="null">
                                                            <option value="Alfa Romeo">Alfa Romeo</option>
                                                            <option value="Audi">Audi</option>
                                                            <option value="BMW">BMW</option>
                                                            <option value="Citroen">Citroen</option>
                                                            <option value="Dacia">Dacia</option>
                                                            <option value="Fiat">Fiat</option>
                                                            <option value="Ford">Ford</option>
                                                            <option value="Hyundai">Hyundai</option>
                                                            <option value="Kia">Kia</option>
                                                            <option value="MG">MG</option>
                                                            <option value="Mercedes-Benz">Mercedes-Benz</option>
                                                            <option value="Nissan">Nissan</option>
                                                            <option value="Opel">Opel</option>
                                                            <option value="Peugeot">Peugeot</option>
                                                            <option value="Renault">Renault</option>
                                                            <option value="Seat">Seat</option>
                                                            <option value="Skoda">Skoda</option>
                                                            <option value="Toyota">Toyota</option>
                                                            <option value="Volkswagen">Volkswagen</option>
                                                            <option value="Volvo">Volvo</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="upload-img position-relative overflow-hidden bdrs12 text-center mb30 px-2">
                                                <div class="icon mb30"><span class="flaticon-upload"></span></div>
                                                <h4 class="title fz17 mb10">Araç Görseli</h4>
                                                <p class="text mb25">
                                                    Görsel, JPG, PNG, JPEG veya WEBP Formatında ve 280x240 Boyutlarında Olmalıdır.
                                                </p>
                                                <input type="file" name="arac_gorsel" class="ud-btn btn-white">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="d-sm-flex justify-content-end">
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
                </div>
            </div>
        </div>
    </div>
@endsection
