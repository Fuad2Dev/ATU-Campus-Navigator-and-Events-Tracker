<x-layout>
    <x-navbar :search='false' />

    {{-- <div class="p-4">
        <x-form.text-box name="search" label="Search" />
    </div> --}}
    <form action="{{route('search')}}" method="post" class="p-4">
        @csrf
        <x-form.text-box name="search" label="Search" :extend_right_icon="['class' => 'fas fa-search']" />
    </form>
    {{-- results --}}
    <div class="row">
        <div class="col d-flex align-items-center">
            <hr class="col">
        </div>
        <strong class="col-4 d-flex align-items-center justify-content-center">Results (##)</strong>
        <div class="col d-flex align-items-center">
            <hr class="col">
        </div>
    </div>

    <x-tab.navs>
        <x-tab.nav name="associations" count="7" icon_class="fas fa-users" class="active" />
        <x-tab.nav name="users" count="7" icon_class="fas fa-user" />
    </x-tab.navs>

    <x-tab.contents>
        <x-tab.content for="associations" class="show active">
            <x-cards.association />
            <x-cards.association />
            <x-cards.association />
            <x-cards.association />
            <x-cards.association />
            <x-cards.association />
            <x-cards.association />
            <x-cards.association />
            <x-cards.association />
            <x-cards.association />
            <x-cards.association />
            <x-cards.association />
            <x-cards.association />
            <x-cards.association />
        </x-tab.content>

        <x-tab.content for="users">
            <x-cards.user />
            <x-cards.user />
            <x-cards.user />
            <x-cards.user />
            <x-cards.user />
            <x-cards.user />
            <x-cards.user />
            <x-cards.user />
            <x-cards.user />
            <x-cards.user />
            <x-cards.user />
            <x-cards.user />
            <x-cards.user />
            <x-cards.user />
            <x-cards.user />
            <x-cards.user />
            <x-cards.user />
            <x-cards.user />
            <x-cards.user />
            <x-cards.user />
        </x-tab.content>
    </x-tab.contents>
</x-layout>
