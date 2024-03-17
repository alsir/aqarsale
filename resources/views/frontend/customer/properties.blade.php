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
                     </div>
                 </div>
                 <!-- Avatar end -->
                 <!-- My account box start -->
                 <div class="my-account-box">
                    <ul>
                        <li>
                            <a href="my-profile.html" class="active">
                                <i class="flaticon-people " style="margin-left: 2%"></i>{{__('frontend.my_profile')}}
                            </a>
                        </li>
                        <li>
                            <a href="my-property.html">
                                <i class="flaticon-internet " style="margin-left: 2%"></i>{{__('frontend.my_property')}}
                            </a>
                        </li>
                        <li>
                            <a href="submit-property.html">
                                <i class="flaticon-cross " style="margin-left: 2%"></i>{{__('frontend.submit_new_property')}}
                            </a>
                        </li>
                        <li>
                            <a href="change-password.html">
                                <i class="flaticon-lock " style="margin-left: 2%"></i>{{__('frontend.change_password')}}
                            </a>
                        </li>
                        <li>
                            <a href="index.html">
                                <i class="flaticon-exit " style="margin-left: 2%"></i>{{__('frontend.log_out')}}
                            </a>
                        </li>
                    </ul>
                 </div>
                 <!-- My account box end -->
            </div>
             <div class="col-lg-8 col-md-12 col-sm-12 mt-5">
                 <div class="my-address">
                     <h3 class="heading-2">{{__('frontend.my_property')}}</h3>
                     <div class="my-properties">
                         <table class="manage-table">
                             <thead>
                             <tr>
                                 <th>{{__('frontend.my_property')}}</th>
                                 <th></th>
                                 <th>{{__('frontend.date')}}</th>
                                 <th>{{__('frontend.actions')}}</th>
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
                                             <a href="#"><i class="fa fa-pencil"></i> {{__('frontend.edit')}}</a>
                                         </li>
                                         <li>
                                             <a href="#" class="delete"><i class="fa fa-remove"></i> {{__('frontend.delete')}}</a>
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