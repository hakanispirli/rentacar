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
                                aria-selected="true">Paket Bilgileri Düzenle</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-item1" role="tabpanel"
                            aria-labelledby="nav-item1-tab">
                            <div class="ps-widget bgc-white bdrs12 p30 overflow-hidden position-relative">
                                <h4 class="title fz17 mb30">Paket Bilgileri</h4>
                                <form class="form-style1" action="{{ route('admin.paketler.action') }}"
                                    method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $paketler->id }}">
                                    <div class="row">
                                        <div class="col-sm-6 col-xl-4">
                                            <div class="mb20">
                                                <label class="heading-color ff-heading fw600 mb10">Mini Paket</label>
                                                <input type="text" name="mini_paket" class="form-control"
                                                    value="{{ $paketler->mini_paket }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xl-4">
                                            <div class="mb20">
                                                <label class="heading-color ff-heading fw600 mb10">Orta Paket</label>
                                                <input type="text" name="orta_paket" class="form-control"
                                                    value="{{ $paketler->orta_paket }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xl-4">
                                            <div class="mb20">
                                                <label class="heading-color ff-heading fw600 mb10">Tam Paket</label>
                                                <input type="text" name="tam_paket" class="form-control"
                                                    value="{{ $paketler->tam_paket }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xl-4">
                                            <div class="mb20">
                                                <label class="heading-color ff-heading fw600 mb10">
                                                    Genç Sürücü
                                                </label>
                                                <input type="text" name="genc_surucu" class="form-control"
                                                    value="{{ $paketler->genc_surucu }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xl-4">
                                            <div class="mb20">
                                                <label class="heading-color ff-heading fw600 mb10">Ek Sürücü</label>
                                                <input type="text" name="ek_surucu" class="form-control"
                                                    value="{{ $paketler->ek_surucu }}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-xl-4">
                                            <div class="mb20">
                                                <label class="heading-color ff-heading fw600 mb10">Çocuk Koltuğu</label>
                                                <input type="text" name="cocuk_koltugu" class="form-control"
                                                    value="{{ $paketler->cocuk_koltugu }}">
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
