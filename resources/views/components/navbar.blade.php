@props(['search' => true])
<div class="d-flex justify-content-between container my-2">
    <x-inc.hamburger />
    <x-inc.cnet />
    @if ($search)
        <x-inc.search />
    @else
        <x-inc.back />
    @endif
</div>
