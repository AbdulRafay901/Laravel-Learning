<h1>Blade</h1>

<!-- Acha Blade template is liye use krte hen take hamhe < php echo $name ?> ya na 
Likhna pare  bss  double curly braclet me kaam hoajyega -->

<h2>{{$Name}}</h2>

@if($Name == "Rafay"){
    <h2>This is Rafay</h2>
}
@else{
    <h2>other user</h2>
}@endif

<h1>For Loop</h1>
<div>
      @for($i=0;$i<=10;$i++)
        <h3>{{$i}}</h3>
      @endfor;
</div>