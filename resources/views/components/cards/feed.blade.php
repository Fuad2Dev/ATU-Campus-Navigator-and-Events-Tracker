@props([
    'minified' => false,
    'editable' => false,
    'event',
    'association',
])


{{-- <div style="box-shadow: 0 2px 5px 0 rgb(0 0 0 / 20%), 0 2px 10px 0 rgb(0 0 0 / 10%);" class="row container m-auto border flex-column p-0 my-2"> --}}
<div class="card row container m-auto border flex-column p-0 my-2">
    <div class="card-header col d-flex justify-content-between m-auto mt-2">
        {{-- logo --}}
        @if (!$minified)
            <div>
                <div class="p-0 text-center border rounded-circle" style="height: 50px; width: 50px; overflow: hidden;">
                    <img class="h-100" src="{{ asset('img/group-icon.jpg') }}" alt="">
                </div>
            </div>

            {{-- name --}}
            <strong class="col p-2 d-flex align-items-end ">{{ $event->association->name }}</strong>
        @else
            <strong class="col p-2 d-flex">{{ $event->name }}</strong>
        @endif
        {{-- date-time --}}
        {{-- <div class="row flex-column ">
            <small class="d-flex justify-content-end col">{{ $event->created_at->format('M d') }}</small>
            <small class="d-flex justify-content-end col">{{ $event->created_at->format('h:i a') }}</small>
        </div> --}}
    </div>
    <div class="my-2">
        {{-- desc --}}
        @if (!$minified)
            <strong>Event: </strong>{{ $event->name }} <br>
        @endif
        <strong>Date: </strong>{{ $event->date_time->format('l M d') }} <br>
        <strong>Time: </strong>{{ $event->date_time->format('h:i a') }} <br>
        <strong>Location: </strong>{{ $event->place->name }} <br>
        <div class="p-2"></div>
        <em class="p-3"> ~ {{ $event->description }} </em>
    </div>
    <div
        class="d-flex @if ($editable) justify-content-between @else justify-content-center @endif col my-2">
        @if ($editable)
            <form action="{{ route('association.event.destroy', compact('association', 'event')) }}" method="post">
                @csrf
                @method('delete')
                <input type="submit" class="btn btn-danger" value="Delete">
            </form>
        @endif

        <a class="btn btn-info" href="{{ route('direction.2d.place', ['place' => $event->place]) }}">Locate</a>

        @if ($editable)
            <a href="{{ route('association.event.edit', compact('event', 'association')) }}"
                class="btn btn-primary">Edit</a>
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
