<div>
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->


    <h1>Form Handling With Database</h1>


    <form  action="InsertUser" method="POST">
        @csrf
           <input type="text" name="name" placeholder="Enter Your Name">
           <input type="email" name="email" placeholder="Your Email">
           <input type="number" name="number" placeholder="Your Number">
           <button type="submit">Submit</button>
    </form>
</div>
