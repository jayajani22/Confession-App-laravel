<h2>Submit Anonymous Confession</h2>
<form action="/store" method="POST">
    @csrf
    <label>City:</label>
    <select name="city" required>
        <option value="">--Select City--</option>
        <option>Ahmedabad</option>
        <option>Mumbai</option>
        <option>Delhi</option>
    </select><br><br>

    <label>Title:</label>
    <input type="text" name="title" required><br><br>

    <label>Message:</label>
    <textarea name="message" required></textarea><br><br>

    <button type="submit">Submit</button>
</form>
