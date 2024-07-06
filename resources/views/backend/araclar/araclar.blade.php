@extends('backend.admin_master')
@section('adminDashboard')
    <div class="row align-items-center pb40">
        <div class="col-xxl-3">
            <div class="dashboard_title_area">
                <h2>Kayıtlı Tüm Araçlar</h2>
                <p class="text">Kayıtlı araç yönetim paneli.</p>
            </div>
        </div>
        <div class="col-xxl-9">
            <div class="dashboard_search_meta d-md-flex align-items-center justify-content-xxl-end">
                <a href="#" class="ud-btn btn-thm mr10">Rezerve Araçlar</a>
                <a href="#" class="ud-btn btn-thm mr10">Bakımdaki Araçlar</a>
                <a href="{{ route('admin.araclar.ekle') }}" class="ud-btn btn-thm">Yeni Araç Ekle +</a>
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
                                <th scope="col">Araç Adı</th>
                                <th scope="col">Araç Yakıt</th>
                                <th scope="col">Araç Plaka</th>
                                <th scope="col">Araç Depozito</th>
                                <th scope="col">Araç Yayın Tarihi</th>
                                <th scope="col">Araç Durum</th>
                                <th scope="col">İşlem</th>
                            </tr>
                        </thead>
                        <tbody class="t-body">
                            @foreach ($araclar as $item)
                                <tr>
                                    <th scope="row">
                                        <div class="listing-style1 dashboard-style d-xxl-flex align-items-center mb-0">
                                            <div class="list-thumb">
                                                <img class="w-100" src="{{ asset($item->arac_gorsel) }}" alt="">
                                            </div>
                                            <div class="list-content py-0 p-0 mt-2 mt-xxl-0 ps-xxl-4">
                                                <p style="font-weight: bold;">{{ $item->arac_adi }}</p>
                                                <div class="list-price">
                                                    <p>
                                                        {{ $item->arac_fiyat }} TL/<span>Günlük</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </th>
                                    <td class="vam">
                                        {{ $item->arac_yakit }}
                                    </td>
                                    <td class="vam">
                                        {{ $item->arac_plaka }}
                                    </td>
                                    <td class="vam">
                                        {{ $item->arac_depozito }} TL
                                    </td>
                                    <td class="vam">
                                        {{ $item->created_at }}
                                    </td>
                                    <td class="vam">
                                        <label class="custom_checkbox">Aktif
                                            <input type="radio" name="arac_durum_{{ $item->id }}" value="0" class="arac-durum" data-arac-id="{{ $item->id }}" {{ $item->arac_durum == '0' ? 'checked' : '' }}>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="custom_checkbox">Rezerve
                                            <input type="radio" name="arac_durum_{{ $item->id }}" value="1" class="arac-durum" data-arac-id="{{ $item->id }}" {{ $item->arac_durum == '1' ? 'checked' : '' }}>
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="custom_checkbox">Bakımda
                                            <input type="radio" name="arac_durum_{{ $item->id }}" value="2" class="arac-durum" data-arac-id="{{ $item->id }}" {{ $item->arac_durum == '2' ? 'checked' : '' }}>
                                            <span class="checkmark"></span>
                                        </label>
                                    </td>
                                    <td class="vam">
                                        <div class="d-flex">
                                            <a href="{{ route('admin.araclar.duzenle', $item->id) }}" class="icon"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Düzenle"><span
                                                    class="fas fa-pen fa"></span></a>
                                            <a href="{{ route('admin.araclar.sil', $item->id) }}" class="icon"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Sil"><span
                                                    class="flaticon-bin"></span></a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mbp_pagination text-center mt30">
                        {{ $araclar->links('vendor.pagination.custom') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('input.arac-durum').on('change', function() {
                var aracId = $(this).data('arac-id');
                var aracDurum = $(this).val();

                $.ajax({
                    url: "{{ route('admin.araclar.durum') }}",
                    method: "post",
                    data: {
                        arac_id: aracId,
                        arac_durum: aracDurum,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function(response) {
                        if (response.status == 'success') {
                            toastr.success(response.message);
                        } else {
                            toastr.error(response.message);
                        }
                    },
                    error: function(xhr, status, error) {
                        toastr.error("Hata oluştu");
                    }
                });
            });
        });
    </script>

@endsection
