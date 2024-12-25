{{-- Show error message --}}
@if (!empty($errors) && count($errors) > 0)
    <div class="alert alert-danger alert-dismissible fade show mb-0 col-4" role="alert">
        <ul>
                <strong> {{ $errors->first() }} </strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <br>
        </ul>
    </div>
@endif

@if ($message = session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong> {{ $message }} </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

