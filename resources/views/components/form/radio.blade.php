@props(['name', 'options', 'selected'])
@foreach ($options as $option)
    {{-- {{ $option }} --}}
    <div class="form-check">
        <input class="form-check-input" type="radio" name="{{ $name }}" value="{{ $option->id }}"
            id="{{ $name }}" @if($option->id == $selected) checked @endif/>
        <label class="form-check-label" for="{{ $name . $selected }}">{{ $option->description }}</label>
    </div>
@endforeach
