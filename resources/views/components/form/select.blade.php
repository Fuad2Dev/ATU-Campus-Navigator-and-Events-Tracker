@props(['maxlength' => 0, 'name', 'label', 'value' => '', 'options'])
<div class="mb-4">
    <select class="form-control {{ $label }} @error($name) is-invalid @enderror" name="{{ $name }}">
        <option></option>
        @foreach ($options as $option)
            <option value="{{ $option->id }}">{{ $option->name }}</option>
        @endforeach

    </select>
    @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<script>
    $(document).ready(function() {
        $('.{{ $label }}').select2({
            placeholder: 'select {{ $label }}'
        });
    });
</script>