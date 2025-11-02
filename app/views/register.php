<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>

<body>

    <form action="/OOP%20In%20PHP%20Project/public/register" method="POST">

        <label for="firstName">First Name</label>
        <input type="text">
        <br>
        <label for="lastName">Last Name</label>
        <input type="text">
        <br>
        <label for="email">Email</label>
        <input type="email">
        <br>
        <label for="password">Password</label>
        <input type="password">
        <br>
        <label for="phoneNumber">Phone Number</label>
        <input type="text">
        <br>
        <select name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>
        <br>
        <label for="address">Address</label>
        <input type="text">
        <br>
        <button type="submit">Submit</button>
        <br>
        <a href="logIn.php">I have Alredy Account, Sign In</a>
    </form>

</body>

</html>