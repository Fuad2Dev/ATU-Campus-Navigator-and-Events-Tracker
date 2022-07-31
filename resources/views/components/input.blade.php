@props(['label', 'type' => 'text', 'maxlength' => 0])
<div class="form-outline mb-4 col-md-6 m-auto">
    @if ($type == 'textarea')
        <textarea class="form-control" id="textAreaExample" style="resize:none"
            @if ($maxlength > 0) data-mdb-showcounter="true" maxlength="{{ $maxlength }}" @endif rows="4"></textarea>
    @else
        <input {{ $attributes }} type="{{ $type }}" id="{{ $label }}" class="form-control" /> @endif
            <label class="form-label" name="{{ $label }}" for="{{ $label }}">{{ $label }}</label>

    @if ($maxlength > 0)
    <div class="form-helper"></div>
    @endif
</div>

{{-- <div class="form-outline mb-4">
    <input type="text" id="form2Example1" class="form-control" />
    <label class="form-label text-white" for="form2Example1">ID</label>
</div> --}}
