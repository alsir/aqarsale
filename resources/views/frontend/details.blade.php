@extends((Session::get('locale') ==='ar'? 'frontend.layout.main_rtl' : 'frontend.layout.main'))
@section('content')
<!-- Sub banner start -->
<div class="sub-banner">
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
                            <div><img src="img/properties/properties-1.png" class="w-100 img-fluid" alt="photo"></div>
                            <div><img src="img/properties/properties-2.png" class="w-100 img-fluid" alt="photo"></div>
                            <div><img src="img/properties/properties-3.png" class="w-100 img-fluid" alt="photo"></div>
                            <div><img src="img/properties/properties-4.png" class="w-100 img-fluid" alt="photo"></div>
                            <div><img src="img/properties/properties-4.png" class="w-100 img-fluid" alt="photo"></div>
                        </div>
                        <div class="slider slider-nav">
                            <div><img src="img/properties/properties-1.png" class="img-fluid" alt="photo"></div>
                            <div><img src="img/properties/properties-2.png" class="img-fluid" alt="photo"></div>
                            <div><img src="img/properties/properties-3.png" class="img-fluid" alt="photo"></div>
                            <div><img src="img/properties/properties-4.png" class="img-fluid" alt="photo"></div>
                            <div><img src="img/properties/properties-5.png" class="img-fluid" alt="photo"></div>
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
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Floor Plans</button>
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
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab-4" data-bs-toggle="tab" data-bs-target="#contact-4" type="button" role="tab" aria-controls="contact-4" aria-selected="false">Similar Properties</button>
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
                                                <div class="col-md-4 col-sm-6">
                                                    <ul>
                                                        <li>
                                                            <strong>Property Lot Size:</strong>800 ft2
                                                        </li>
                                                        <li>
                                                            <strong>Land area:</strong>230 ft2
                                                        </li>
                                                        <li>
                                                            <strong>Year Built:</strong>2018
                                                        </li>
                                                        <li>
                                                            <strong>Available From:</strong>2018
                                                        </li>
                                                        <li>
                                                            <strong>Garages:</strong>2
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-4 col-sm-6">
                                                    <ul>
                                                        <li>
                                                            <strong>Sold:</strong>Yes
                                                        </li>
                                                        <li>
                                                            <strong>City:</strong>Usa
                                                        </li>
                                                        <li>
                                                            <strong>Parking:</strong>Yes
                                                        </li>
                                                        <li>
                                                            <strong>Property Owner:</strong>Sohel Rana
                                                        </li>
                                                        <li>
                                                            <strong>Zip Code: </strong>2451
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact-4" role="tabpanel" aria-labelledby="contact-tab-4">
                                <div class="accordion accordion-flush" id="accordionFlushExample4">
                                    <div class="accordion-item">
                                        <div class="properties-amenities mb-30">
                                            <h3 class="heading-2">Similar Properties</h3>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="property-box">
                                                        <div class="property-thumbnail">
                                                            <a href="single-property.html" class="property-img">
                                                                <div class="listing-badges">
                                                                    <span class="featured">Featured</span>
                                                                </div>
                                                                <div class="price-ratings-box">
                                                                    <h4 class="price">
                                                                        $178,000<span>/mo</span>
                                                                    </h4>
                                                                </div>
                                                                <div class="property-overflow">
                                                                    <img class="d-block w-100" src="img/properties/properties-1.png" alt="properties">
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="detail">
                                                            <h1 class="title">
                                                                <a href="single-property.html">Modern Family Home</a>
                                                            </h1>
                                                            <div class="location">
                                                                <a href="single-property.html">
                                                                    <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                                                </a>
                                                            </div>
                                                            <ul class="facilities-list clearfix">
                                                                <li>
                                                                    <i class="flaticon-furniture"></i> 3 Bedrooms
                                                                </li>
                                                                <li>
                                                                    <i class="flaticon-holidays"></i> 2 Bathrooms
                                                                </li>
                                                                <li>
                                                                    <i class="flaticon-square"></i> Sq Ft:3400
                                                                </li>
                                                                <li>
                                                                    <i class="flaticon-vehicle"></i> 1 Garage
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="footer clearfix">
                                                            <div class="pull-left agent">
                                                                <div class="agent">
                                                                    <div class="user">
                                                                        <a href="#">
                                                                            <img src="img/avatar/avatar-1.png" alt="avatar">
                                                                        </a>
                                                                    </div>
                                                                    <div class="user-name">
                                                                        <p><a href="#">Tom Paran</a></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pull-right days">
                                                                <p><i class="flaticon-time"></i> 6 Days ago</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="property-box">
                                                        <div class="property-thumbnail">
                                                            <a href="single-property.html" class="property-img">
                                                                <div class="listing-badges">
                                                                    <span class="featured">Featured</span>
                                                                </div>
                                                                <div class="price-ratings-box">
                                                                    <h4 class="price">
                                                                        $178,000<span>/mo</span>
                                                                    </h4>
                                                                </div>
                                                                <div class="property-overflow">
                                                                    <img class="d-block w-100" src="img/properties/properties-2.png" alt="properties">
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="detail">
                                                            <h1 class="title">
                                                                <a href="single-property.html">Relaxing Apartment</a>
                                                            </h1>
                                                            <div class="location">
                                                                <a href="single-property.html">
                                                                    <i class="fa fa-map-marker"></i>123 Kathal St. Tampa City,
                                                                </a>
                                                            </div>
                                                            <ul class="facilities-list clearfix">
                                                                <li>
                                                                    <i class="flaticon-furniture"></i> 3 Bedrooms
                                                                </li>
                                                                <li>
                                                                    <i class="flaticon-holidays"></i> 2 Bathrooms
                                                                </li>
                                                                <li>
                                                                    <i class="flaticon-square"></i> Sq Ft:3400
                                                                </li>
                                                                <li>
                                                                    <i class="flaticon-vehicle"></i> 1 Garage
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="footer clearfix">
                                                            <div class="pull-left agent">
                                                                <div class="agent">
                                                                    <div class="user">
                                                                        <a href="#">
                                                                            <img src="img/avatar/avatar-1.png" alt="avatar">
                                                                        </a>
                                                                    </div>
                                                                    <div class="user-name">
                                                                        <p><a href="#">Tom Paran</a></p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="pull-right days">
                                                                <p><i class="flaticon-time"></i> 6 Days ago</p>
                                                            </div>
                                                        </div>
                                                    </div>
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

                    <!-- Properties amenities start -->
                    <div class="properties-amenities mb-40">
                        <h3 class="heading-2">
                            Features
                        </h3>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <ul class="amenities">
                                    <li>
                                        <i class="flaticon-technology"></i>Air conditioning
                                    </li>
                                    <li>
                                        <i class="flaticon-window"></i>Balcony
                                    </li>
                                    <li>
                                        <i class="flaticon-beach"></i>Pool
                                    </li>
                                    <li>
                                        <i class="flaticon-holidays-1"></i>Room service
                                    </li>
                                    <li>
                                        <i class="flaticon-people-2"></i>Gym
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <ul class="amenities">
                                    <li>
                                        <i class="flaticon-connection"></i>Wifi
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i>Parking
                                    </li>
                                    <li>
                                        <i class="flaticon-furniture"></i>Double Bed
                                    </li>
                                    <li>
                                        <i class="flaticon-comedy"></i>Home Theater
                                    </li>
                                    <li>
                                        <i class="flaticon-technology-3"></i>Electric
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <ul class="amenities">
                                    <li>
                                        <i class="flaticon-technology-1"></i>Telephone
                                    </li>
                                    <li>
                                        <i class="flaticon-people-3"></i>Jacuzzi
                                    </li>
                                    <li>
                                        <i class="flaticon-clock"></i>Alarm
                                    </li>
                                    <li>
                                        <i class="flaticon-vehicle"></i>Garage
                                    </li>
                                    <li>
                                        <i class="flaticon-lock"></i>Security
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Properties amenities end -->

                    <!-- What nearby start -->
                    <div class="what-nearby mb-50">
                        <h3 class="heading-2">
                            What's Nearby
                        </h3>
                        <h4>Education</h4>
                        <ul>
                            <li>
                                <strong>Frozen Lake Academy </strong>(6.13 miles)
                                <span> <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star-half-o"></i>
                                </span>
                            </li>
                            <li>
                                <strong>Brooklyn Brainery </strong>(6.16 miles)
                                <span> <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star-half-o"></i>
                                     <i class="fa fa-star-half-o"></i>
                                </span>
                            </li>
                            <li>
                                <strong>Spring Gardens Elementary </strong>(8.54 miles)
                                <span> <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star-half-o"></i>
                                </span>
                            </li>
                        </ul>
                        <h4>Health & Medical</h4>
                        <ul>
                            <li>
                                <strong>dhaka medical Hospital </strong>(3.13 miles)
                                <span> <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star-half-o"></i>
                                </span>
                            </li>
                            <li>
                                <strong>Basuda Health Care  </strong>(7.13 miles)
                                <span> <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star-half-o"></i>
                                </span>
                            </li>
                            <li>
                                <strong>Victory Primary Hospital </strong>(2.16 miles)
                                <span> <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star-half-o"></i>
                                     <i class="fa fa-star-half-o"></i>
                                </span>
                            </li>
                        </ul>
                        <h4>Education</h4>
                        <ul>
                            <li>
                                <strong>The Rise Hotel </strong>(15.13 miles)
                                <span> <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star-half-o"></i>
                                </span>
                            </li>
                            <li>
                                <strong>Kfc </strong>(3.13 miles)
                                <span> <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star"></i>
                                     <i class="fa fa-star-half-o"></i>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <!-- What nearby end -->

                    <!-- Rating area start -->
                    <div class="rating-area clearfix">
                        <h3 class="heading-2">
                            Rating & Reviews
                        </h3>
                        <div class="average-rating">
                            <h1>4.8</h1>
                            <h4>Out of 5.0</h4>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                        </div>
                        <div class="rating-details">
                            <div class="progress-info">
                                <p>Service<span>4.0</span></p>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress-info">
                                <p>Value for Money<span>4.9</span></p>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress-info">
                                <p>Location<span>3.5</span></p>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div class="progress-info">
                                <p>Cleanliness<span>3.0</span></p>
                                <div class="progress mb-0">
                                    <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Rating area end -->

                    <h3 class="heading-2">257 Reviews</h3>
                    <!-- Comments start -->
                    <ul class="comments">
                        <li>
                            <div class="comment">
                                <div class="comment-author">
                                    <a href="#">
                                        <img src="img/avatar/avatar-1.png" alt="comments-user">
                                    </a>
                                </div>
                                <div class="comment-content">
                                    <div class="comment-meta">
                                        <h3>
                                            Maikel Alisa
                                        </h3>
                                        <div class="comment-meta">
                                            8:42 PM 1/28/2020<a href="#">Reply</a>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim.</p>
                                </div>
                            </div>
                            <ul>
                                <li>
                                    <div class="comment">
                                        <div class="comment-author">
                                            <a href="#">
                                                <img src="img/avatar/avatar-2.png" alt="comments-user">
                                            </a>
                                        </div>
                                        <div class="comment-content">
                                            <div class="comment-meta">
                                                <h3>
                                                    Karen Paran
                                                </h3>
                                                <div class="comment-meta">
                                                    8:42 PM 1/28/2020<a href="#">Reply</a>
                                                </div>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="comment">
                                <div class="comment-author">
                                    <a href="#">
                                        <img src="img/avatar/avatar-3.png" alt="comments-user">
                                    </a>
                                </div>
                                <div class="comment-content">
                                    <div class="comment-meta">
                                        <h3>
                                            Anne Brady
                                        </h3>
                                        <div class="comment-meta">
                                            8:42 PM 1/28/2020<a href="#">Reply</a>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum et vel eros. Maecenas eros enim.</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!-- Comments end -->

                    <!-- Contact 1 start -->
                    <div class="contact-1 mb-50">
                        <h3 class="heading">Write A Review</h3>
                        <form id="contact_form" action="index.html" method="GET" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="form-group name">
                                        <input type="text" name="name" class="form-control" placeholder="Name" aria-label="Full Name">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="form-group email">
                                        <input type="email" name="email" class="form-control" placeholder="Email Address" aria-label="Email Address">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="form-group subject">
                                        <input type="text" name="subject" class="form-control" placeholder="Subject" aria-label="Subject">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                    <div class="form-group number">
                                        <input type="text" name="phone" class="form-control" placeholder="Phone" aria-label="Phone Number">
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group message">
                                        <textarea  class="form-control" name="message" placeholder="Write message" aria-label="Write message"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="send-btn">
                                        <button type="submit" class="btn-4 btn-round-3">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Contact 1 end -->
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="sidebar-right">
                    <!-- Advanced search start -->
                    <div class="widget advanced-search">
                        <h3 class="sidebar-title">Advanced Search</h3>
                        <form method="GET">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="all-status">
                                    <option>All Status</option>
                                    <option>For Sale</option>
                                    <option>For Rent</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="all-type">
                                    <option>All Type</option>
                                    <option>Apartments</option>
                                    <option>Houses</option>
                                    <option>Commercial</option>
                                    <option>Garages</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="commercial">
                                    <option>Commercial</option>
                                    <option>Residential</option>
                                    <option>Land</option>
                                    <option>Hotels</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="location">
                                    <option>location</option>
                                    <option>New York</option>
                                    <option>Bangladesh</option>
                                    <option>India</option>
                                    <option>Canada</option>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="bedrooms">
                                            <option>Bedrooms</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="bathroom">
                                            <option>Bathroom</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="balcony">
                                            <option>Balcony</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="selectpicker search-fields" name="garage">
                                            <option>Garage</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="range-slider">
                                <label>Area</label>
                                <div data-min="0" data-max="10000" data-min-name="min_area" data-max-name="max_area" data-unit="Sq ft" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="range-slider">
                                <label>Price</label>
                                <div data-min="0" data-max="150000"  data-min-name="min_price" data-max-name="max_price" data-unit="USD" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="faq-info other-features">
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                Show More Options
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <h3 class="sidebar-title">Features</h3>
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkbox1" type="checkbox">
                                                    <label for="checkbox1">
                                                        Free Parking
                                                    </label>
                                                </div>
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkbox2" type="checkbox">
                                                    <label for="checkbox2">
                                                        Air Condition
                                                    </label>
                                                </div>
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkbox3" type="checkbox">
                                                    <label for="checkbox3">
                                                        Places to seat
                                                    </label>
                                                </div>
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkbox4" type="checkbox">
                                                    <label for="checkbox4">
                                                        Swimming Pool
                                                    </label>
                                                </div>
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkbox5" type="checkbox">
                                                    <label for="checkbox5">
                                                        Laundry Room
                                                    </label>
                                                </div>
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkbox6" type="checkbox">
                                                    <label for="checkbox6">
                                                        Window Covering
                                                    </label>
                                                </div>
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkbox7" type="checkbox">
                                                    <label for="checkbox7">
                                                        Central Heating
                                                    </label>
                                                </div>
                                                <div class="checkbox checkbox-theme checkbox-circle">
                                                    <input id="checkbox8" type="checkbox">
                                                    <label for="checkbox8">
                                                        Alarm
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <button class="btn-4 btn-round-3 w-100">Search</button>
                            </div>
                        </form>
                    </div>
                    <!-- Posts by category start -->
                    <div class="posts-by-category widget">
                        <h3 class="sidebar-title">Category</h3>
                        <ul class="list-unstyled list-cat">
                            <li><a href="#">Single Family <span>(45)</span></a></li>
                            <li><a href="#">Apartment <span>(21)</span> </a></li>
                            <li><a href="#">Condo <span>(23)</span></a></li>
                            <li><a href="#">Multi Family <span>(19)</span></a></li>
                            <li><a href="#">Villa <span>(19)</span></a> </li>
                            <li><a href="#">Other <span>(22) </span></a></li>
                        </ul>
                    </div>
                    <!-- Social media box start -->
                    <div class="social-media-box widget clearfix">
                        <h3 class="sidebar-title">Social Media</h3>
                        <ul class="social-list">
                            <li>
                                <a href="#" class="facebook-bg">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="twitter-bg">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="google-bg">
                                    <i class="fa fa-google"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="linkedin-bg">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="pinterest-bg">
                                    <i class="fa fa-pinterest"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- Team 5 start -->
                    <div class="team-5 widget">
                        <h3 class="sidebar-title">Contact Agent</h3>
                        <div class="team-agent d-flex mb-4">
                            <a href="agent-detail.html">
                                <img src="img/avatar/avatar-1.png" class="flex-shrink-0 me-3" alt="avatar">
                            </a>
                            <div class="detail align-self-center">
                                <h5>
                                    <a href="single-property.html">John Antony</a>
                                </h5>
                                <p><i class="flaticon-technology-1"></i><a href="agent-detail.html">1-8X0-666-8X88</a></p>
                                <p class="mb-0"><i class="flaticon-envelope"></i><a href="tel:info@themevessel.com">info@themevessel.com</a></p>
                            </div>
                        </div>
                        <div class="team-agent d-flex">
                            <a href="agent-detail.html">
                                <img src="img/avatar/avatar-2.png" class="flex-shrink-0 me-3" alt="avatar">
                            </a>
                            <div class="detail align-self-center">
                                <h5>
                                    <a href="single-property.html">Karen Paran</a>
                                </h5>
                                <p><i class="flaticon-technology-1"></i><a href="agent-detail.html">1-8X0-666-8X88</a></p>
                                <p class="mb-0"><i class="flaticon-envelope"></i><a href="tel:info@themevessel.com">info@themevessel.com</a></p>
                            </div>
                        </div>
                    </div>
                    <!-- Financing calculator start -->
                    <div class="contact-1 financing-calculator widget wdt-2">
                        <h5 class="sidebar-title">Mortgage Calculator</h5>
                        <div class="contact-form">
                            <form action="index.html" method="GET">
                                <div class="form-group">
                                    <label for="inputprice1" class="form-label">Property Price</label>
                                    <input type="text" name="property-price" class="form-control" id="inputprice1" placeholder="$820.000">
                                </div>
                                <div class="form-group">
                                    <label for="inputinterest1" class="form-label">Interest Rate (%)</label>
                                    <input type="text" name="interest" class="form-control" id="inputinterest1" placeholder="15%">
                                </div>
                                <div class="form-group">
                                    <label for="inputmonths1" class="form-label">Period In Months</label>
                                    <input type="text" name="months" class="form-control" id="inputmonths1" placeholder="Period In Months">
                                </div>
                                <div class="form-group">
                                    <label for="inputpayment1" class="form-label">Down Payment</label>
                                    <input type="text" name="payment" class="form-control" id="inputpayment1" placeholder="$36,300">
                                </div>
                                <div class="form-group mb-0">
                                    <button type="submit" class="button-md button-theme btn-3 w-100">Search</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Properties details page end -->
@endsection