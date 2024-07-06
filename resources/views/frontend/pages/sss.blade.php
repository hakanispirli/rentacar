@extends('frontend.master')
@section('home')
    <section class="breadcumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcumb-style1">
                        <h2 class="title">Sıkça Sorulan Sorular</h2>
                        <div class="breadcumb-list">
                            <a href="{{ route('index') }}">Anasayfa</a>
                            <a href="#">Sıkça Sorulan Sorular</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section Area -->
    <section class="our-faq pb90 pt-0">
        <div class="container">
            <div class="row wow fadeInUp" data-wow-delay="300ms">
                <div class="col-lg-12">
                    <div class="ui-content">
                        <h4 class="title">Sıkça Sorulan Sorular! Farklı sorularınız için bizimle iletişime geçebilirsiniz.</h4>
                        <div class="accordion-style1 faq-page mb-4 mb-lg-5">
                            @foreach ($faq as $item)
                                <div class="accordion" id="accordion{{ $item->id }}">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse{{ $item->id }}" aria-expanded="true"
                                                aria-controls="collapse{{ $item->id }}">{{ $item->faq_baslik }}</button>
                                        </h2>
                                        <div id="collapse{{ $item->id }}" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                            data-parent="#accordion{{ $item->id }}">
                                            <div class="accordion-body">
                                                {{ $item->faq_aciklama }}
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
    </section>
@endsection
