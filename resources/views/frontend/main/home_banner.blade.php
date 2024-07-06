<section class="home-banner-style4 p0 bgc-white">
    <div class="home-style4 maxw1600 bdrs24 position-relative mx-auto mx20-lg">
        <div class="container">
            <div class="row">
                <div class="col-xl-9">
                    <div class="inner-banner-style4">
                        <h2 class="hero-title animate-up-1">
                            Araç Kiralamanın
                            <br class="d-none d-md-block">
                            En Kolay Yolu
                        </h2>
                        <p class="hero-text fz15 animate-up-2">
                            Aylık ve Yıllık Kiralama Seçeneklerinde %10 İndirim İmkanı!
                        </p>
                        <div class="advance-search-tab mt60 mt30-lg mx-auto animate-up-3">
                            <ul class="nav nav-tabs p-0 m-0" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home" type="button" role="tab" aria-controls="home"
                                        aria-selected="true">Araç Kirala
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="advance-content-style3">
                                        <form id="reservation-form">
                                            @csrf
                                            <div class="d-flex flex-wrap align-items-center gap-3">
                                                <div class="col-md-5 col-lg-5">
                                                    <div class="bootselect-multiselect">
                                                        <select class="selectpicker" name="alis_yeri" id="alis_yeri">
                                                            <option value="ofis">Ofis</option>
                                                            <option value="havaalani">Havaalanı</option>
                                                            <option value="otogar">Otogar</option>
                                                        </select>
                                                        <span class="input-label">Alış Yeri</span>
                                                        @error('alis_yeri')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-5 col-lg-5">
                                                    <div class="bootselect-multiselect">
                                                        <select class="selectpicker" name="teslim_yeri" id="teslim_yeri">
                                                            <option value="ofis">Ofis</option>
                                                            <option value="havaalani">Havaalanı</option>
                                                            <option value="otogar">Otogar</option>
                                                        </select>
                                                        <span class="input-label">Teslim Yeri</span>
                                                        @error('teslim_yeri')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 position-relative">
                                                    <input type="text" id="pickup_date" name="alis_tarihi" class="form-control bgc-f7 date-input">
                                                    <span class="input-label">Alış Tarihi</span>
                                                    @error('alis_tarihi')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="flex-grow-1 position-relative">
                                                    <input type="text" id="pickup_time" name="alis_saati" class="form-control bgc-f7 time-input">
                                                    <span class="input-label">Alış Saati</span>
                                                    @error('alis_saati')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="flex-grow-1 position-relative">
                                                    <input type="text" id="return_date" name="teslim_tarihi" class="form-control bgc-f7 date-input">
                                                    <span class="input-label">Teslim Tarihi</span>
                                                    @error('teslim_tarihi')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="flex-grow-1 position-relative">
                                                    <input type="text" id="return_time" name="teslim_saati" class="form-control bgc-f7 time-input">
                                                    <span class="input-label">Teslim Saati</span>
                                                    @error('teslim_saati')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="flex-grow-0">
                                                    <div class="d-flex align-items-center justify-content-center mt-2 mt-md-0">
                                                        <button class="ud-btn btn-thm ms-4" id="submit-btn" type="button">
                                                            Araç Ara <span class="flaticon-search ml10"></span>
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
        </div>
    </div>
    <script>
        document.getElementById('submit-btn').addEventListener('click', function(event) {
            event.preventDefault();

            const formData = new FormData(document.getElementById('reservation-form'));
            const data = {};
            formData.forEach((value, key) => {
                data[key] = value;
            });

            fetch('{{ route('rezervasyon.post') }}', {
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
                    window.location.href = '{{ route('araclar.listele') }}';
                } else {
                    console.error('Error:', data.message);
                }
            })
            .catch((error) => {
                console.error('Error:', error);
            });
        });
    </script>
</section>
