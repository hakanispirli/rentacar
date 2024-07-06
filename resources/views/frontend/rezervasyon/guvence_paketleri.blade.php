@extends('frontend.master')
@section('home')
    <div class="signup-modal">
        <div class="modal fade" id="miniPaket" aria-hidden="true" aria-labelledby="miniPaket" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="miniPaket">Kapsamlı Süper Mini Hasar Güvence Paketi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="ui-content">
                            <p class="mb25 ff-heading">
                                Rapor düzenlenmesi veya tutanak tutulması mümkün olmayan, tek taraflı hasar durumları için
                                müşteriye 5.500 TL'ye kadar beyanla onarım hakkı sunan hasar güvencesidir.
                            </p>
                            <p class="mb25 ff-heading">
                                Kaza haricinde oluşan lastik- cam – far – ayna hasarlarında polis/jandarma raporu ya da kaza
                                tespit tutanağı olmaksızın sürücünün geçerli yazılı beyanına istinaden aracın ön farları, ön
                                camı, yan aynaları ve arka stop lambalarının onarılmasıdır. LCFA ürünü kaporta hasarlarını
                                kapsamamaktadır.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="signup-modal">
        <div class="modal fade" id="ortaPaket" aria-hidden="true" aria-labelledby="ortaPaket" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="ortaPaket">Kapsamlı Orta Güvence Paketi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="ui-content">
                            <p class="mb25 ff-heading">
                                Trafik sigortası kapsamında 3. şahıslara ilişkin hasar limitini bu güvence ile 1 milyon
                                TL'ye kadar artırabilirsiniz.
                            </p>
                            <p class="mb25 ff-heading">
                                Rapor düzenlenmesi veya tutanak tutulması mümkün olmayan, tek taraflı hasar durumları için
                                müşteriye 3.000 TL'ye kadar beyanla onarım hakkı sunan hasar güvencesidir.
                            </p>
                            <p class="mb25 ff-heading">
                                Kaza haricinde oluşan lastik-cam-far- ayna hasarlarında polis/jandarma raporu ya da kaza
                                tespit tutanağı olmaksızın sürücünün geçerli yazılı beyanına istinaden aracın ön farları, ön
                                camı, yan aynaları ve arka stop lambalarını kapsayan hasar güvencesidir.
                            </p>
                            <p class="mb25 ff-heading">
                                Araç içerisindeki koltuk sayısına bağlı olarak, sürücü ve araç içerisindeki kişileri
                                kapsayan güvencedir.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="signup-modal">
        <div class="modal fade" id="tamPaket" aria-hidden="true" aria-labelledby="tamPaket" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="tamPaket">Kapsamlı Tam Güvence Paketi</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="ui-content">
                            <p class="mb25 ff-heading">
                                Trafik sigortası kapsamında 3. şahıslara ilişkin hasar limitini bu güvence ile 1.000.0000
                                TL'ye kadar artırabilirsiniz.
                            </p>
                            <p class="mb25 ff-heading">
                                Rapor düzenlenmesi veya tutanak tutulması mümkün olmayan, tek taraflı hasar durumları için
                                müşteriye 5.500 TL'ye kadar beyanla onarım hakkı sunan hasar güvencesidir.
                            </p>
                            <p class="mb25 ff-heading">
                                Kaza haricinde oluşan lastik-cam-far- ayna hasarlarında polis/jandarma raporu ya da kaza
                                tespit tutanağı olmaksızın sürücünün geçerli yazılı beyanına istinaden aracın ön farları, ön
                                camı, yan aynaları ve arka stop lambalarını kapsayan hasar güvencesidir.
                            </p>
                            <p class="mb25 ff-heading">
                                Araç içerisindeki koltuk sayısına bağlı olarak, sürücü ve araç içerisindeki kişileri
                                kapsayan güvencedir.
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
                    <li class="active">
                        <span class="title fz17">Güvence Paketleri</span>
                    </li>
                    <li>
                        <span class="title fz17">Ödeme Bilgileri</span>
                    </li>
                </ul>
            </div>
            <form action="{{ route('postGuvencePaketleri') }}" method="POST" id="guvencePaketleriForm">
                @csrf
                <input type="hidden" name="arac_id" value="{{ $arac->id }}">
                <input type="hidden" name="total_price" id="total_price" value="{{ $totalPrice }}">
                <div class="row wow fadeInUp">
                    <div class="col-lg-8">
                        <div
                            class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
                            <div class="row">
                                <div class="col-md-6 col-xl-4">
                                    <div class="d-flex justify-content-between">
                                        <div class="pd-list">
                                            <img src="{{ asset($arac->arac_gorsel) }}" alt="Araç Görseli">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xl-4 offset-xl-2">
                                    <h4 class="title fz17 mb30 mt30">{{ $arac->arac_adi }} <br /> ({{ $kiralamaGunSayisi }}
                                        Gün)
                                    </h4>
                                    <div class="d-flex justify-content-between">
                                        <div class="pd-list">
                                            <p class="fw600 mb10 ff-heading dark-color">Alış Tarihi</p>
                                            <p class="fw600 mb10 ff-heading dark-color">Alış Saati</p>
                                            <p class="fw600 mb10 ff-heading dark-color">Teslim Tarihi</p>
                                            <p class="fw600 mb10 ff-heading dark-color">Teslim Saati</p>
                                        </div>
                                        <div class="pd-list">
                                            <p class="text mb10">
                                                {{ $alisTarihi->locale('tr_TR')->isoFormat('D MMMM YYYY') }}
                                            </p>
                                            <p class="text mb10">{{ $rezervasyon['alis_saati'] }}</p>
                                            <p class="text mb10">
                                                {{ $teslimTarihi->locale('tr_TR')->isoFormat('D MMMM YYYY') }}
                                            </p>
                                            <p class="text mb10">{{ $rezervasyon['teslim_saati'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div
                            class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
                            <h4 class="title fz17 mb30">Güvence Paketleri</h4>
                            <hr class="mb-4">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="walkscore d-sm-flex align-items-center justify-content-between mb20">
                                        <div class="d-flex align-items-center">
                                            <div class="details">
                                                <p class="dark-color fw600 mb-2">
                                                    <a href="#miniPaket" data-bs-toggle="modal">
                                                        Kapsamlı Süper Mini Hasar Güvence Paketi <i
                                                            class="fa-regular fa-circle-question"></i>
                                                    </a>
                                                </p>
                                                <p class="text mb-0">Toplam Fiyat ({{ $kiralamaGunSayisi }}):
                                                    <span style="font-weight:bold; color:#EE4C34;">
                                                        {{ $mini_paket }} TL
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <a class="ud-btn btn-thm" href="#" id="mini_paket_ekle"
                                            onclick="togglePaket('mini_paket', {{ $mini_paket }}, 'ekle')">Ekle
                                            <i class="fa-solid fa-plus"></i>
                                        </a>
                                        <a class="ud-btn btn-thm" href="#" id="mini_paket_cikar"
                                            onclick="togglePaket('mini_paket', {{ $mini_paket }}, 'cikar')"
                                            style="display: none;">Çıkar
                                            <i class="fa-solid fa-minus"></i>
                                        </a>
                                        <input type="hidden" name="mini_paket" id="mini_paket" value="0">
                                    </div>
                                    <div class="walkscore d-sm-flex align-items-center justify-content-between mb20">
                                        <div class="d-flex align-items-center">
                                            <div class="details">
                                                <p class="dark-color fw600 mb-2">
                                                    <a href="#ortaPaket" data-bs-toggle="modal">
                                                        Kapsamlı Orta Güvence Paketi <i
                                                            class="fa-regular fa-circle-question"></i>
                                                    </a>
                                                </p>
                                                <p class="text mb-0">Toplam Fiyat ({{ $kiralamaGunSayisi }}):
                                                    <span style="font-weight:bold; color:#EE4C34;">
                                                        {{ $orta_paket }} TL
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <a class="ud-btn btn-thm" href="#" id="orta_paket_ekle"
                                            onclick="togglePaket('orta_paket', {{ $orta_paket }}, 'ekle')">Ekle
                                            <i class="fa-solid fa-plus"></i>
                                        </a>
                                        <a class="ud-btn btn-thm" href="#" id="orta_paket_cikar"
                                            onclick="togglePaket('orta_paket', {{ $orta_paket }}, 'cikar')"
                                            style="display: none;">Çıkar
                                            <i class="fa-solid fa-minus"></i>
                                        </a>
                                        <input type="hidden" name="orta_paket" id="orta_paket" value="0">
                                    </div>
                                    <div class="walkscore d-sm-flex align-items-center justify-content-between mb20">
                                        <div class="d-flex align-items-center">
                                            <div class="details">
                                                <p class="dark-color fw600 mb-2">
                                                    <a href="#tamPaket" data-bs-toggle="modal">
                                                        Kapsamlı Tam Güvence Paketi <i
                                                            class="fa-regular fa-circle-question"></i>
                                                    </a>
                                                </p>
                                                <p class="text mb-0">Toplam Fiyat ({{ $kiralamaGunSayisi }}):
                                                    <span style="font-weight:bold; color:#EE4C34;">
                                                        {{ $tam_paket }} TL
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <a class="ud-btn btn-thm" href="#" id="tam_paket_ekle"
                                            onclick="togglePaket('tam_paket', {{ $tam_paket }}, 'ekle')">Ekle
                                            <i class="fa-solid fa-plus"></i>
                                        </a>
                                        <a class="ud-btn btn-thm" href="#" id="tam_paket_cikar"
                                            onclick="togglePaket('tam_paket', {{ $tam_paket }}, 'cikar')"
                                            style="display: none;">Çıkar
                                            <i class="fa-solid fa-minus"></i>
                                        </a>
                                        <input type="hidden" name="tam_paket" id="tam_paket" value="0">
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
                                        <p class="fw600 mb10 ff-heading dark-color" id="cocukKoltuguLabel">Çocuk Koltuğu
                                        </p>
                                        <p class="fw600 mb10 ff-heading dark-color" id="miniPaketLabel">Mini Paket</p>
                                        <p class="fw600 mb10 ff-heading dark-color" id="ortaPaketLabel">Orta Paket</p>
                                        <p class="fw600 mb10 ff-heading dark-color" id="tamPaketLabel">Tam Paket</p>
                                    </div>
                                    <div class="pd-list">
                                        <p class="text mb10">{{ $price }} TL</p>
                                        <p class="text mb10" id="gencSurucuFiyat">
                                            {{ $genc_surucu > 0 ? $genc_surucu . ' TL' : '' }}</p>
                                        <p class="text mb10" id="ekSurucuFiyat">
                                            {{ $ek_surucu > 0 ? $ek_surucu . ' TL' : '' }}</p>
                                        <p class="text mb10" id="cocukKoltuguFiyat">
                                            {{ $cocuk_koltugu > 0 ? $cocuk_koltugu . ' TL' : '' }}</p>
                                        <p class="text mb10" id="miniPaketFiyat">
                                            {{ $mini_paket > 0 ? $mini_paket . ' TL' : '' }}</p>
                                        <p class="text mb10" id="ortaPaketFiyat">
                                            {{ $orta_paket > 0 ? $orta_paket . ' TL' : '' }}</p>
                                        <p class="text mb10" id="tamPaketFiyat">
                                            {{ $tam_paket > 0 ? $tam_paket . ' TL' : '' }}</p>
                                    </div>
                                </div>
                                <hr class="mt-3 mb-3">
                                <div class="d-flex justify-content-between">
                                    <div class="pd-list">
                                        <h6 class="title fz17">Toplam Tutar</h6>
                                    </div>
                                    <div class="pd-list">
                                        <p class="text mb10" style="font-size: 18px; font-weight: bold; color:#EE4C34;"
                                            id="totalPriceDisplay">{{ $totalPrice }} TL</p>
                                    </div>
                                </div>
                                <div class="col-md-12 mt10">
                                    <div class="d-grid">
                                        <a class="ud-btn btn-thm" href="#">Devam Et <i
                                                class="fal fa-arrow-right-long"></i></a>
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
        document.addEventListener('DOMContentLoaded', (event) => {
            fetch('{{ route('getSessionData') }}')
                .then(response => response.json())
                .then(data => {
                    updatePageData(data);
                    updateTotalPrice(data);
                })
                .catch(error => console.error('Error fetching session data:', error));
        });

        function updatePageData(data) {
            if (data.genc_surucu > 0) {
                document.getElementById('gencSurucuLabel').style.display = 'block';
                document.getElementById('gencSurucuFiyat').textContent = data.genc_surucu + ' TL';
            }
            if (data.ek_surucu > 0) {
                document.getElementById('ekSurucuLabel').style.display = 'block';
                document.getElementById('ekSurucuFiyat').textContent = data.ek_surucu + ' TL';
            }
            if (data.cocuk_koltugu > 0) {
                document.getElementById('cocukKoltuguLabel').style.display = 'block';
                document.getElementById('cocukKoltuguFiyat').textContent = data.cocuk_koltugu + ' TL';
            }
        }

        function updateTotalPrice(data) {
            let miniPaketInput = document.getElementById('mini_paket');
            let ortaPaketInput = document.getElementById('orta_paket');
            let tamPaketInput = document.getElementById('tam_paket');

            let miniPaketSayisi = miniPaketInput ? parseInt(miniPaketInput.value) || 0 : 0;
            let ortaPaketSayisi = ortaPaketInput ? parseInt(ortaPaketInput.value) || 0 : 0;
            let tamPaketSayisi = tamPaketInput ? parseInt(tamPaketInput.value) || 0 : 0;

            let miniPaketFiyat = {{ $mini_paket }} * miniPaketSayisi;
            let ortaPaketFiyat = {{ $orta_paket }} * ortaPaketSayisi;
            let tamPaketFiyat = {{ $tam_paket }} * tamPaketSayisi;

            let totalPrice = {{ $totalPrice }} + miniPaketFiyat + ortaPaketFiyat + tamPaketFiyat;

            if (data.genc_surucu) {
                totalPrice += data.genc_surucu;
            }
            if (data.ek_surucu) {
                totalPrice += data.ek_surucu;
            }
            if (data.cocuk_koltugu) {
                totalPrice += data.cocuk_koltugu;
            }

            document.getElementById('totalPriceDisplay').textContent = totalPrice + ' TL';

            document.getElementById('miniPaketLabel').style.display = miniPaketSayisi > 0 ? 'block' : 'none';
            document.getElementById('miniPaketFiyat').style.display = miniPaketSayisi > 0 ? 'block' : 'none';

            document.getElementById('ortaPaketLabel').style.display = ortaPaketSayisi > 0 ? 'block' : 'none';
            document.getElementById('ortaPaketFiyat').style.display = ortaPaketSayisi > 0 ? 'block' : 'none';

            document.getElementById('tamPaketLabel').style.display = tamPaketSayisi > 0 ? 'block' : 'none';
            document.getElementById('tamPaketFiyat').style.display = tamPaketSayisi > 0 ? 'block' : 'none';

            document.getElementById('total_price').value = totalPrice;
        }

        function togglePaket(paket, fiyat, action) {
            let input = document.getElementById(paket);
            if (input) {
                if (action === 'ekle') {
                    input.value = 1;
                    document.getElementById(paket + '_ekle').style.display = 'none';
                    document.getElementById(paket + '_cikar').style.display = 'block';
                } else if (action === 'cikar') {
                    input.value = 0;
                    document.getElementById(paket + '_ekle').style.display = 'block';
                    document.getElementById(paket + '_cikar').style.display = 'none';
                }
                updateTotalPrice();
            }
        }

        function submitForm() {
            document.getElementById('guvencePaketleriForm').submit();
        }
    </script>
@endsection
