<div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->

    @if(session('user'))
        {{session('user')}}
    @else 
       <p>Session Not Found</p>
     @endif

     <a href="logout">Logout</a>
     <a href="sessionform">Login</a>

     <!-- Flash ----  Session --- Start -->
    
     <!-- Acha ye flash session he ye aik bar save hota he session me bss page reload
          ya dusre page par ajte he ye destroy hojata he or agar isko hamhe rok kar 
          Rkhna ho isko destory nhi krna hoto Reflash use krte hen agar ye dekhna he 
 -->
     @if(session('message'))
     <span class="flash-messages">{{session('message')}}</span>
     @endif
     @if(session('name'))
           <span class="flash-messages">{{session('name')}}</span>
     @endif

     <!-- Reflash flash session ka sara data rok leta he        Start -->

     <!-- $session()->reflash(); -->

    <!-- Reflash flash session ka sara data rok leta he        End  -->

    <!-- keep Flash ka koi specific mltb flash session me message or name he
         Hamhe message ko destory krke sirf name rokna he flash session mese to 
         Keep-> use hoga -->

     <!-- {{session()->keep(['name'])}} -->

     <!-- Flash ----  Session --- End -->
</div>

<style>
       .flash-messages{
         background-color:green;
         color:white;
         padding:10px;
       }
</style>

