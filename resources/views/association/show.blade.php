<x-layout>
    <!-- /association -->
    <div class="container row mt-2">
        
        {{-- img --}}
        <div class="col-4 d-flex justify-content-center">
            <x-inc.association-img />
        </div>

        {{-- details --}}
        <div class="col">
            {{-- name --}}
            <div class="text-center"><strong>{{ $association->name }}</strong></div>
            {{-- id --}}
            <div class="text-center text-success">
                <small>#{{ $association->id }}</small>
            </div>
        </div>

        {{-- separator --}}
        <div class="col-12">
            <hr class="col-11 mx-auto">
        </div>

        {{-- about --}}
        <div class=" col-12 text-center">
            <small>
                {{ $association->description }}

            </small>
        </div>

        {{-- ctrl btns --}}
        <div class="col-12 d-flex justify-content-between align-items-center mt-2">
            @switch($association->myRoleId())
                @case(1)
                    <div class="d-flex">
                        <a class="btn btn-primary" href="{{route('association.edit', $association)}}">
                            Edit <i class="fas fa-edit"></i>
                        </a>
                        <div class="p-2"></div>
                        <form action="{{route('association.destroy', $association)}}" method="post" >
                            @csrf
                            @method('delete')
                            <input class="btn btn-danger" type="submit" value="Delete">
                        </form>
                        </a>
                    </div>
                @break

                @case(2) 
                    <div>
                        <a class="btn btn-primary">
                            Edit <i class="fas fa-edit"></i>
                        </a>

                        <a class="btn btn-danger" href="{{ route('association.leave', $association) }}">
                            Leave
                        </a>
                    </div>
                @break

                @case(3)
                    <div>
                        <a class="btn btn-danger" href="{{ route('association.leave', $association) }}">
                            Leave
                        </a>
                    </div>
                @break

                @case(4)
                    <div>
                        <a class="btn btn-danger" href="{{route('association.cancel', $association)}}">
                            Cancel Request
                        </a>
                    </div>
                @break

                @case(5)
                    <div>
                        <a class="btn btn-success" href="{{route('association.invite.accept', $association)}}">
                            Accept Invite
                        </a>
                    </div>
                @break

                @default
                    <div>
                        <a class="btn btn-success" href="{{ route('association.request', $association) }}">
                            Join
                        </a>
                    </div>
            @endswitch

            {{-- <div class="text-primary">edit</div> --}}
            <small><strong> created: </strong>{{$association->created_at->format('d-M-y')}}</small>
        </div>

        {{-- separator --}}
        <div class="col-12">
            <hr class="col-11 mx-auto">
        </div>
    </div>
    <!-- /association -->

    <x-tab.navs>
        <x-tab.nav name='members' icon_class='fas fa-user' count='{{ $association->allMembers->count() }}'
            class="active" />

        {{-- <div class="btn btn-primary btn-floating ">
            <i class="fas fa-plus"></i>
        </div> --}}

        <x-tab.nav name='events' icon_class='fas fa-calendar-alt' count='{{$association->events->count()}}' />
        @if ($association->myRoleId() == 1 || $association->myRoleId() == 2)
            <x-tab.nav name='requests' icon_class='fas fa-sync-alt ' :count='$requests->count()' />
        @endif
    </x-tab.navs>

    <x-tab.contents>
        <x-tab.content for='members' class="show active">
            {{-- admin --}}
            <x-cards.user :user="$association->admin->first()" :role="$association
                ->admin()
                ->first()
                ->role($association->id)" />
            {{-- co-admin --}}
            @php
                $hasCoAdmin = $association->coAdmin()->count() > 0 ? true : false;
            @endphp
            @if ($hasCoAdmin)
                <x-cards.user :user="$association->coAdmin->first()" :association="$association" :editable="true" :role="$association
                    ->coAdmin()
                    ->first()
                    ->role($association->id)"
                    :hasCoAdmin="$hasCoAdmin" 
                    :isCoAdmin="true"
                    />
            @endif

            @foreach ($association->members as $member)
                <x-cards.user :user="$member" :role="$member->role($association->id)" :editable="true" :association="$association"
                    :hasCoAdmin="$hasCoAdmin" />
            @endforeach
            
            
            <div class="p-4"></div>

            <a href="{{route('association.add', $association)}}" type="button" class="btn btn-primary btn-lg btn-floating position-fixed bottom-2 end-2">
                <i class="fas fa-plus"></i>
            </a>
        </x-tab.content>

        <x-tab.content for='events'>
            @foreach ($association->events as $event)
                <x-cards.feed :logo="false" :minified="true" :event="$event" :association="$association" />
            @endforeach
           

            <div class="p-4"></div>

            <a href="{{route('association.event.create', $association)}}" type="button" class="btn btn-primary btn-lg btn-floating position-fixed bottom-2 end-2">
                <i class="fas fa-plus"></i>
            </a>
        </x-tab.content>

        @if ($association->myRoleId() == 1 || $association->myRoleId() == 2)

            <x-tab.content for='requests'>

                @foreach ($requests as $member)
                    <x-cards.request :user="$member" :role="$member->role($association->id)" :association="$association" />
                @endforeach

            </x-tab.content>

        @endif


    </x-tab.contents>

</x-layout>
