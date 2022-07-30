<x-layout>
    <div class="d-flex flex-column vh-100">
        <!-- Tabs navs -->
        <ul class="nav nav-tabs mb-3 justify-content-around" id="ex-with-icons" role="tablist">

            <x-tab name="association" icon_class="fas fa-users" count='7' />
            <x-tab name="feed" icon_class="fas fa-rss" count='3' class="active"/>
            <x-tab name="notification" icon_class="fas fa-bell" count='8' />


        </ul>
        <!-- Tabs navs -->

        <!-- Tabs content -->
        <div class="tab-content border-top col" id="ex-with-icons-content" style="overflow-y: scroll">

            <x-tab-content name="association">
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
                <x-cards.association />
                <x-cards.association />
            </x-tab-content>

            <x-tab-content name="feed" class="show active">
                <x-cards.feed />
                <x-cards.feed />
                <x-cards.feed />
                <x-cards.feed />
                <x-cards.feed />
                <x-cards.feed />
                <x-cards.feed />
                <x-cards.feed />
                <x-cards.feed />
                <x-cards.feed />
                <x-cards.feed />
                <x-cards.feed />
                <x-cards.feed />
                <x-cards.feed />
                <x-cards.feed />
                <x-cards.feed />
                <x-cards.feed />
                <x-cards.feed />
                <x-cards.feed />
            </x-tab-content>

            <x-tab-content name="notification" >
                <x-cards.notification />
                <x-cards.notification />
                <x-cards.notification />
                <x-cards.notification />
                <x-cards.notification />
                <x-cards.notification />
                <x-cards.notification />
                <x-cards.notification />
                <x-cards.notification />
                <x-cards.notification />
                <x-cards.notification />
                <x-cards.notification />
                <x-cards.notification />
                <x-cards.notification />
                <x-cards.notification />
                <x-cards.notification />
                <x-cards.notification />
                <x-cards.notification />
                <x-cards.notification />
                <x-cards.notification />
                <x-cards.notification />
                <x-cards.notification />
                <x-cards.notification />
                <x-cards.notification />
                <x-cards.notification />
                <x-cards.notification />
                <x-cards.notification />
            </x-tab-content>
        </div>
        <!-- Tabs content -->
    </div>
</x-layout>
