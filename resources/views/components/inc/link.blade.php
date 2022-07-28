@props(['name', 'active_link', 'route', 'icon_class'])
<li @if ($active_link == '{{ $name }}') class="active " @endif>
    <a href="{{ $route }}">
        <i class="{{ $icon_class }}"></i>
        <p>{{ $name }}</p>
    </a>
</li>