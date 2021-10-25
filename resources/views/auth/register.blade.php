<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.1.3\css\bootstrap.min.css') }}">
</head>

<body>
    <h1>Registration Page</h1>
    <form action="{{ route('auth.save')}}">
    @csrf
    <div class="container">
    <p>Please fill in this form to create an account.</p>
    <br>

    <label for="Name"><b>Name</b></label><br>
    <input type="text" placeholder="Enter Name" name="name" id="name" required><br><br>
    <div class="form-group">
        <label><b>Email</b></label><br>
        <input type="text" class="form control" name="email" placeholder="Enter email address" required>
    </div>
    <br>
    <div class="form-group">
        <label><b>Password</b></label><br>
        <input type="password" class="form control" name="password" placeholder="Enter password">
    </div>
    <br>
    <label for="Gender"><b>Gender</b></label><br>
    <input type="radio" name="gender" id="male">
    <label for="male">male</label><br>
    <input type="radio" name="gender" id="female">
    <label for="female">female</label><br><br>

    <label for="Birthplace"><b>Birth Place</b></label><br>
    <input type="text" placeholder="Enter Birth Place" name="birthplace" id="birthplace" required><br><br>
    
    <label for="Birthdate"><b>Birth Date</b></label><br>
    <input type="date" name="birthdate" id="birthdate" required><br><br>
    
    <label for="Uploadphoto"><b>Upload your photo here:</b></label><br>
    <form action="/action_page.php">
    <input type="file" id="photo" name="photo"><br><br>
    </form>

    <label for="UploadCerti"><b>Upload your certificates here:</b></label><br>
    <form action="/action_page.php">
    <input type="file" id="certificate" name="certificate" ><br><br>
    </form>

    <label for="UploadCV"><b>Upload your CV here: </b></label><br>
    <form action="/action_page.php">
    <input type="file" id="CV" name="CV" ><br><br><br>
    </form>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button type="submit" class="btn btn-block btn-primary">Register</button>
    <button type="reset" class="btn btn-block btn-primary">Reset</button><br>
    <a href="{{ route('auth.login') }}">I already have an account, sign in.</a><br><br>
  </div>

</form>
</body>
</html>

