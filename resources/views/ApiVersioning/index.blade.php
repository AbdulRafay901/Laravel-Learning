<div>
       @foreach($students as $s)
                 <h2>{{$s->id}} {{$s->Name}}  {{$s->Email}}</h2>
                 <h2></h2>
       @endforeach
</div>
