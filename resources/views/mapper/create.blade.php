<x-layout >
    <div class="p-3">
        <h2>Create</h2>
    <hr class="col-3">
    <form action="" method="post" class="p-4 col">
        @csrf
        <x-form.text-box name="name" label="name"  />

        <div class="m-4 d-flex flex-column h-25 justify-content-between">
            <strong style="font-size: 1.2rem">latitude: <span id="latitude"></span></strong>
            <strong style="font-size: 1.2rem">longitude: <span id="longitude"></span></strong>
            <strong style="font-size: 1.2rem">altitude: <span id="altitude"></span></strong>
        </div>

        <div class="text-center p-4">
            <div class="btn btn-primary col-8 p-3">Generate</div>
        </div>
        <div class="text-center p-4 row justify-content-between">
            <div class="btn btn-danger col-3">cancel</div>
            <div class="btn btn-success col-3 disabled">save</div>
        </div>
    </form>
    </div>
</x-layout>