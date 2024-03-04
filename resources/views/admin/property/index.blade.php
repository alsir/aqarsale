@extends('layouts.app')
@section('title', 'العقارات ')
@section('content')
    <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">العقارات </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="content-body">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">العقارات </h4>
                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#default">إضافة </a>
                </div>

                <div class="card-content">
                    <div class="card-body card-dashboard">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="table-responsive">
                            <table class="table zero-configuration">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>الاسم العميل</th>
                                        <th>نوع الفئة</th>
                                        <th>اسم المنطقة</th>
                                        <th>العنوان</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($propertys as $property)
                                        <tr>
                                            <td>{{ $property->id }}</td>
                                            
                                            <td>{{ $property->customer->name }}</td>
                                            <td>{{ $property->category->name_ar }}</td>
                                            <td>{{ $property->area->name_en }}</td>
                                            <td>{{ $property->address_ar }}</td>
                                               <td> <button class="btn btn-success" name="edit_button"
                                                    value="{{ $property->id }}" data-toggle="modal"
                                                    data-target="#edit_modal"><i class="fa fa-edit"></i></button>
                                                <button class="btn btn-danger mr-2"
                                                    onclick="if(confirm('هل أنت متأكد ؟')){document.getElementById('delete-users_{{ $property->id }}').submit();}else{
                                            event.preventDefault();}"><i
                                                        class="fa fa-trash"></i></button>
                                                <form id="delete-users_{{ $property->id }}"
                                                    action="/admin/property/{{ $property->id }}" method="POST"
                                                    class="d-none">
                                                    @csrf
                                                    @method('DELETE')
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade text-left" id="default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">إضافة </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form form-vertical" action="/admin/property" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="first-name-vertical">العنوان انجليزي </label>
                                        <input type="text" class="form-control @error('address_en') is-invalid @enderror"
                                            name="address_en" placeholder="العنوان انجليزي " value="{{ old('address_en') }}" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="first-name-vertical">العنوان عربي</label>
                                        <input type="text" class="form-control @error('address_ar') is-invalid @enderror"
                                            name="address_ar" placeholder="العنوان عربي" value="{{ old('address_ar') }}" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email-id-vertical">وصف عربي</label>
                                        <textarea \class="form-control @error('description_ar') is-invalid @enderror"
                                            name="description_ar" placeholder="وصف عربي" value="{{ old('description_ar') }}"
                                            required></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="email-id-vertical">وصف انجليزي</label>
                                        <textarea  class="form-control @error('description_en') is-invalid @enderror"
                                            name="description_en" placeholder="وصف انجليزي" value="{{ old('description_en') }}"
                                            required></textarea>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="first-name-vertical">احداثيات خط الطول</label>
                                        <input type="number" class="form-control @error('longitude') is-invalid @enderror"
                                            name="longitude" placeholder="احداثيات خط الطول" value="{{ old('longitude') }}" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="first-name-vertical">احداثيات خط العرض  </label>
                                        <input type="number" class="form-control @error('latitude') is-invalid @enderror"
                                            name="latitude" placeholder="احداثيات خط العرض" value="{{ old('latitude') }}" required>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="first-name-vertical"> المساحة بالمتر المربع  </label>
                                        <input type="number" class="form-control @error('squaresmeters') is-invalid @enderror"
                                            name="squaresmeters" placeholder="المساحة بالمتر المربع" value="{{ old('squaresmeters') }}" required>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="first-name-vertical">  الطابق  </label>
                                        <input type="number" class="form-control @error('level') is-invalid @enderror"
                                            name="level" placeholder="الطابق " value="{{ old('level') }}" required>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="first-name-vertical">  عدد الحمامات  </label>
                                        <input type="number" class="form-control @error('bathrooms_number') is-invalid @enderror"
                                            name="bathrooms_number" placeholder="عدد الحمامات" value="{{ old('bathrooms_number') }}" required>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="first-name-vertical"> عدد غرف النوم  </label>
                                        <input type="number" class="form-control @error('bedrooms_number') is-invalid @enderror"
                                            name="bedrooms_number" placeholder="عدد غرف النوم" value="{{ old('bedrooms_number') }}" required>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="form-group">
                                        <label for="first-name-vertical">  عدد هول  </label>
                                        <input type="number" class="form-control @error('halls_number') is-invalid @enderror"
                                            name="halls_number" placeholder="عدد هول" value="{{ old('halls_number') }}" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary mr-1 mb-1">إضافة</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">أغلاق</button>
                </div>
            </div>
        </div>
    </div>

    <!-- edit Modal -->
    <div class="modal fade text-left" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel1">تعديل </h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-section">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">أغلاق</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scriptjs')
    <script>
        $(document).ready(function() {
            $("button[name='edit_button']").click(function() {

                var edit_val = this.value;

                $(".form-section").html(" ");
                $(".form-section").append(
                    "<center><img src='{{ asset('loader.gif') }}'  width='300px'/></center>"
                );
                $.get("/admin/property/" + edit_val + "/edit", function(data, status) {
                    $(".form-section").html(data);
                }).fail(function() {
                    $(".form-section").html(" ");
                    $(".form-section").append(
                        "<div class='alert alert-danger' role='alert'>عذراً , حصل خطأ ما !!</div>"
                    );
                });
            });
        });
    </script>
@endsection