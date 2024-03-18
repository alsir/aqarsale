@extends((Session::get('locale') ==='ar'? 'frontend.layout.main_rtl' : 'frontend.layout.main'))
@section('content')
<!-- Sub banner start -->
<div class="sub-banner" style="margin-top: 7%;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <h1>Submit Property</h1>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="breadcrumb-area">
                    <ul>
                        <li><a href="index.html">Index</a></li>
                        <li><span>/</span>Submit Property</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->
<div class="submit-property content-area">
    <div class="container">
        <div class="my-address">
            <div class="row">
                <div class="col-md-12">
                    <div class="submit-address">
                        <form method="GET">
                            <h3 class="heading-2">Basic Information</h3>
                            <div class="search-contents-sidebar mb-30">
                                <div class="row">
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Status</label>
                                            <select class="selectpicker search-fields" name="for-sale">
                                                <option>For Sale</option>
                                                <option>For Rent</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group area">
                                            <label for="inputarea1" class="form-label">Area</label>
                                            <input type="number" name="area" class="form-control" id="inputarea1" placeholder="SqFt">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Bedrooms</label>
                                            <select class="selectpicker search-fields" name="1">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Bathroom</label>
                                            <select class="selectpicker search-fields" name="1">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3 class="heading-2">Property Gallery</h3>
                            <div id="myDropZone" class="dropzone dropzone-design mb-50">
                                <div class="dz-default dz-message"><span>Drop files here to upload</span></div>
                            </div>
                            <h3 class="heading-2">Location</h3>
                            <div class="row mb-30">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group address">
                                        <label for="inputAddress1" class="form-label">Address</label>
                                        <input type="text" name="address" class="form-control" id="inputAddress1" placeholder="Address">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group address">
                                        <label for="inputAddress1" class="form-label">Address</label>
                                        <input type="text" name="address" class="form-control" id="inputAddress1" placeholder="Address">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>City</label>
                                        <select class="selectpicker search-fields" name="city">
                                            <option>Choose Citys</option>
                                            <option>New York</option>
                                            <option>Los Angeles</option>
                                            <option>Chicago</option>
                                            <option>Brooklyn</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <h3 class="heading-2">Detailed Information</h3>
                            <div class="row mb-50">
                                <div class="col-md-12">
                                    <div class="form-group mb-0">
                                        <label>Detailed Information</label>
                                        <textarea name="message" class="form-control" rows="3" placeholder="Detailed Information"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-50">
                                <div class="col-md-12">
                                    <div class="form-group mb-0">
                                        <label>Detailed Information</label>
                                        <textarea name="message" class="form-control" rows="3" placeholder="Detailed Information"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-12 col-sm-12">
                                    <a href="#" class="btn-4 btn-round-3" style="background-color: #0d6efd;">Submit Property</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection