@props([
    'user',
    'name' => 'Lorem, ipsum dolor.',
    'id' => '#id',
    'role' => '',
    'editable' => false
])
<div class="d-flex container col border p-2 m-auto my-2">
    <div class="pr-2">
        <div class="p-0 d-flex align-items-center justify-content-center border rounded-circle"
            style="height: 75.5px; width: 75.5px; overflow: hidden;">
            <i class="fas fa-user fa-3x"></i>
        </div>
    </div>
    <div class="col col-md-7 d-flex justify-content-end flex-column position-relative">

        <strong>{{ $user->last_name }}</strong>
        <div class="d-flex justify-content-between">
            <small># {{ $user->id }}</small>
            @if ($role != '')
                <em>~{{ $role }}</em>
            @endif
        </div>

        @if ($editable)
        <div class="btn btn-danger btn-floating position-absolute top-0 end-0">
            <i class="fas fa-minus"></i>
        </div>
        @endif
    </div>

</div>
