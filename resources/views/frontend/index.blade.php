@extends((Session::get('locale') ==='ar'? 'frontend.layout.main_rtl' : 'frontend.layout.main'))
@section('content')
<div class="properties-section-body content-area">
    <div class="container">
        <div class="row">
            <div class="offset-lg-1 col-lg-10">
                      <!-- Property box 2 start -->
                <div class="property-box-2">
                    <div class="row g-0">
                        <div class="col-lg-4 col-md-4">
                            <div class="property-thumbnail">
                                <a href="single-property.html" class="property-img">
                                    <div class="property-overflow">
                                        <img src="{{ asset('/frontend/img/properties/properties-list-1.png')}}" alt="properties" class="img-fluid">
                                    </div>
                                    <div class="listing-badges">
                                        <span class="featured">Featured</span>
                                    </div>
                                    <div class="price-ratings-box">
                                        <h4 class="price">
                                            $178,000<span>/mo</span>
                                        </h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <div class="detail">
                                <h3 class="title">
                                    <a href="single-property.html">Relaxing Apartment</a>
                                </h3>
                                <p class="location">
                                    <a href="single-property.html">
                                        <i class="flaticon-location"></i>20-21 Kathal St. Tampa City, FL
                                    </a>
                                </p>
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
                                <div class="float-start agent">
                                    <div class="agent">
                                        <div class="user">
                                            <a href="#">
                                                <img src="{{ asset('/frontend/img/avatar/avatar-1.png')}}" alt="avatar">
                                            </a>
                                        </div>
                                        <div class="user-name">
                                            <p><a href="#">Tom Paran</a></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="float-end days">
                                    <p><i class="flaticon-time"></i> 6 Days ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="property-box-2" >
                    <div class="row g-0">
                        <div class="col-lg-4 col-md-4">
                            <div class="property-thumbnail">
                                <a href="single-property.html" class="property-img">
                                    <div class="property-overflow">
                                        <img src="img/properties/properties-list-2.png" alt="properties" class="img-fluid">
                                    </div>
                                    <div class="listing-time opening">For Sale</div>
                                    <div class="price-ratings-box">
                                        <h4 class="price">
                                            $178,000<span>/mo</span>
                                        </h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-8">
                            <div class="detail">
                                <h3 class="title">
                                    <a href="single-property.html">Modern Family Home</a>
                                </h3>
                                <p class="location">
                                    <a href="single-property.html">
                                        <i class="flaticon-location"></i>20-21 Kathal St. Tampa City, FL
                                    </a>
                                </p>
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
                                            
                                        </div>
                                        <div class="user-name">
                                            <p><a href="#">Roy Tark</a></p>
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
                <!-- Properties box 2 end -->

                <!-- Page navigation start -->
                <div class="pagination-box hidden-mb-45 text-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link active" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- Page navigation end-->
            </div>
        </div>
    </div>
</div>
@endsection