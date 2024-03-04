<form class="form form-vertical" action="/admin/area/{{ $area->id }}" method="POST" enctype="multipart/form-data">
    @method('PATCH')
    @csrf
    <input type="hidden" value="{{ $area->id }}" name="id">
    <div class="form-body">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="first-name-vertical">الاسم الانجليزي</label>
                    <input type="text" class="form-control @error('area_en') is-invalid @enderror"
                        name="area_en" placeholder="الاسم الانجليزي" value="{{ old('area_en', $area->area_en) }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="first-name-vertical">الاسم العربي</label>
                    <input type="text" class="form-control @error('area_en') is-invalid @enderror"
                        name="area_en" placeholder="الاسم العربي" value="{{ old('area_en', $area->area_en) }}" required>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-success mr-1 mb-1">تعديل</button>
            </div>
        </div>
    </div>
</form>
