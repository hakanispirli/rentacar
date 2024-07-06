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
                                aria-selected="true">S.S.S. Bilgileri Düzenle</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-item1" role="tabpanel"
                            aria-labelledby="nav-item1-tab">
                            <div class="ps-widget bgc-white bdrs12 p30 overflow-hidden position-relative">
                                <form class="form-style1" action="{{ route('admin.faq.duzenle.action') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $faq->id }}">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="mb20">
                                                <label class="heading-color ff-heading fw600 mb10">S.S.S. Başlığı</label>
                                                <input type="text" name="faq_baslik" class="form-control"
                                                    value="{{ $faq->faq_baslik }}">
                                            </div>
                                        </div>

                                        <div class="col-sm-12">
                                            <div class="mb20">
                                                <label class="heading-color ff-heading fw600 mb10">S.S.S. Açıklama</label>
                                                <textarea type="text" name="faq_aciklama" class="form-control" rows="10" style="height: 200px;">{{ $faq->faq_aciklama }}</textarea>
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
