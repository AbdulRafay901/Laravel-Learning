<div>
    <!-- An unexamined life is not worth living. - Socrates -->

    <form action="/login" method="POST">
        @csrf
           <input type="text" name="name" placeholder="Enter Your Name">
           <input type="email" name="email" placeholder="Your Email">
           <button type="submit">Login</button>
    </form>
</div>
