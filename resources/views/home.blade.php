<x-layout>
    
        <!-- nav -->
           <x-navbar />
        <!-- nav -->
        
        <!-- Tabs navs -->
        <x-tab.navs>

            <x-tab.nav name="association" icon_class="fas fa-users" count='7' />
            <x-tab.nav name="feed" icon_class="fas fa-rss" count='3' class="active"/>
            <x-tab.nav name="notification" icon_class="fas fa-bell" count='8' />

        </x-tab.navs>
        <!-- Tabs navs -->

        <!-- Tabs content -->
        <x-tab.contents>

            <x-tab.content for="association">
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

                <a href="{{route('association.create')}}" type="button" class="btn btn-primary btn-lg btn-floating position-fixed bottom-2 end-2">
                    <i class="fas fa-plus"></i>
                </a>
            </x-tab-content>

            <x-tab.content for="feed" class="show active">
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

            <x-tab.content for="notification" >
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

        </x-tab-contents>
        <!-- Tabs content -->
    
</x-layout>
