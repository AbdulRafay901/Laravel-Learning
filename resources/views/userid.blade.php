<h1>hello Laravel</h1>

<a href="/about/RafayBoss">About</a>
<a href="/Hides">Home</a>

<x-message-banner msg="User Login Successfull" success="success"/>
<x-message-banner msg="User Sign up" success="success"/>

<x-message-banner msg="Password Not match try again" success="Error"/>

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