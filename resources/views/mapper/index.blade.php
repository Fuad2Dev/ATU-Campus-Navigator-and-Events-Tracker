<x-layout>
        <form action="" method="post" class="p-4 ">
            @csrf
            <x-form.text-box name="search" label="Search" :extend_right_icon="['class' => 'fas fa-search']" />
        </form>

        <div class="col" style="overflow: scroll">
            <x-cards.mapper />
            <x-cards.mapper />
            <x-cards.mapper />

            <div class="p-4"></div>

            <a href="{{ route('mapper.create') }}"  class="btn btn-primary btn-lg btn-floating position-fixed bottom-2 end-2">
                <i class="fas fa-plus"></i>
            </a>
        </div>
    
</x-layout>