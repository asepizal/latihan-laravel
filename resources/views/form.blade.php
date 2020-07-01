<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <h4>Sign Up Form</h4>
    <form action="/welcome" method="POST">
        @csrf

        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname"><br><br>
        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname">

        <p>Gender :</p>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label>
        <br><br>

        <label for="nationality">Nationality</label>
        <select name="nationality" id="nationality">
            <option value="indonesian">Indonesian</option>
            <option value="singapura">Singapura</option>
            <option value="Malaysia">Malaysia</option>
        </select>
        <p for="lang">Languange Spoken :</p>
        <input type="checkbox" id="bahasa" name="bahsa" value="Bahasa Indonesia">
        <label for="bahasa">Bahasa Indonesia</label><br>
        <input type="checkbox" id="english" name="english" value="english">
        <label for="english">English</label><br>
        <input type="checkbox" id="other" name="other" value="other">
        <label for="other">Other</label><br>
        <br>

        <label for="">Bio :</label>
        <br>
        <textarea name="" id="" cols="30" rows="10"></textarea>
        <br>

        <button type="submit">Sign Up</button>
    </form>
</body>

</html>