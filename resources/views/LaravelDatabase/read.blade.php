<div>


    <form action="search" method="POST">
        @csrf
           <input type="search" name="search" value="{{@$search}}">
           <button type="submit">Search</button>
    </form>
    <form action="/deletes" method="POST">
        <button type="submit">Deletes</button>
        @csrf
        
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
    @foreach($data as $d)
        <input type="checkbox" name="checkbox[]" value="{{$d->id}}">
        <p>{{$d->id}} <br>{{$d->Name}} <br> {{$d->Email}} <br> {{$d->Number}} <a href="userDelete/{{$d->id}}">Delete</a> <a href="userUpdate/{{$d->id}}">Update</a></p>
    @endforeach

    </form>

    {{$data->links()}}

</div>

<style>
        .w-5{
            width: 20px;
        }
</style>
