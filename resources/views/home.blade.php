<x-layout>
    
        <!-- nav -->
           <x-navbar />
        <!-- nav -->
        
        <!-- Tabs navs -->
        <x-tab.navs>

            <x-tab.nav name="association" icon_class="fas fa-users" count='{{$my->associations->count()}}' />
            <x-tab.nav name="feed" icon_class="fas fa-rss" count='3' class="active"/>
            <x-tab.nav name="notification" icon_class="fas fa-bell" count='+8' />

        </x-tab.navs>
        <!-- Tabs navs -->

        <!-- Tabs content -->
        <x-tab.contents>

            <x-tab.content for="association">
                @foreach ($my->associations as $association)
                    <x-cards.association :association="$association" role="{{$my->role($association->id)}}" />  
                @endforeach

                <a href="{{route('association.create')}}" type="button" class="btn btn-primary btn-lg btn-floating position-fixed bottom-2 end-2">
                    <i class="fas fa-plus"></i>
                </a>
            </x-tab-content>

            <x-tab.content for="feed" class="show active">
                @foreach ($events as $event)
                <x-cards.feed :event="$event"/>
                @endforeach
            </x-tab-content>

            <x-tab.content for="notification" >
                
                @foreach ($notifications as $notification)
                    <x-cards.notification :notification="$notification" />
                @endforeach
                
            </x-tab-content>

        </x-tab-contents>
        <!-- Tabs content -->
    
</x-layout>
