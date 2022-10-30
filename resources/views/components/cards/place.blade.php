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
        <div class="d-flex col justify-content-between">
            <em>~ 2 km</em>
            <div class="btn btn-success">Direction</div>
        </div>
    </div>
</a>