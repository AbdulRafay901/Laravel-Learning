<div>
    <!-- Well begun is half done. - Aristotle -->

    <h1>Query Builder</h1>

    @foreach ($users as $user)
                <p>{{$user->Name}}</p>
                <p>{{$user->Email}}</p> 
    @endforeach
</div>
