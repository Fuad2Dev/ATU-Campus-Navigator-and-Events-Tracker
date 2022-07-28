@props(['name', 'icon_class', 'count'])
<li class="nav-item" role="presentation" >
    <a class="nav-link active position-relative" id="ex-with-icons-tab-1" data-mdb-toggle="tab" href="#{{$name}}"
        role="tab" aria-controls="{{$name}}" aria-selected="true">
        <i class="{{$icon_class}}"></i>
        @if ($count > 0)
            <span class="position-absolute top-10 start-100 translate-middle badge rounded-pill bg-danger">
                {{ $count }}
            </span>
        @endif

    </a>
</li>
