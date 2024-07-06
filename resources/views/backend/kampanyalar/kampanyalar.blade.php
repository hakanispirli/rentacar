@extends('backend.admin_master')
@section('adminDashboard')
    <div class="row align-items-center pb40">
        <div class="col-xxl-3">
            <div class="dashboard_title_area">
                <h2>Kampanyalar</h2>
                <p class="text">Kampanyalar ile ilgili olarak ekleme, düzenleme yapabilir veya silebilirsiniz!</p>
            </div>
        </div>
        <div class="col-xxl-9">
            <div class="dashboard_search_meta d-md-flex align-items-center justify-content-xxl-end">
                <a href="{{ route('admin.kampanyalar.ekle') }}" class="ud-btn btn-thm">Kampanya Ekle<i class="fal fa-arrow-right-long"></i></a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
                <div class="packages_table table-responsive">
                    <table class="table-style3 table at-savesearch">
                        <thead class="t-head">
                            <tr>
                                <th scope="col">Kampanya Görseli</th>
                                <th scope="col">Kampanya Başlığı</th>
                                <th scope="col">Yayın Tarihi</th>
                                <th scope="col">İşlem</th>
                            </tr>
                        </thead>
                        <tbody class="t-body">
                            @foreach ($kampanyalar as $item)
                                <tr>
                                    <td class="vam"><img src="{{ asset($item->kampanya_gorsel) }}" alt="" style="width: 150px; height:70px;"></td>
                                    <td class="vam">{{ $item->kampanya_baslik }}</td>
                                    <td class="vam"><span class="pending-style style1">{{ $item->created_at }}</span></td>
                                    <td class="vam">
                                        <div class="d-flex">
                                            <a href="{{ route('admin.kampanyalar.duzenle',$item->id) }}" class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Düzenle">
                                                <span class="fas fa-pen fa"></span>
                                            </a>
                                            <a href="{{ route('admin.kampanyalar.sil',$item->id) }}" class="icon" data-bs-toggle="tooltip" data-bs-placement="top" title="Sil">
                                                <span class="flaticon-bin"></span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
