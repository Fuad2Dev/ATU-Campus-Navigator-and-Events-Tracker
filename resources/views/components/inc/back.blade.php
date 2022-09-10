<div class="border rounded-circle d-flex justify-content-center align-items-center" style="height: 40px; width: 40px;">
    @if ($page = 'invite')
        <a href="">
            <i class="fas fa-angle-left"></i>
        </a>
    @else
        <a href="{{ route('home') }}">
            <i class="fas fa-angle-left"></i>
        </a>
    @endif
</div>
