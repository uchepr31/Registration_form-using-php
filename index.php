<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="user_data.php" method="POST" >
                    <h2 class="text-center">Registration Form</h2>
                    <p class="text-center">It's quick and easy.</p>
                
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Your Name" required >
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address" required >
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="text" name="dob" placeholder="Date of birth" required>
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="text" name="gender" placeholder="Your gender" required>
                    </div>

                    <div class="form-group">
                        <input class="form-control" type="text" name="country" placeholder="Your country" required>
                    </div>
                    
                    <div class="form-group" >
                        <button type="submit" class="form-control button" >Register</button> 
                    </div>
            
                </form>
            </div>
        </div>
    </div>
</body>
 </html>