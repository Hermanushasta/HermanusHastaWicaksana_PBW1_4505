<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Onion Form</title>
</head>
<body>
    <h2> Student Union Form</h2>
    <form method="post" action="proses.php">
        Name : <input type="text" name="name">
        <br><br>
        E-mail : <input type="text" name="email">
        <br><br>
        Website : <input type="text" name="website">
        <br><br>
        Comment : <textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>
        Gender : 
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="female">Male
        <input type="radio" name="gender" value="female">Other
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>