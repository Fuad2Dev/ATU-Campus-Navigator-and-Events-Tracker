<x-layout>
    <x-navbar :search='false' page="invite"/>

    <form action="{{route('association.search', $association)}}" method="post" class="p-4">
        @csrf
        <x-form.text-box name="search" label="Search" :extend_right_icon="['class' => 'fas fa-search']" />
    </form>
    

    <x-tab.navs>
        <x-tab.nav name="users" count="$users" icon_class="fas fa-user" class="active" />
        <x-tab.nav name="invites" count="" icon_class="fas fa-envelope" />
    </x-tab.navs>

    <x-tab.contents>
        <x-tab.content for="users" class="show active">
            @foreach ($users as $user)
                <x-cards.invite :user="$user" :association="$association" />
            @endforeach
        </x-tab.content>

        <x-tab.content for="invites">
            @foreach ($invited as $user)
                <x-cards.invite :user="$user" :sent="true" />
            @endforeach
        </x-tab.content>
    </x-tab.contents>
</x-layout>
