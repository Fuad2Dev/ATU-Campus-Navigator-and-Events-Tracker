<x-layout >

    <div class="d-flex justify-content-center position-relative container">
        <x-inc.association-img  size='100'/>

        <div class="position-absolute bottom-0 end-2 flex-column d-flex">
            <div class="btn btn-primary mb-2">Change</div>
            {{-- <div class="m-1"></div> --}}
            <div class="btn btn-danger">Remove</div>
        </div>
    </div>
    <form class="container mx-auto row g-4 mt-4" method="POST" action="{{route('association.store')}}">
        @csrf
        <x-form.text-box label="name" name="name"   />
        <x-form.text-box label="ID" name="id" value="{{$uniqueId}}" maxlength=6  extend_left='#' />
        <x-form.text-area label="description" name="description" maxlength='140' />

        <div class="p-2"></div>

        <div class="d-flex container justify-content-between">
            <a href="{{route('home')}}" class="btn btn-danger">Cancel</a>
            <button type="submit" class="btn btn-primary">Create</button>
        </div>
    </form>
</x-layout>