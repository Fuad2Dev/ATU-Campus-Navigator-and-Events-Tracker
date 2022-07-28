@props(['name', 'active_section', 'icon_class'])
<li>
    <a data-toggle="collapse" href="#{{ $name }}" {{ $active_section == '{{ $name }}' ? 'aria-expanded=true' : '' }}>
        <i class="{{ $icon_class}}"></i>
        <span class="nav-link-text">{{ $name }}</span>
        <b class="caret mt-1"></b>
    </a>

    <div class="collapse {{ $active_section == '{{ $name }}' ? 'show' : '' }}" id="transactions">
        <ul class="nav pl-4">
            {{ $slot }}
        </ul>
    </div>
</li>
