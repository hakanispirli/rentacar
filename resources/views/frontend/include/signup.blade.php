<div class="signup-modal">
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel">Hoşgeldiniz</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="log-reg-form">
                        <div class="navtab-style2">
                            <nav>
                                <div class="nav nav-tabs mb20" id="nav-tab" role="tablist">
                                    <button class="nav-link active fw600" id="nav-home-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-home" type="button" role="tab"
                                        aria-controls="nav-home" aria-selected="true">GİRİŞ</button>
                                    <button class="nav-link fw600" id="nav-profile-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-profile" type="button" role="tab"
                                        aria-controls="nav-profile" aria-selected="false">KAYIT</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent2">
                                <div class="tab-pane fade show active fz15" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <form action="{{ route('login') }}" method="POST" id="popupLoginForm">
                                        @csrf
                                        <div class="form-style1">
                                            <div class="mb25">
                                                <label class="form-label fw600 dark-color">E-Posta</label>
                                                <input type="email" name="email" id="email" class="form-control" placeholder="E-posta adresiniz">
                                            </div>
                                            <div class="mb15">
                                                <label class="form-label fw600 dark-color">Şifre</label>
                                                <input type="password" name="password" id="password" class="form-control" placeholder="********">
                                            </div>
                                            <div
                                                class="checkbox-style1 d-block d-sm-flex align-items-center justify-content-between mb10">
                                                <label class="custom_checkbox fz14 ff-heading">Beni hatırla
                                                    <input type="checkbox" checked="checked">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <a class="fz14 ff-heading" href="#">Şifrenizi mi unuttunuz?</a>
                                            </div>
                                            <div class="d-grid mb20">
                                                <button class="ud-btn btn-thm" type="submit">Giriş <i
                                                        class="fal fa-arrow-right-long"></i></button>
                                            </div>
                                            <div class="hr_content mb20">
                                                <hr><span class="hr_top_text">Veya</span>
                                            </div>
                                            <div class="d-grid mb10">
                                                <button class="ud-btn btn-white" type="button"><i
                                                        class="fab fa-google"></i> Continue Google</button>
                                            </div>
                                            <div class="d-grid mb10">
                                                <button class="ud-btn btn-fb" type="button"><i
                                                        class="fab fa-facebook-f"></i> Continue Facebook</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade fz15" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    <form action="{{ route('register') }}" method="POST" id="popupRegisterForm">
                                        @csrf
                                        <div class="form-style1">
                                            <div class="mb25">
                                                <label class="form-label fw600 dark-color">Adınız ve Soyadınız</label>
                                                <input type="text" name="name" id="name" class="form-control" placeholder="Ad Soyad">
                                            </div>
                                            <div class="mb25">
                                                <label class="form-label fw600 dark-color">E-Posta</label>
                                                <input type="email" name="email" id="email" class="form-control" placeholder="E-posta adresiniz">
                                            </div>
                                            <div class="mb25">
                                                <label class="form-label fw600 dark-color">Telefon</label>
                                                <input id="phoneNumber" placeholder="(5xx) xxx xx xx" name="phone"
                                                    type="text" class="form-control phone-number-input"
                                                    autocomplete="off" inputmode="text">
                                            </div>
                                            <div class="mb20">
                                                <label class="form-label fw600 dark-color">Şifre</label>
                                                <input type="password" name="password" id="password" class="form-control" placeholder="**********">
                                            </div>
                                            <div class="mb20">
                                                <label class="form-label fw600 dark-color">Şifre Doğrula</label>
                                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="**********">
                                            </div>
                                            <div class="mb20">
                                                <label class="custom_checkbox"><a class="dark-color fw600"
                                                        href="">Müşteri Aydınlatma Metni</a> 'nde belirtilen
                                                    koşulları okudum ve kabul ediyorum.
                                                    <input type="checkbox" id="terms2" name="terms1" required>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="mb20">
                                                <label class="custom_checkbox">Verilerimin işlenmesi için <a
                                                        class="dark-color fw600" href="">Açık Rıza Metni</a> 'nde
                                                    belirtilen koşulları okudum ve kabul ediyorum.
                                                    <input type="checkbox" id="terms2" name="terms2" required>
                                                    <span class="checkmark"></span>
                                                </label>
                                            </div>
                                            <div class="d-grid mb20">
                                                <button class="ud-btn btn-thm" type="submit">Kayıt Oluştur <i
                                                        class="fal fa-arrow-right-long"></i></button>
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
