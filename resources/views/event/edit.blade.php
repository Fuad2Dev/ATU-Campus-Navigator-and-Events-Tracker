<x-layout page="event.create">

    <x-navbar />

    <form class="container mx-auto row g-4 mt-4" method="POST" action="{{route('association.event.update', compact('association', 'event'))}}">
        @csrf
        @method('put')
        <x-form.text-box name="name" label="event" value="{{$event->name}}" />

        <x-form.text-area label="description" name="description" maxlength='140' value="{{$event->description}}"/>
        
        <x-form.select type="radio" name="location" label="location" :options="['one', 'two', 'three']" />
        

        <div>
            <small class="p-2">Invite List</small>
            <x-form.radio label="invite" name="invite_type_id" :options="$inviteTypes" :selected="$event->invite_type_id"/>
        </div>


        <div class="d-flex container justify-content-between">
            <div class="btn btn-danger">Cancel</div>
            
            <input class="btn btn-success" type="submit" value="Update">
        </div>
    </form>

   
    

</x-layout>