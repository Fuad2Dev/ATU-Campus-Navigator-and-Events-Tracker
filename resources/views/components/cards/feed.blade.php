@props([
    'title' => 'Lorem ipsum dolor sit',
    'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima error dolorem excepturi temporibus, a sit velit natus magnam eligendi voluptas!',
    'date' => 'Mar 23',
    'time' => '12:42 pm',
    'logo' => true,
    'editable' => false,
])

<div class="row container m-auto border flex-column p-0 my-2">
    <div class="col d-flex justify-content-between m-auto mt-2">
        {{-- logo --}}
        @if ($logo)
            <div>
                <div class="p-0 text-center border rounded-circle" style="height: 50px; width: 50px; overflow: hidden;">
                    <img class="h-100" src="{{ asset('img/group-icon.jpg') }}" alt="">
                </div>
            </div>
        @endif

        {{-- name --}}
        <strong
            class="col p-2 d-flex @if ($logo) align-items-end @endif">{{ $title }}</strong>
        {{-- date-time --}}
        <div class="row flex-column ">
            <small class="d-flex justify-content-end col">{{ $date }}</small>
            <small class="d-flex justify-content-end col">{{ $time }}</small>
        </div>
    </div>
    <div class="mt-2">
        {{-- desc --}}
        {{ $description }}
    </div>
    <div
        class="d-flex @if ($editable) justify-content-between @else justify-content-center @endif col my-2">
        @if ($editable)
            <div class="btn btn-danger">Delete</div>
        @endif
        
        <div class="btn btn-info">Locate</div>

        @if ($editable)
            <div class="btn btn-primary">Edit</div>
        @endif


        <!--
        {{-- find --}}
        <div class="d-flex justify-content-center">
            <div class="btn btn-primary">Locate</div>
        </div>
        {{-- edit --}}
        <div class="d-flex justify-content-end position-absolute">
            <div class="btn btn-primary">Edit</div>
        </div>

        {{-- delete --}}
        <div class="d-flex justify-content-start position-absolute">
            <div class="btn btn-danger">Edit</div>
        </div>
    -->
    </div>
</div>
