<?php include_once "header.php"; ?>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Chat PHP</header>
            <form action="#" autocomplete="off">
                <div class="error-txt"> </div>
                
                <div class="field input">
                    <lable>Email Address</lable>
                    <input type="text" name="email" placeholder="Enter Your Email" required/>
                </div>
                <div class="field input">
                    <lable>Password</lable>
                    <input type="password" name="password" placeholder="Enter Your Password" required/>
                    <i class="fas fa-eye show-password"></i>
                </div>
                <div class="field button">
                    <input type="submit" value="Continue to Chat"/>
                </div>
            </form>
            <div class="link">Don't have an Account? <a href="index.php">Sign Up here</a> </div>
        </section>
    </div>
    
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/login.js"></script>


</body>
</html>