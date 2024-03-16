@extends((Session::get('locale') ==='ar'? 'frontend.layout.main_rtl' : 'frontend.layout.main'))
@section('content')
<!-- Sub banner start -->
<div class="sub-banner" style="margin-top:7%;">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <h1>Single Property</h1>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="breadcrumb-area">
                    <ul>
                        <li><a href="/">Index</a></li>
                        <li><span>/</span>Single Property</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Properties details page start -->
<div class="properties-details-page content-area-17">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-xs-12">
                <div class="properties-details-section">
                    <!-- Heading properties start -->
                    <div class="heading-properties-2">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="pull-left">
                                    <h3>Luxury Family House</h3>
                                    <p><i class="fa fa-map-marker"></i> 123 Kathal St. Tampa City,</p>
                                </div>
                                <div class="pull-right">
                                    <h3 class="text-right">$420,00<small>/mo</small></h3>
                                    <p>$9350/SqFt</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Heading properties end -->

                    <!-- Properties slider section start -->
                    <div class="properties-slider-section">
                        <div class="slider slider-for">
                            <div><img src="{{ asset('/frontend/img/properties/properties-1.png')}}" class="w-100 img-fluid" alt="photo"></div>
                            <div><img src="{{ asset('/frontend/img/properties/properties-2.png')}}" class="w-100 img-fluid" alt="photo"></div>
                            <div><img src="{{ asset('/frontend/img/properties/properties-3.png')}}" class="w-100 img-fluid" alt="photo"></div>
                            <div><img src="{{ asset('/frontend/img/properties/properties-4.png')}}" class="w-100 img-fluid" alt="photo"></div>
                            <div><img src="{{ asset('/frontend/img/properties/properties-4.png')}}" class="w-100 img-fluid" alt="photo"></div>
                        </div>
                        <div class="slider slider-nav">
                            <div><img src="{{ asset('/frontend/img/properties/properties-1.png')}}" class="img-fluid" alt="photo"></div>
                            <div><img src="{{ asset('/frontend/img/properties/properties-2.png')}}" class="img-fluid" alt="photo"></div>
                            <div><img src="{{ asset('/frontend/img/properties/properties-3.png')}}" class="img-fluid" alt="photo"></div>
                            <div><img src="{{ asset('/frontend/img/properties/properties-4.png')}}" class="img-fluid" alt="photo"></div>
                            <div><img src="{{ asset('/frontend/img/properties/properties-5.png')}}" class="img-fluid" alt="photo"></div>
                        </div>
                    </div>
                    <!-- Properties slider section end -->

                    <!-- Tabbing box start -->
                    <div class="tabbing tabbing-box mb-40">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Description</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Details</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab-5" data-bs-toggle="tab" data-bs-target="#contact-5" type="button" role="tab" aria-controls="contact-5" aria-selected="false">Location</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab-6" data-bs-toggle="tab" data-bs-target="#contact-6" type="button" role="tab" aria-controls="contact-6" aria-selected="false">Video</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="accordion accordion-flush" id="accordionFlushExample7">
                                    <div class="accordion-item">
                                        <div class="properties-description mb-50">
                                            <h3 class="heading-2">
                                                Description
                                            </h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a consectetur nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra a. Aliquam pellentesque nibh et nibh feugiat gravida. Maecenas ultricies, diam vitae semper placerat, velit risus accumsan nisl, eget tempor lacus est vel nunc. Proin accumsan elit sed neque euismod fringilla. Curabitur lobortis nunc velit, et fermentum urna dapibus non. Vivamus magna lorem, elementum id gravida ac, laoreet tristique augue. Maecenas dictum lacus eu nunc porttitor, ut hendrerit arcu efficitur.

                                                Aliquam ultricies nunc porta metus interdum mollis. Donec porttitor libero augue, vehicula tincidunt lectus placerat a. Sed tincidunt dolor non sem dictum dignissim. Nulla vulputate orci felis, ac ornare purus ultricies a. Fusce euismod magna orci, sit amet aliquam turpis dignissim ac. In at tortor at ligula pharetra sollicitudin. Sed tincidunt, purus eget laoreet elementum, felis est pharetra ante, tincidunt feugiat libero enim sed risus. Sed at leo sit amet mi bibendum aliquam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Praesent cursus varius odio, non faucibus dui. Nunc vehicula lectus sed velit suscipit aliquam vitae eu ipsum. adipiscing elit.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="accordion accordion-flush" id="accordionFlushExample2">
                                    <div class="accordion-item">
                                        <div class="floor-plans mb-50">
                                            <h3 class="heading-2">Floor Plans</h3>
                                            <table>
                                                <tbody><tr>
                                                    <td><strong>Size</strong></td>
                                                    <td><strong>Rooms</strong></td>
                                                    <td><strong>Bathrooms</strong></td>
                                                    <td><strong>Garage</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>1600</td>
                                                    <td>3</td>
                                                    <td>2</td>
                                                    <td>1</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                            <img src="img/floor-plans.png" alt="floor-plans" class="img-fluid w-100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <div class="accordion accordion-flush" id="accordionFlushExample3">
                                    <div class="accordion-item">
                                        <div class="property-details mb-40">
                                            <h3 class="heading-2">Property Details</h3>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-6">
                                                    <ul>
                                                        <li>
                                                            <strong>Property Id:</strong>215
                                                        </li>
                                                        <li>
                                                            <strong>Price:</strong>$1240/ Month
                                                        </li>
                                                        <li>
                                                            <strong>Property Type:</strong>House
                                                        </li>
                                                        <li>
                                                            <strong>Bathrooms:</strong>3
                                                        </li>
                                                        <li>
                                                            <strong>Bathrooms:</strong>2
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact-5" role="tabpanel" aria-labelledby="contact-tab-5">
                                <div class="accordion accordion-flush" id="accordionFlushExample5">
                                    <div class="accordion-item">
                                        <div class="location mb-50">
                                            <div class="map">
                                                <h3 class="heading-2">Property Location</h3>
                                                <div id="map" class="contact-map"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact-6" role="tabpanel" aria-labelledby="contact-tab-6">
                                <div class="accordion accordion-flush" id="accordionFlushExample6">
                                    <div class="accordion-item">
                                        <div class="inside-properties mb-50">
                                            <h3 class="heading-2">
                                                Property Video
                                            </h3>
                                            <iframe src="https://www.youtube.com/embed/5e0LxrLSzok" allowfullscreen=""></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Tabbing box end -->

                    <!-- Properties condition start -->
                    <div class="properties-condition mb-40">
                        <h3 class="heading-2">
                            Condition
                        </h3>
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <ul class="condition">
                                    <li>
                                        <i class="flaticon-furniture"></i>2 Bedroom
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays"></i>Bathroom
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <ul class="condition">
                                    <li>
                                        <i class="flaticon-square"></i>4800 sq ft
                                    </li>
                                    <li>
                                        <i class="flaticon-monitor"></i>TV Lounge
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <ul class="condition">
                                    <li>
                                        <i class="flaticon-vehicle"></i>1 Garage
                                    </li>
                                    <li>
                                        <i class="flaticon-window"></i>Balcony
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Properties condition end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Properties details page end -->
@endsection