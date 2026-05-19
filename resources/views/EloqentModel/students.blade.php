<div>
    <!-- Breathing in, I calm body and mind. Breathing out, I smile. - Thich Nhat Hanh -->

    <!-- AcHa Eloquent Model Database se conversaion ke liye use hota he data lena dena 
     or Eloquent isliye use krte he q ke isme hamhe puri query nhi likhni parti he  -->
    @foreach($students as $s)
        {{$s->Name}}
        {{$s->Email}}
        {{$s->Phone}}
        <br>
    @endforeach
</div>
