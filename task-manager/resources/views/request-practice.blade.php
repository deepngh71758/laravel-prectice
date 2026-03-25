<!DOCTYPE html>
<html>
<head>
    <title>Laravel Request Practice</title>
</head>
<body>

<h2>Laravel Request Practice Form</h2>

<form action="/request-test" method="POST" enctype="multipart/form-data">
    @csrf

    <h3>Text Inputs</h3>

    <label>Name</label><br>
    <input type="text" name="name" value="{{ old('name') }}"><br><br>

    <label>Email</label><br>
    <input type="email" name="email" value="{{ old('email') }}"><br><br>

    <h3>Checkbox</h3>

    <input type="checkbox" name="subscribe" value="yes"> Subscribe<br><br>

    <h3>Select Box</h3>

    <select name="country">
        <option value="">Select Country</option>
        <option value="India">India</option>
        <option value="USA">USA</option>
        <option value="UK">UK</option>
    </select><br><br>

    <h3>Array Inputs</h3>

    <input type="text" name="products[0][name]" placeholder="Product 1 Name"><br>
    <input type="text" name="products[1][name]" placeholder="Product 2 Name"><br><br>

    <h3>File Upload</h3>

    <input type="file" name="photo"><br><br>

    <button type="submit">Submit</button>

</form>

</body>
</html>