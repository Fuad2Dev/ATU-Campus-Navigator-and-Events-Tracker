<x-layout page="event.create">

    <x-navbar />

    <form class="container mt-4">
        <x-input label="event" />
        <x-input label="description" type='textarea' maxlength='140' />
        
        <div class="p-2"></div>

        <x-input label="location" type="select" />
        
        <div class="p-2"></div>

        <small class="p-2">Invite List</small>
        <x-input type="radio" name="invited" :options="['All Members', 'Everyone', 'Executives Only']" />

        <div class="py-4"></div>

        <div class="d-flex container justify-content-between">
            <div class="btn btn-danger">Cancel</div>
            <div class="btn btn-primary">Create</div>
        </div>
    </form>

    

</x-layout>
