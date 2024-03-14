@extends('frontend.layout.main')
@section('content')
<div class="map-content content-area container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div id="map"></div>
            </div>
        </div>
    </div>
</div>
<script>
    var latitude = 51.541216;
    var longitude = -0.095678;
    var providerName = 'OpenStreetMap';
    generateMap(latitude, longitude, providerName, 'grid_layout');
</script>
@endsection