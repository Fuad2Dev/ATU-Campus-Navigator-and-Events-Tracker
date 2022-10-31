<x-layout page="event.create">


    <form class="container mx-auto row g-4 mt-4" method="POST" id="store"
        action="{{ route('association.event.store', $association) }}">
        @csrf
        <x-form.text-box name="name" label="event" />

        <x-form.text-area label="description" name="description" maxlength='140' />

        <div class="row mx-auto p-0">
            <x-form.date label="date" name="date" min="{{ $now->format('Y-m-d') }}"
                value="{{ $now->format('Y-m-d') }}" />

            <x-form.time label="time" name="time" :value="$now->format('H:i')" />

            @error("time")
                <div class="text-danger col-12">{{ $message }}</div>
            @enderror

            @error("date_time")
                <div class="text-danger col-12">{{ $message }}</div>
            @enderror

        </div>

        <x-form.select name="place_id" label="location" :options="$places" />



        <input style="display: none" type="datetime-local" name="date_time" id="date_time">

        {{-- <input type="checkbox" name="" id=""> --}}

        <div class="d-flex container justify-content-between">
            <a href="{{ route('association.show', $association) }}" class="btn btn-danger">Cancel</a>

            <div class="btn btn-primary" id="create">Create</div>
        </div>
    </form>



    <script>
        $(function() {
            $('#create').click(function() {
                $('#date_time').val($('#date').val() + " " + $('#time').val())
                $('#store').submit()
            })
        })
    </script>
</x-layout>
