<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>let's talk</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>chat app </header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-txt">this is an error msg</div>
                <div class="name-details">
                    <div class="field  input">
                        <label for="">First Name</label>
                        <input type="text" name="fname" placeholder="first Name" required>
                    </div>
                    <div class="field input">
                        <label for="">Last Name</label>
                        <input type="text" name="lname" placeholder="Last Name" required>
                    </div>
                    </div>
                    <div class="field input">
                        <label for="">email</label>
                        <input type="text" name="email" placeholder="email" required>
                    </div>
                    <div class="field input">
                        <label for="">Password</label>
                        <input type="password" name="password" placeholder="Password" required>
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field image">
                        <label for="">Select Image</label>
                        <div><input type="file" name="image"></div>
                        
                    </div>
                    <div class="field button">
                        <input type="Submit" value="Continue to chat">
                    </div>    
            </form>
            <div class="link">Already signup?<a href="login.php">Login now</a></div>
        </section>
    </div>
    <script src="JavaScript/show-hideIcon.js"></script>
    <script src="JavaScript/signup.js"></script>
</body>
</html>
