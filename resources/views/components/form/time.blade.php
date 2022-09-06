@props(['name', 'label', 'value' => ''])
<div class="col">
    <div class="form-outline mb-4 col-md-6 m-auto">
        <input class="form-control @error($name) is-invalid @enderror @error("date_time") is-invalid @enderror" step="1800" type="time" name="{{$name}}" id="{{$label}}" value="{{$value}}" {{ $attributes }} >
        <label class="form-label" for="{{ $label }}">{{ $label }}</label>
    </div>
</div>


