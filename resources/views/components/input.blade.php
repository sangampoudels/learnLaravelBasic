<div class="form-group">
    <label for="">{{$label}}</label>
    <input type="{{$type}}" name="{{$name}}" id="" class="form-control}}">
     <span class="text-danger">
         {{$demo}}
    {{-- @error('name')
    <small class="form-text text-danger">{{ $message}}</small>
    @enderror --}}
     </span>
</div>