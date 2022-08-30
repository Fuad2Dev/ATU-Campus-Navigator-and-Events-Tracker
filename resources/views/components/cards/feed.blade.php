@props([
    'logo' => true,
    'editable' => false,
    'event',
    'association'
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
            class="col p-2 d-flex @if ($logo) align-items-end @endif">{{ $event->name }}</strong>
        {{-- date-time --}}
        <div class="row flex-column ">
            <small class="d-flex justify-content-end col">{{ $event->created_at->format('M d') }}</small>
            <small class="d-flex justify-content-end col">{{ $event->created_at->format('h:i a') }}</small>
        </div>
    </div>
    <div class="mt-2">
        {{-- desc --}}
        {{ $event->description }}
    </div>
    <div
        class="d-flex @if ($editable) justify-content-between @else justify-content-center @endif col my-2">
        @if ($editable)
        <form action="{{route('association.event.destroy', compact('association', 'event'))}}" method="post">
            @csrf
            @method('delete')
                <input type="submit" class="btn btn-danger" value="Delete">
        </form>
        @endif
        
        <div class="btn btn-info">Locate</div>

        @if ($editable)
            <a href="{{route('association.event.edit', compact('event', 'association'))}}" class="btn btn-primary">Edit</a>
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
