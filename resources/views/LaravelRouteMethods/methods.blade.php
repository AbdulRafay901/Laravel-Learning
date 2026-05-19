    <div>
    <h1>Route Methods</h1>
    <form action="/user" method="POST">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
            <input type="text" name="name">
            <p>@error('name'){{$message}} @enderror</p>
            <input type="password" name="password">
            <button type="submit">Submit</button>
    </form>
        
    </div>
