@props(['required' => false, 'name', 'label', 'type' => 'text'])
<div class="col-12">
    <div class="form-outline">
        @if ($required)
            <i class="fas fa-exclamation-circle trailing"></i>
        @endif
        <input type="{{ $type }}" class="form-control @error($name) is-invalid @enderror"
            name="{{ $name }}" @if ($type == 'text') value="{{ old($name) }}" @endif />
        <label class="form-label">{{ $label }}</label>
        @error($name)
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>
