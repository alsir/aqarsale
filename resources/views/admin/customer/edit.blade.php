<form class="form form-vertical" action="/admin/customer/{{ $customer->id }}" method="POST" enctype="multipart/form-data">
    @method('PATCH')
    @csrf
    <input type="hidden" value="{{ $customer->id }}" name="id">
    <div class="form-body">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="first-name-vertical">الإسم</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        placeholder="الإسم" value="{{ old('name', $customer->name) }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="email-id-vertical">رقم الهاتف</label>
                    <input type="number" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number"
                        placeholder="رقم الهاتف" value="{{ old('phone_number', $customer->phone_number) }}" required>
                </div>
            </div>
            <div class="col-6">
                <div class="form-group">
                    <label for="email-id-vertical">كلمة السر</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                        placeholder="كلمة السر" value="{{ old('password') }}" required>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-success mr-1 mb-1">تعديل</button>
            </div>
        </div>
    </div>
</form>
