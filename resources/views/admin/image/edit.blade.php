<form class="form form-vertical" action="/admin/image/{{ $image->id }}" method="POST" enctype="multipart/form-data">
    @method('PATCH')
    @csrf
    <input type="hidden" value="{{ $image->id }}" name="id">
    <input type="hidden" value="{{ $image->property_id }}" name="property_id">
    <div class="form-body">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="email-id-vertical">الصورة</label>
                    <input type="file"
                        class="form-control @error('url') is-invalid @enderror"
                        name="url" required>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-success mr-1 mb-1">تعديل</button>
            </div>
        </div>
    </div>
</form>
