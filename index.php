<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="position: absolute; transform:translate(500px, 100px);">

        <form method="POST" action='user_data.php'>
             <label for="name">
            Name <br><input type="text" name="name">
             </label> <br><br>

            <label for="email">
            Email <br><input type="email" name="email">
            </label> <br><br>

            <label for="dob">
            Date of Birth <br><input type="text" name="dob">
            </label> <br><br>

            <label for="gender">
            Gender <br> <input type="text" name="gender">
            </label> <br><br>

            <label for="country">
            Country <br><input type="text" name="country">
            </label> <br><br>
            <button type="submit">submit</button>
         </form>
         
    </div>
</body>
</html>





