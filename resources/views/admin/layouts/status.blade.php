
@if($status === \App\Enums\Status::PUBLISHED->value)
    <span class="badge bg-soft-success">فعال</span>
@elseif($status === \App\Enums\Status::INACTIVATED->value)
    <span class="badge bg-soft-danger">غیرفعال</span>
@elseif($status === \App\Enums\Status::DRAFTED->value)
    <span class="badge bg-soft-primary">پیش نویس</span>
@elseif($status === \App\Enums\Status::ARCHIVED->value)
    <span class="badge bg-soft-warning">آرشیو</span>
@endif
