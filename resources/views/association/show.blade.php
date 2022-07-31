<x-layout>
    <!-- nav -->
    <x-navbar />
    <!-- nav -->

    <!-- /association -->
    <div class="container row mt-2">
        {{-- img --}}
        <div class="col-4 d-flex justify-content-center">
            <x-inc.association-img />
        </div>

        {{-- details --}}
        <div class="col">
            {{-- name --}}
            <div class="text-center"><strong>Lorem ipsum dolor sit amet consectetur</strong></div>
            {{-- id --}}
            <div class="text-center text-success">
                <small>#Lorem246</small>
            </div>
        </div>

        {{-- separator --}}
        <div class="col-12">
            <hr class="col-11 mx-auto">
        </div>

        {{-- about --}}
        <div class=" col-12 text-center">
            <small>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero dolorem, dolorum ab dolor nemo cumque fuga
                molestias in laboriosam sunt!
            </small>
        </div>

        {{-- edit btn --}}
        <div class="col-12 d-flex justify-content-between align-items-center mt-2">
            <div>
                <a class="btn btn-primary">
                    edit <i class="fas fa-edit"></i>
                </a>
                
                <a class="btn btn-danger">
                    Leave
                </a>
            </div>
            {{-- <div class="text-primary">edit</div> --}}
            <small>created --/--/---</small>
        </div>

        {{-- separator --}}
        <div class="col-12">
            <hr class="col-11 mx-auto">
        </div>
    </div>
    <!-- /association -->

    <x-tab.navs>
        <x-tab.nav name='members' icon_class='fas fa-user' count='15' class="active"/>

        <div class="btn btn-primary btn-floating ">
            <i class="fas fa-plus"></i>
        </div>

        <x-tab.nav name='events' icon_class='fas fa-calendar-alt' count='5' />
    </x-tab.navs>

    <x-tab.contents>
        <x-tab.content for='members' class="show active">
            <x-cards.user role="admin"/>
            <x-cards.user role="co-admin"/>
            <x-cards.user :editable='true' />
            <x-cards.user :editable='true' />
            <x-cards.user :editable='true' />
            <x-cards.user :editable='true' />
            <x-cards.user :editable='true' />
            <x-cards.user :editable='true' />
            <x-cards.user :editable='true' />
            <x-cards.user :editable='true' />
        </x-tab.content>

        <x-tab.content for='events'>
            <x-cards.feed :logo="false" :editable="true" />
            <x-cards.feed :logo="false" :editable="true" />
            <x-cards.feed :logo="false" :editable="true" />
            <x-cards.feed :logo="false" :editable="true" />
            <x-cards.feed :logo="false" :editable="true" />
            <x-cards.feed :logo="false" :editable="true" />
            <x-cards.feed :logo="false" :editable="true" />
            <x-cards.feed :logo="false" :editable="true" />
            <x-cards.feed :logo="false" :editable="true" />
            <x-cards.feed :logo="false" :editable="true" />
            <x-cards.feed :logo="false" :editable="true" />
            <x-cards.feed :logo="false" :editable="true" />
            <x-cards.feed :logo="false" :editable="true" />
            <x-cards.feed :logo="false" :editable="true" />
            <x-cards.feed :logo="false" :editable="true" />
        </x-tab.content>
    </x-tab.contents>

</x-layout>
