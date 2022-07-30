@props(['for'])
<div {{ $attributes->merge(['class'=>"tab-pane fade"]) }} id="{{$for}}" role="tabpanel" aria-labelledby="{{$for}}">
    {{ $slot }}
</div>