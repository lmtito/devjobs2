@extends('layouts.app')

@section('content')
<section data-bs-version="5.1" class="content1 cid-uu3k9uBjiX" id="content1-2">
    <div class="container">
        <div class="mbr-section-head">
            <h4 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"><b>Ofertas Destacadas</b></h4>
            <h5 class="mbr-section-subtitle mbr-fonts-style align-center mb-0 mt-2 display-5">Encuentra Tu Oportunidad en el Mundo de la Sostenibilidad</h5>
        </div>

        <div class="row mt-4">
            @foreach ($jobOffers as $jobOffer)
                <div class="item features-image сol-12 col-md-6 col-lg-6">
                    <div class="item-wrapper">
                        <div class="item-img">
                            <img src="{{ asset($jobOffer->image) }}" alt="Imagen" title="">
                        </div>
                        <div class="item-content">
                            <h5 class="item-title mbr-fonts-style display-5 text-center"><b>{{ $jobOffer->title }}</b></h5>
                            <p class="mbr-text mbr-fonts-style mb-3 display-4">
                                <b>Sector: {{ $jobOffer->sector->name }}</b>
                            </p>
                            <p class="mbr-text mbr-fonts-style mb-3 display-4">
                                {{ $jobOffer->short_description }}
                            </p>
                            <p></p>
                            <h6><b>Descripción del Puesto:</b></h6>
                            <p>{{ $jobOffer->description }}</p>
                            <h6><b>Requisitos:</b></h6>
                            <p></p>
                            <ul>
                                @foreach($jobOffer->requirements as $requirement)
                                    <li>{{ $requirement->description }}</li>
                                @endforeach
                            </ul>
                            <h6><b>Ofrecemos:</b></h6>
                            <ul>
                                @foreach(explode('. ', $jobOffer->benefits) as $benefit)
                                    <li>{{ $benefit }}</li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="mbr-section-btn item-footer text-end mt-2">
                            <a href="{{ route('home.apply') }}" class="btn btn-primary item-btn display-4" target="_blank">Postularse</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
