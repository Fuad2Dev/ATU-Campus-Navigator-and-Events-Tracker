@props([
    'user', 
    'name' => 'Lorem, ipsum dolor.',
     'id' => '#id',
    'role' => '',
    'editable' => false,
    'association'
    ])
<div class="d-flex container col border p-2 m-auto my-2">
    <div class="pr-2">
        <div class="p-0 d-flex align-items-center justify-content-center border rounded-circle"
            style="height: 75.5px; width: 75.5px; overflow: hidden;">
            <i class="fas fa-user fa-3x"></i>
        </div>
    </div>
    <div class="col col-md-7 d-flex  flex-column position-relative">

        <strong>{{ $user->last_name }}</strong>

        <small># {{ $user->id }}</small>

        <div class="col-12 p-2 justify-content-between">
            <a href="{{ route('association.invite.accept', compact('association', 'user')) }}"
                class="col-4 btn btn-success">Accept</a>
            <a href="{{ route('association.decline', compact('association', 'user')) }}" class="col-4 btn btn-danger">Cancel</a>
            {{-- <a href="" class="col-4 btn btn-danger">Block</a> --}}
        </div>
    </div>

</div>
