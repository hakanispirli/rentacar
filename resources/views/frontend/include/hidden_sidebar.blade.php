<div class="lefttside-hidden-bar">
    <div class="hsidebar-header">
        <div class="sidebar-close-icon""><span class="far fa-times"></span></div>
    </div>
    <div class="hsidebar-content">
        <div class="widget-wrapper">
            <div class="feature-accordion">
                <div class="accordion" id="accordionFilter">
                    <div class="accordion-item border-none">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button border-none p-0 after-none feature-button" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                aria-controls="collapseOne">Vites Tipi
                                <span class="flaticon-down-arrow" style="margin-left: 15px;"></span>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionFilter">
                            <div class="accordion-body p-0 mt15">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="checkbox-style1">
                                            {{-- @foreach ($arac_vites as $vites)
                                                <label class="custom_checkbox">{{ $vites->arac_vites }}
                                                    <input type="checkbox" class="filter-checkbox" data-filter="vites"
                                                        value="{{ $vites->arac_vites }}">
                                                    <span class="checkmark"></span>
                                                </label>
                                            @endforeach --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mb-4">
        <div class="widget-wrapper">
            <div class="feature-accordion">
                <div class="accordion" id="accordionFilter1">
                    <div class="accordion-item border-none">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button border-none p-0 after-none feature-button" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true"
                                aria-controls="collapseTwo">Yakıt Tipi
                                <span class="flaticon-down-arrow" style="margin-left: 15px;"></span>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionFilter1">
                            <div class="accordion-body p-0 mt15">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="checkbox-style1">
                                            {{-- @foreach ($arac_yakit as $yakit)
                                                <label class="custom_checkbox">{{ $yakit->arac_yakit }}
                                                    <input type="checkbox" class="filter-checkbox" data-filter="yakit"
                                                        value="{{ $yakit->arac_yakit }}">
                                                    <span class="checkmark"></span>
                                                </label>
                                            @endforeach --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mb-4">
        <div class="widget-wrapper">
            <div class="feature-accordion">
                <div class="accordion" id="accordionFilter2">
                    <div class="accordion-item border-none">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button border-none p-0 after-none feature-button" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true"
                                aria-controls="collapseThree">Araç Markası
                                <span class="flaticon-down-arrow" style="margin-left: 15px;"></span>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionFilter2">
                            <div class="accordion-body p-0 mt15">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="checkbox-style1">
                                            {{-- @foreach ($arac_markalari as $marka)
                                                <label class="custom_checkbox">{{ $marka->arac_marka }}
                                                    <input type="checkbox" class="filter-checkbox" data-filter="marka"
                                                        value="{{ $marka->arac_marka }}">
                                                    <span class="checkmark"></span>
                                                </label>
                                            @endforeach --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
