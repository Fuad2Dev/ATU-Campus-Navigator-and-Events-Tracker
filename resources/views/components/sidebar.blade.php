@props(['active_link', 'active_section'])

<div class="sidebar">
    <div class="sidebar-wrapper">
        <ul class="nav">


            <x-inc.link name="" icon_class="" route="" :active_link="{{ $active_link }}" />

            <x-inc.section name="" icon_class="" :active_section="{{ $active_section }}">

                <x-inc.link name="" icon_class="" route="" :active_link="{{ $active_link }}" />
                <x-inc.link name="" icon_class="" route="" :active_link="{{ $active_link }}" />

            </x-inc.section>

        </ul>
    </div>
</div>
