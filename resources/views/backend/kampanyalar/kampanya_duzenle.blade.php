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
                            aria-selected="true">Kampanya Düzenle</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-item1" role="tabpanel"
                        aria-labelledby="nav-item1-tab">
                        <div class="ps-widget bgc-white bdrs12 p30 overflow-hidden position-relative">
                            <form class="form-style1" action="{{ route('admin.kampanyalar.duzenle.action') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ $kampanyalar->id }}">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="mb20">
                                            <label class="heading-color ff-heading fw600 mb10">Kampanya Başlığı</label>
                                            <input type="text" name="kampanya_baslik" value="{{ $kampanyalar->kampanya_baslik }}" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div class="mb20">
                                            <label class="heading-color ff-heading fw600 mb10">Kampanya Açıklama</label>
                                            <textarea id="kampanyaDuzenle" name="kampanya_aciklama">{!! $kampanyalar->kampanya_aciklama !!}</textarea>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="upload-img position-relative overflow-hidden bdrs12 text-center mb30 px-2">
                                            <div class="icon">
                                                @if($kampanyalar->kampanya_gorsel)
                                                    <img src="{{ asset($kampanyalar->kampanya_gorsel) }}" alt="Kampanya Görseli"
                                                    style="width: 390px; height: 216px;">
                                                @else
                                                    <span class="flaticon-upload"></span>
                                                @endif
                                            </div>
                                            <h4 class="title fz17 mb10">Kampanya Görseli</h4>
                                            <p class="text mb25">
                                                Görsel, JPG, JPEG, PNG veya WEBP Formatında ve 1170x650 Boyutlarında Olmalıdır.
                                            </p>
                                            <input type="file" name="kampanya_gorsel" class="ud-btn btn-white">
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
<script>
    $(document).ready(function() {
       $('#kampanyaDuzenle').summernote({
           height: 200
       });
   });
</script>

@endsection
