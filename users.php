<?php
session_start();
if (!isset($_SESSION['unique_id'])) {
    header("Location: login.php");
}
?>

<?php include_once "header.php"; ?>

<body>
    <div class="wrapper">
        <section class="users">
            <header>
                <?php
                include_once "php/config.php";
                $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
                $row = null; // Initialize $row to avoid undefined variable warning

                if (mysqli_num_rows($sql) > 0) {
                    $row = mysqli_fetch_assoc($sql);
                }
                ?>
                <div class="content">
                    <img src="php/images/<?php echo $row['img']; ?>" alt="">
                    <div class="details">
                        <span><?php echo $row['fname'] . " " . $row['lname']; ?></span>
                        <p><?php echo $row['status']; ?></p>
                    </div>
                </div>
                <a href="login.php" class="logout">Log Out</a>
            </header>
            <div class="search">
                <span class="text">Select an User to Chat</span>
                <input type="text" placeholder="Enter Name to Search...">
                <button><i class="fa fa-search"></i></button>
            </div>
            <div class="users-list">

            </div>
        </section>
    </div>


    <script src="javascript/users.js"></script>

</body>

</html>