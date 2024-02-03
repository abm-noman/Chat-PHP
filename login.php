<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat PHP</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Chat PHP</header>
            <form action="#">
                <div class="error-txt">This is an Error Message!!</div>
                
                <div class="field input">
                    <lable>Email Address</lable>
                    <input type="text" placeholder="Enter Your Email" required/>
                </div>
                <div class="field input">
                    <lable>Password</lable>
                    <input type="password" placeholder="Enter Your Password" required/>
                    <i class="fas  fa-eye show-password"></i>
                </div>
                <div class="field button">
                    <input type="submit" value="Continue to Chat"/>
                </div>
            </form>
            <div class="link">Don't have an Account? <a href="#">Sign Up here</a> </div>
        </section>
    </div>
    
    <script src="javascript/pass-show-hide.js"></script>


</body>
</html>