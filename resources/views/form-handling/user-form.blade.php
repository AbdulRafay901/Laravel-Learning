
<h1>Add User</h1>

<!-- Acha yaha par hame sare error show kar rahen he jo form se aye he     Start -->

@if($errors->any())

@foreach($errors->all() as $error)

<div class="div" style="color:red;">
    {{$error}} <br>
</div>

@endforeach

@endif

<!-- Acha yaha par hame sare error show kar rahen he jo form se aye he     End -->

<form action="adduser" method="POST">
    @csrf                                     
                                               <!-- Acha ye old se kiya hota he purani 
                                                Value wapis ajatai he-->
        <input type="text" placeholder="Name" value="{{old('name')}}" name="name"
        class="{{($errors->first('name')?'input-error':'')}}">
        <style>
              .input-error{
                  border:1px solid red;
              }
        </style>
        <span>@error('name'){{$message}} @enderror</span>
        <input type="email" placeholder="Email" value="{{old('email')}}" name="email">
        <span>@error('email'){{$message}} @enderror</span>
        <div class="div">
              <h1>Checkbox</h1>
              <input type="checkbox" name="checkbox[]" value="{{old('checkbox[]')}}" value="php" id="php">
              <label for="php">PHP</label>
              <input type="checkbox" name="checkbox[]" value="javascript" id="javascript">
              <label for="javascript">javascript</label>
              <input type="checkbox" name="checkbox[]" value="laravel" id="laravel">
              <label for="laravel">laravel</label>
              <span>@error('checkbox'){{$message}} @enderror</span>
        </div>
        <div class="div">
              <h1>Radio</h1>
              <input type="radio" name="radio" value="small" id="small">
              <label id="small">Small</label>
              <input type="radio" name="radio" value="medium" id="medium">
              <label id="medium">Medium</label>
              <span>@error('radio'){{$message}} @enderror</span>
        </div>
        <div class="div">
               <h1>Dropdown</h1>
               <select name="dropdown" value="{{old('dropdown')}}">
                        <option value="pakistan">Pakistan</option>
                        <option value="uk">United Kingdom</option>
                        <option value="portugul">Portugul</option>
               </select>
               <span>@error('dropdown'){{$message}} @enderror</span>
        </div>
        <div class="range">
              <input type="range" name="range" min="18" max="40" value="{{old('range')}}">
              <span>@error('range'){{$message}} @enderror</span>
        </div>
        <br>
        <button type="submit">Submit</button>
</form>