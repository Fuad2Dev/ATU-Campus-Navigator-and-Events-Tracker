@props(['location'])
<a href="" class="text-black">
    <div class="card container col border p-3 m-auto my-2 d-flex flex-column">
        <strong>{{ $location->name }}</strong>
        @isset($location->block)
            <span>{{ $location->block->name }}</span>
        @endisset
        @isset($location->level)
            @if ($location->level == 1)
                <span>Ground Floor</span>
            @else
                <span>{{ $location->level }} Floor</span>
            @endif
        @endisset
        @if ($location->position)
            <em>~ position: {{ $location->position }} (facing the building)</em>
        @endif
        <div class="d-flex col justify-content-end">
            {{-- <em>~ 2 km</em> --}}
            @isset($location->block)
            <a href="{{ route('direction.2d.place', ['place' => $location]) }}" class="btn btn-success">Direction</a>
            @else
            <a href="{{ route('direction.2d.block', ['block' => $location]) }}" class="btn btn-success">Direction</a>
            @endisset
        </div>
    </div>
</a>
