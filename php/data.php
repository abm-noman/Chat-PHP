<?php
while ($row = mysqli_fetch_array($sql)) {      // looping through each
    $output .= '<a href="#">
            <div class="content">
                <img src="php/images/' . $row['img'] . '" alt="">
                <div class="details">
                    <span>' . $row['fname'] . " " . $row['lname'] . '</span>
                    <p>This is a test message</p>
                </div>
            </div>
            <div class="status-dot"><i class="fas fa-circle"></i></div>
        </a>';
}
?>