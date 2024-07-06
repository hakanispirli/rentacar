<section class="pt-0 pb60">
    <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="100ms">
            <div class="col-lg-6">
                <div class="main-title2">
                    <h2 class="title">Discover Popular Properties</h2>
                    <p class="paragraph">Aliquam lacinia diam quis lacus euismod</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 wow fadeInUp" data-wow-delay="300ms">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-house" role="tabpanel"
                        aria-labelledby="pills-house-tab">
                        <div class="row">
                            @php
                                $araclar = App\Models\Araclar::latest()->limit(6)->get();
                            @endphp

                            @foreach ($araclar as $item)

                                <div class="col-md-6 col-xl-4">
                                    <div class="listing-style6">
                                        <div class="list-thumb">
                                            <img class="w-100" src="{{ asset($item->arac_gorsel) }}" alt="">
                                            <div class="list-tag fz12">
                                                @php
                                                    $iconClass = 'flaticon-electricity'; // Default class
                                                    if ($item->arac_sinif == 'Ekonomi') {
                                                        $iconClass = 'flaticon-favourite';
                                                    } elseif ($item->arac_sinif == 'Orta') {
                                                        $iconClass = 'flaticon-investment';
                                                    } elseif ($item->arac_sinif == 'Lüks') {
                                                        $iconClass = 'flaticon-electricity';
                                                    }
                                                @endphp
                                                <span class="{{ $iconClass }} me-2"></span>
                                                {{ $item->arac_sinif }}
                                            </div>
                                        </div>
                                        <div class="list-content">
                                            <div class="list-price mb-2">Şimdi Kirala</div>
                                            <h6 class="list-title">
                                                <span>
                                                    {{ $item->arac_adi }}
                                                </span>
                                            </h6>
                                            <p class="list-text">Veya Benzer Araç</p>
                                        </div>
                                    </div>
                                </div>

                            @endforeach

                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-villa" role="tabpanel" aria-labelledby="pills-villa-tab">
                        <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="listing-style6">
                                    <div class="list-thumb">
                                        <img class="w-100" src="images/listings/md-1.jpg" alt="">
                                        <div class="list-tag fz12"><span
                                                class="flaticon-electricity me-2"></span>FEATURED</div>
                                        <div class="list-tag2 fz12">FOR SALE</div>
                                        <div class="list-meta">
                                            <div class="icons">
                                                <a href=""><span class="flaticon-like"></span></a>
                                                <a href=""><span class="flaticon-new-tab"></span></a>
                                                <a href=""><span class="flaticon-fullscreen"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-content">
                                        <div class="list-price mb-2">$14,000</div>
                                        <h6 class="list-title"><a href="page-property-single-v1.html">Equestrian
                                                Family Home</a></h6>
                                        <p class="list-text">California City, CA, USA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="listing-style6">
                                    <div class="list-thumb">
                                        <img class="w-100" src="images/listings/md-2.jpg" alt="">
                                        <div class="list-meta">
                                            <div class="icons">
                                                <a href=""><span class="flaticon-like"></span></a>
                                                <a href=""><span class="flaticon-new-tab"></span></a>
                                                <a href=""><span class="flaticon-fullscreen"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-content">
                                        <div class="list-price mb-2">$82,000</div>
                                        <h6 class="list-title"><a href="page-property-single-v1.html">Luxury villa in
                                                Rego Park</a></h6>
                                        <p class="list-text">California City, CA, USA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="listing-style6">
                                    <div class="list-thumb">
                                        <img class="w-100" src="images/listings/md-3.jpg" alt="">
                                        <div class="list-meta">
                                            <div class="icons">
                                                <a href=""><span class="flaticon-like"></span></a>
                                                <a href=""><span class="flaticon-new-tab"></span></a>
                                                <a href=""><span class="flaticon-fullscreen"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-content">
                                        <div class="list-price mb-2">$63,000</div>
                                        <h6 class="list-title"><a href="page-property-single-v1.html">Villa on
                                                Hollywood Boulevard</a></h6>
                                        <p class="list-text">California City, CA, USA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="listing-style6">
                                    <div class="list-thumb">
                                        <img class="w-100" src="images/listings/md-4.jpg" alt="">
                                        <div class="list-meta">
                                            <div class="icons">
                                                <a href=""><span class="flaticon-like"></span></a>
                                                <a href=""><span class="flaticon-new-tab"></span></a>
                                                <a href=""><span class="flaticon-fullscreen"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-content">
                                        <div class="list-price mb-2">$14,000</div>
                                        <h6 class="list-title"><a href="page-property-single-v1.html">Northwest Office
                                                Space</a></h6>
                                        <p class="list-text">California City, CA, USA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="listing-style6">
                                    <div class="list-thumb">
                                        <img class="w-100" src="images/listings/md-5.jpg" alt="">
                                        <div class="list-meta">
                                            <div class="icons">
                                                <a href=""><span class="flaticon-like"></span></a>
                                                <a href=""><span class="flaticon-new-tab"></span></a>
                                                <a href=""><span class="flaticon-fullscreen"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-content">
                                        <div class="list-price mb-2">$14,000</div>
                                        <h6 class="list-title"><a href="page-property-single-v1.html">Affordable Green
                                                Villa House</a></h6>
                                        <p class="list-text">California City, CA, USA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="listing-style6">
                                    <div class="list-thumb">
                                        <img class="w-100" src="images/listings/md-6.jpg" alt="">
                                        <div class="list-meta">
                                            <div class="icons">
                                                <a href=""><span class="flaticon-like"></span></a>
                                                <a href=""><span class="flaticon-new-tab"></span></a>
                                                <a href=""><span class="flaticon-fullscreen"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-content">
                                        <div class="list-price mb-2">$14,000</div>
                                        <h6 class="list-title"><a href="page-property-single-v1.html">Sky Pool Villa
                                                House</a></h6>
                                        <p class="list-text">California City, CA, USA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-office" role="tabpanel" aria-labelledby="pills-office-tab">
                        <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="listing-style6">
                                    <div class="list-thumb">
                                        <img class="w-100" src="images/listings/md-1.jpg" alt="">
                                        <div class="list-tag fz12"><span
                                                class="flaticon-electricity me-2"></span>FEATURED</div>
                                        <div class="list-tag2 fz12">FOR SALE</div>
                                        <div class="list-meta">
                                            <div class="icons">
                                                <a href=""><span class="flaticon-like"></span></a>
                                                <a href=""><span class="flaticon-new-tab"></span></a>
                                                <a href=""><span class="flaticon-fullscreen"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-content">
                                        <div class="list-price mb-2">$14,000</div>
                                        <h6 class="list-title"><a href="page-property-single-v1.html">Equestrian
                                                Family Home</a></h6>
                                        <p class="list-text">California City, CA, USA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="listing-style6">
                                    <div class="list-thumb">
                                        <img class="w-100" src="images/listings/md-2.jpg" alt="">
                                        <div class="list-meta">
                                            <div class="icons">
                                                <a href=""><span class="flaticon-like"></span></a>
                                                <a href=""><span class="flaticon-new-tab"></span></a>
                                                <a href=""><span class="flaticon-fullscreen"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-content">
                                        <div class="list-price mb-2">$82,000</div>
                                        <h6 class="list-title"><a href="page-property-single-v1.html">Luxury villa in
                                                Rego Park</a></h6>
                                        <p class="list-text">California City, CA, USA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="listing-style6">
                                    <div class="list-thumb">
                                        <img class="w-100" src="images/listings/md-3.jpg" alt="">
                                        <div class="list-meta">
                                            <div class="icons">
                                                <a href=""><span class="flaticon-like"></span></a>
                                                <a href=""><span class="flaticon-new-tab"></span></a>
                                                <a href=""><span class="flaticon-fullscreen"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-content">
                                        <div class="list-price mb-2">$63,000</div>
                                        <h6 class="list-title"><a href="page-property-single-v1.html">Villa on
                                                Hollywood Boulevard</a></h6>
                                        <p class="list-text">California City, CA, USA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="listing-style6">
                                    <div class="list-thumb">
                                        <img class="w-100" src="images/listings/md-4.jpg" alt="">
                                        <div class="list-tag fz12"><span
                                                class="flaticon-electricity me-2"></span>FEATURED</div>
                                        <div class="list-meta">
                                            <div class="icons">
                                                <a href=""><span class="flaticon-like"></span></a>
                                                <a href=""><span class="flaticon-new-tab"></span></a>
                                                <a href=""><span class="flaticon-fullscreen"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-content">
                                        <div class="list-price mb-2">$14,000</div>
                                        <h6 class="list-title"><a href="page-property-single-v1.html">Northwest Office
                                                Space</a></h6>
                                        <p class="list-text">California City, CA, USA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="listing-style6">
                                    <div class="list-thumb">
                                        <img class="w-100" src="images/listings/md-5.jpg" alt="">
                                        <div class="list-meta">
                                            <div class="icons">
                                                <a href=""><span class="flaticon-like"></span></a>
                                                <a href=""><span class="flaticon-new-tab"></span></a>
                                                <a href=""><span class="flaticon-fullscreen"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-content">
                                        <div class="list-price mb-2">$14,000</div>
                                        <h6 class="list-title"><a href="page-property-single-v1.html">Affordable Green
                                                Villa House</a></h6>
                                        <p class="list-text">California City, CA, USA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="listing-style6">
                                    <div class="list-thumb">
                                        <img class="w-100" src="images/listings/md-6.jpg" alt="">
                                        <div class="list-meta">
                                            <div class="icons">
                                                <a href=""><span class="flaticon-like"></span></a>
                                                <a href=""><span class="flaticon-new-tab"></span></a>
                                                <a href=""><span class="flaticon-fullscreen"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-content">
                                        <div class="list-price mb-2">$14,000</div>
                                        <h6 class="list-title"><a href="page-property-single-v1.html">Sky Pool Villa
                                                House</a></h6>
                                        <p class="list-text">California City, CA, USA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-apartments" role="tabpanel"
                        aria-labelledby="pills-apartments-tab">
                        <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="listing-style6">
                                    <div class="list-thumb">
                                        <img class="w-100" src="images/listings/md-1.jpg" alt="">
                                        <div class="list-tag fz12"><span
                                                class="flaticon-electricity me-2"></span>FEATURED</div>
                                        <div class="list-tag2 fz12">FOR SALE</div>
                                        <div class="list-meta">
                                            <div class="icons">
                                                <a href=""><span class="flaticon-like"></span></a>
                                                <a href=""><span class="flaticon-new-tab"></span></a>
                                                <a href=""><span class="flaticon-fullscreen"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-content">
                                        <div class="list-price mb-2">$14,000</div>
                                        <h6 class="list-title"><a href="page-property-single-v1.html">Equestrian
                                                Family Home</a></h6>
                                        <p class="list-text">California City, CA, USA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="listing-style6">
                                    <div class="list-thumb">
                                        <img class="w-100" src="images/listings/md-2.jpg" alt="">
                                        <div class="list-meta">
                                            <div class="icons">
                                                <a href=""><span class="flaticon-like"></span></a>
                                                <a href=""><span class="flaticon-new-tab"></span></a>
                                                <a href=""><span class="flaticon-fullscreen"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-content">
                                        <div class="list-price mb-2">$82,000</div>
                                        <h6 class="list-title"><a href="page-property-single-v1.html">Luxury villa in
                                                Rego Park</a></h6>
                                        <p class="list-text">California City, CA, USA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="listing-style6">
                                    <div class="list-thumb">
                                        <img class="w-100" src="images/listings/md-3.jpg" alt="">
                                        <div class="list-meta">
                                            <div class="icons">
                                                <a href=""><span class="flaticon-like"></span></a>
                                                <a href=""><span class="flaticon-new-tab"></span></a>
                                                <a href=""><span class="flaticon-fullscreen"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-content">
                                        <div class="list-price mb-2">$63,000</div>
                                        <h6 class="list-title"><a href="page-property-single-v1.html">Villa on
                                                Hollywood Boulevard</a></h6>
                                        <p class="list-text">California City, CA, USA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="listing-style6">
                                    <div class="list-thumb">
                                        <img class="w-100" src="images/listings/md-4.jpg" alt="">
                                        <div class="list-tag fz12"><span
                                                class="flaticon-electricity me-2"></span>FEATURED</div>
                                        <div class="list-meta">
                                            <div class="icons">
                                                <a href=""><span class="flaticon-like"></span></a>
                                                <a href=""><span class="flaticon-new-tab"></span></a>
                                                <a href=""><span class="flaticon-fullscreen"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-content">
                                        <div class="list-price mb-2">$14,000</div>
                                        <h6 class="list-title"><a href="page-property-single-v1.html">Northwest Office
                                                Space</a></h6>
                                        <p class="list-text">California City, CA, USA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="listing-style6">
                                    <div class="list-thumb">
                                        <img class="w-100" src="images/listings/md-5.jpg" alt="">
                                        <div class="list-meta">
                                            <div class="icons">
                                                <a href=""><span class="flaticon-like"></span></a>
                                                <a href=""><span class="flaticon-new-tab"></span></a>
                                                <a href=""><span class="flaticon-fullscreen"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-content">
                                        <div class="list-price mb-2">$14,000</div>
                                        <h6 class="list-title"><a href="page-property-single-v1.html">Affordable Green
                                                Villa House</a></h6>
                                        <p class="list-text">California City, CA, USA</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <div class="listing-style6">
                                    <div class="list-thumb">
                                        <img class="w-100" src="images/listings/md-6.jpg" alt="">
                                        <div class="list-meta">
                                            <div class="icons">
                                                <a href=""><span class="flaticon-like"></span></a>
                                                <a href=""><span class="flaticon-new-tab"></span></a>
                                                <a href=""><span class="flaticon-fullscreen"></span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="list-content">
                                        <div class="list-price mb-2">$14,000</div>
                                        <h6 class="list-title"><a href="page-property-single-v1.html">Sky Pool Villa
                                                House</a></h6>
                                        <p class="list-text">California City, CA, USA</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
