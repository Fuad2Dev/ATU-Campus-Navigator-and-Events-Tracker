<x-layout>
    <!-- Tabs navs -->
    <ul class="nav nav-tabs mb-3 justify-content-around" id="ex-with-icons" role="tablist">

        <x-tab name="association"  icon_class="fas fa-users" count='7' />
        <x-tab name="feed" icon_class="fas fa-rss" count='3'  />
        <x-tab name="notification" icon_class="fas fa-bell" count='8' class="active"/>


    </ul>
    <!-- Tabs navs -->

    <!-- Tabs content -->
    <div class="tab-content" id="ex-with-icons-content">

        <x-tab-content name="association" >
            <x-cards.association />
        </x-tab-content>

        <x-tab-content name="feed" >
            <x-cards.feed />
        </x-tab-content>

        <x-tab-content name="notification" class="show active">
            <x-cards.notification />
        </x-tab-content>
    </div>
    <!-- Tabs content -->
</x-layout>