<div>
    <!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->

    <form action="/updateUser/{{$update->id}}" method="POST">
         @csrf
           <input type="hidden" name="_method" value="put">
           <input type="text" name="name" value="{{$update->Name}}">
           <input type="email" name="email" value="{{$update->Email}}">
           <input type="number" name="number" value="{{$update->Number}}">
           <button type="submit">Update</button>
    </form>
</div>
