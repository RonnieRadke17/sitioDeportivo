<!--form de C y U-->
@if (count($errors)>0)
    @foreach ($errors->all() as $error)
        {{$error}}
    @endforeach
@endif


<input type="text" name="nombre" value="{{ $rol->nombre ?? '' }}">
<input type="submit" value="{{$modo}}">