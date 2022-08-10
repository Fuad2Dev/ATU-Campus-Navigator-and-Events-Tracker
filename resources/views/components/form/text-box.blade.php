@props([
    'required' => false, 
    'name', 
    'label', 
    'type' => 'text',
    'value' => '', 
    'maxlength' => 0, 
    'extend_left' => '', 
    'extend_right' => '',
    'extend_right_icon' => '',    
    'extend_left_icon' => ''    
    ])

@php
// dd($extend_left_icon);
$extends = ($extend_left != '' || $extend_right != '' || $extend_right_icon != '' || $extend_left_icon != '') ? true : false;
$eL = $extend_left == '' ? false : true;
$eR = $extend_right == '' ? false : true;
$eRI = $extend_right_icon == '' ? false : true;
$eLI = $extend_left_icon == '' ? false : true;
@endphp

<div class="col-12">
    @if (!$extends)
        <div class="form-outline">
    @endif


    @if ($extends)
    <label class="form-label">{{ $label }}</label>
        <div class="input-group mb-3 form-outline">
            @if ($eL)
                <span class="input-group-text">{{ $extend_left }}</span>
            @endif
            @if ($eLI)
            <span class="input-group-text d-flex justify-content-center align-items-center p-0">
                    <button type="submit" class="p-3 h-100 d-flex align-items-center justify-content-center">
                        <i class="{{$extend_left_icon['class']}}"></i>
                    </button>
                </form>
            </span>
            @endif
    @endif


    <input type="{{ $type }}" class="form-control @error($name) is-invalid @enderror" name="{{ $name }}"
        @if ($maxlength > 0) data-mdb-showcounter="true" maxlength="{{ $maxlength }}" @endif
        @if ($type == 'text') @if ($value == '')
                    value="{{ old($name) }}" 
                @else
                    value="{{ $value }}" @endif
        @endif />

    @if ($extends)
        @if ($eR)
            <span class="input-group-text">
                {{ $extend_right }}
            </span>
        @endif
        @if ($eRI)
        <span class="input-group-text d-flex justify-content-center align-items-center p-0">
            <button type="submit" class="p-3 h-100 d-flex align-items-center justify-content-center">
                <i class="{{$extend_right_icon['class']}}"></i>
            </button>
        </form>
    </span>
        @endif
    @endif

    @if ($required)
        <i class="fas fa-exclamation-circle trailing text-danger"
            @if ($extends) style="position: absolute;
            right: 10px;
            left: auto;
            top: 50%;
            transform: translateY(-50%);
            pointer-events: none;" @endif></i>
    @endif

    @if (!$extends)
        <label class="form-label">{{ $label }}</label>
    @endif

    @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror

    @if ($maxlength > 0)
        <div class="form-helper" @if ($extends) style="bottom: -60%" @endif></div>
    @endif


</div>
</div>

{{-- <div class="col-12">
    <label class="visually-hidden" for="inlineFormInputGroupUsername">Username</label>
    <div class="input-group">
      <div class="input-group-text">@</div>
      <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username" />
    </div>
  </div> --}}
