<h1>hello Laravel</h1>

<a href="/about/RafayBoss">About</a>
<a href="/Hides">Home</a>

<x-message-banner msg="User Login Successfull" success="success"/>
<x-message-banner msg="User Sign up" success="success"/>

<x-message-banner msg="Password Not match try again" success="Error"/>



<!-- ye url wala code isliye take url.blade.php par jaye to iusko pata chale 
me kis url mltb previous url kiya tha ya me kis poge se call howa hon    Start-->

<a href="/url">Go To url.blade.php</a>

<!-- ye url wala code isliye take url.blade.php par jaye to iusko pata chale 
me kis url mltb previous url kiya tha ya me kis poge se call howa hon    End-->



<!-- Ye jo route(username) he ye name.blade.php se connect he ab yaha kiya horaha he
 hamhe kesi url me behjna he leken iuska path bhot lmba he to hamhe route se is
 path ka name short apni mrzi se rkhdiya he ye code web.php me se dkho samaj ajaye ga -->
<a href="{{route('username')}}">named.blade.php</a>

<style>
        .success{
            background-color:green;
            color:white;
            width: 400px;
        }
        .Error{
            background-color:red;
            color:white;
            width: 400px;
        }
</style>


<!-- Localilization   Code     Start -->

<h2>{{__('welcome.heading1')}}</h2>
<a href="abouth1">Abouth1</a>

<h2>{{__('welcome.parameter', ['name' => "Dynamic Parameter"])}}</h2>

<h1>Choose Your Language</h1>

<a href="welcome/en">English</a>
<a href="welcome/ur">Urdu</a>
