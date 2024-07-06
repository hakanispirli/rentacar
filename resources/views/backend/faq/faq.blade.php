@extends('backend.admin_master')
@section('adminDashboard')
    <div class="row align-items-center pb40">
        <div class="col-xxl-3">
            <div class="dashboard_title_area">
                <h2>S.S.S. Yönetimi</h2>
                <p class="text">Sıkça sorulan sorular sayfası yönetim paneli.</p>
            </div>
        </div>
        <div class="col-xxl-9">
            <div class="dashboard_search_meta d-md-flex align-items-center justify-content-xxl-end">
                <a href="{{ route('admin.faq.ekle') }}" class="ud-btn btn-thm">Yeni S.S.S. Ekle<i
                        class="fal fa-arrow-right-long"></i></a>
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
                                <th scope="col">S.S.S. Başlığı</th>
                                <th scope="col">İşlem</th>
                            </tr>
                        </thead>
                        <tbody class="t-body">
                            @foreach ($faq as $item)
                                <tr>
                                    <td class="vam">{{ $item->faq_baslik }}</td>
                                    <td class="vam">
                                        <div class="d-flex">
                                            <a href="{{ route('admin.faq.duzenle', $item->id) }}" class="icon"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Düzenle"><span
                                                    class="fas fa-pen fa"></span></a>
                                            <a href="{{ route('admin.faq.sil', $item->id) }}" class="icon" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Sil"><span
                                                    class="flaticon-bin"></span></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mbp_pagination text-center mt30">
                        {{ $faq->links('vendor.pagination.custom') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
