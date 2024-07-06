@extends('frontend.master')
@section('home')
    {{-- Ek Hizmetler Modal --}}
    <div class="signup-modal">
        <div class="modal fade" id="gencSurucu" aria-hidden="true" aria-labelledby="gencSurucu" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="gencSurucu">Genç Sürücü</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="ui-content">
                            <p class="mb25 ff-heading">
                                19-21 yaş aralığında ve 1 yıllık ehliyet sahibi olan sürücüler genç sürücü olarak kabul
                                edilir.<br />
                                Genç Sürücü paketi içinde Süper Mini Hasar Güvencesi bulunmaktadır ve aşağıdaki Genç Sürücü
                                fiyatına dahildir.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="signup-modal">
        <div class="modal fade" id="ekSurucu" aria-hidden="true" aria-labelledby="ekSurucu" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ekSurucu">Ek Sürücü</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="ui-content">
                            <p class="mb25 ff-heading">
                                Aracın, kiralayan şahıs dışındaki kişi ve/veya kişilerce kullanılabilmesini sağlamaktadır.
                                Araç teslimi için ek sürücünün; ana sürücü ile birlikte ofiste bulunması gereklidir.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="signup-modal">
        <div class="modal fade" id="cocukKoltugu" aria-hidden="true" aria-labelledby="cocukKoltugu" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="cocukKoltugu">Çocuk Koltuğu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="ui-content">
                            <p class="mb25 ff-heading">
                                Belirli bir yaş ve kilo altındaki bebeklerin ve çocukların araç içerisinde yolculukları
                                sırasında bebek/çocuk oto koltuğu kullanılması zorunludur.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="pt60 pb90 bgc-f7">
        <div class="container">
            <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
                <ul class="rent-bar">
                    <li class="active">
                        <span class="title fz17">Ek Özellikler</span>
                    </li>
                    <li>
                        <span class="title fz17">Güvence Paketleri</span>
                    </li>
                    <li>
                        <span class="title fz17">Ödeme Bilgileri</span>
                    </li>
                </ul>
            </div>
            <form id="ekOzelliklerForm">
                @csrf
                <input type="hidden" name="arac_id" value="{{ $arac->id }}">
                <input type="hidden" id="genc_surucu_fiyat" name="genc_surucu_fiyat" value="{{ $genc_surucu }}">
                <input type="hidden" id="ek_surucu_fiyat" name="ek_surucu_fiyat" value="{{ $ek_surucu }}">
                <input type="hidden" id="cocuk_koltugu_fiyat" name="cocuk_koltugu_fiyat" value="{{ $cocuk_koltugu }}">
                <div class="row wow fadeInUp">
                    <div class="col-lg-8">
                        <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
                            <div class="row">
                                <div class="col-md-6 col-xl-4">
                                    <div class="d-flex justify-content-between">
                                        <div class="pd-list">
                                            <img src="{{ asset($arac->arac_gorsel) }}" alt="Araç Görseli">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-4 offset-xl-2">
                                    <h4 class="title fz17 mb30 mt30">{{ $arac->arac_adi }} <br /> ({{ $kiralamaGunSayisi }} Gün)
                                    </h4>
                                    <div class="d-flex justify-content-between">
                                        <div class="pd-list">
                                            <p class="fw600 mb10 ff-heading dark-color">Alış Tarihi</p>
                                            <p class="fw600 mb10 ff-heading dark-color">Alış Saati</p>
                                            <p class="fw600 mb10 ff-heading dark-color">Teslim Tarihi</p>
                                            <p class="fw600 mb10 ff-heading dark-color">Teslim Saati</p>
                                        </div>

                                        <div class="pd-list">
                                            <p class="text mb10">{{ \Carbon\Carbon::parse($rezervasyon['alis_tarihi'])->locale('tr_TR')->isoFormat('D MMMM YYYY') }}</p>
                                            <p class="text mb10">{{ $rezervasyon['alis_saati'] }}</p>
                                            <p class="text mb10">{{ \Carbon\Carbon::parse($rezervasyon['teslim_tarihi'])->locale('tr_TR')->isoFormat('D MMMM YYYY') }}</p>
                                            <p class="text mb10">{{ $rezervasyon['teslim_saati'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
                            <h4 class="title fz17 mb30">Ek Hizmetler</h4>
                            <hr class="mb-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="walkscore d-sm-flex align-items-center justify-content-between mb20">
                                        <div class="d-flex align-items-center">
                                            <img class="mr15 mb10-sm" src="{{ asset('asset/images/icon/young-driver.png') }}">
                                            <div class="details">
                                                <p class="dark-color fw600 mb-2">
                                                    <a href="#gencSurucu" data-bs-toggle="modal">
                                                        Genç Sürücü <i class="fa-regular fa-circle-question"></i>
                                                    </a>
                                                </p>
                                                <p class="text mb-0">Toplam Fiyat ({{ $kiralamaGunSayisi }} Gün):
                                                    <span id="gencSurucuFiyat" style="font-weight:bold; color:#EE4C34;">
                                                        {{ $genc_surucu > 0 ? $genc_surucu . ' TL' : '' }}
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="quantity">
                                            <button class="minus" aria-label="Decrease">&minus;</button>
                                            <input type="number" id="genc_surucu_sayisi" class="input-box" value="0"
                                                min="0" max="3" onchange="updateTotalPrice()">
                                            <button class="plus" aria-label="Increase">&plus;</button>
                                        </div>
                                    </div>
                                    <div class="walkscore d-sm-flex align-items-center justify-content-between mb20">
                                        <div class="d-flex align-items-center">
                                            <img class="mr15 mb10-sm" src="{{ asset('asset/images/icon/car-seat.png') }}">
                                            <div class="details">
                                                <p class="dark-color fw600 mb-2">
                                                    <a href="#ekSurucu" data-bs-toggle="modal">
                                                        Ek Sürücü <i class="fa-regular fa-circle-question"></i>
                                                    </a>
                                                </p>
                                                <p class="text mb-0">Toplam Fiyat ({{ $kiralamaGunSayisi }} Gün):
                                                    <span id="ekSurucuFiyat" style="font-weight:bold; color:#EE4C34;">
                                                        {{ $ek_surucu > 0 ? $ek_surucu . ' TL' : '' }}
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="quantity">
                                            <button class="minus" aria-label="Decrease">&minus;</button>
                                            <input type="number" id="ek_surucu_sayisi" class="input-box" value="0"
                                                min="0" max="3" onchange="updateTotalPrice()">
                                            <button class="plus" aria-label="Increase">&plus;</button>
                                        </div>
                                    </div>
                                    <div class="walkscore d-sm-flex align-items-center justify-content-between mb20">
                                        <div class="d-flex align-items-center">
                                            <img class="mr15 mb10-sm" src="{{ asset('asset/images/icon/baby-seat.png') }}">
                                            <div class="details">
                                                <p class="dark-color fw600 mb-2">
                                                    <a href="#cocukKoltugu" data-bs-toggle="modal">
                                                        Çocuk Koltuğu <i class="fa-regular fa-circle-question"></i>
                                                    </a>
                                                </p>
                                                <p class="text mb-0">Toplam Fiyat ({{ $kiralamaGunSayisi }} Gün):
                                                    <span id="cocukKoltuguFiyat" style="font-weight:bold; color:#EE4C34;">
                                                        {{ $cocuk_koltugu > 0 ? $cocuk_koltugu . ' TL' : '' }}
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="quantity">
                                            <button class="minus" aria-label="Decrease">&minus;</button>
                                            <input type="number" id="cocuk_koltugu_sayisi" class="input-box" value="0"
                                                min="0" max="2" onchange="updateTotalPrice()">
                                            <button class="plus" aria-label="Increase">&plus;</button>
                                        </div>
                                    </div>
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
                                        <p class="fw600 mb10 ff-heading dark-color" id="gencSurucuLabel">Genç Sürücü</p>
                                        <p class="fw600 mb10 ff-heading dark-color" id="ekSurucuLabel">Ek Sürücü</p>
                                        <p class="fw600 mb10 ff-heading dark-color" id="cocukKoltuguLabel">Çocuk Koltuğu</p>
                                    </div>
                                    <div class="pd-list">
                                        <p class="text mb10">{{ $price }} TL</p>
                                        <p class="text mb10" id="gencSurucuOzet">
                                            {{ $genc_surucu > 0 ? $genc_surucu . ' TL' : '' }}
                                        </p>
                                        <p class="text mb10" id="ekSurucuOzet">
                                            {{ $ek_surucu > 0 ? $ek_surucu . ' TL' : '' }}
                                        </p>
                                        <p class="text mb10" id="cocukKoltuguOzet">
                                            {{ $cocuk_koltugu > 0 ? $cocuk_koltugu . ' TL' : '' }}
                                        </p>
                                    </div>
                                </div>
                                <hr class="mt-3 mb-3">
                                <div class="d-flex justify-content-between">
                                    <div class="pd-list">
                                        <h6 class="title fz17">Toplam Tutar</h6>
                                    </div>
                                    <div class="pd-list">
                                        <p class="text mb10" style="font-size: 18px; font-weight: bold; color:#EE4C34;">
                                            <span id="totalPrice">{{ $price }} TL</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-12 mt10">
                                    <div class="d-grid">
                                        <input type="hidden" name="total_price" id="total_price" value="{{ $price }}">
                                        <button type="button" class="ud-btn btn-thm" onclick="submitForm(event)">
                                            Devam Et <i class="fal fa-arrow-right-long"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <script>
        function submitForm(event) {
            event.preventDefault();

            const formData = new FormData(document.getElementById('ekOzelliklerForm'));
            const data = {};
            formData.forEach((value, key) => {
                data[key] = value;
            });

            fetch('{{ route('postEkOzellikler') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const aracId = data.arac_id;
                    window.location.href = '{{ url('/guvence-paketleri') }}' + '?arac_id=' + aracId;
                } else {
                    console.error('Error:', data.message);
                }
            })
            .catch((error) => {
                console.error('Error:', error);
            });
        }

        document.addEventListener('DOMContentLoaded', (event) => {
            document.querySelectorAll('.input-box').forEach(input => {
                input.addEventListener('change', updateTotalPrice);
            });

            document.querySelectorAll('.minus').forEach(button => {
                button.addEventListener('click', function() {
                    let input = this.nextElementSibling;
                    if (input.value > 0) {
                        input.value = parseInt(input.value) - 1;
                        updateTotalPrice();
                    }
                });
            });

            document.querySelectorAll('.plus').forEach(button => {
                button.addEventListener('click', function(event) {
                    event.preventDefault();
                    let input = this.previousElementSibling;
                    input.value = parseInt(input.value) + 1;
                    updateTotalPrice();
                });
            });

            updateTotalPrice();
        });

        function updateTotalPrice() {
            let gencSurucuSayisi = parseInt(document.getElementById('genc_surucu_sayisi').value) || 0;
            let ekSurucuSayisi = parseInt(document.getElementById('ek_surucu_sayisi').value) || 0;
            let cocukKoltuguSayisi = parseInt(document.getElementById('cocuk_koltugu_sayisi').value) || 0;

            let gencSurucuFiyat = {{ $genc_surucu }} * gencSurucuSayisi;
            let ekSurucuFiyat = {{ $ek_surucu }} * ekSurucuSayisi;
            let cocukKoltuguFiyat = {{ $cocuk_koltugu }} * cocukKoltuguSayisi;

            document.getElementById('gencSurucuOzet').textContent = gencSurucuFiyat + ' TL';
            document.getElementById('ekSurucuOzet').textContent = ekSurucuFiyat + ' TL';
            document.getElementById('cocukKoltuguOzet').textContent = cocukKoltuguFiyat + ' TL';

            let totalPrice = {{ $price }} + gencSurucuFiyat + ekSurucuFiyat + cocukKoltuguFiyat;
            document.getElementById('totalPrice').textContent = totalPrice + ' TL';

            document.getElementById('gencSurucuLabel').style.display = gencSurucuSayisi > 0 ? 'block' : 'none';
            document.getElementById('gencSurucuOzet').style.display = gencSurucuSayisi > 0 ? 'block' : 'none';

            document.getElementById('ekSurucuLabel').style.display = ekSurucuSayisi > 0 ? 'block' : 'none';
            document.getElementById('ekSurucuOzet').style.display = ekSurucuSayisi > 0 ? 'block' : 'none';

            document.getElementById('cocukKoltuguLabel').style.display = cocukKoltuguSayisi > 0 ? 'block' : 'none';
            document.getElementById('cocukKoltuguOzet').style.display = cocukKoltuguSayisi > 0 ? 'block' : 'none';

            document.getElementById('total_price').value = totalPrice;
        }
    </script>
@endsection
