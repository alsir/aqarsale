@extends((Session::get('locale') ==='ar'? 'frontend.layout.main_rtl' : 'frontend.layout.main'))
@section('content')
<div class="my-properties content-area">
    <div class="container">
        <div class="row">
             <div class="col-lg-4 col-md-12 col-sm-12">
                 <!-- Avatar start -->
                 <div class="edit-profile-photo">
                     <img src="{{ asset('/frontend/img/avatar/avatar-6.png')}}" alt="profile-photo" class="img-fluid">
                     <div class="change-photo-btn">
                         <div class="photoUpload">
                             <span><i class="fa fa-upload"></i> Upload Photo</span>
                             <input type="file" class="upload">
                         </div>
                     </div>
                 </div>
                 <!-- Avatar end -->
                 <!-- My account box start -->
                 <div class="my-account-box">
                     <ul>
                         <li>
                             <a href="my-profile.html">
                                 <i class="flaticon-people"></i>My Profile
                             </a>
                         </li>
                         <li>
                             <a href="my-property.html" class="active">
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
                 <div class="my-address">
                     <h3 class="heading-2">My Property</h3>
                     <div class="my-properties">
                         <table class="manage-table">
                             <thead>
                             <tr>
                                 <th>My Property</th>
                                 <th></th>
                                 <th>Date</th>
                                 <th>Actions</th>
                             </tr>
                             </thead>
                             <tbody class="responsive-table">
                             <tr>
                                 <td class="listing-photoo h-pt-0">
                                     <a href="single-property.html"><img alt="properties-small" src="{{ asset('/frontend/img/properties/properties-1.png')}}" class="img-fluid"></a>
                                 </td>
                                 <td class="title-container">
                                     <h5><a href="#">Real Luxury Villa</a></h5>
                                     <h6><span>$90.00</span> / monthly</h6>
                                     <p><i class="flaticon-facebook-placeholder-for-locate-places-on-maps"></i> 123 Kathal St. Tampa City, </p>
                                 </td>
                                 <td class="date">
                                     08.11.2021
                                 </td>
                                 <td class="action">
                                     <ul>
                                         <li>
                                             <a href="#"><i class="fa fa-pencil"></i> Edit</a>
                                         </li>
                                         <li>
                                             <a href="#"><i class="fa  fa-eye-slash"></i> Hide</a>
                                         </li>
                                         <li>
                                             <a href="#" class="delete"><i class="fa fa-remove"></i> Delete</a>
                                         </li>
                                     </ul>
                                 </td>
                             </tr>
                             </tbody>
                         </table>
                     </div>
                 </div>
            </div>
        </div>
    </div>
</div>
@endsection