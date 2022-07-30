<x-layout>
    <div class="row p-2">
        {{-- back --}}
        <div class="col-2">
            <div class="border rounded-circle d-flex justify-content-center align-items-center"
                style="height: 40px; width: 40px;">
                <i class="fas fa-angle-left"></i>
            </div>
        </div>
        {{-- search bar --}}
        <div class="col">
            <div class="form-outline">
                <input type="search" id="form1" class="form-control" placeholder="Search..." aria-label="Search" />
            </div>
        </div>
    </div>

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
        <x-tab.content for="associations" class="show active" >
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

        <x-tab.content for="users" >
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
