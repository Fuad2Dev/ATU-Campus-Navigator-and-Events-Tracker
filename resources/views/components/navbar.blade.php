@props(['search' => true, 'page'])
<div class="d-flex justify-content-between container my-2" style="align-items: center">
    <x-inc.hamburger />
    <x-inc.cnet />
    @if ($search)
        <x-inc.search />
    @else
        <x-inc.back  page="{{$page}}"/>
    @endif
</div>
