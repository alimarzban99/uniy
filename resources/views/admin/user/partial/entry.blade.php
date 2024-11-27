<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label">نام کاربری</label>
            <input name="username" id="username" type="text" class="form-control"
                   value="{{$data->username ?? null}}"
                   placeholder="نام کاربری :">
        </div>
    </div><!--end col-->

    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label">ایمیل</label>
            <input name="email" id="email" type="email" class="form-control"
                   value="{{$data->email ?? null}}"
                   placeholder="ایمیل :">
        </div>
    </div><!--end col-->

    <div class="col-md-12">
        <div class="mb-3">
            <label class="form-label">آدرس</label>
            <input name="address" id="address" type="text" class="form-control"
                   value="{{$data->address ?? null}}"
                   placeholder="آدرس :">
        </div>
    </div><!--end col-->


    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label">وضعیت</label>
            <select name="status" class="form-control department-name select2input">
                <option disabled selected>--انتخاب کنید--</option>
                @foreach(\App\Enums\Status::transAll() as $status)
                    <option value="{{$status['value']}}" @selected(!empty($data->status) && $data->status ==  $status['value'])> {{$status['title_fa']}}</option>
                @endforeach
            </select>
        </div>
    </div><!--end col-->

    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label">ادمین</label>
            <select name="is_admin" class="form-control department-name select2input" required>
                <option  disabled selected>--انتخاب کنید--</option>
                <option value="1" @selected(!empty($data) && $data->is_admin === true)>بله</option>
                    <option value="0" @selected(!empty($data) && $data->is_admin === false)>خیر</option>
            </select>
        </div>
    </div><!--end col-->
</div><!--end row-->
