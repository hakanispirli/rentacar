@extends('frontend.master')
@section('home')
    @include('frontend.include.hidden_sidebar')

    <section class="breadcumb-section bgc-f7">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-style1">
                        <h2 class="title">Rent It - Araçlar</h2>
                        <div class="breadcumb-list">
                            <a href="{{ route('index') }}">Anasayfa</a>
                            <a href="#">Araçlar</a>
                        </div>
                        <a href="" class="filter-btn-left mobile-filter-btn d-block d-lg-none">
                            <span class="flaticon-settings"></span>
                            Filtrele
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt0 pb90 bgc-f7">
        <div class="container">
            <div class="row gx-xl-5">
                <div class="col-lg-4 d-none d-lg-block">
                    <div class="list-sidebar-style1">
                        <div class="widget-wrapper">
                            <h6 class="list-title">Vites Tipi</h6>
                            <div class="checkbox-style1">
                                @foreach ($arac_vites as $vites)
                                    <label class="custom_checkbox">{{ $vites->arac_vites }}
                                        <input type="checkbox" class="filter-checkbox" data-filter="vites"
                                            value="{{ $vites->arac_vites }}">
                                        <span class="checkmark"></span>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                        <hr class="mb-4">
                        <div class="widget-wrapper">
                            <h6 class="list-title">Yakıt Tipi</h6>
                            <div class="checkbox-style1">
                                @foreach ($arac_yakit as $yakit)
                                    <label class="custom_checkbox">{{ $yakit->arac_yakit }}
                                        <input type="checkbox" class="filter-checkbox" data-filter="yakit"
                                            value="{{ $yakit->arac_yakit }}">
                                        <span class="checkmark"></span>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                        <hr class="mb-4">
                        <div class="widget-wrapper">
                            <h6 class="list-title">Araç Markası</h6>
                            <div class="checkbox-style1">
                                @foreach ($arac_markalari as $marka)
                                    <label class="custom_checkbox">{{ $marka->arac_marka }}
                                        <input type="checkbox" class="filter-checkbox" data-filter="marka"
                                            value="{{ $marka->arac_marka }}">
                                        <span class="checkmark"></span>
                                    </label>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row align-items-center mb20">
                        <div class="col-sm-6">
                            <div class="text-center text-sm-start">
                                <p class="pagination_page_count mb-0" id="resultCount">Toplam {{ count($araclar) }} sonuç gösteriliyor.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="page_control_shorting d-flex align-items-center justify-content-center justify-content-sm-end">
                                <div class="pcs_dropdown pr10"><span>Sırala</span>
                                    <select class="selectpicker show-tick" id="sortSelect">
                                        <option>Sırala</option>
                                        <option value="asc">Fiyat Artan</option>
                                        <option value="desc">Fiyat Azalan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt15">
                        <div class="col-lg-12">
                            <div id="filtered-vehicles">
                                @foreach ($araclar as $item)
                                    <div class="listing-style1 listing-type vehicle" data-vites="{{ $item->arac_vites }}" data-yakit="{{ $item->arac_yakit }}" data-marka="{{ $item->arac_marka }}">
                                        <div class="list-thumb flex-shrink-0">
                                            <img class="w-100" src="{{ asset($item->arac_gorsel) }}" alt="">
                                            <div class="list-price">{{ $item->arac_fiyat }} TL / <span>Günlük</span></div>
                                        </div>
                                        <div class="list-content flex-shrink-1">
                                            <h6 class="list-title"><span style="font-weight: bold;">{{ $item->arac_adi }}</span></h6>
                                            <p class="list-text">Anında Onay ve Ücretsiz İptal Seçeneği</p>
                                            <div class="list-meta d-flex align-items-center">
                                                <span class="fas fa-tachometer-alt"></span>{{ $item->arac_vites }}
                                                <span class="fas fa-gas-pump"></span>{{ $item->arac_yakit }}
                                                <span class="fas fa-user-friends"></span>{{ $item->arac_kapasite }}
                                            </div>
                                            <div class="list-meta d-flex align-items-center">
                                                <span class="fas fa-road"></span>{{ $item->arac_km_limiti }} KM Limiti
                                                <span class="fas fa-birthday-cake"></span>+{{ $item->arac_yas_siniri }} Yaş
                                                <span class="fas fa-piggy-bank"></span>{{ $item->arac_depozito }} TL Depozito
                                            </div>
                                            <hr class="mt-2 mb-2">
                                            <div class="list-meta d-flex justify-content-between align-items-center">
                                                <span class="for-what">Veya Benzeri Araç</span>
                                                <div class="d-flex align-content-end">
                                                    <a href="{{ route('ek-ozellikler', ['arac_id' => $item->id]) }}" class="ud-btn btn-thm ms-4">
                                                        Şimdi Kirala
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
       document.addEventListener('DOMContentLoaded', function() {
            const checkboxes = document.querySelectorAll('.filter-checkbox');
            const vehicles = document.querySelectorAll('.vehicle');
            const sortSelect = document.getElementById('sortSelect');
            const resultCount = document.getElementById('resultCount');
            const container = document.getElementById('filtered-vehicles');

            checkboxes.forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    filterVehicles();
                });
            });

            sortSelect.addEventListener('change', function() {
                filterVehicles();
            });

            function filterVehicles() {
                container.classList.add('car-fade-out');
                container.classList.remove('car-fade-in');

                setTimeout(() => {
                    let filters = {
                        vites: [],
                        yakit: [],
                        marka: []
                    };

                    checkboxes.forEach(checkbox => {
                        if (checkbox.checked) {
                            filters[checkbox.getAttribute('data-filter')].push(checkbox.value);
                        }
                    });

                    let sortOrder = sortSelect.value;

                    let vehicleArray = Array.from(vehicles);
                    let visibleVehicles = 0;
                    vehicleArray.forEach(vehicle => {
                        let vitesMatch = filters.vites.length === 0 || filters.vites.includes(vehicle
                            .getAttribute('data-vites'));
                        let yakitMatch = filters.yakit.length === 0 || filters.yakit.includes(vehicle
                            .getAttribute('data-yakit'));
                        let markaMatch = filters.marka.length === 0 || filters.marka.includes(vehicle
                            .getAttribute('data-marka'));

                        if (vitesMatch && yakitMatch && markaMatch) {
                            vehicle.style.display = '';
                            visibleVehicles++;
                        } else {
                            vehicle.style.display = 'none';
                        }
                    });

                    vehicleArray = vehicleArray.filter(vehicle => vehicle.style.display !== 'none');

                    vehicleArray.sort((a, b) => {
                        let priceA = parseInt(a.querySelector('.list-price').textContent.trim().split(' ')[0]);
                        let priceB = parseInt(b.querySelector('.list-price').textContent.trim().split(' ')[0]);
                        return sortOrder === 'asc' ? priceA - priceB : priceB - priceA;
                    });

                    container.innerHTML = '';
                    vehicleArray.forEach(vehicle => container.appendChild(vehicle));

                    resultCount.textContent = `Toplam ${visibleVehicles} sonuç gösteriliyor.`;

                    container.classList.remove('car-fade-out');
                    container.classList.add('car-fade-in');
                }, 500); // Simulate loading time
            }
        });
    </script>
@endsection
