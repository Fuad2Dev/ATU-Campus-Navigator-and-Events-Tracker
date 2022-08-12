@props(['association'])
<div class="row container col border p-2 m-auto my-2">
    <div class="col-3 col-md-2">
        <x-inc.association-img />
    </div>
    <div class="col-6 col-md-7 d-flex flex-column">
        <div class="col"><strong>{{ $association->name }}</strong></div>
        <div class="col d-flex align-items-end"><small>## members</small></div>
    </div>
    <div class="col-3 d-flex align-items-end justify-content-end"><em>~Admin</em></div>
</div>