{{-- <div class="row container col border p-2 m-auto">
    <div class="col-2 col-md-2">
        <div class="p-0 text-center border rounded-circle" style="height: 50px; width: 50px; overflow: hidden;">
            <img class="h-100" src="{{asset('img/group-icon.jpg')}}" alt="">
        </div>
    </div>
    <div class="col-8 col-md-7 d-flex flex-column">
        <div class="col"><strong>Lorem, ipsum dolor.</strong></div>
        <small>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Lore
        </small>
        <div class="col d-flex align-items-end"><small>## members</small></div>
    </div>
    <div class="col-2 d-flex align-items-end justify-content-end"><em>~Admin</em></div>
</div> --}}

<div class="row container m-auto border flex-column p-0 my-2">
    <div class="col row justify-content-between m-auto mt-2">
        {{-- logo --}}
        <div class="col-2">
            <div class="p-0 text-center border rounded-circle" style="height: 50px; width: 50px; overflow: hidden;">
                <img class="h-100" src="{{asset('img/group-icon.jpg')}}" alt="">
            </div>
        </div>
        {{-- name --}}
        <strong class="col d-flex align-items-end justify-content-start">Lorem ipsum dolor sit amet</strong>
        {{-- date-time --}}
        <div class="row flex-column col-4">
            <small class="d-flex justify-content-end col">Mar 23</small>
            <small class="d-flex justify-content-end col">12:42 pm</small>
        </div>
    </div>
    <div class="mt-2">
        {{-- desc --}}
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima error dolorem excepturi temporibus, a sit velit natus magnam eligendi voluptas!
    </div>
    <div class="row position-relative col my-2">
        {{-- find --}}
        <div class="d-flex justify-content-center">
            <div class="btn btn-primary">Locate</div>
        </div>
        {{-- edit --}}
        <div class="d-flex justify-content-end position-absolute">
            <div class="btn btn-primary">Edit</div>
        </div>
    </div>
</div>