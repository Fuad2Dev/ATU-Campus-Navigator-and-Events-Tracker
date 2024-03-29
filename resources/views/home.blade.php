<x-layout>
    <!-- Tabs navs -->
    <x-tab.navs>

        <x-tab.nav name="association" icon_class="fas fa-users" count='{{ $my->associations->count() }}' />
        <x-tab.nav name="feed" icon_class="fas fa-rss" count='{{ $my->events->count() }}' class="active" />
        <x-tab.nav name="notification" icon_class="fas fa-bell" count='{{ $notifications->count() }}' />

    </x-tab.navs>
    <!-- Tabs navs -->

    <!-- Tabs content -->
    <x-tab.contents>

        <x-tab.content for="association">
            @foreach ($my->associations as $association)
                <x-cards.association :association="$association" role="{{ $my->role($association->id) }}" />
            @endforeach

            <a href="{{ route('association.create') }}" type="button"
                class="btn btn-primary btn-lg btn-floating position-fixed bottom-2 end-2">
                <i class="fas fa-plus"></i>
            </a>
            </x-tab-content>

            <x-tab.content for="feed" class="show active">
                @foreach ($my->events as $event)
                    <x-cards.feed :event="$event" />
                @endforeach
                </x-tab-content>

                <x-tab.content for="notification">

                    @foreach ($notifications as $notification)
                        <x-cards.notification :notification="$notification" />
                    @endforeach

                    {{-- <a href="#" type="button"
                        class="btn btn-primary btn-lg btn-floating position-fixed bottom-2 end-2">
                        <i class="fas fa-plus"></i>
                    </a> --}}
                    </x-tab-content>

                    </x-tab-contents>
                    <!-- Tabs content -->


                    <!-- nav -->





</x-layout>
<script>
    // let searchBtn = document.querySelector(".panel-searchicon button");
    // let searchBox = document.querySelector(".panel-searchbox");
    // searchBtn.addEventListener("click", function() {
    //     searchBox.classList.toggle("active");
    // })

    // let sideBtn = document.querySelector(".main-panel .panel-header .panel-button button");
    // let mainPanel = document.querySelector(".main-panel");
    // sideBtn.addEventListener("click", function() {
    //     mainPanel.classList.toggle("active");
    // })
</script>
