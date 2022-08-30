<x-layout page="event.create">

    <x-navbar />

    <form class="container mx-auto row g-4 mt-4" method="POST" action="{{route('association.event.store', $association)}}">
        @csrf
        <x-form.text-box name="name" label="event" />

        <x-form.text-area label="description" name="description" maxlength='140' />
        
        <x-form.select type="radio" name="location" label="location" :options="['one', 'two', 'three']" />
        

        <div>
            <small class="p-2">Invite List</small>
            <x-form.radio label="invite" name="invite_type_id" :options="$inviteTypes" :selected="2"/>
        </div>


        <div class="d-flex container justify-content-between">
            <div class="btn btn-danger">Cancel</div>
            
            <input class="btn btn-primary" type="submit" value="Create">
        </div>
    </form>

   
    

</x-layout>