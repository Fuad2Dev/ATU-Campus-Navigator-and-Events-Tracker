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
    <form class="container mx-auto row g-4 mt-4" action="{{route('association.update')}}">
        @csrf
        @method('PUT')
        <x-form.text-box label="name" name="name" :value="$association->name"  />
        <x-form.text-box label="ID" name="id" :value="$association->id" maxlength=6  extend_left='#' />
        <x-form.text-area label="description" :value="$association->description" name="description" maxlength='140' />

        <div class="p-2"></div>

        <div class="d-flex container justify-content-between">
            <a class="btn btn-danger" href="{{route('association.show', $association)}}">Cancel</a>
            <input type="submit" class="btn btn-success" value="Update">
        </div>
    </form>
</x-layout>