<form method="POST" action="/submit-name">
    @csrf
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" placeholder="Enter your name">
    <button type="submit">Submit</button>
</form>