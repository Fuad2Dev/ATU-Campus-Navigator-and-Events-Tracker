<x-layout page="event.create">

    <x-navbar />

    <form id="update" class="container mx-auto row g-4 mt-4" method="POST" action="{{route('association.event.update', compact('association', 'event'))}}">
        @csrf
        @method('put')
        <x-form.text-box name="name" label="event" value="{{$event->name}}" />

        <x-form.text-area label="description" name="description" maxlength='140' value="{{$event->description}}"/>
        
            <div class="row mx-auto p-0">
                <x-form.date label="date" name="date" min="{{ $now->format('Y-m-d') }}"
                    value="{{ $event->date_time->format('Y-m-d') }}" />
    
                <x-form.time label="time" name="time" :value="$event->date_time->format('H:i')" />
    
                @error("time")
                    <div class="text-danger col-12">{{ $message }}</div>
                @enderror
    
                @error("date_time")
                    <div class="text-danger col-12">{{ $message }}</div>
                @enderror
    
            </div>
    
            <x-form.select type="radio" name="location" label="location" :options="['one', 'two', 'three']" />
    
    
    
            <input style="display: none" type="datetime-local" name="date_time" id="date_time">
            <input style="display: none" type="datetime-local" name="grace_period" value="{{$event->created_at->addHours(3)->format('Y-m-d H:i')}}">
    
        

        


        <div class="d-flex container justify-content-between">
            <a href="{{route('association.show', $association)}}" class="btn btn-danger">Cancel</a>
            
            <div class="btn btn-primary" id="save">save</div>
        </div>
    </form>

    <script>
        $(function() {
            $('#save').click(function() {
                $('#date_time').val($('#date').val() + " " + $('#time').val())
                $('#update').submit()
            })
        })
    </script>
    

</x-layout>