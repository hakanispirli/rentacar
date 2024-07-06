@extends('backend.admin_master')
@section('adminDashboard')
<div class="row align-items-center pb40">
    <div class="col-xxl-3">
        <div class="dashboard_title_area">
            <h2>Tüm Blog Yazıları</h2>
            <p class="text">Blog yazısı yönetim paneli.</p>
        </div>
    </div>
    <div class="col-xxl-9">
        <div class="dashboard_search_meta d-md-flex align-items-center justify-content-xxl-end">
            <a href="{{ route('admin.blog.ekle') }}" class="ud-btn btn-thm">Yeni Blog Yazısı Ekle +</a>
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
                                <th scope="col">Blog Görsel</th>
                                <th scope="col">Blog Başlık</th>
                                <th scope="col">Blog Yayın Tarihi</th>
                                <th scope="col">İşlem</th>
                            </tr>
                        </thead>
                        <tbody class="t-body">
                            @foreach ($blog as $item)
                                <tr>
                                    <th scope="row">
                                        <div class="listing-style1 dashboard-style d-xxl-flex align-items-center mb-0">
                                            <div class="list-thumb">
                                                <img class="w-100" src="{{ asset($item->blog_gorsel) }}" alt="">
                                            </div>
                                        </div>
                                    </th>
                                    <td class="vam">
                                        {{ $item->blog_baslik }}
                                    </td>
                                    <td class="vam">
                                        {{ $item->created_at }}
                                    </td>
                                    <td class="vam">
                                        <div class="d-flex">
                                            <a href="{{ route('admin.blog.duzenle', $item->id) }}" class="icon"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Düzenle"><span
                                                    class="fas fa-pen fa"></span></a>
                                            <a href="{{ route('admin.blog.sil', $item->id) }}" class="icon" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Sil"><span
                                                    class="flaticon-bin"></span></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mbp_pagination text-center mt30">
                        {{ $blog->links('vendor.pagination.custom') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
