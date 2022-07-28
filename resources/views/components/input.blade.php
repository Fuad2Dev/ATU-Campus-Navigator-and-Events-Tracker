@props(['label'])
<div class="form-outline mb-4 col-md-6 m-auto">
    <input {{ $attributes }} type="text" id="{{ $label }}" class="form-control" />
    <label class="form-label" name="{{ $label }}" for="{{ $label }}">{{ $label }}</label>
</div>

{{-- <div class="form-outline mb-4">
    <input type="text" id="form2Example1" class="form-control" />
    <label class="form-label text-white" for="form2Example1">ID</label>
</div> --}}
