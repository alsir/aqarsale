@extends((Session::get('locale') ==='ar'? 'frontend.layout.main_rtl' : 'frontend.layout.main'))
@section('content')
<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <h1>My Profile</h1>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="breadcrumb-area">
                    <ul>
                        <li><a href="index.html">Index</a></li>
                        <li><span>/</span>My Profile</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- My profile start -->
<div class="my-profile content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <!-- Avatar start -->
                <div class="edit-profile-photo">
                    <img src="{{ asset('/frontend/img/avatar/avatar-6.png')}}" alt="profile-photo" class="img-fluid">
                </div>
                <!-- Avatar end -->
                <!-- My account box start -->
                <div class="my-account-box">
                    <ul>
                        <li>
                            <a href="my-profile.html" class="active">
                                <i class="flaticon-people"></i>{{__('frontend.my_profile')}}
                            </a>
                        </li>
                        <li>
                            <a href="my-property.html">
                                <i class="flaticon-internet"></i>{{__('frontend.my_property')}}
                            </a>
                        </li>
                        <li>
                            <a href="submit-property.html">
                                <i class="flaticon-cross"></i>{{__('frontend.submit_new_property')}}
                            </a>
                        </li>
                        <li>
                            <a href="change-password.html">
                                <i class="flaticon-lock"></i>{{__('frontend.change_password')}}
                            </a>
                        </li>
                        <li>
                            <a href="index.html">
                                <i class="flaticon-exit"></i>{{__('frontend.log_out')}}
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- My account box end -->
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12">
                <!-- My address start-->
                <div class="my-address">
                    <h3 class="heading-2">{{__('frontend.log_out')}}</h3>
                    <form action="index.html" method="GET">
                        <div class="form-group">
                            <label for="inputname1" class="form-label">{{__('frontend.your_name')}}</label>
                            <input type="text" name="name" class="form-control" id="inputname1" placeholder="{{__('frontend.your_name')}}">
                        </div>
                        <div class="form-group">
                            <label for="inputphone1" class="form-label">{{__('frontend.phone_number')}}</label>
                            <input type="text" name="your-title" class="form-control" id="inputphone1" placeholder="{{__('frontend.phone_number')}}">
                        </div>
                        <a href="#" class="btn-4 btn-round-3" style="background-color: blue;">{{__('frontend.save_change')}}"></a>
                    </form>
                </div>
                <!-- My address end -->
            </div>
        </div>
    </div>
</div>
<!-- My profile end -->
@endsection