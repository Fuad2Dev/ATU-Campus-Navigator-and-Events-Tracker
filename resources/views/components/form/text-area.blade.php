@props(['maxlength' => 0, 'name', 'label'])
<div class="col">
    <div class="form-outline mb-4 col-md-6 m-auto">
        <textarea class="form-control" id="textAreaExample" style="resize:none" name="{{ $name }}"
            @if ($maxlength > 0) data-mdb-showcounter="true" maxlength="{{ $maxlength }}" @endif rows="4"></textarea>
        <label class="form-label" for="{{ $label }}">{{ $label }}</label>

        @if ($maxlength > 0)
            <div class="form-helper"></div>
        @endif
    </div>
</div>
