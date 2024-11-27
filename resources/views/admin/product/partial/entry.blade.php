<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label">نام</label>
            <input name="name" id="name" type="text" class="form-control"
                   value="{{$data->name ?? null}}"
                   placeholder="نام :">
        </div>
    </div><!--end col-->

    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label">ادرس اینترنتی</label>
            <input name="slug" id="slug" type="text" class="form-control"
                   value="{{$data->slug ?? null}}"
                   placeholder="ادرس اینترنتی :">
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
    </div>

</div>
