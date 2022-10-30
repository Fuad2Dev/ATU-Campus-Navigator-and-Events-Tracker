<x-layout>
    {{-- <x-navbar :search='false' page="search" /> --}}

    {{-- <div class="p-4">
        <x-form.text-box name="search" label="Search" />
    </div> --}}
    <form action="{{ route('search') }}" method="post" class="p-4">
        @csrf
        <x-form.text-box name="search" label="Search" :extend_right_icon="['class' => 'fas fa-search']" />
    </form>
    {{-- results --}}
    {{-- <div class="row">
        <div class="col d-flex align-items-center">
            <hr class="col">
        </div>
        <strong class="col-4 d-flex align-items-center justify-content-center">Results</strong>
        <div class="col d-flex align-items-center">
            <hr class="col">
        </div>
    </div> --}}

    <x-tab.navs>
        <x-tab.nav name="associations" count="{{ $associations->count() }}" icon_class="fas fa-users" class="active" />
        <x-tab.nav name="locations" count="{{ $locations->count() }}" icon_class="fas fa-map-marker-alt fa-2x" />
        {{-- <x-tab.nav name="users" count="{{$users->count()}}" icon_class="fas fa-user" /> --}}
    </x-tab.navs>

    <x-tab.contents>
        <x-tab.content for="associations" class="show active">
            @foreach ($associations as $association)
                <x-cards.association :association="$association" role="{{ $association->myRole() }}" />
            @endforeach
        </x-tab.content>

        <x-tab.content for="locations">
            @foreach ($locations as $location)
                <x-cards.place :location="$location"/>
            @endforeach

            <div class="p-4"></div>

            <a href="" type="button" class="btn btn-primary btn-lg  position-fixed bottom-2 end-2">
                Show on map
            </a>
        </x-tab.content>
        {{-- <x-tab.content for="users">
            @foreach ($users as $user)
                <x-cards.invite :user="$user" />
            @endforeach
        </x-tab.content> --}}
    </x-tab.contents>
</x-layout>
