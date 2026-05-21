


@foreach($Redis as $R)
    <p>{{$R->id}} : {{$R->Name}} : {{$R->Email}} : {{$R->Number}}</p>
@endforeach