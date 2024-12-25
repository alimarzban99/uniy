<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label">نام</label>
            <input name="name" id="name" type="text" class="form-control"
                   value="{{$data->name ?? old('name')}}"
                   placeholder="نام :">
        </div>
    </div><!--end col-->

    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label">ادرس اینترنتی</label>
            <input name="slug" id="slug" type="text" class="form-control"
                   value="{{$data->slug ?? old('slug')}}"
                   placeholder="ادرس اینترنتی :">
        </div>
    </div><!--end col-->

    <div class="col-md-6">
        <div class="mb-3">
            <label class="form-label">وضعیت</label>
            <select name="status" class="form-control department-name select2input">
                <option disabled selected>--انتخاب کنید--</option>
                @foreach(\App\Enums\Status::transAll() as $status)
                    <option
                        value="{{$status['value']}}" @selected(!empty($data->status) && $data->status ==  $status['value'])> {{$status['title_fa']}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="col-md-6 mb-5">
        <div class="d-grid">
            <p class="form-label">تصویر</p>
            <div class="preview-box d-block justify-content-center rounded shadow overflow-hidden bg-light p-1"></div>
            <input type="file" id="image" name="image" accept="image/*" onchange="{handleChange()}" hidden="">
            <label class="btn-upload btn btn-primary mt-4" for="image">آپلود</label>
        </div>
    </div>

</div>

@section('custom-script')
    <script>
        const handleChange = () => {
            const fileUploader = document.querySelector('#image');
            const getFile = fileUploader.files
            if (getFile.length !== 0) {
                const uploadedFile = getFile[0];
                readFile(uploadedFile);
            }
        }

        const readFile = (uploadedFile) => {
            if (uploadedFile) {
                const reader = new FileReader();
                reader.onload = () => {
                    const parent = document.querySelector('.preview-box');
                    parent.innerHTML = `<img  width="200" height="200" class="preview-content" src=${reader.result}  alt="blog"/>`;
                };

                reader.readAsDataURL(uploadedFile);
            }
        };
    </script>

@endsection
