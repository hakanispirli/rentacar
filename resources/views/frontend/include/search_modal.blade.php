<div class="advance-feature-modal">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header pl30 pr30">
                    <h5 class="modal-title" id="exampleModalLabel">More Filter</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pb-0">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="widget-wrapper">
                                <h6 class="list-title">Price Range</h6>
                                <!-- Range Slider Mobile Version -->
                                <div class="range-slider-style modal-version">
                                    <div class="range-wrapper">
                                        <div class="mb30 mt35" id="slider"></div>
                                        <div class="d-flex align-items-center">
                                            <span id="slider-range-value1"></span><i
                                                class="fa-sharp fa-solid fa-minus mx-2 dark-color icon"></i>
                                            <span id="slider-range-value2"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="widget-wrapper">
                                <h6 class="list-title">Type</h6>
                                <div class="form-style2 input-group">
                                    <select class="selectpicker" data-live-search="true" data-width="100%">
                                        <option>Property</option>
                                        <option data-tokens="Apartments">Apartments</option>
                                        <option data-tokens="Bungalow">Bungalow</option>
                                        <option data-tokens="Houses">Houses</option>
                                        <option data-tokens="Loft">Loft</option>
                                        <option data-tokens="Office">Office</option>
                                        <option data-tokens="Townhome">Townhome</option>
                                        <option data-tokens="Villa">Villa</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="widget-wrapper">
                                <h6 class="list-title">Property ID</h6>
                                <div class="form-style2">
                                    <input type="text" class="form-control" placeholder="RT04949213">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="widget-wrapper">
                                <h6 class="list-title">Bedrooms</h6>
                                <div class="d-flex">
                                    <div class="selection">
                                        <input id="xany" name="xbeds" type="radio" checked>
                                        <label for="xany">any</label>
                                    </div>
                                    <div class="selection">
                                        <input id="xoneplus" name="xbeds" type="radio">
                                        <label for="xoneplus">1+</label>
                                    </div>
                                    <div class="selection">
                                        <input id="xtwoplus" name="xbeds" type="radio">
                                        <label for="xtwoplus">2+</label>
                                    </div>
                                    <div class="selection">
                                        <input id="xthreeplus" name="xbeds" type="radio">
                                        <label for="xthreeplus">3+</label>
                                    </div>
                                    <div class="selection">
                                        <input id="xfourplus" name="xbeds" type="radio">
                                        <label for="xfourplus">4+</label>
                                    </div>
                                    <div class="selection">
                                        <input id="xfiveplus" name="xbeds" type="radio">
                                        <label for="xfiveplus">5+</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="widget-wrapper">
                                <h6 class="list-title">Bathrooms</h6>
                                <div class="d-flex">
                                    <div class="selection">
                                        <input id="yany" name="ybath" type="radio" checked>
                                        <label for="yany">any</label>
                                    </div>
                                    <div class="selection">
                                        <input id="yoneplus" name="ybath" type="radio">
                                        <label for="yoneplus">1+</label>
                                    </div>
                                    <div class="selection">
                                        <input id="ytwoplus" name="ybath" type="radio">
                                        <label for="ytwoplus">2+</label>
                                    </div>
                                    <div class="selection">
                                        <input id="ythreeplus" name="ybath" type="radio">
                                        <label for="ythreeplus">3+</label>
                                    </div>
                                    <div class="selection">
                                        <input id="yfourplus" name="ybath" type="radio">
                                        <label for="yfourplus">4+</label>
                                    </div>
                                    <div class="selection">
                                        <input id="yfiveplus" name="ybath" type="radio">
                                        <label for="yfiveplus">5+</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="widget-wrapper">
                                <h6 class="list-title">Location</h6>
                                <div class="form-style2 input-group">
                                    <select class="selectpicker" data-live-search="true" data-width="100%">
                                        <option>All Cities</option>
                                        <option data-tokens="California">California</option>
                                        <option data-tokens="Chicago">Chicago</option>
                                        <option data-tokens="LosAngeles">Los Angeles</option>
                                        <option data-tokens="Manhattan">Manhattan</option>
                                        <option data-tokens="NewJersey">New Jersey</option>
                                        <option data-tokens="NewYork">New York</option>
                                        <option data-tokens="SanDiego">San Diego</option>
                                        <option data-tokens="SanFrancisco">San Francisco</option>
                                        <option data-tokens="Texas">Texas</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="widget-wrapper">
                                <h6 class="list-title">Square Feet</h6>
                                <div class="space-area">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="form-style1">
                                            <input type="text" class="form-control" placeholder="Min.">
                                        </div>
                                        <span class="dark-color">-</span>
                                        <div class="form-style1">
                                            <input type="text" class="form-control" placeholder="Max">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="widget-wrapper mb0">
                                <h6 class="list-title mb10">Amenities</h6>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="widget-wrapper mb20">
                                <div class="checkbox-style1">
                                    <label class="custom_checkbox">Attic
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="custom_checkbox">Basketball court
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="custom_checkbox">Air Conditioning
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="custom_checkbox">Lawn
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="widget-wrapper mb20">
                                <div class="checkbox-style1">
                                    <label class="custom_checkbox">TV Cable
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="custom_checkbox">Dryer
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="custom_checkbox">Outdoor Shower
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="custom_checkbox">Washer
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="widget-wrapper mb20">
                                <div class="checkbox-style1">
                                    <label class="custom_checkbox">Lake view
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="custom_checkbox">Wine cellar
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="custom_checkbox">Front yard
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                    <label class="custom_checkbox">Refrigerator
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <a class="reset-button" href="#"><span class="flaticon-turn-back"></span><u>Reset all
                            filters</u></a>
                    <div class="btn-area">
                        <button class="ud-btn btn-thm"><span
                                class="flaticon-search align-text-top pr10"></span>Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
