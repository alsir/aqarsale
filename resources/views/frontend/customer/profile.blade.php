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
                    <img src="img/avatar/avatar-6.png" alt="profile-photo" class="img-fluid">
                </div>
                <!-- Avatar end -->
                <!-- My account box start -->
                <div class="my-account-box">
                    <ul>
                        <li>
                            <a href="my-profile.html" class="active">
                                <i class="flaticon-people"></i>My Profile
                            </a>
                        </li>
                            <a href="my-property.html">
                                <i class="flaticon-internet"></i>My Property
                            </a>
                        </li>
                        <li>
                            <a href="submit-property.html">
                                <i class="flaticon-cross"></i>Submit New Property
                            </a>
                        </li>
                        <li>
                            <a href="change-password.html">
                                <i class="flaticon-lock"></i>Change Password
                            </a>
                        </li>
                        <li>
                            <a href="index.html">
                                <i class="flaticon-exit"></i>Log Out
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- My account box end -->
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12">
                <!-- My address start-->
                <div class="my-address">
                    <h3 class="heading-2">My Account</h3>
                    <form action="index.html" method="GET">
                        <div class="form-group">
                            <label for="inputname1" class="form-label">Your Name</label>
                            <input type="text" name="your-name" class="form-control" id="inputname1" placeholder="John Antony">
                        </div>
                        <div class="form-group">
                            <label for="inputtitle1" class="form-label">Your Title</label>
                            <input type="text" name="your-title" class="form-control" id="inputtitle1" placeholder="Your Title">
                        </div>
                        <div class="form-group">
                            <label for="inputphone1" class="form-label">Phone Number</label>
                            <input type="text" name="your-title" class="form-control" id="inputphone1" placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail1" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="inputEmail1" placeholder="johndoe@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1" class="form-label">Personal Info</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Personal Info"></textarea>
                        </div>
                        <a href="#" class="btn-4 btn-round-3">Save Changes</a>
                    </form>
                </div>
                <!-- My address end -->
            </div>
        </div>
    </div>
</div>
<!-- My profile end -->
@endsection