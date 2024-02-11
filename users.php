<?php 
session_start();
if (!isset($_SESSION['unique_id'])) {
    header("Location: login.php");
    # code...
}
?>

<?php include_once "header.php"; ?>

<body>
    <div class="wrapper">
        <section class="users">
            <header>
                <?php

                ?>
                <div class="content">
                    <img src="img.jpg" alt="">
                    <div class="details">
                        <span>Abm Noman</span>
                        <p>Active Now</p>
                    </div>
                </div>
                <a href="#" class="logout">Log Out</a>
            </header>
            <div class="search">
                <span class="text">Select an User to Chat</span>
                <input type="text" placeholder="Enter Name to Search...">
                <button><i class="fa fa-search"></i></button>
            </div>
            <div class="users-list">
                <a href="#">
                    <div class="content">
                        <img src="img.jpg" alt="">
                        <div class="details">
                            <span>Abm Noman</span>
                            <p>This is a test message</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="img.jpg" alt="">
                        <div class="details">
                            <span>Abm Noman</span>
                            <p>This is a test message</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="img.jpg" alt="">
                        <div class="details">
                            <span>Abm Noman</span>
                            <p>This is a test message</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="img.jpg" alt="">
                        <div class="details">
                            <span>Abm Noman</span>
                            <p>This is a test message</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="img.jpg" alt="">
                        <div class="details">
                            <span>Abm Noman</span>
                            <p>This is a test message</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="img.jpg" alt="">
                        <div class="details">
                            <span>Abm Noman</span>
                            <p>This is a test message</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
                <a href="#">
                    <div class="content">
                        <img src="img.jpg" alt="">
                        <div class="details">
                            <span>Abm Noman</span>
                            <p>This is a test message</p>
                        </div>
                    </div>
                    <div class="status-dot"><i class="fas fa-circle"></i></div>
                </a>
            </div>
        </section>
    </div>


    <script src="javascript/users.js"></script>

</body>

</html>