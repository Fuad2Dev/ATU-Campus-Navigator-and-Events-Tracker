@props(['src' => '', 'size' => '75.5', 'logo_size' => 3 ])
<div class="p-0 d-flex align-items-center justify-content-center border rounded-circle"
    style="height: {{$size}}px; width: {{$size}}px; overflow: hidden;">
    @if ($src == '')
        <i class="fas fa-users fa-{{$logo_size}}x"></i>
    @else
        <img src="{{$src}}" class="h-100">
    @endif
</div>
