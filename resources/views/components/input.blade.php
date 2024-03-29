@props(['label', 'name' => '', 'type' => 'text', 'maxlength' => 0, 'options' => ['one', 'two', 'three']])

@switch($type)
    @case('select')
        <div class="mb-4">
            <select class="form-control {{ $label }}" name="{{ $label }}">
                <option></option>
                @foreach ($options as $option)
                    <option value="{{ $option }}">{{ $option }}</option>
                @endforeach

            </select>
        </div>

        <script>
            $(document).ready(function() {
                $('.{{ $label }}').select2({
                    placeholder: 'select {{ $label }}'
                });
            });
        </script>
    @break

    @case('checkbox')
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="{{ $label }}" id="{{ $label }}" name="{{ $label }}" />
            <label class="form-check-label" for="{{ $label }}">{{ $label }}</label>
        </div>
    @break

    @case('radio')
        @foreach ($options as $option)
            <div class="form-check">
                <input class="form-check-input" type="radio" name="{{$name}}" value="{{$option}}" id="{{$name}}" checked />
                <label class="form-check-label" for="{{$name}}">{{$option}}</label>
            </div>
        @endforeach
    @break

    @default
        <div class="form-outline mb-4 col-md-6 m-auto">
            @if ($type == 'textarea')
                <textarea class="form-control" id="textAreaExample" style="resize:none"
                    @if ($maxlength > 0) data-mdb-showcounter="true" maxlength="{{ $maxlength }}" @endif
                    rows="4"></textarea>
            @else
                <input {{ $attributes }} name="{{ $name ? $name : $label; }}" type="{{ $type }}" id="{{ $label }}" class="form-control" />
            @endif
            <label class="form-label" for="{{ $label }}">{{ $label }}</label>

            @if ($maxlength > 0)
                <div class="form-helper"></div>
            @endif
        </div>
@endswitch


{{-- <div class="form-outline mb-4">
    <input type="text" id="form2Example1" class="form-control" />
    <label class="form-label text-white" for="form2Example1">ID</label>
</div> --}}
