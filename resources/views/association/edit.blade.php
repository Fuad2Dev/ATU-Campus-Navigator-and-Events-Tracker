<x-layout >
    <x-navbar />

    <div class="d-flex justify-content-center position-relative container mb-4">
        <x-inc.association-img  size='100'/>

        <div class="position-absolute bottom-0 end-2 flex-column d-flex">
            <div class="btn btn-primary mb-2">Change</div>
            {{-- <div class="m-1"></div> --}}
            <div class="btn btn-danger">Remove</div>
        </div>
    </div>
    <form class="container">
        <x-input label="name" />
        <x-input label="description" type='textarea' maxlength='140'/>

        <div class="p-2"></div>

        <div class="d-flex container justify-content-between">
            <div class="btn btn-danger">Cancel</div>
            <div class="btn btn-primary">Update</div>
        </div>
    </form>
</x-layout>