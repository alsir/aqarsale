@extends((Session::get('locale') ==='ar'? 'frontend.layout.main_rtl' : 'frontend.layout.main'))
@section('content')
<div class="map-content content-area container-fluid">
    <div class="row" style="margin-top:7%;">
        <div class="col-lg-12">
            <div class="row">
                <div id="map" style="height: 800px;"></div>
            </div>
        </div>
    </div>
</div>
@endsection