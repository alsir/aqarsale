<form class="form form-vertical" action="/admin/propertyظ{{ $property->id }}" method="POST" enctype="multipart/form-data">
    @method('PATCH')
    @csrf
    <input type="hidden" value="{{ $property->id }}" name="id">
    <div class="form-body">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="first-name-vertical">العنوان انجليزي </label>
                    <input type="text" class="form-control @error('address_en') is-invalid @enderror"
                        name="address_en" placeholder="العنوان انجليزي " value="{{ old('address_en' , $proptery->address_en) }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="first-name-vertical">العنوان عربي</label>
                    <input type="text" class="form-control @error('address_ar') is-invalid @enderror"
                        name="address_ar" placeholder="العنوان عربي" value="{{ old('address_ar', $proptery->address_ar)) }}" required>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="email-id-vertical">وصف عربي</label>
                    <textarea class="form-control @error('description_ar') is-invalid @enderror"
                        name="description_ar" placeholder="وصف عربي" value="{{ old('description_ar', $proptery->description_ar)) }}"
                        required></textarea>
                </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <label for="email-id-vertical">وصف انجليزي</label>
                    <textarea  class="form-control @error('description_en') is-invalid @enderror"
                        name="description_en" placeholder="وصف انجليزي" value="{{ old('description_en', $proptery->description_en)) }}"
                        required></textarea>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="first-name-vertical">احداثيات خط الطول</label>
                    <input type="number" class="form-control @error('longitude') is-invalid @enderror"
                        name="longitude" placeholder="احداثيات خط الطول" value="{{ old('longitude', $proptery->longitude)) }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="first-name-vertical">احداثيات خط العرض  </label>
                    <input type="number" class="form-control @error('latitude') is-invalid @enderror"
                        name="latitude" placeholder="احداثيات خط العرض" value="{{ old('latitude', $proptery->latitude)) }}" required>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="first-name-vertical"> المساحة بالمتر المربع  </label>
                    <input type="number" class="form-control @error('squaresmeters') is-invalid @enderror"
                        name="squaresmeters" placeholder="المساحة بالمتر المربع" value="{{ old('squaresmeters', $proptery->squaresmeters)) }}" required>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="first-name-vertical">  الطابق  </label>
                    <input type="number" class="form-control @error('level') is-invalid @enderror"
                        name="level" placeholder="الطابق " value="{{ old('level', $proptery->level)) }}" required>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="first-name-vertical">  عدد الحمامات  </label>
                    <input type="number" class="form-control @error('bathrooms_number') is-invalid @enderror"
                        name="bathrooms_number" placeholder="عدد الحمامات" value="{{ old('bathrooms_number', $proptery->bathrooms_number)) }}" required>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="first-name-vertical"> عدد غرف النوم  </label>
                    <input type="number" class="form-control @error('bedrooms_number') is-invalid @enderror"
                        name="bedrooms_number" placeholder="عدد غرف النوم" value="{{ old('bedrooms_number', $proptery->bedrooms_number)) }}" required>
                </div>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="first-name-vertical">  عدد هول  </label>
                    <input type="number" class="form-control @error('halls_number') is-invalid @enderror"
                        name="halls_number" placeholder="عدد هول" value="{{ old('halls_number', $proptery->halls_number)) }}" required>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary mr-1 mb-1">تعديل</button>
            </div>
        </div>
    </div>
</form>