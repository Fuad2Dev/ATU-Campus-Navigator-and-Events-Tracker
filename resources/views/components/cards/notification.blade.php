@props(['group_name' => 'Lorem, ipsum dolor.', 'notification', 'my'])
@if ($notification['association'])
    <a href="{{ route('association.show', $notification['association']) }}" class="text-black">
        <div class="row container col border p-2 m-auto my-2">
            <div class="col-2 col-md-2">
                <div class="p-0 text-center border rounded-circle" style="height: 50px; width: 50px; overflow: hidden;">
                    <img class="h-100" src="{{ asset('img/group-icon.jpg') }}" alt="">
                </div>
            </div>
            <div class="col col-md-7 d-flex flex-column">
                <div class="col"><strong>{{ $notification['association']->name }}</strong></div>
                <div class="col"><small>{{ $notification['description'] }}</small></div>
            </div>
            <div class="col-4 row flex-column justify-content-between">
                <div>
                    <small class="d-flex justify-content-end col">{{ $notification['time']->format('M d') }}</small>
                    <small class="d-flex justify-content-end col">{{ $notification['time']->format('h:i a') }}</small>
                </div>
                <div class="text-end">
                    <i class="fas fa-circle text-primary"></i>
                </div>
            </div>
        </div>
    </a>
@else
    <div class="row container col border p-2 m-auto my-2">
        <div class="col-2 col-md-2">
            <div class="p-0 text-center border rounded-circle" style="height: 50px; width: 50px; overflow: hidden;">
                <img class="h-100" src="{{ asset('img/group-icon.jpg') }}" alt="">
            </div>
        </div>
        <div class="col col-md-7 d-flex flex-column">
            <div class="col"><strong>{{ $notification['association']->name }}</strong></div>
            <div class="col"><small>{{ $notification['description'] }}</small></div>
        </div>
        <div class="col-4 row flex-column justify-content-between">
            <div>
                <small class="d-flex justify-content-end col">Mar 23</small>
                <small class="d-flex justify-content-end col">12:42 pm</small>
            </div>
            <div class="text-end">
                <i class="fas fa-circle text-primary"></i>
            </div>
        </div>
    </div>
@endif
