@extends('layouts.app')

@section('content')
<div class="container">
    <section data-bs-version="5.1" class="features5 cid-uu3zZsSkk6" id="features6-d">
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($jobOffers as $index => $jobOffer)
                    <p></p>
                    <!-- Cards -->
                    <div class="card col-12 col-lg-12">
                        <div class="card-wrapper mbr-flex">
                            <div class="card-box align-left">
                                <h5 class="card-title mbr-fonts-style align-left mb-3 display-5"><b>{{ $jobOffer->title }}</b></h5>
                                <p class="mbr-text mbr-fonts-style mb-3 display-4">
                                    <b>Sector: {{ $jobOffer->sector->name }}</b>
                                </p>
                                <p class="mbr-text mbr-fonts-style mb-3 display-4">
                                    {{ $jobOffer->short_description }}
                                </p>
                                <div class="mbr-section-btn">
                                    <a href="#" class="btn btn-primary display-4" onclick="toggleDetails('details{{ $index }}')">Más Información</a>
                                </div>
                                <div id="details{{ $index }}" class="details" style="display: none;">
                                    <p></p>
                                    <h6><b>Descripción del Puesto:</b></h6>
                                    <p>{{ $jobOffer->description }}</p>
                                    <h6><b>Requisitos:</b></h6>
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
                                    <div class="mbr-section-btn item-footer mt-2">
                                        <a href="{{ route('home.apply') }}" class="btn btn-primary item-btn display-4" target="_blank">Postularse</a>
                                    </div>
                                </div>
                            </div>

                            <div class="img-wrapper align-center">
                                <img src="{{ asset($jobOffer->image) }}" alt="Imagen" title="">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
<script>
    function toggleDetails(detailId) {
        var details = document.getElementById(detailId);
        if (details.style.display === "none") {
            details.style.display = "block";
        } else {
            details.style.display = "none";
        }
    }
</script>
@endsection
