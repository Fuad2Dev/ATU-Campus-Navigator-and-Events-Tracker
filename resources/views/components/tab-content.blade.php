@props(['name'])
<div {{ $attributes->merge(['class'=>"tab-pane fade"]) }} id="{{$name}}" role="tabpanel" aria-labelledby="{{$name}}">
    {{ $slot }}
</div>