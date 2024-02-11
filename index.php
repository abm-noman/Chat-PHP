<?php include_once "header.php"; ?>

<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Chat PHP</header>
            <form action="#" enctype="multipart/form-data" autocomplete="off">
                <div class="error-txt"> </div>
                <div class="name-details">
                    <div class="field input">
                        <lable>First Name</lable>
                        <input type="text" name="fname" placeholder="First Name" required />
                    </div>
                    <div class="field input">
                        <lable>Last Name</lable>
                        <input type="text" name="lname" placeholder="Last Name" required />
                    </div>
                </div>

                <div class="field input">
                    <lable>Email Address</lable>
                    <input type="text" name="email" placeholder="Enter Your Email" required />
                </div>
                <div class="field input">
                    <lable>Password</lable>
                    <input type="password" name="password" placeholder="Enter Your Password" autocomplete="new-password" required />
                    <i class="fas fa-eye show-password"></i>
                </div>
                <div class="field image">
                    <lable>Select Image</lable>
                    <input type="file" name="image" />
                </div>
                <div class="field button">
                    <input type="submit" value="Continue to Chat" />
                </div>
            </form>
            <div class="link">Already have an Account? <a href="login.php">Sign In here</a> </div>
        </section>
    </div>

    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>

</body>

</html>